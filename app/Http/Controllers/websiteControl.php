<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class websiteControl extends Controller
{
    public function addSlider (){
        return view('website.slider');
    }

    public function addMember (){
        return view('website.addNewmember');
    }

    public function memberLi (){
        return view('website.memberList');
    }

    public function citizen (){
        return view('website.citizenCharter');
    }

    public function addPage (){
        return view('website.pages');
    }

    public function pageLi (){
        return view('website.pageList');
    }

    public function noticBord (){
        return view('website.notic');
    }

    public function servicList (){
        return view('website.servic');
    }
    
    public function photo (){
        return view('website.img');
    }

    public function videoLi (){
        return view('website.video');
    }

    public function cngVoice (){
        return view('website.voice');
    }
}
