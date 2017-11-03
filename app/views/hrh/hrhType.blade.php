@extends('layouts.app')
@section('content')
    <div class="page-content">
        <div class="page-header">
            <h1>
                HRH Type List
            </h1>
        </div>
        <div class="space-10"></div>
        @if(isset($hrhType) and count($hrhType) > 0)
        <form id="searchForm">
            <div class="row">
                <div class="col-xs-12 col-md-6">
                    <label class="block clearfix">
                            <span class="block input-icon input-icon-right">
                                <input type="text" class="form-control" value="{{ Session::get('keyword') }}" name="keyword" placeholder="Search hrh type..." />
                                <i class="ace-icon fa fa-search icon-on-right bigger-110"></i>
                            </span>
                    </label>
                </div>
                <div class="col-xs-12 col-md-6">
                    <a href="#document_form" data-link="{{ asset('hrhTypeForm') }}" class="btn btn-primary no-border btn-sm" data-dismiss="modal" data-backdrop="static" data-toggle="modal" data-target="#document_form">
                        <i class="ace-icon fa fa-plus icon-on-right bigger-110"></i>
                        Add HRH Type
                    </a>
                </div>
            </div>
        </form>
        <div class="space-10"></div>
        <div class="posts">
            <div class="row">
                <div class="col-xs-12">
                    @include('hrh.hrhTypePagination')
                </div>
            </div>
        </div>
        @else
            <a href="#document_form" data-link="{{ asset('hrhTypeForm') }}" class="btn btn-primary no-border btn-sm" data-dismiss="modal" data-backdrop="static" data-toggle="modal" data-target="#document_form">
                <i class="ace-icon fa fa-plus icon-on-right bigger-110"></i>
                Add HRH Type
            </a>
            <div class="space-10"></div>
            <div class="alert alert-danger" role="alert">HRH Type are empty.</div>
        @endif
    </div>
@endsection
@section('js')
    <script type="text/javascript">
        jQuery(function($) {

            //global variable
            var keyword = '';

            $("a[href='#document_form']").on('click',function(e){
                //$('#form_type').modal({show: false});
                $('.modal_title').html('Add New HRH Type');
                $('.modal_content').html(loadingState);
                var url = $(this).data('link');
                setTimeout(function(){
                    $.ajax({
                        url: url,
                        type: 'GET',
                        success: function(data) {
                            $('.modal_content').html(data);
                            $('.select2').css('width','100%').select2({allowClear:true})
                            .on('change', function(){
                                $(this).closest('form').validate().element($(this));
                            });
                        }
                    });
                },700);
            });

            $("input[name='keyword']").on("keyup",function(e){
                e.preventDefault();
                if(e.keyCode >= 48 && e.keyCode <= 90 || e.keyCode == 8){
                    keyword = $("input[name='keyword']").val();
                    getPosts(1,keyword);
                }
            });

            $(window).on('hashchange', function() {
                if (window.location.hash) {
                    var page = window.location.hash.replace('#', '');
                    if (page == Number.NaN || page <= 0) {
                        return false;
                    } else {
                        getPosts(page,keyword);
                    }
                }
            });

            $(document).ready(function() {
                $(document).on('click', '.pagination a', function (e) {
                    getPosts($(this).attr('href').split('page=')[1],keyword);
                    e.preventDefault();
                });
            });

            function getPosts(page,keyword) {
                $('.posts').html("<span>Loading....</span>");
                $.ajax({
                    url : '?page=' + page + '&keyword=' + keyword,
                    dataType: 'json',
                }).done(function (data) {
                    //location.hash = page;
                    setTimeout(function(){
                        $('.posts').html(data.view);
                        editable();
                        delete_row();
                    },700);
                }).fail(function () {
                    alert('Posts could not be loaded.');
                });
            }

            $.widget("ui.dialog", $.extend({}, $.ui.dialog.prototype, {
                _title: function(title) {
                    var $title = this.options.title || '&nbsp;';
                    if( ("title_html" in this.options) && this.options.title_html == true )
                        title.html($title);
                    else title.text($title);

                }
            }));

            delete_row();
            function delete_row(){
                $(".delete").each(function(index){
                    $("#"+this.id).on('click', function(e) {
                        e.preventDefault();
                        var deleteId = this.id.split('delete')[1];
                        var $this = $(this).parents(':eq(1)');
                        $( "#dialog-confirm" ).removeClass('hide').dialog({
                            resizable: false,
                            width: '320',
                            modal: true,
                            title: "<div class='widget-header'><h4 class='smaller'><i class='ace-icon fa fa-exclamation-triangle red'></i> Empty the recycle bin?</h4></div>",
                            title_html: true,
                            buttons: [
                                {
                                    html: "<i class='ace-icon fa fa-trash-o bigger-110 align-left'></i>&nbsp; Delete",
                                    "class" : "btn btn-danger btn-minier",
                                    click: function() {
                                        $( this ).dialog( "close" );
                                        $this.remove();
                                        Lobibox.notify('error',{
                                            msg:'Successfully Deleted!'
                                        });
                                        var url = "<?php echo asset('deleteHrhType'); ?>";
                                        var json = {
                                            "id": deleteId
                                        };
                                        $.post(url,json,function(result){
                                            console.log(result);
                                        });
                                    }
                                }
                                ,
                                {
                                    html: "<i class='ace-icon fa fa-times bigger-110'></i>&nbsp; Cancel",
                                    "class" : "btn btn-minier",
                                    click: function() {
                                        $( this ).dialog( "close" );
                                    }
                                }
                            ]
                        });
                    });
                });
            }

            editable();
            function editable(){
                $(".editable_hrh").each(function(index) {
                    $('#'+this.id).editable({
                        type: 'text',
                        name: this.id,
                        success: function(data, value) {
                            var id = this.id.split('hId')[1].split('column')[0];
                            var column = this.id.split('hId')[1].split('column')[1];
                            var json = {
                                "column": column,
                                "id": id,
                                'value': value
                            };
                            var url = "<?php echo asset('updateHrhType'); ?>";
                            $.post(url,json,function(result){
                                console.log(result);
                            });
                        },
                        error: function(errors) {

                        }
                    });
                });

            }


        });
    </script>
@endsection