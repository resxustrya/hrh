<div class="row">
    <div class="col-xs-12">
        @if(isset($municipalities) and count($municipalities) > 0)
            <div class="table-responsive">
                <table id="simple-table" class="table table-bordered table-hover">
                    <thead>
                    <tr class="info">
                        <th>
                            Description
                        </th>
                        <th>
                            Province
                        </th>
                        <th>
                            Allocation
                        </th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($municipalities as $municipality)
                        <tr>
                            <td>
                                <span class="{{ 'editable_municipality' }} green" id="{{ 'mId'.$municipality->id.'columndescription' }}">
                                   {{ $municipality->description }}
                                </span>
                            </td>
                            <td>
                                <span class="{{ 'editable_province' }}" id="{{ 'pId'.$municipality->id.'columnprovince' }}">
                                    {{ hrhController::hrh_province($municipality->province).' ['.MunicipalityController::hrh_suffix($municipality->province).'] ' }}
                                </span>
                            </td>
                            <td width="10%">
                                <span class="{{ 'editable_allocation' }} green" id="{{ 'mId'.$municipality->id.'columnallocation' }}">
                                   {{ $municipality->allocation }}
                                </span>
                            </td>
                            <td class="center" width="5%">
                                <a href="#" class="red delete" id="{{ 'delete'.$municipality->id }}">
                                    <i class="ace-icon fa fa-trash bigger-180"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="municipality_pagination">
                {{ $municipalities->links() }}
            </div>
        @else
            <div class="alert alert-danger" role="alert">Municipality records are empty.</div>
        @endif
    </div><!-- /.col -->
</div><!-- /.row -->
