<?php

namespace App\Http\Controllers;

use App\Events\SendMail;
use Illuminate\Http\Request;

class SubscribeController extends Controller
{
    public function subscribed()
    {
        event(new SendMail(3));

        dd("subscribed");
    }
}
