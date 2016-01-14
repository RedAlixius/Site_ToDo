<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
class AccountController extends Controller
{

    public function createAccount(){
        return view('account/createAccount');
    }

    public function login(){
        return view('account/loginAccount');
    }

    public function getForm()
    {
        return view('account/createAccount');
    }

    public function postForm(UserRequest $request, User $user)
    {
        $user->first_name = $request->input('first_name');
        $user->last_name = $request->input('last_name');
        $user->email = $request->input('email');
        $user->password = $request->input('password');
        $user->save();

        return view('account/account_ok');
    }
}