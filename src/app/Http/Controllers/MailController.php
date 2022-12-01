<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestDrive;
use Illuminate\Support\Facades\Redirect;

class MailController extends Controller
{
    public function send()
    {
        $data = $_REQUEST['model'] . "\n" . $_REQUEST['city'] . "\n" . $_REQUEST['name'] . "\n" . $_REQUEST['personalCar'] . "\n" . $_REQUEST['phone'] . "\n" . $_REQUEST['email'];

        Mail::to('fake@mail.com')->send(new TestDrive($data));

        return Redirect::to('/');
    }
}
