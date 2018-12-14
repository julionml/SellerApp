<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreSales;
use App\Sale;
use Illuminate\Support\Facades\Mail;
class SalesController extends Controller
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
        return view('sales', compact('sales'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $sale = new Sale ($request ->all());





        if ($request->hasFile('CloudCoins'))
        {
            $cc =$request->file('CloudCoins');

            $file = $cc->store('Ccoins');

            $sale->cc = $file;
        }


        $sale->save();





        Mail::send('SendEmail',array(
            'EmailAddress' => $request->get('EmailAddress'),
            'PaypalAddress'=>$request->get('PaypalAddress'),
         //   'CloudCoins' => $request->get('Cloudcoins'),
        ), function ($message) use($request) {

            $message->from($request->get('EmailAddress'));

            $message->to('Julionml@protonmail.com')->subject('CloudCoins sale');
          //  $message->attach($request->get('CloudCoins'));

        });




        return redirect('/');

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
