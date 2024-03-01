<?php

namespace App\Http\Controllers;

use App\Models\Vehicule;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
         $vehicule = Vehicule::get();
        return view('home',compact('vehicule'));
    }
}
