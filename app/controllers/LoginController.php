<?php

/**
 * Created by PhpStorm.
 * User: Lourence
 * Date: 7/6/2017
 * Time: 4:03 PM
 */
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