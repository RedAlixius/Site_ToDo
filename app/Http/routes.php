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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::post("/createAccount", function(){
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
    return 'Form passed validation!';
});

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
});

Route::get('/',[
    'as'=>'accueil',
    'uses'=>'ControllerTask@accueil'
]);

Route::get('/createAccount',[
    'as'=>'createAccount',
    'uses'=>'ControllerTask@createAccount'
]);

Route::get('/viewTask',[
    'as'=>'viewTask',
    'uses'=>'ControllerTask@viewTask'
]);


Route::get('/createTask',[
    'as'=>'createTask',
    'uses'=>'ControllerLink@createTask'
]);

//Route::get('/createAccount', 'ControllerTask');