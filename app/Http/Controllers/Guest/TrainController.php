<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function index()
    {
        // SELECT * FROM `trains` WHERE `departure_day` >= '2024-02-02'; 
        $trains = Train::where('departure_day', '2024-02-02')->get();
        return view('guest.train.index', ['trains' => $trains]);
    }
}
