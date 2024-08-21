<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class licenseControl extends Controller
{
    
public function licensePd (){
    return view('license.licensePending');
}

public function licenseList (){
    return view('license.licenseList');
}

public function reliPd (){
    return view('license.renewLicensePending');
}

public function riLicense (){
    return view('license.renewLicense');
}

public function liReg (){
    return view('license.licenseReg');
}

public function cpTax (){
    return view('license.capitalTax');
}
}
