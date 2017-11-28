<?php

class hrhController extends \BaseController {

    public function __construct()
    {

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
        $hrh_type = HrhType::where('id',$hrhType)->first();
        if($hrh_type)
            return $hrh_type->description;
        else
            return 'NO HRH TYPE';
    }

    public static function hrh_province($hrhProvince){
        $hrh_province = Province::where('id',$hrhProvince)->first();
        if($hrh_province)
            return $hrh_province->description;
        else
            return 'NO PROVINCE';
    }

    public static function hrh_municipality($hrhMunicipality){
        $hrh_municipality = Municipality::where('id',$hrhMunicipality)->first();
        if($hrh_municipality)
            return $hrh_municipality->description;
        else
            return 'NO MUNICIPALITY';
    }

    public static function query_municipality($provinceId){
        $query_municipality = Municipality::where('id',$provinceId)->get();
        if($query_municipality)
            return $query_municipality;
        else
            return 'NO MUNICIPALITY';
    }

    public static function hrh_status($hrhStatus){
        $hrh_status = Status::where('id',$hrhStatus)->first();
        if($hrh_status)
            return $hrh_status->description;
        else
            return 'NO STATUS';
    }

    public static function hrh_extension($hrhExtension){
        $hrh_status = NameExtension::where('id',$hrhExtension)->first();
        if($hrh_status)
            return $hrh_status->suffix;
        else
            return 'NO STATUS';
    }

    public static function hrh_education_type($educationType){
        $education_type = EducationType::where('id',$educationType)->first();
        if($education_type)
            return $education_type->description;
        else
            return 'NO EDUCATION';
    }

    public function hrhInfo($userid){
        $user = Users::where('id',$userid)->first();
        return View::make('hrh.hrhInfo',[
            "user" => $user,
            "province" => Province::all(),
            "employee_status" => Status::all(),
        ]);
    }

    public function hrhQuery($provinceId){
        $users = Users::where('province',$provinceId)
            ->orderBy('fname','asc')
            ->paginate(10);

        return View::make('hrh.hrhQuery',[
            "users" => $users,
        ]);
    }


    public function profile($userid = null){
        if($userid){
            if(Auth::user()->usertype)
                $user = Users::where('id', $userid)->first();
            else
                return Redirect::to('/');
        } else{
            $user = Users::where('id',Auth::user()->id)->first();
        }
        $hrhType = HrhType::where('status','=',1);
        $nameExtension = NameExtension::all(['id','suffix','description']);
        $country = Country::all();
        $educationalBackground = EducationalBackground::where("userid",$userid ? $userid : Auth::user()->id)->orderBy('id','ASC')->get();
        $children = Children::where("userid",$userid ? $userid : Auth::user()->id)->get();
        $serviceEligibility = ServiceEligibility::where("userid",$userid ? $userid : Auth::user()->id)->get();
        $workExperience = WorkExperience::where("userid",$userid ? $userid : Auth::user()->id)->get();
        $employee_status = Status::all();
        $province = Province::all();

        return View::make('profile.profile', [
            "user" => $user,
            "hrh_type" => $hrhType,
            "name_extension" => $nameExtension,
            "country" => $country,
            "educationalBackground" => $educationalBackground,
            "children" => $children,
            "serviceEligibility" => $serviceEligibility,
            "workExperience" => $workExperience,
            "employee_status" => $employee_status,
            "education_type" => EducationType::all(),
            "province" => $province,
            "municipality" => Municipality::all()
        ]);
    }

    public function addHrhType(){
        $hrhType = new HrhType();
        $hrhType->suffix = Input::get('suffix');
        $hrhType->description = Input::get('description');
        $hrhType->status = 1;
        $hrhType->save();
        Session::put('add',true);

        return Redirect::back();
    }

    public function hrhTypeForm(){
        return View::make('hrh.hrhTypeForm');
    }

    public function hrhList(){
        Session::put('keyword',Input::get('keyword'));
        $keyword = Session::get('keyword');
        $employee_status = Status::all();
        if(Input::get('type')){
            $type = Input::get('type');
        } else {
            $type = 1;
        }
        $user_count = array();
        foreach($employee_status as $row){
            $user_count[$row->id] = count(Users::where('status_of_employment',$row->id)->get());
        }
        $users = Users::where('status_of_employment',$type)
                    ->where('usertype',0)
                    ->where(function($q) use ($keyword){
                        $q->where('fname','like',"%$keyword%")
                        ->orWhere('mname','like',"%$keyword%")
                        ->orWhere('lname','like',"%$keyword%");
                    })
                ->orderBy('fname','asc')
                ->paginate(10);
        $users_select = Users::orderBy('fname','asc')->get();

        if (Request::ajax()) {
            return Response::json([
                "view" => View::make('hrh.hrhPagination', [
                    "employee_status" => $employee_status,
                    "users" => $users,
                    "type" => $type
                ])->render(),
                "user_count" => $user_count
            ]);
        }

        return View::make('hrh.hrhList',[
            "employee_status" => $employee_status,
            "users" => $users,
            "user_count" => $user_count,
            "users_select" => $users_select,
            "type" => $type
        ]);
    }

    public function hrhTypeView(){
        Session::put('keyword',Input::get('keyword'));
        $keyword = Session::get('keyword');

        $hrhType = Hrhtype::where('status',1)
            ->where(function($q) use ($keyword){
            $q->where('description','like',"%$keyword%");
        })
            ->paginate(10);

        if (Request::ajax()) {
            return Response::json([
                "view" => View::make('hrh.hrhTypePagination', [
                    "hrhType" => $hrhType
                ])->render()
            ]);
        }

        return View::make('hrh.hrhType',[
            "hrhType" => $hrhType
        ]);
    }

    public function updateHrhType(){
        $id = Input::get('id');
        $column = Input::get('column');
        $value = Input::get('value');

        HrhType::where('id',$id)->update([
            $column => $value
        ]);

        return 'Successfully Updated';
    }

    public function deleteHrhType(){
        $id = Input::get('id');
        HrhType::where('id',$id)->update([
            "status" => 0
        ]);

        return 'Successfully deleted';
    }

    public function updateUser(){
        $id = Input::get('id');
        $value = Input::get('value');
        $column = Input::get('column');

        User::where("id",$id)->update([
            $column => $value
        ]);
        $other_country = Input::get('other_country');
        if($other_country){
            User::where("id",$id)->update([
                'other_country' => $other_country
            ]);
        }
        if($column == 'hrh_type'){
            $province = Province::where('hrh_type',$value)->first()->id;
            if($province != ''){
                $municipality = Municipality::where('province',$province)->first();
                if($municipality){
                    $municipality = $municipality->id;
                }
                else {
                    $municipality = 0;
                }
            } else {
                $province = 0;
                $municipality = 0;
            }
            User::where("id",$id)->update([
                'province' => $province,
                'municipality' => $municipality
            ]);
        }
        else if($column == 'province'){
            $municipality = Municipality::where('province',$value)->first()->id;
            if(!$municipality){
                $municipality = 0;
            }
            User::where("id",$id)->update([
                'municipality' => $municipality
            ]);
        }

        return 'successfully updated';
    }

    public function updateChildren(){
        $childrenId = Input::get('childrenId');
        $userId = Input::get('userId');
        $value = Input::get('value');
        $column = Input::get('column');
        $unique_row = Input::get('unique_row');
        $childrenFind = Children::where('id',$childrenId)
                        ->where('userid',$userId)
                        ->orWhere('unique_row',$unique_row);
        if($childrenFind->first()){
            $childrenFind->update([
                $column => $value
            ]);
            return 'Successfully Updated';
        } else {
            $children = new Children();
            $children->userid = $userId;
            $children->$column = $value;
            if($unique_row)
                $children->unique_row = $unique_row;
            else
                $children->unique_row = 'no unique';
            $children->save();
            return 'Successfully Added';
        }
    }

    public function updateEducationalBackground(){
        $educationId = Input::get('ebid');
        $userId = Input::get('userid');
        $column = Input::get('column');
        $education_type = Input::get('education_type');
        $value = Input::get('value');
        if(Input::get('unique_row'))
            $unique_row = Input::get('unique_row');
        else{
            $unique_row = '';
        }
        $educationFind = EducationalBackground::where('id',$educationId)
                        ->where('userid',$userId)
                        ->where('education_type',$education_type)
                        ->orWhere('unique_row',$unique_row);
        if($educationFind->first()){
            $educationFind->update([
                $column => $value
            ]);
            return 'Successfully Updated';
        } else {
            $education = new EducationalBackground();
            $education->userid = $userId;
            $education->$column = $value;
            $education->education_type = $education_type;
            $education->unique_row = $unique_row;
            $education->save();
            return 'Successfully Added';
        }
    }

    public function UpdateService(){
        $serviceId = Input::get('serviceId');
        $userId = Input::get('userId');
        $column = Input::get('column');
        $value = Input::get('value');
        if(Input::get('unique_row'))
            $unique_row = Input::get('unique_row');
        else
            $unique_row = "";

        $serviceFind = ServiceEligibility::where('id',$serviceId)
                       ->where('userid',$userId)
                       ->orWhere('unique_row',$unique_row);

        if($serviceFind->first()){
            $serviceFind->update([
                $column => $value
            ]);
            return 'Successfully Updated';
        }
        else {
            $service = new ServiceEligibility();
            $service->userid = $userId;
            $service->$column = $value;
            $service->unique_row = $unique_row;
            $service->save();

            return 'Successfully Added';
        }
    }

    public function updateWork(){
        $workId = Input::get('workId');
        $userId = Input::get('userId');
        $column = Input::get('column');
        $value = Input::get('value');
        if(Input::get('unique_row'))
            $unique_row = Input::get('unique_row');
        else
            $unique_row = '';

        $workFind = WorkExperience::where('id',$workId)
                    ->where('userid',$userId)
                    ->orWhere('unique_row',$unique_row);

        if($workFind->first()){
            $workFind->update([
                $column => $value
            ]);
            return 'Successfully Updated';
        } else {
            $work = new WorkExperience();
            $work->userid = $userId;
            $work->$column = $value;
            $work->unique_row = $unique_row;
            $work->save();

            return 'Successfully Added';
        }
    }

    public function ajax_test(){
        $hrh_type = Input::get('hrh_type');
        Users::where("id",Auth::user()->id)
            ->update([
                "hrh_type" => $hrh_type
            ]);
        return $this->hrh_type($hrh_type);
    }

    public function educationalBackground(){
        $userid = Auth::user()->id;
        $id = Input::get('id');
        $name_of_school = Input::get('name_of_school');
        $temp = "name_of_school";
        EducationalBackground::where('userid',$userid)
                ->where('id',$id)
                ->update([
                    $temp => $name_of_school
                ]);
        return 'Successfully save';
    }


}
