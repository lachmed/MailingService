<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

 
use App\Http\Controllers\Controller;
use App\Mail\welcomeMail;

use App\Http\Controllers\SubscriberController;
use Illuminate\Support\Facades\Mail;


class welcomeMailController extends Controller
{
    public function store(Request $request)
    {
        SubscriberController::addSubscriber($request->name, $request->email);
        Mail::to($request->email)->send(new welcomeMail($request->name));
    }
}
