<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Unique;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'first' => 'required',
            'last' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'email' => 'required'
        ]);
        $session_id = session()->getId();
        $last_id = Order::all()->last()->id;
        $order = new Order();
        $order->order_no = "PB-100".$last_id;
        $order->first_name = $request->first;
        $order->last_name = $request->last;
        $order->email = $request->email;
        $order->address = $request->address;
        $order->phone = $request->phone;

        $order->grand_total = \Cart::session($session_id)->getTotal();
        $order->item_count = \Cart::session($session_id)->getContent()->count();
        $order->save();

        // dd('order created' , $order);

        $cartItems = \Cart::session($session_id)->getContent();
        foreach($cartItems as $item)
        {
            $order->items()->attach($item->id, ['price' => $item->price, 'quantity' => $item->quantity]);
        }

        //empty cart
        \Cart::session($session_id)->clear();

        //send email

        //Thank you Page
        return view('done');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
