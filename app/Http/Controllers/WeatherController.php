<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WeatherController extends Controller
{
    //
    public function displayWeather(){
        $location = [
            "name"=> "Dhaka",
            "country"=> "Bangladesh",
            "Location"=> "GMT+6",

        ];

        $seasons = ["summer","winter","spring","autumn","late autumn","rainy"];

        return view("location",["location"=>$location,"seasons"=>$seasons]);
    }


}
