<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Liste;
use Illuminate\Http\Request;
use App\Http\Requests\ListeRequest;
class ListeController extends Controller
{

    public function createListe(){
        return view('Liste/createListe');
    }

    public function getForm()
    {
        return view('Liste/createListe');
    }

    public function postForm(ListRequest $request, Liste $liste)
    {
        $liste->nom = $request->input('first_name');
        $liste->last_name = $request->input('last_name');
        $liste->email = $request->input('email');
        $liste->password = $request->input('password');
        $liste->save();

        return view('Liste/createListe');
    }
}