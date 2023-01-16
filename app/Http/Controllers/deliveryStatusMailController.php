<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Http\Controllers\Controller;
use App\Mail\deliveryStatusMail;

use Illuminate\Support\Facades\Mail;


class deliveryStatusMailController extends Controller
{
/**
     * Ship the given order.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Mail::to($request->email)->send(new deliveryStatusMail($request->name,$request->productName,$request->deliveryId,$request->status));
    }

}
