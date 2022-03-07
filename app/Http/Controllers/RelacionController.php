<?php

namespace App\Http\Controllers;

use App\Models\Aprendi;
use App\Models\Ficha;

use Illuminate\Http\Request;

class RelacionController extends Controller
{

    public function index(){
        $aprendises = aprendi::all();
        $suma = aprendi::all()->sum('edad');
        /*return view('welcome', compact('suma')); */
        return view('welcome', compact('aprendises', 'suma'));
    }
}
