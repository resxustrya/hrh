@if(isset($province) and count($province) > 0)
    <div class="table-responsive">
        <table id="simple-table" class="table table-bordered table-hover">
            <thead>
            <tr class="info">
                <th>Description</th>
                <th>HRH TYPE</th>
                <th>Allocation</th>
                <th>HRH</th>
                <th>Municipality</th>
                <th>Option</th>
            </tr>
            </thead>

            <tbody>
            @foreach($province as $row)
                <tr>
                    <td>
                        <span class="{{ 'editable_province' }} green" id="{{ 'province'.$type.'pId'.$row->id.'columndescription' }}">
                           {{ $row->description }}
                        </span>
                    </td>
                    <td width="20%">
                        <span class="{{ 'editable_select' }} green" id="{{ 'hrh_type'.$type.'pId'.$row->id.'columnhrh_type' }}">
                           {{ HrhType::find($row->hrh_type)->description }}
                        </span>
                    </td>
                    <td width="10%">
                        <span class="{{ 'editable_allocation' }} " id="{{ 'province'.$type.'pId'.$row->id.'columnallocation' }}">
                           {{ $row->allocation }}
                        </span>
                    </td>
                    <td width="10%">
                        <a href="#hrh_query" role="button" class="green" data-backdrop="static" data-title="HRH Query" data-userid="{{ $row->id }}" data-link="{{ asset('hrhQuery').'/'.$row->id }}" data-toggle="modal" ><b class="green">{{ count(Users::where('province',$row->id)->get()) }} HRH</b></a>
                    </td>
                    <td width="10%">
                        <a href="#hrh_query" role="button" class="green" data-backdrop="static" data-title="Municipality Query" data-userid="{{ $row->id }}" data-link="{{ asset('municipalityQuery').'/'.$row->id }}" data-toggle="modal" ><b class="green">{{ count(Municipality::where('province',$row->id)->get()) }} Municipality</b></a>
                    </td>
                    <td width="5%" class="center">
                        <a href="#" class="red delete" id="{{ $type.'delete'.$row->id }}">
                            <i class="ace-icon fa fa-trash bigger-180"></i>
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <div class="province_pagination">
        {{ $province->links() }}
    </div>
@else
    <div class="alert alert-danger" role="alert">Province records are empty.</div>
@endif

<script>

    $("a[href='#hrh_query']").on('click',function(e){
        $('.hrh_content').html(loadingState);
        var url = $(this).data('link');
        setTimeout(function(){
            $.ajax({
                url: url,
                type: 'GET',
                success: function(data) {
                    $('.hrh_content').html(data);
                }
            });
        },700);
    });

</script>






