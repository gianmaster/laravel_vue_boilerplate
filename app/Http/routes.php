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

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');


Route::group(['prefix' => 'api', 'middleware' => ['api']], function(){
    //apis
    Route::resource('menu', 'MenuController');

    //test api
    Route::get('test', function(){
        return response()->json(array('data' => [
            [
                'id'    => 1,
                'text'  => 'Brazil'
            ],
            [
                'id'    => 2,
                'text'  => 'Ecuador'
            ],
            [
                'id'    => 3,
                'text'  => 'Venezuela'
            ],
            [
                'id'    => 4,
                'text'  => 'Argentina'
            ],
        ]));
    });

});


