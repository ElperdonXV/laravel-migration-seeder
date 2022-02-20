<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Train;
use Carbon\Carbon;

class TrainController extends Controller
{
    public function index(){
        $trains = Train::where('departures_time', '>=' , Carbon::today()->toDateString())->get();
        $data = [
            'trains' => $trains
        ];
        return view('home', $data);
    }
}
