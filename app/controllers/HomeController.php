<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function index()
	{
		if (Confide::user()) {
			return Redirect::action('HomeController@dashboard');
		} else {
			return Redirect::action('UsersController@login');
		}
	}

	public function dashboard()
	{
		if (Confide::user()) {
			return View::make('home.dashboard');
		} else {
			return Redirect::action('UsersController@login');
		}
	}

}
