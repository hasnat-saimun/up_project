<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class taxMember extends Controller
{
    public function taxCollectionForm(){
        return view('admin.hader');
    }

//tax Member str
public function taxmember(){
    return view('taxMember.taxPaymember');
}

public function wardMemList(){
    return view('taxMember.wardMemberlist');

}

public function memberList (){
    return view('taxMember.memberList');
}

public function regWardlist (){
    return view('taxMember.registerWardlist');
}

public function holdingWard (){
    return view('taxMember.holding');
}

public function taxReceive (){
    return view('taxReceiver.taxReceive');
}

public function taxList (){
    return view('taxReceiver.taxList');
}

public function billPaper (){
    return view('taxReceiver.billPaper');
}

public function birthAdd (){
    return view('birth.birthAdding');
}

public function birthList (){
    return view('birth.birthList');
}
//tax Member end
}
