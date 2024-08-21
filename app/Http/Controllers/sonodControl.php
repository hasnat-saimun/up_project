<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sonodControl extends Controller
{
   
public function sonodPd (){
    return view('sonod.sonodPending');
}

public function sonodLi (){
    return view('sonod.sonodList');
}
}
