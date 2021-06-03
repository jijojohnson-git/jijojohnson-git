<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Intervention\Image\ImageManagerStatic as Img;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function showCategories()
    {
        $categories = Category::all();
        return view('admin.categories', compact('categories'));
    }

    public function showItems()
    {

        $categories = Category::orderBy('id', 'desc')->get();
        $items = Item::orderBy('id', 'desc')->paginate(9);
        return view('admin.items', compact('categories', 'items'));
    }

    public function showOrders()
    {
        return view('admin.orders');
    }

    public function showTestimonials()
    {
        return view('admin.Testimonials');
    }

    public function showSummary()
    {
        return view('admin.summary');
    }

    public function createCategory(Request $request)
    {
        $category_name = $request->name;
        $category = new Category();
        $category->name = $category_name;
        $category->save();
        return back();
    }

    public function destroyCategory($id)
    {
        $category = Category::findOrFail($id);
        $category->delete($id);

        return back()->with('deleted', 'Category has been Deleted!');
    }

    public function createItem(Request $request)
    {

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = time() . '.' . $image->getClientOriginalExtension();
            $img = Img::make($image);
            // $img->fit(440, 404);
            $img->fit(440, 440);
            $img->save('images/menu/' . $name, 90, 'jpg');
            $data = $request->all();
            $data['image'] = $name;
            $item = Item::create($data);
            $item->save();
            return back()->with('success', 'Item Added!');
        }
    }

    public function destroyItem($id)
    {
        $item = Item::findOrFail($id);
        $image = $item->image;
        $image_path_full = base_path("public/images/menu/").$image;

        if(File::exists($image_path_full))
        {
            unlink($image_path_full);
        }

        $item->delete();
        return back()->with('deleted', 'Data has been Deleted!');
    }

    public function getOldValues(Request $request)
    {
        $id = $request->item_id;
        $item = Item::findOrFail($id);
        return $item;
        // return response()->json(['item' => $item]);
    }

    public function updateItem(Request $request, $id)
    {
        $item = Item::findOrFail($id);
        $item_image= $item->image;
        $item_name= $item->name;
        $item_price= $item->price;
        $item_category_id= $item->category_id;

        $image_path_full = public_path("images/menu/").$item_image;

        if (!empty($request->name)) {
            $name = $request->name;
            if($name != $item_name)
            {
                $item->name = $name;
                $item->save();
            }
        }
        if (!empty($request->price)) {
            $price = $request->price;
            if($price != $item_price)
            {
                $item->price = $price;
                $item->save();
            }
        }
        if (!empty($request->category_id)) {
            $category_id = $request->category_id;
            if($category_id != $item_category_id)
            {
                $item->category_id = $category_id;
                $item->save();
            }
        }

        if (!empty($request->image)) {

            $imageNew = $request->file('image');

            if(File::exists($image_path_full))
            {
                unlink($image_path_full);
            }

            $img = Img::make($imageNew);
            // $img->fit(440, 404);
            $img->fit(440, 440);
            $img->save('images/menu/' . $item_image, 90, 'jpg');
            // $thumb = $img->fit(360, 270);
            // $thumb->save('images/gallery/thumbs/' . $image_name, 90, 'jpg');
            $item->save();
        }
        return back()->with('updated', 'Item has been Updated!');



        // $product = Product::findOrFail($id);
        // $imgNameFull = $product->img_full;
        // $imgNameThumb = $product->img_thumb;
        // if (!empty($request->type)) {
        //     $type = $request->type;
        //     if ($type == 1) {
        //         $type = 'Tyres';
        //     } elseif ($type == 2) {
        //         $type = 'Automobiles';
        //     } elseif ($type == 3) {
        //         $type = 'Building Materials';
        //     } elseif ($type == 4) {
        //         $type = 'Oil & Lubrications';
        //     }
        //     $product->type = $type;
        //     $product->save();
        // }
        // if (!empty($request->title)) {
        //     $title = $request->title;
        //     $product->title = $title;
        //     $product->save();
        // }
        // if (!empty($request->image)) {
        //     $image = $request->file('image');
        //     $img = Img::make($image);
        //     $img->save($imgNameFull, 60, 'jpg');
        //     $thumb = $img->fit(380, 253);
        //     $thumb->save($imgNameThumb, 90, 'jpg');
        //     $product->save();
        // }
        // return back()->with('updated', 'Product has been Updated!');
        // dd($request);
    }
}
