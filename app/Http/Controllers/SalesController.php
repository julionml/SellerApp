<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreSales;
use App\Sale;
use Illuminate\Support\Facades\Mail;
use Iluminate\Support\Facades\URL;
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
            $files = $request->file('CloudCoins')->store('Ccoins');





      /*  if ($request->hasFile('CloudCoins'))
        {
            $cc =$request->file('CloudCoins');

            $file = $cc->store('Ccoins');

            $sale->cc = $file;
        }*/


        $sale->save();

        $data = array(
            'EmailAddress' => $request->EmailAddress,
            'PaypalAddress'=>$request->get('PaypalAddress'),
            'CloudCoins' =>$request->file('CloudCoins'),
        );



        Mail::send('SendEmail',compact('data'), function ($message) use($data, $request){



            $message->from($data['EmailAddress']);

            $message->to('Julionml@protonmail.com')->subject('CloudCoins sale');



                    $message->attach($data['CloudCoins']->getRealPath(), array(
                            'as' => 'CloudCoins' . $data['CloudCoins']->getClientOriginalName(), // If you want you can chnage original name to custom name
                            'mime' => $data['CloudCoins']->getMimeType())
                    );



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
