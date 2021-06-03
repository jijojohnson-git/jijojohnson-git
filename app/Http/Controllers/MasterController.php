<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Item;
use Illuminate\Http\Request;

class MasterController extends Controller
{
    public function showIndex()
    {
        return view('index');
    }
    public function showMenu()
    {
        $categories = Category::orderBy('name', 'asc')->get();
        $items = Item::orderBy('id', 'desc')->get();
        return view('menu', compact('categories', 'items'));
    }
    public function showMenuDetails($id)
    {
        $item = Item::findOrFail($id);
        return view('menu-details', compact('item'));
    }
    public function showAbout()
    {
        return view('about');
    }
    public function showContact()
    {
        return view('contact');
    }
}
