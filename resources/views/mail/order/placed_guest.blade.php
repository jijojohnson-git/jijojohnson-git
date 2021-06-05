@component('mail::message')
# Invoice no. {{$order->order_no}}

<p>Thank you for choosing Pepper Bites :)</p>

<h4 class="text-center text-info">Order Details</h4>

<table class="table table-bordered">
<thead>
<tr>
<th>Order No: </th>
<th>{{$order->order_no}}</th>
</tr>
<tr>
<th>Ordered at: </th>
<th>{{$order->created_at}}</th>
</tr>
<tr>
<th>Name: </th>
<th>{{$order->first_name.' '.$order->last_name}}</th>
</tr>
<tr>
<th>Email </th>
<th>{{$order->email}}</th>
</tr>
<tr>
<th>Phone </th>
<th>{{$order->phone}}</th>
</tr>
<tr>
<th>Address </th>
<th>{{$order->address}}</th>
</tr>
<tr>
<th>Items(s): </th>
<th>
<ol>
@foreach ( $order->items as $item)
<li>
{{$item->name}} <i class="badge badge-success">{{$item->pivot->quantity}}</i>
</li>
@endforeach
</ol>
</th>
</tr>
</thead>
<tfoot>
<tr class="order-total">
<th>Order total</th>
<td><strong><span class="rt-Price-amount"><i class="fa fa-eur" aria-hidden="true"></i>€ {{$order->grand_total}}</strong> </td>
</tr>
@if ($order->delivery_method == 'pickup')
<tr>
<th>Pickup Address:</th>
<td>206, TRIQ COSPICO</td>
</tr>
<tr>
<th>Pickup Time:</th>
<td>15-20 minutes </td>
</tr>
@else
<tr>
<th>Our Delivery Area:</th>
<td>Paola</td>
</tr>
<tr>
<th>Delivery Time:</th>
<td>30-40 Minutes </td>
</tr>
@endif
<tr>
<th>Payment Method:</th>
<td>
@if ($order->payment_method == 'cash')
Cash on Delivery
@else
Card Swipe
@endif
</td>
</tr>
</tfoot>
</table>

@component('mail::button', ['url' => 'pepperbitesmalta.com'])
Pepper Bites
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
