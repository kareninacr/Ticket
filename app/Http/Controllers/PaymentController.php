<?php

namespace App\Http\Controllers;

use App\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $payments = Payment::all();
        return view('payments.index', ['payments' => $payments]);
    }

    public function combo() {
        $payments = Payment::list('title', 'id');
        return View::make('combo')->with('cmb', $payments);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('payments.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'total_bayar' => 'required',
            'metode' => 'required'
        ]);

        Payment::create([
            'total_bayar' => $request->total_bayar,
            'metode' => $request->metode
        ]);

        return redirect('/payment');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function show(Payment $payment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $payments = Payment::find($id);
        return view('payments.edit', ['payments' => $payments]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $this->validate($request, [
            'total_bayar' => 'required',
            'metode' => 'required'
        ]);

        $payments = Payment::find($id);
        $payments->total_bayar = $request->total_bayar;
        $payments->metode = $request->metode;
        $payments->save();
        return redirect('/payment');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Payment $payment)
    {
        // $payments = Payment::find($id);
        $payment->delete();
        return redirect('/payment');
    }
}
