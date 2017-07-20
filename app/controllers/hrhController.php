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
        $hrhType = HrhType::all();
        $municipality['cebu'] = Municipality::where("province",1)->get(['id','description']);
        $municipality['bohol'] = Municipality::where("province",2)->get(['id','description']);
        $municipality['negros'] = Municipality::where("province",3)->get(['id','description']);
        return View::make('auth.register',[
            "hrhType" => $hrhType,
            "province" => $province,
            "municipality" => json_encode($municipality)
        ]);
    }

    public static function hrh_type($hrhType){
        return HrhType::where('id',$hrhType)->first();
    }

    public function profile(){
        $hrhType = HrhType::all(['id','description']);
        return View::make('profile.profile', [
            "hrh_type" => $hrhType
        ]);
    }

    public function ajax_test(){
        return 'rusel tayong';
    }

}
