<div class="row">
    <div class="col-xs-12">
        @if(isset($hrhType) and count($hrhType) > 0)
            <div class="table-responsive">
                <table id="simple-table" class="table table-bordered table-hover">
                    <thead>
                    <tr class="info">
                        <th>
                            <i class="ace-icon fa fa-clock-o bigger-110"></i>
                            Suffix
                        </th>
                        <th>
                            <i class="ace-icon fa fa-clock-o bigger-110"></i>
                            Description
                        </th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($hrhType as $row)
                            <tr>
                                <td width="20%">
                                    <span class="{{ 'editable_hrh' }}" id="{{ 'hId'.$row->id.'columnsuffix' }}">
                                       {{ $row->suffix }}
                                    </span>
                                </td>
                                <td>
                                    <span class="{{ 'editable_hrh' }} green" id="{{ 'hId'.$row->id.'columndescription' }}">
                                       {{ $row->description }}
                                    </span>
                                </td>
                                <td width="5%">
                                    <a href="#" class="red delete" id="{{ 'delete'.$row->id }}">
                                        <i class="ace-icon fa fa-trash bigger-180"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            {{ $hrhType->links() }}
        @else
            <div class="alert alert-danger" role="alert">HRH Type records are empty.</div>
        @endif
    </div><!-- /.col -->
</div><!-- /.row -->
