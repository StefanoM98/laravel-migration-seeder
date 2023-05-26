<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Train;

class TrainController extends Controller
{

    public function index()
    {
        $trains = Train::where('Orario_di_partenza', '>=', now())->get();
        return view('welcome', compact('trains'));
    }
}
