<form class="no-margin-top form-submit" action="{{ asset('mAdd') }}" method="POST">
    <div class="modal-body center padding-10">
        <fieldset>
            <label class="block clearfix">
                <span class="block input-icon input-icon-right">
                    <select id="province" name="province" style="width: 100%" onchange="filter_province($(this))" class="select2" required>
                        <option value="">Pls. indicate hrh type</option>
                        @if(isset($hrh_type)):
                            @foreach($hrh_type as $row)
                                <option value="{{ $row['id'] }}">{{ $row['description'] }}</option>
                            @endforeach
                        @endif
                    </select>
                </span>
            </label>
            <div class="space-12"></div>
            <label class="block clearfix">
                <span class="block input-icon input-icon-right">
                    <select id="provinces" name="province" style="width: 100%" class="select2" required>
                        <option value="">Pls. indicate province</option>
                    </select>
                </span>
            </label>
            <div class="space-12"></div>
            <label class="block clearfix">
                <span class="block input-icon input-icon-right">
                    <input type="text" class="form-control" name="municipality" placeholder="Description" required>
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

    function filter_province(hrhId){
        $hrhId = hrhId.val();
        var provinceElement = $('#provinces');
        provinceElement.val('').trigger('change');
        provinceElement.html('').select2({data: {id:null, text: null}});
        provinceElement.append(
                new Option("","", true, true)
        ).trigger('change');

        $.each(<?php echo $provinces; ?>,function(index,query){
            if($hrhId == query.hrh_type){
                provinceElement.append(
                        new Option(query.description, query.id, true, true)
                ).trigger('change');
            }
        });
    }

    $('.form-submit').on('submit',function(){
        var element = $('.pAdd');
        element.html('<i class="ace-icon fa fa-floppy-o bigger-160"></i>'+"<div class='editableform-loading'><i class='ace-icon fa fa-spinner fa-spin fa-1x light-blue'></i></div>");
        element.attr("disabled", true);
    });

</script>