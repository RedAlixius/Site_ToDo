<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Link;
use Illuminate\Support\Facades\Request;

class ControllerLink extends Controller{

    public function accueil(){
        return view('accueil/Accueil');
    }

    public function createAccount(){
        return view('account/createAccount');
    }

    public function viewTask(){
        return view('task/viewTask');
    }

    public function createTask(){
        return view('task/createTask');
    }

}