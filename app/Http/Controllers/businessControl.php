<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class businessControl extends Controller
{
    public function addBusiness (){
        return view('business.businessReg');
    }

    public function busList (){
        return view('business.businessList');
    }

    public function busregList (){
        return view('business.busReglist');
    }

    public function busWard (){
        return view('business.businessWard');
    }
}
