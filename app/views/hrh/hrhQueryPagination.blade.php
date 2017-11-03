@if(isset($users) and count($users) > 0)
    <div class="table-responsive" style="padding: 3%">
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
    <div class="alert alert-danger" role="alert">HRH records are empty.</div>
@endif