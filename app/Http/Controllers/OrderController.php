<?php

namespace App\Http\Controllers;

use App\Mail\OrderPlacedAdmin;
use App\Mail\OrderPlacedGuest;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Rules\Unique;
use PDF;

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
        $method = $request->method;
        $request->validate([
            'first' => 'required',
            'last' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'payment' => 'required'
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
        $order->payment_method = $request->payment;

        $order->grand_total = \Cart::session($session_id)->getTotal();
        $order->item_count = \Cart::session($session_id)->getContent()->count();
        $order->save();
        $order_id = $order->id;
        // dd('order created' , $order);

        $cartItems = \Cart::session($session_id)->getContent();
        foreach($cartItems as $item)
        {
            $order->items()->attach($item->id, ['price' => $item->price, 'quantity' => $item->quantity]);
        }

        //empty cart
        \Cart::session($session_id)->clear();

        //send email

        //send mail to user
        $order_detail = Order::findOrFail($order_id);
        Mail::to($order_detail->email)->queue(new OrderPlacedGuest($order_detail));

        //send mail to admin
        // Mail::to()->queue(new OrderPlacedAdmin($order_detail));

        //Thank you Page
        $encrypt_id = Crypt::encrypt($order_id);
        // return redirect()->route('order.summary')->with(['order_detail' => $order_detail]);
        return redirect()->route('order.summary', $encrypt_id);
    }

    public function showOrderSummary($id)
    {
        $decrypt_id = Crypt::decrypt($id);
        $order_detail = Order::findOrFail($decrypt_id);
        return view('summary', compact('order_detail'));
    }
    public function exportOrderSummary($id)
    {

        $order_detail = Order::findOrFail($id);
        // dd($order_detail);
        $order_no = $order_detail->order_no;
        // share data to view
        view()->share('order_detail', $order_detail);
        $pdf = PDF::loadView('order-summary-export', $order_detail)->setPaper('a4', 'portrait');

      // download PDF file with download method
        // return $pdf->download('Invoice-'.$order_no.'.pdf');
      return $pdf->stream('Invoice-'.$order_no.'.pdf', array('Attachment'=>0));

        // $decrypt_id = Crypt::decrypt($id);
        // $order_detail = Order::findOrFail($decrypt_id);
        // return view('summary', compact('order_detail'));
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
