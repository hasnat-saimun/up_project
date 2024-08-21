<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class bibdhoControl extends Controller
{
    public function bibidhoCatpd(){
        return view('bibidho.bibidhoCategoryPending');
    }

    public function bibidhoCat(){
        return view('bibidho.bibidhoCategory');
    }
}
