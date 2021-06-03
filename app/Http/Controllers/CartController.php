<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class CartController extends Controller
{
   public function addToCart(Item $item)
   {
        // dd(session()->getId());
        $session_id = session()->getId();

        // add the product to cart
        \Cart::session($session_id)->add(array(
            'id' => $item->id,
            'name' => $item->name,
            'price' => $item->price,
            'quantity' => 1,
            'attributes' => array(),
            'associatedModel' => $item
        ));
        return redirect()->route('cart.index');
    }

    public function index()
    {
        $session_id = session()->getId();
        // dd($session_id);
        $items = \Cart::session($session_id)->getContent();
        // $price = Cart::session($session_id)->get($item->id)->getPriceSum();

        return view('cart.index', compact('items'), ['session_id'=> $session_id]);
   }
    public function destroyItem($item)
    {
        $session_id = session()->getId();

        // delete an item on cart
        \Cart::session($session_id)->remove($item);
        return back();
   }
    public function updateItem($item, Request $request)
    {
        $session_id = session()->getId();

        // update the item on cart
        \Cart::session($session_id)->update($item,[
	    'quantity' => array(
            'relative' => false,
            'value' => $request->quantity
        ),
	    // 'price' => 98.67
        ]);
        return back();
   }

   public function showCheckout(Request $request)
   {
        $method = $request->method;
        if($method == 'delivery')
        {
            return view('checkout-delivery');
        }
        else
        {
            return view('checkout-pickup');
        }
   }
}
