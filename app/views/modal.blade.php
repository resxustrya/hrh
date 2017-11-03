<div id="user_info" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-header no-padding">
            <div class="table-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    <span class="white">&times;</span>
                </button>
                HRH INFO
            </div>
        </div>
        <div class="modal-content">

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>

<div id="document_form" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header no-padding">
                <div class="table-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                        <span class="white">&times;</span>
                    </button>
                    <label class="modal_title">
                        Add New Municipality
                    </label>
                </div>
            </div>

            <div class="modal_content">

            </div>

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>

<div id="hrh_query" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header no-padding">
                <div class="table-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                        <span class="white">&times;</span>
                    </button>
                    <label class="modal_title">

                    </label>
                </div>
            </div>
            <div class="hrh_content">

            </div>

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>

<div id="add_province" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header no-padding">
                <div class="table-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                        <span class="white">&times;</span>
                    </button>
                    Add New Province
                </div>
            </div>

            <form class="no-margin-top" action="{{ asset('addProvince') }}" method="POST">
                <div class="modal-body center padding-10">
                    <fieldset>
                        <label class="block clearfix">
                            <select name="hrh_type" id="" class="form-control">
                                <option value="">Select HRH Type</option>
                                @foreach(HrhType::all() as $row)
                                    <option value="{{ $row->id }}">{{ $row->description }}</option>
                                @endforeach
                            </select>
                        </label>
                        <div class="space-12"></div>
                        <label class="block clearfix">
                            <span class="block input-icon input-icon-right">
                                <input type="text" class="form-control" name="description" style="text-transform:uppercase" placeholder="Description" required>
                                <i class="ace-icon fa fa-certificate"></i>
                            </span>
                        </label>
                        <div class="space-12"></div>
                        <label class="block clearfix">
                            <span class="block input-icon input-icon-right">
                                <input type="number" class="form-control" name="allocation" placeholder="Allocation" required>
                                <i class="ace-icon fa fa-certificate"></i>
                            </span>
                        </label>
                    </fieldset>
                </div>
                <div class="modal-footer no-margin-top">
                    <button class="btn btn-sm btn-success pull-left" type="submit">
                        <i class="ace-icon fa fa-send"></i>
                        Submit
                    </button>
                    <button class="btn btn-sm btn-danger pull-left" data-dismiss="modal">
                        <i class="ace-icon fa fa-times"></i>
                        Close
                    </button>
                </div>
            </form>

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>

<div id="add_hrhType" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header no-padding">
                <div class="table-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                        <span class="white">&times;</span>
                    </button>
                    Add New HRH Type
                </div>
            </div>

            <form class="no-margin-top" action="{{ asset('addHrhType') }}" method="POST">
                <div class="modal-body center padding-10">
                    <fieldset>
                        <label class="block clearfix">
                            <span class="block input-icon input-icon-right">
                                <input type="text" class="form-control" name="suffix" placeholder="Suffix" required>
                                <i class="ace-icon fa fa-certificate"></i>
                            </span>
                        </label>
                        <div class="space-12"></div>
                        <label class="block clearfix">
                            <span class="block input-icon input-icon-right">
                                <input type="text" class="form-control" name="description" placeholder="Description" required>
                                <i class="ace-icon fa fa-certificate"></i>
                            </span>
                        </label>
                    </fieldset>
                </div>
                <div class="modal-footer no-margin-top">
                    <button class="btn btn-sm btn-success pull-left" type="submit">
                        <i class="ace-icon fa fa-send"></i>
                        Submit
                    </button>
                    <button class="btn btn-sm btn-danger pull-left" data-dismiss="modal">
                        <i class="ace-icon fa fa-times"></i>
                        Close
                    </button>
                </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>

<div id="add_status" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header no-padding">
                <div class="table-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                        <span class="white">&times;</span>
                    </button>
                    Add New Status of Employment
                </div>
            </div>

            <form class="no-margin-top" action="" method="POST">
                <div class="modal-body center padding-10">
                    <fieldset>
                        <label class="block clearfix">
                            <span class="block input-icon input-icon-right">
                                <input type="text" class="form-control" name="description" placeholder="Description" style="text-transform:uppercase" required>
                                <i class="ace-icon fa fa-certificate"></i>
                            </span>
                        </label>
                        <div class="space-5"></div>
                    </fieldset>
                </div>
                <div class="modal-footer no-margin-top">
                    <button class="btn btn-sm btn-success pull-left" type="submit">
                        <i class="ace-icon fa fa-send"></i>
                        Submit
                    </button>
                    <button class="btn btn-sm btn-danger pull-left" data-dismiss="modal">
                        <i class="ace-icon fa fa-times"></i>
                        Close
                    </button>
                </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>

<div id="dialog-confirm" class="hide">
    <div class="alert alert-info bigger-110">
        These items will be permanently deleted and cannot be recovered.
    </div>

    <div class="space-6"></div>

    <p class="bigger-110 bolder center grey">
        <i class="ace-icon fa fa-hand-o-right blue bigger-120"></i>
        Are you sure?
    </p>
</div><!-- #dialog-confirm -->
