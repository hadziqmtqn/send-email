<?php

namespace App\Http\Controllers;

use App\Mail\SampleEmailMail;
use Illuminate\Support\Facades\Mail;

class SendEmailController extends Controller
{
    public function sendEmail()
    {
        Mail::to('bekenweb@gmail.com')->send(new SampleEmailMail([
            'title' => 'Test Email',
            'content' => 'Ini kode OTP Anda ' . rand()
        ]));

        return "Email sent successfully!";
    }
}
