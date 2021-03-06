<form class="no-margin-top form-submit" action="{{ asset('addProvince') }}" method="POST">
    <div class="modal-body center padding-10">
        <fieldset>
            <label class="block clearfix">
                <select name="hrh_type" id="" class="select2" required>
                    <option value="">Pls. indicate hrh type</option>
                    @foreach($hrh_type as $row)
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
        <button class="btn btn-app btn-success btn-xs radius-4 pAdd" type="submit">
            <i class="ace-icon fa fa-floppy-o bigger-160"></i>
            Save
        </button>
        <button class="btn btn-app btn-danger btn-xs radius-4" data-dismiss="modal">
            <i class="ace-icon fa fa-times"></i>
            Close
        </button>
    </div>
</form>

<script>

    $('.form-submit').on('submit',function(){
        var element = $('.pAdd');
        element.html('<i class="ace-icon fa fa-floppy-o bigger-160"></i>'+"<div class='editableform-loading'><i class='ace-icon fa fa-spinner fa-spin fa-1x light-blue'></i></div>");
        element.attr("disabled", true);
    });

</script>

