<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

get('/',[
    'as'=>'accueil',
    'uses'=>'HomeController@accueil'
]);

get('/about',[
    'as'=>'about',
    'uses'=>'HomeController@about'
]);

/*get ('/createAccount',[
    'as'=>'createAccount',
    'uses'=>'AccountController@createAccount'
]);*/

//Route::controller('createAccount', 'AccountController');

/*get('/account_ok','AccountController@getForm');

post('/account_ok','AccountController@postForm');*/

/*post("/createAccount/form", function(){
    $rules = [
        'first_name'    => 'required',
        'last_name'     => 'required',
        'email'         => 'required|email',
        'password'      => 'required|confirmed',
    ];

    $validator = Validator::make(Input::all(),$rules);

    if ($validator->fails())
    {
        return Redirect::to('/createAccount')->withInput()->withErrors($validator);
    }
    return view('account/account_ok');
});*/





get('/viewTask',[
    'as'=>'viewTask',
    'uses'=>'ControllerTask@viewTask'
]);

Route::get('/createListe',[
    'as'=>'createListe',
    'uses'=>'ControllerTask@createListe'
]);

Route::get('/viewListe',[
    'as'=>'viewListe',
    'uses'=>'ControllerTask@viewListe'
]);


Route::get('/createTask',[
    'as'=>'createTask',
    'uses'=>'ControllerTask@createTask'
]);


/*
Route::post("/createTask", function(){
    $rules = [
        'nameTask'  => 'required',
        'dateTask'  => 'required',
    ];

    $validator = Validator::make(Input::all(),$rules);

    if ($validator->fails())
    {
        return Redirect::to('/createTask')->withInput()->withErrors($validator);
    }
    return 'Form passed validation!';
});*/

get('/login_ok', [
    'as'=>'login_ok',
    'uses'=>'AccountController@loge'
]);

post('/loginAccount',[
    'as'=>'login',
    'uses'=>'Auth\AuthController@postLogin'
]);

// Authentication routes...

get('/loginAccount',[
    'as'=>'login',
    'uses'=>'Auth\AuthController@getLogin'
]);

post('/loginAccount',[
    'as'=>'login',
    'uses'=>'Auth\AuthController@postLogin'
]);

get('/logout', 'Auth\AuthController@getLogout');

// Registration routes...
get('/createAccount',[
    'as'=>'createAccount',
    'uses'=>'Auth\AuthController@getRegister'
]);

post('/createAccount',[
    'as'=>'createAccount',
    'uses'=>'Auth\AuthController@postRegister'
]);

// Password reset link request routes...
get('password/email', 'Auth\PasswordController@getEmail');
post('password/email', 'Auth\PasswordController@postEmail');

// Password reset routes...
get('password/reset/{token}', 'Auth\PasswordController@getReset');
post('password/reset', 'Auth\PasswordController@postReset');