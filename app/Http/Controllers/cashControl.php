<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class cashControl extends Controller
{
    public function casBook(){
        return view('cash.cashBook');
    }
}
