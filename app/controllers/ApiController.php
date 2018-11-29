<?php

class ApiController extends BaseController
{
    public function hrh_info($fname,$lname){
        if($hrh_info = User::
            where("fname",str_replace('-',' ',$fname))
            ->Where('lname',str_replace('-',' ',$lname))
            ->get()){
            return $hrh_info;
        }
        else {
            return json_encode([
                "status" => "no_data"
            ]);
        }
    }
}