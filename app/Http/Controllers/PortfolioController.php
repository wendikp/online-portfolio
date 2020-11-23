<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function showPortfolio1(){
    	return view('portfolio-details');
    }

    public function showPortfolio2(){
    	return view('portfolio-details-2');
    }

    public function showPortfolio3(){
        return view('portfolio-details-3');
    }

    public function showTime(){
    	return view('ajax_timestamp');
    }
}
