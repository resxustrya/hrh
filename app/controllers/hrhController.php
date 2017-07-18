<?php

class hrhController extends \BaseController {

    public function __construct()
    {
        if(Auth::check())
        {
            return Redirect::to('/');
        }
    }

    public function register()
    {
        $province = Province::all();
        $designation = Designation::all();
        $municipality['cebu'] = Municipality::where("province",1)->get(['id','description']);
        $municipality['bohol'] = Municipality::where("province",2)->get(['id','description']);
        $municipality['negros'] = Municipality::where("province",3)->get(['id','description']);
        return View::make('auth.register',[
            "designation" => $designation,
            "province" => $province,
            "municipality" => json_encode($municipality)
        ]);
    }


}
