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

    public function createTask(Request $req){
        /*$param=$req::all();
        $link=new \App\Link;
        $link->name=$param['name'];
        $link->date=$param['date'];
        $link->description=$param['description'];
        $link->save();
        var_dump($param);*/
        return redirect()->route('task/viewTask');
    }

    public function getForm()
    {
        return view('email');
    }

    public function postForm(EmailRequest $request)
    {
        $email = new Email;
        $email->email = $request->input('email');
        $email->save();

        return view('email_ok');
    }
}