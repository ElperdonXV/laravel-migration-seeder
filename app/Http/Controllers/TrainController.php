<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Train;

class TrainController extends Controller
{
    public function index(){
        $todaydate = date("Y-m-d H:i:s");
        $trains = Train::where('departures_time', '==', $todayDate)->get();
        $data = [
            'trains' => $trains
        ];
        return view('home', $data);
    }
}
