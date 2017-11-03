<?php

class ProvinceController extends  BaseController{
    public function __construct()
    {
        if(Auth::check())
        {
            return Redirect::to('/');
        }
    }

    public function pList(){
        Session::put('keyword',Input::get('keyword'));
        $keyword = Session::get('keyword');
        $hrh_type = HrhType::where("status",1)->get();
        if(Input::get('type')){
            $type = Input::get('type');
        } else {
            if(isset(HrhType::where('status',1)->first()->id))
                $type = HrhType::where('status',1)->first()->id;
            else
                $type = 0;
        }
        $province_count = array();
        foreach($hrh_type as $row){
            $province_count[$row->id] = count(Province::
                where('hrh_type',$row->id)
                ->where('status',1)
                ->get()
            );
        }

        $province = Province::where('hrh_type',$type)
            ->where('status',1)
            ->where(function($q) use ($keyword){
                $q->where("description","like","%$keyword%");
            })
            ->paginate(10);

        $province_select = Province::where('status',1)->orderBy('description','asc')->get();

        if (Request::ajax()) {
            return Response::json([
                "view" => View::make('province.ProvincePagination', [
                    "province" => $province,
                    "hrh_type" => $hrh_type,
                    "province_count" => $province_count,
                    "province_select" => $province_select,
                    "type" => $type
                ])->render(),
                "province_count" => $province_count
            ]);
        }

        return View::make('province.pList',[
            "province" => $province,
            "hrh_type" => $hrh_type,
            "province_count" => $province_count,
            "province_select" => $province_select,
            "type" => $type
        ]);
    }

    public function pForm(){
        $hrh_type = HrhType::where('status',1)->get();
        return View::make('province.pForm',[
            'hrh_type' => $hrh_type
        ]);
    }

    public function addProvince(){
        $province = new Province();
        $province->hrh_type = Input::get('hrh_type');
        $province->description = Input::get('description');
        $province->allocation = Input::get('allocation');
        $province->status = 1;
        $province->save();

        return Redirect::back();
    }

    public function updateProvince(){
        $id = Input::get('id');
        $column = Input::get('column');
        $value = Input::get('value');
        Province::where('id',$id)->update([
            $column => $value
        ]);

        return 'Successfully Updated';
    }

    public function deleteProvince(){
        $id = Input::get('id');
        Province::where('id',$id)->update([
            "status" => 0
        ]);

        return 'Successfully Deleted';
    }

}