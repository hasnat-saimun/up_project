<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class bankControl extends Controller
{
    public function bankDepo (){
        return view('bank.bankDeposit');
    }
}
