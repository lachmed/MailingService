<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Http\Controllers\SubscriberController;
use App\Http\Controllers\Controller;
use App\Mail\marketingMail;


use Illuminate\Support\Facades\Mail;


class marketingMailController extends Controller
{
/**
     * Ship the given order.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $subscribers = SubscriberController::index();
        foreach($subscribers as $sub)
        {
            Mail::to($sub->email)->send(new marketingMail($request->name, $request->message));
        }
        
    }
}
