<?php

<<<<<<< HEAD
/**
 * Created by PhpStorm.
 * User: Lourence
 * Date: 7/6/2017
 * Time: 4:01 PM
 */
class AdminController extends BaseController
{
    public function __construct()
    {
        $this->beforeFilter('auth');
        $this->beforeFilter('admin');
    }
}
=======
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
		return View::make('profile.profile');
	}

}
>>>>>>> a54fbb786bb170e98b761346487c960e058bee04
