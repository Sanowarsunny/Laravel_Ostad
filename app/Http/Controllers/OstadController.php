<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OstadController extends Controller
{
    //
    public function index(){
        return "welcome";
    }

    public function hello($name = "Ali"){
        return "hello $name";
}


}