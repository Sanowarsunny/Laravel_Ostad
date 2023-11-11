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
    
    public function login(Request $request){   
        $email = $request->email;
        $password = $request->password;

        $demail ="suny@gmail.com";
        $pa ="sak";

        if($email == $demail && $password == $pa){
            return "login";
        }else{
            return "sd";
        }
    }

}