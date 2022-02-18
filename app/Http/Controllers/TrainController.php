<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Train;

class TrainController extends Controller
{
    public function index(){
        $todaydate = Carbon::now();
        $trains = Train::where('departures_time', '==', $todayDate)->get();
        $data = [
            'trains' => $trains
        ];
        return view('home', $data);
    }
}
