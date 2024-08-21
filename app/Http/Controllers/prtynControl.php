<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class prtynControl extends Controller
{
    public function prtynCatpd (){
        return view('prtyn.prtynCategoryPending');
    }

    public function prtynCat(){
        return view('prtyn.prtynCategory');
    }
}
