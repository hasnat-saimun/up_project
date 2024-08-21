<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class upokarControl extends Controller
{   
    public function upokarAdd(){
        return view('upokar.addUpokar');
    }

    public function upokarLi(){
        return view('upokar.upokarList');
    }

    public function upokarReceiveLi(){
        return view('upokar.upokarReceiveList');
    }
}

