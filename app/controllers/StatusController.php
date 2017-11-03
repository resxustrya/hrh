<?php

class StatusController extends BaseController {

    public function __construct()
    {
        if(Auth::check())
        {
            return Redirect::to('/');
        }
    }

    public function sList(){
        if(Request::method() == 'GET') {
            Session::put('keyword', Input::get('keyword'));
            $keyword = Session::get('keyword');

            $status_of_employment = Status::where('status',1)
            ->where(function ($q) use ($keyword) {
                $q->where("description", "like", "%$keyword%");
            })
                ->orderBy('id','asc')
                ->paginate(10);

            if (Request::ajax()) {
                return Response::json(array(
                    "view" => View::make('status.statusPagination', [
                        "status_of_employment" => $status_of_employment
                    ])->render()
                ));
            }

            return View::make('status.statusList', [
                "status_of_employment" => $status_of_employment
            ]);
        } else {
            $status = new Status();
            $status->description = strtoupper(Input::get('description'));
            $status->status = 1;
            $status->save();

            Session::put('add',true);

            return Redirect::back();
        }

    }

    public function statusUpdate(){
        $column = Input::get('column');
        $id = Input::get('id');
        $description = Input::get('description');
        Status::where('id',$id)
            ->update([
                $column => $description
            ]);
        return 'Successfully Update';
    }

    public function statusForm(){
        return View::make('status.statusForm');
    }

    public function statusDelete(){
        $id = Input::get('id');
        Status::where("id",$id)->update([
            "status" => 0
        ]);
        return 'Successfully Delete';
    }

}

?>