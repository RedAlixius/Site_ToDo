<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function accueil(){
        return view('accueil/Accueil');
    }

    public function about(){
        return view('about/about');
    }
}
