<?php

namespace App\Http\Controllers;

use App\Models\PrescriptionOrder;
use Illuminate\Http\Request;

class PrescriptionOrderController extends Controller
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
            'image' => 'required|image',
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

        $order = new PrescriptionOrder();
        $order->image = $request->image->store('uploads', 'public');
        $order->order_number = uniqid('OrderNumber-');
        $order->n_days = $request->input('n_days');
        $order->name = $request->input('name');
        $order->address = $request->input('address');
        $order->phone = $request->input('phone');
        $order->user_id = auth()->id();
        $order->save();

        return redirect('/')->withMessage('Order Placed Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PrescriptionOrder  $prescriptionOrder
     * @return \Illuminate\Http\Response
     */
    public function show(PrescriptionOrder $prescriptionOrder)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PrescriptionOrder  $prescriptionOrder
     * @return \Illuminate\Http\Response
     */
    public function edit(PrescriptionOrder $prescriptionOrder)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PrescriptionOrder  $prescriptionOrder
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PrescriptionOrder $prescriptionOrder)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PrescriptionOrder  $prescriptionOrder
     * @return \Illuminate\Http\Response
     */
    public function destroy(PrescriptionOrder $prescriptionOrder)
    {
        //
    }
}
