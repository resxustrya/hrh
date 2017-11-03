@if(isset($municipality) and count($municipality) > 0)
    <div class="table-responsive" style="padding: 3%">
        <table id="simple-table" class="table table-bordered table-hover">
            <thead>
            <tr class="info">
                <th>Description</th>
                <th>Allocation</th>
                <th>HRH</th>
            </tr>
            </thead>

            <tbody>
            @foreach($municipality as $row)
                <tr>
                    <td class="col-sm-2">
                        <a href="#" role="button" class="green" ><b class="green">{{ $row->description }}</b></a>
                    </td>
                    <td class="col-sm-2">{{ $row->allocation }}</td>
                    <td class="col-sm-2">
                        <a href="#" role="button" id="appendList" data-link="{{ asset('hrhAppend').'/'.$row->province.'/'.$row->id }}" class="green" ><b class="green">{{ count(Users::where('province',$row->province)->where('municipality',$row->id)->get()) }} HRH</b></a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    {{--{{ $users->links() }}--}}
@else
    <div class="alert alert-danger" role="alert">Municipality records are empty.</div>
@endif


