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

    public function getForm()
    {
        return view('account/createAccount');
    }

    public function postForm(UserRequest $request)
    {
        $user = new User;
        $user->email = $request->input('email');
        $user->save();

        return view('account/account_ok');
    }
}