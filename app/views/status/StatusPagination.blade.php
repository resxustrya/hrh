<div class="row">
    <div class="col-xs-12">
        @if(isset($status_of_employment) and count($status_of_employment) > 0)
            <div class="table-responsive">
                <table id="simple-table" class="table table-bordered table-hover">
                    <thead>
                        <tr class="info">
                            <th>
                                <i class="ace-icon fa fa-clock-o bigger-110"></i>
                                Description
                            </th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($status_of_employment as $status)
                        <tr>
                            <td>
                                 <span class="{{ 'editable_status' }} green" id="{{ 'sId'.$status->id.'columndescription' }}">
                                   {{ $status->description }}
                                 </span>
                            </td>
                            <td class="center" width="5%">
                                <a href="#" class="red delete" id="{{ 'delete'.$status->id }}">
                                    <i class="ace-icon fa fa-trash bigger-180"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="statusPagination">
                {{ $status_of_employment->links() }}
            </div>
        @else
            <div class="alert alert-danger" role="alert">Status of employment records are empty.</div>
        @endif
    </div><!-- /.col -->
</div><!-- /.row -->
