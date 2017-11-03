<form class="no-margin-top form-submit" method="POST">
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
        <button class="btn btn-app btn-success btn-xs radius-4 sAdd" type="submit">
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
        var element = $('.sAdd');
        element.html('<i class="ace-icon fa fa-floppy-o bigger-160"></i>'+"<div class='editableform-loading'><i class='ace-icon fa fa-spinner fa-spin fa-1x light-blue'></i></div>");
        element.attr("disabled", true);
    });
</script>