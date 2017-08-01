@extends('layouts.app')
@section('content')
    <div class="page-content">
        <div class="page-header">
            <h1>
                HRH LIST
            </h1>
        </div><!-- /.page-header -->

        <div class="row">
            <div class="col-xs-12">
                @if(isset($users) and count($users) > 0)
                    {{--<div class="widget-container-col" id="widget-container">
                        <div class="widget-box" id="widget-box">
                            <div class="widget-body">--}}
                                <div class="table-responsive">
                                    <table id="simple-table" class="table table-bordered table-hover">
                                        <thead>
                                        <tr class="info">
                                            <th>Name</th>
                                            <th>HRH Type</th>
                                            <th>
                                                <i class="ace-icon fa fa-clock-o bigger-110"></i>
                                                Area of assignment(Province)
                                            </th>
                                            <th>
                                                <i class="ace-icon fa fa-clock-o bigger-110"></i>
                                                Area of assignment(Municipality)
                                            </th>
                                            <th>
                                                Status of employment
                                            </th>
                                            <th>Mobile No</th>
                                        </tr>
                                        </thead>

                                        <tbody>
                                        @foreach($users as $user)
                                            <tr>
                                                <td class="col-sm-2">
                                                    <a href="#user_info" role="button" class="green" data-backdrop="static" data-userid="{{ $user->fname.' '.$user->lname }}" data-link="{{ asset('hrhInfo').'/'.$user->id }}" data-toggle="modal" ><b class="green">{{ $user->fname.' '.$user->lname }}</b></a>
                                                </td>
                                                <td class="col-sm-2">{{ hrhController::hrh_type(Auth::user()->hrh_type)->description }}</td>
                                                <td class="col-sm-2">{{ hrhController::hrh_province(Auth::user()->province)->description }}</td>
                                                <td class="col-sm-2">{{ hrhController::hrh_municipality(Auth::user()->municipality)->description }}</td>

                                                <td class="col-sm-2">
                                                    <span class="label label-info arrowed-in arrowed-in-right">{{ hrhController::hrh_status($user->status_of_employment)->description }}</span>
                                                </td>

                                                <td class="col-sm-2">
                                                    {{ $user->mobile_no }}
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            {{--</div>
                        </div>
                    </div>--}}
                    {{ $users->links() }}
                @else
                    <div class="alert alert-danger" role="alert">User records are empty.</div>
                @endif
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- PAGE CONTENT ENDS -->

@endsection
@section('js')
    <script type="text/javascript">
        //user information
        $("a[href='#user_info']").on('click',function(){
            $('.modal-content').html(loadingState);
            var url = $(this).data('link');
            setTimeout(function(){
                $.ajax({
                    url: url,
                    type: 'GET',
                    success: function(data) {
                        $('.modal-content').html(data);
                    }
                });
            },700);
        });
    </script>
@endsection