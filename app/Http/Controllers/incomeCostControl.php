<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class incomeCostControl extends Controller
{
    public function incomeLi (){
        return view('incomeCostAc.incomeList');
    }

    public function costLi (){
        return view('incomeCostAc.costList');
    }
}
