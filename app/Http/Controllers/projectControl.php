<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class projectControl extends Controller
{
    public function projectAdd (){
        return view('project.addProject');
    }

    public function projectLi (){
        return view('project.projectList');
    }
}
