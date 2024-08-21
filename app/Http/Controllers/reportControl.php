<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class reportControl extends Controller
{
    public function memReport(){
        return view('report.memberReport');
    }

    public function taxReport(){
        return view('report.taxReport');
    }

    public function busReport(){
        return view('report.businessReport');
    }

    public function liReport(){
        return view('report.licenseReport');
    }

    public function waReport(){
        return view('report.warishReport');
    }

    public function faReport(){
        return view('report.familyReport');
    }

    public function proReport(){
        return view('report.prtynReport');
    }

    public function accReport(){
        return view('report.accountReport');
    }
}
