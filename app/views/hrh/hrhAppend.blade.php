<div style="padding: 3%">
    <button class="btn btn-info" id="hrhAppend_back"><i class="fa fa-arrow-left"></i> Back</button>
    @if(isset($users) and count($users) > 0)
        <div class="table-responsive">
            <h3 class="lighter block green">HRH that under of this municipality</h3>
            <table id="simple-table" class="table table-bordered table-hover">
                <thead>
                <tr class="info">
                    <th>Name</th>
                    <th>HRH Type</th>
                    <th>
                        Status of employment
                    </th>
                </tr>
                </thead>

                <tbody>
                @foreach($users as $user)
                    <tr>
                        <td class="col-sm-2">
                            <a href="{{ asset('profile').'/'.$user->id }}" role="button" class="green" ><b class="green">{{ $user->fname.' '.$user->lname }}</b></a>
                        </td>
                        <td class="col-sm-2">{{ hrhController::hrh_type($user->hrh_type) }}</td>
                        <td class="col-sm-2">
                            <span class="label label-info arrowed-in arrowed-in-right">{{ hrhController::hrh_status($user->status_of_employment) }}</span>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        {{--{{ $users->links() }}--}}
    @else
        <div class="space-12"></div>
        <div class="alert alert-danger" role="alert">HRH records are empty.</div>
    @endif
</div>

<script>
    $("#hrhAppend_back").on('click',function(e){
        $('.hrh_content').html(loadingState);
        var url = "<?php echo asset('municipalityQuery').'?page='.Session::get('m_page'); ?>";
        setTimeout(function(){
            $.get(url,function(result){
                $('.hrh_content').html(result);
            });
        },700);
    });
</script>