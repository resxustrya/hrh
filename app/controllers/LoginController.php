<?php

class LoginController extends BaseController
{
    public function login()
    {
        if(Request::method() == "GET") {
            return View::make('account.login');
        }
    }

    public function username_trapping(){
        return Users::where('username', '=', Input::get('username'))->first();
    }
}