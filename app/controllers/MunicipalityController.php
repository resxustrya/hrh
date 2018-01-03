<?php

class MunicipalityController extends BaseController{
    public function __construct()
    {
        if(Auth::check())
        {
            return Redirect::to('/');
        }
    }

    public static function hrh_suffix($provinceId){
        $province = Province::where('id',$provinceId)->first();
        if($province)
            return HrhType::where('id',$province->hrh_type)->first()->suffix;
        else
            return 'NO STATUS';
    }

    public function mList()
    {
        Session::put('keyword',Input::get('keyword'));
        $keyword = Session::get('keyword');
        if(Input::get('hrhType_tab')){
            $hrhType_tab = Input::get('hrh_type');
        } else {
            $hrhType_tab = 'all';
        }

        //paginate
        if($hrhType_tab == 'all'){
            $municipalities = Municipality::where('status',1)
                ->where(function($q) use ($keyword){
                    $q->where('description','like',"%$keyword%");
                })
                ->orderBy('description','asc')
                ->paginate(10);
        }

        $provinces = Province::where('status',1)->orderBy('description','asc')->get();

        if (Request::ajax()) {
            return Response::json(array(
                "view" => View::make('municipality.municipalityPagination', [
                    "municipalities" => $municipalities,
                    "provinces" => $provinces,
                ])->render()
            ));
        }

        return View::make('municipality.mList',[
            "municipalities" => $municipalities,
            "provinces" => $provinces,
            "hrh_type" => HrhType::where('status',1)->get()
        ]);
    }

    public function municipalityQuery($provinceId = null){
        if($provinceId){
            Session::put('m_page',1);
            Session::put('provinceId',$provinceId);
            $municipality = Municipality::where('province',$provinceId)
                ->orderBy('description','asc')
                ->paginate(10);
        } else {
            Session::put('m_page',Input::get('page'));
            $municipality = Municipality::where('province',Session::get('provinceId'))
                ->orderBy('description','asc')
                ->paginate(10);
        }

        return View::make('municipality.municipalityQuery',[
            "municipality" => $municipality,
        ]);
    }

    public function hrhAppend($provinceId,$municipalityId){
        $users = Users::where('province',$provinceId)
            ->where('municipality',$municipalityId)
            ->orderBy('fname','asc')
            ->paginate(10);

        return View::make('hrh.hrhAppend',[
            "users" => $users,
        ]);
    }

    public function mForm(){
        $hrh_type = HrhType::where('status',1)->get();
        $provinces = Province::where('status',1)->get();
        return View::make('municipality.mForm',[
            'provinces' => $provinces,
            'hrh_type' => $hrh_type
        ]);
    }

    public function mUpdate(){
        $column = Input::get('column');
        $id = Input::get('id');
        $value= Input::get('value');
        Municipality::where('id',$id)
                    ->update([
                        $column => $value
                    ]);
        return 'Successfully Update';
    }

    public function mAdd(){
        $municipality = new Municipality();
        $municipality->province = Input::get('province');
        $municipality->description = Input::get('municipality');
        $municipality->allocation = Input::get('allocation');
        $municipality->status = 1;
        $municipality->save();
        Session::put('add',true);

        return Redirect::back();
    }

    public function mDelete(){
        $id = Input::get('id');
        Municipality::where("id",$id)->update([
            "status" => 0
        ]);
        return 'Successfully Delete';
    }

}
