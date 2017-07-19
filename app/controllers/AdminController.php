<?php


/**
 * Created by PhpStorm.
 * User: Lourence
 * Date: 7/6/2017
 * Time: 4:01 PM
 */

class AdminController extends \BaseController {

	public function __construct()
	{
		if(Auth::check())
		{
			return Redirect::to('/');
		}
	}
	public function index()
	{
		if(Auth::check()){
			if(Auth::user()->usertype == '1')
			{
				return Redirect::to('home');
			} else {
				return Redirect::to('personal/index');
			}
		}
		if(!Auth::check() and Request::method() == 'GET') {
			return View::make('auth.login');
		}

		if(Request::method() == 'POST') {
			$username = Input::get('username');
			$password = Input::get('password');
			$user = Users::where('username', '=', $username)
				->where('password', '=', $password)
				->first();

			if(isset($user) and count($user) > 0) {
				if (Auth::loginUsingId($user->id)) {
					if (Auth::user()->usertype == '1') {
						return Redirect::to('home');
					} else {
						return Redirect::to('personal/index');
					}
				} else {
					return Redirect::to('/')->with('ops', 'Invalid Login');
				}
			} else {
				if(Auth::attempt(array('username' => $username, 'password' => $password))) {
					if(Auth::user()->usertype == '1') {
						return Redirect::to('home');
					} else {
						return Redirect::to('personal/index');
					}
				} else {
					return Redirect::to('/')->with('ops','Invalid Login');
				}
			}
		}
	}

	public function home()
	{
		return View::make('coordinator.coordinator_home');
	}


	public function register()
	{
		if(Request::method() == 'GET') {
			return View::make('auth.register');
		}

		if(Request::method() == 'POST') {

		}
	}
}

