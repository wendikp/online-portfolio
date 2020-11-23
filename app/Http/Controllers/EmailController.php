<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Mail\PortfolioEmail;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
	public function index(){
		
		Mail::to("testing@malasngoding.com")->send(new PortfolioEmail());

		return "Email telah dikirim";
		
	}
}
