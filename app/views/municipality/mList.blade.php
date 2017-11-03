@extends('layouts.app')
@section('content')
    <div class="page-content">
        <div class="page-header">
            <h1>
                Municipality List
            </h1>
        </div><!-- /.page-header -->
        <div class="space-10"></div>
        @if(isset($municipalities) and count($municipalities) > 0)
        <form id="searchForm">
            <div class="row">
                <div class="col-xs-12 col-md-6">
                    <label class="block clearfix">
                        <span class="block input-icon input-icon-right">
                            <input type="text" class="form-control" value="{{ Session::get('keyword') }}" name="keyword" placeholder="Search municipality..." />
                            <i class="ace-icon fa fa-search icon-on-right bigger-110"></i>
                        </span>
                    </label>
                </div>
                <div class="col-xs-12 col-md-6">
                    <a href="#document_form" data-link="{{ asset('mForm') }}" class="btn btn-primary no-border btn-sm" data-dismiss="modal" data-backdrop="static" data-toggle="modal" data-target="#document_form">
                        <i class="ace-icon fa fa-plus icon-on-right bigger-110"></i>
                        Add Municipality
                    </a>
                </div>
            </div>
        </form>
        <div class="space-10"></div>
        <div class="tab-content no-border no-padding">
            <div class="mList">
                <div class="row">
                    <div class="col-xs-12">
                        @include('municipality.municipalityPagination')
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div>
        </div>
        @else
            <a href="#document_form" data-link="{{ asset('mForm') }}" class="btn btn-primary no-border btn-sm" data-dismiss="modal" data-backdrop="static" data-toggle="modal" data-target="#document_form">
                <i class="ace-icon fa fa-plus icon-on-right bigger-110"></i>
                Add Municipality
            </a>
            <div class="space-10"></div>
            <div class="alert alert-danger" role="alert">Municipality records are empty.</div>
        @endif
    </div><!-- PAGE CONTENT ENDS -->
@endsection
@section('js')
    <script type="text/javascript">
        jQuery(function($) {
            $("a[href='#document_form']").on('click',function(e){
                //$('#form_type').modal({show: false});
                $('.modal_title').html('Add New Municipality');
                $('.modal_content').html(loadingState);
                var url = $(this).data('link');
                setTimeout(function(){
                    $.ajax({
                        url: url,
                        type: 'GET',
                        success: function(data) {
                            $('.modal_content').html(data);
                            $('.select2').css('width','100%').select2({allowClear:true});
                        }
                    });
                },700);
            });

            //global variable
            var keyword = '';
            $(".select2").select2();

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
                                    html: "<i class='ace-icon fa fa-trash-o bigger-110'></i>&nbsp; Delete item",
                                    "class" : "btn btn-danger btn-minier",
                                    click: function() {
                                        $( this ).dialog( "close" );
                                        $this.remove();
                                        Lobibox.notify('error',{
                                            msg:'Successfully Deleted!'
                                        });
                                        var url = "<?php echo asset('mDelete'); ?>";
                                        var json = {
                                            "id": deleteId
                                        };
                                        console.log(json);
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
                $('.mList').html("<span>Loading....</span>");
                $.ajax({
                    url : '?page=' + page + '&keyword=' + keyword,
                    dataType: 'json',
                }).done(function (data) {
                    //location.hash = page;
                    setTimeout(function(){
                        $('.mList').html(data.view);
                        editable();
                        delete_row();
                    },700);
                }).fail(function (data) {
                    console.log(data.view);
                    alert('Posts could not be loaded.');
                });
            }

            editable();
            function editable(){
                $(".editable_municipality").each(function(index) {
                    $('#'+this.id).editable({
                        type: 'text',
                        name: this.id,
                        success: function(data, description) {
                            var id = this.id.split('mId')[1].split('column')[0];
                            var column = this.id.split('mId')[1].split('column')[1];
                            var json = {
                                "column": column,
                                "id": id,
                                'description': description
                            };
                            var url = "<?php echo asset('mUpdate'); ?>";
                            $.post(url,json,function(result){
                                console.log(result);
                            });
                        },
                        error: function(errors) {
                        }
                    });
                });

                var provinces = [];
                var suffix;
                $.each(<?php echo $provinces; ?>,function(x,province){
                    $.each(<?php echo $hrh_type; ?>,function(y,hrh){
                        if(province.hrh_type == hrh.id){
                            suffix = hrh.suffix;
                        }
                    });
                    provinces.push({ id:province.id , text:province.description+" ["+suffix+"]" });
                });

                $(".editable_province").each(function(index) {
                    $('#'+this.id).editable({
                        type: 'select2',
                        name: this.id,
                        source: provinces,
                        select2: {
                            width: 400
                        },
                        success: function(data, value) {
                            var json = {
                                "column": 'province',
                                "id": this.id.split('pId')[1].split('column')[0],
                                "description" : value // ID only in value
                            };
                            var url = "<?php echo asset('mUpdate'); ?>";
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