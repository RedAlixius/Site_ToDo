<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Link;
use Illuminate\Support\Facades\Request;

class ControllerTask extends Controller{



    public function createAccount(){
        return view('account/createAccount');
    }

    public function viewListe(){
        return view('liste/viewliste');
    }

    public function createListe(){
        return view('liste/createListe');
    }


    public function viewTask(){
        return view('task/viewTask');
    }

    public function createTask(Request $req){
        /*$param=$req::all();
        $link=new \App\Link;
        $link->name=$param['name'];
        $link->date=$param['date'];
        $link->description=$param['description'];
        $link->save();
        var_dump($param);*/
        return view('task/createTask');
    }
}