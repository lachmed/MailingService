<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

 
use App\Http\Controllers\Controller;
use App\Mail\confirmMail;

use Illuminate\Support\Facades\Mail;


class confirmMailController extends Controller
{
  /**
     * Ship the given order.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        Mail::to($request->email)->send(new confirmMail($request->name, $request->confirmId));
    }
}
