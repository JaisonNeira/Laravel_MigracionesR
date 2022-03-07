<?php

namespace App\Http\Controllers;

use App\Models\Aprendi;
use App\Models\Ficha;

use Illuminate\Http\Request;

class RelacionController extends Controller
{
    public function index(){
        $aprendises = Aprendi::all();
        return view('welcome', compact('aprendises'));
    }
}
