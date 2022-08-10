<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestEmail;
class EmailController extends Controller
{
    public function index(){
 
		Mail::to("samsul.bahari23@gmail.com")->send(new TestEmail());
 
		return "Email telah dikirim";
 
	}
}
