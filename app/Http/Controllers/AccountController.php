<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Link;
use Illuminate\Support\Facades\Request;

class ControllerTask extends Controller
{

    public function getForm()
    {
        return view('account/createAccount');
    }

    public function postForm(UserRequest $request)
    {
        $user = new User;
        $user->email = $request->input('createAccount');
        $user->save();

        return view('account_ok');
    }
}