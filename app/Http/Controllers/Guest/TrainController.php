<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Train;

class TrainController extends Controller
{

    public function index()
    {
        $trains = Train::whereDate('Orario_di_partenza' === 'oggi')->get();
        return view('welcome', compact('trains'));
    }
}
