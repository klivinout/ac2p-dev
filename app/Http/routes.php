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
    //return view('template.core');
    return redirect()->route('login');
});



Route::group(['prefix' => 'auth'],function () {

	Route::get('/login',[
		'uses' => 'AuthController@getLogin',
		'as' => 'login'
	]);

	Route::post('/login',[
		'uses' => 'AuthController@postLogin',
	]);

	

});

Route::group(['prefix' => 'admin' , 'middleware' => 'auth'],function () {

	Route::get('/',[
		'uses' => 'AdminController@index',
		'as' => 'adminindex'
	]);

	Route::get('/logout',[
		'uses' => 'AdminController@logout',
		'as' => 'logout'
	]);

	Route::group(['prefix' => 'acl'],function () {

		Route::get('/taches/liste',[
			'uses' => 'AclController@getTasks',
			'as' => 'gettasks'
		]);

		Route::group(['prefix' => 'roles'],function () {

			Route::get('/ajouter',[
				'uses' => 'AclController@newRole',
				'as' => 'newrole'
			]);

			Route::post('/ajouter',[
				'uses' => 'AclController@postNewRole',
			]);


			Route::get('/liste',[
				'uses' => 'AclController@getRoles',
				'as' => 'getroles'
			]);

		});

	});

	Route::group(['prefix' => 'profile'],function () {

		Route::get('/imageprofile',[
			'uses' => 'ProfileController@getImageProfile',
			'as' => 'imageprofile'
		]);

	});

});
