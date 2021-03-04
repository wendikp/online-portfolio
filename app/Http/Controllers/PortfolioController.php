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

    public function showPortfolio4(){
        return view('portfolio-details-4');
    }

    public function showPortfolio5(){
        return view('portfolio-details-5');
    }

    public function showPortfolio6(){
        return view('portfolio-details-6');
    }

    public function showTime(){
    	return view('ajax_timestamp');
    }
}
