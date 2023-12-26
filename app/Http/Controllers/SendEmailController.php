<?php

namespace App\Http\Controllers;

use App\Mail\SampleEmailMail;
use Illuminate\Support\Facades\Mail;

class SendEmailController extends Controller
{
    public function sendEmail()
    {
        Mail::to('khadziqmuttaqin17@gmail.com')->send(new SampleEmailMail([
            'title' => 'Reset Password',
            'content' => 'Ini kode OTP Anda ' . rand()
        ]));

        return "Email sent successfully!";
    }
}
