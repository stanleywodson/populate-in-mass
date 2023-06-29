<?php

namespace App\Http\Controllers\Mailer;

use App\Http\Controllers\Controller;
use App\Jobs\SendAuthMail;
use App\Mail\RegisterEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AuthMailerController extends Controller
{
    public function sendRegisterMail()
    {
        SendAuthMail::dispatch()->delay(now()->addSecond(10));
    }
}
