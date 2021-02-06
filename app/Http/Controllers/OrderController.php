<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

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
			'name' => 'required',
			'address' => 'required',
			'phone' => 'required',
			'payment_method' => 'required'
		]);

		//payment
		if (request('payment_method') == 'bkash') {
			# code...
			//TODO:
			//https://github.com/bKash-developer/pgw-merchant-backend-php
			// $order->payment_method = 'bkash';
			return back()->withError('bKash feature not ready');
		}

		$order = new Order();
		$order->order_number = uniqid('OrderNumber-');
		$order->name = $request->input('name');
		$order->address = $request->input('address');
		$order->phone = $request->input('phone');
		$order->grand_total = \Cart::session(auth()->id())->getTotal();
		$order->item_count = \Cart::session(auth()->id())->getContent()->count();
		$order->user_id = auth()->id();
		$order->save();

		//save cart items into order_items
		$cart_items = \Cart::session(auth()->id())->getContent();
		foreach ($cart_items as $item) {
			$order->items()->attach($item->id, ['price' => $item->price, 'quantity' => $item->quantity]);
		}

		// empty cart
		\Cart::session(auth()->id())->clear();

		return redirect('/')->withMessage('Order Placed Successfully');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Models\Order  $order
	 * @return \Illuminate\Http\Response
	 */
	public function show(Order $order)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Models\Order  $order
	 * @return \Illuminate\Http\Response
	 */
	public function edit(Order $order)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\Models\Order  $order
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, Order $order)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Models\Order  $order
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(Order $order)
	{
		//
	}
}
