<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class warishControl extends Controller
{
    public function warishPd (){
        return view('warish.warishPending');
    }

    public function warishLi (){
        return view('warish.warishList');
    }


}
