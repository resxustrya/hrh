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
        $country = Country::all();
        return View::make('auth.register',[
            "hrhType" => $hrhType,
            "province" => $province,
            "municipality" => json_encode($municipality),
            "country" => $country
        ]);
    }

    public static function hrh_type($hrhType){
        return HrhType::where('id',$hrhType)->first();
    }

    public static function hrh_province($hrhProvince){
        return Province::where('id',$hrhProvince)->first();
    }

    public static function hrh_municipality($hrhMunicipality){
        return Municipality::where('id',$hrhMunicipality)->first();
    }

    public static function hrh_status($hrhStatus){
        return Status::where('id',$hrhStatus)->first();
    }

    public function hrhInfo($userid){
        $user = Users::where('id',$userid)->first();
        return View::make('hrh.hrhInfo',[
            "user" => $user
        ]);
    }

    public function profile($userid = null){
        $user = '';
        if($userid){
            $user = Users::where('id',$userid)->first();
        }
        $hrhType = HrhType::all(['id','description']);
        $nameExtension = NameExtension::all(['id','suffix','description']);
        $country = Country::all();
        $educationalBackground = EducationalBackground::where("userid",$userid ? $userid : Auth::user()->id)->get();
        $children = Children::where('userid',Auth::user()->id)->get();
        $serviceEligibility = ServiceEligibility::where('userid',Auth::user()->id)->get();
        $workExperience = WorkExperience::where('userid',Auth::user()->id)->get();

        return View::make('profile.profile', [
            "user" => $user,
            "hrh_type" => $hrhType,
            "name_extension" => $nameExtension,
            "country" => $country,
            "educationalBackground" => $educationalBackground,
            "children" => $children,
            "serviceEligibility" => $serviceEligibility,
            "workExperience" => $workExperience
        ]);
    }

    public function hrhList(){
        $keyword = Session::get('keyword');
        $users = Users::where(function($q) use ($keyword){
            $q->where('fname','like',"%$keyword%")
                ->orWhere('mname','like',"%$keyword%")
                ->orWhere('lname','like',"%$keyword%");
        })
            ->orderBy('id','desc')
            ->paginate(10);

        return View::make('hrh.hrhList',[
            "users" => $users
        ]);
    }
    public function ajax_test(){
        $hrh_type = Input::get('hrh_type');
        Users::where("id",Auth::user()->id)
            ->update([
                "hrh_type" => $hrh_type
            ]);
        return "success_ajax";
    }


}
