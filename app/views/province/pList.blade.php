@extends('layouts.app')
@section('content')
    <div class="page-content">
        <div class="page-header">
            <h1>
                PROVINCE LIST
            </h1>
        </div><!-- /.page-header -->
        <div class="space-10"></div>
        @if(isset($province_select) and count($province_select) > 0)
        <div class="clearfix">
            <ul class="nav nav-tabs padding-18" id="myTab">
                <?php
                $statusCount = 0;
                $counter = 1;
                $color = ['blue','orange','green','red','purple'];
                $badge = ['primary','warning','success','danger','purple'];
                ?>
                <li class="active">
                    <a data-toggle="tab" class="m-tab" href="#all">
                        <i class="{{ $color[0] }} ace-icon fa fa-question-circle bigger-120"></i>
                        ALL
                        <span class="badge badge-{{ $badge[0] }} badge-{{ $statusCount }}">{{ $province_count['all'] }}</span>
                    </a>
                </li>
                @foreach($hrh_type as $status)
                    <?php $statusCount++; ?>
                    <li>
                        <a data-toggle="tab" class="m-tab" href="#{{ $status->id }}">
                            <i class="{{ $color[$counter] }} ace-icon fa fa-question-circle bigger-120"></i>
                            {{ $status->suffix }}
                            <span class="badge badge-{{ $badge[$counter] }} badge-{{ $statusCount }}">{{ $province_count[$status->id] }}</span>
                            <?php
                            $counter++;
                            if($counter >= 5) $counter = 1;
                            ?>
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
        <div class="space-20"></div>
        <form id="searchForm">
            <div class="row">
                <div class="col-xs-12 col-md-6">
                    <label class="block clearfix">
                        <span class="block input-icon input-icon-right">
                            <input type="text" class="form-control" value="{{ Session::get('keyword') }}" id="search" name="keyword" placeholder="Search municipality..." autofocus/>
                            <i class="ace-icon fa fa-search icon-on-right bigger-110"></i>
                        </span>
                    </label>
                </div>
                <div class="col-xs-12 col-md-6">
                    <a href="#document_form" data-link="{{ asset('pForm') }}" class="btn btn-primary no-border btn-sm" data-dismiss="modal" data-backdrop="static" data-toggle="modal" data-target="#document_form">
                        <i class="ace-icon fa fa-plus icon-on-right bigger-110"></i>
                        Add Province
                    </a>
                </div>
            </div>
        </form>
        <div class="space-10"></div>

        <div class="tab-content no-border no-padding">
            <div id="all" class="tab-pane fade in active">
                <div class="posts_all">
                    <div class="row">
                        <div class="col-xs-12">
                            @include('province.ProvincePagination')
                        </div>
                    </div>
                </div>
            </div>
            <?php $statusCount = 1; ?>
            @foreach($hrh_type as $status)
                <?php $statusCount++; ?>
                <div id="{{ $status->id }}" class="tab-pane fade">
                    <div class="posts_{{ $status->id }}">
                        <div class="row">
                            <div class="col-xs-12">
                                @include('province.ProvincePagination')
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        @else
            <a href="#document_form" data-link="{{ asset('pForm') }}" class="btn btn-primary no-border btn-sm" data-dismiss="modal" data-backdrop="static" data-toggle="modal" data-target="#document_form">
                <i class="ace-icon fa fa-plus icon-on-right bigger-110"></i>
                Add Province
            </a>
            <div class="space-10"></div>
            <div class="alert alert-danger" role="alert">Province records are empty.</div>
        @endif

    </div><!-- PAGE CONTENT ENDS -->

@endsection
@section('js')
    <script type="text/javascript">

        $("a[href='#document_form']").on('click',function(e){
            //$('#form_type').modal({show: false});
            $('.modal_title').html('Add New Province');
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
        @if(isset($province_select) and count($province_select) > 0)
        jQuery(function($) {

            $(document).ready(function() {
                $(document).on('click', '.municipality_pagination a', function (e) {
                    var page = $(this).attr('href').split('page=')[1];
                    $('.municipalityQuery').html(loadingState);
                    var url = "<?php echo asset('municipalityQuery').'?page='; ?>"+page;
                    setTimeout(function(){
                        $.get(url,function(result){
                            $('.municipalityQuery').html(result);
                        });
                    },700);
                    return false;
                });
            });

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

            //global variable
            var keyword = '';
            var type = "all";

            //custom autocomplete (category selection)
            $.widget( "custom.catcomplete", $.ui.autocomplete, {
                _create: function() {
                    this._super();
                    this.widget().menu( "option", "items", "> :not(.ui-autocomplete-category)" );
                },
                _renderMenu: function( ul, items ) {
                    var that = this, currentCategory = "";
                    $.each( items, function( index, item ) {
                        that._renderItemData( ul, item );
                        return index < 10;
                    });
                }
            });

            var users = [];
            $.each(<?php echo $province_select; ?>,function(x,data){
                users.push({ label:data.fname , id:data.id });
            });

            $( "#search" ).catcomplete({
                delay: 0,
                source: users,
                select: function(e, ui) {
                    keyword = ui.item.value;
                    getPosts(1,keyword);
                }
            });

            $("input[name='keyword']").on("keyup",function(e){
                this.focus();
                e.preventDefault();
                if(e.keyCode >= 48 && e.keyCode <= 90 || e.keyCode == 8){
                    keyword = $("input[name='keyword']").val();
                    getPosts(1,keyword);
                }
            });

            //user information
            $("a[href='#user_info']").on('click',function(){
                $('.modal-content').html(loadingState);
                var url = $(this).data('link');
                setTimeout(function(){
                    $.ajax({
                        url: url,
                        type: 'GET',
                        success: function(data) {
                            $('.modal-content').html(data);
                        }
                    });
                },700);
            });

            $(".m-tab").each(function(index){
                var href = $(this).attr('href');
                $("a[href='"+href+"']").on("click",function(){
                    type = this.href.split('#')[1];
                    console.log(type);
                    $('.posts_'+type).html("<span>Loading....</span>");
                    getPosts(1,keyword);
                });
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
                $(document).on('click', '.province_pagination a', function (e) {
                    getPosts($(this).attr('href').split('page=')[1],keyword);
                    e.preventDefault();
                });
            });

            function getPosts(page,keyword) {
                $('.posts_'+type).html("<span>Loading....</span>");
                $.ajax({
                    url : '?page=' + page + '&keyword=' + keyword + '&type=' + type,
                    dataType: 'json',
                }).done(function (data) {
                    //location.hash = page;
                    setTimeout(function(){
                        $.each(<?php echo $hrh_type; ?>,function(index){
                            $('.badge-'+index+1).html(data.province_count[index+1]);
                        });
                        $('.posts_'+type).html(data.view);
                        editable_select();
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
                            title: "<div class='widget-header'><h4 class='smaller'><i class='ace-icon fa fa-exclamation-triangle red'></i></h4></div>",
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
                                        var url = "<?php echo asset('deleteProvince'); ?>";
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
                $(".editable_province").each(function(index) {
                    $('#'+this.id).editable({
                        type: 'text',
                        name: this.id,
                        success: function(data, value) {
                            var id = this.id.split('pId')[1].split('column')[0];
                            var column = this.id.split('pId')[1].split('column')[1];
                            var json = {
                                "column": column,
                                "id": id,
                                'value': value
                            };
                            var url = "<?php echo asset('updateProvince'); ?>";
                            $.post(url,json,function(result){
                                console.log(result);
                            });
                        },
                        error: function(errors) {

                        }
                    });
                });

                $(".editable_allocation").each(function(index){
                    $('#'+this.id).editable({
                        type: 'spinner',
                        name : 'age',
                        spinner : {
                            min : this.text,
                            max : 9999,
                            step: 1,
                            on_sides: true
                        },
                        success: function(data,value){
                            var id = this.id.split('pId')[1].split('column')[0];
                            var column = this.id.split('pId')[1].split('column')[1];
                            var json = {
                                "column": column,
                                "id": id,
                                'value': value
                            };
                            var url = "<?php echo asset('updateProvince'); ?>";
                            $.post(url,json,function(result){
                                console.log(result);
                            });
                        }
                    });
                });
            }

            function query_hrhType(){
                var hrhType = [];
                $.each(<?php echo $hrh_type; ?>, function(x, data) {
                    hrhType.push({id: data.id, text: data.description});
                });
                return hrhType;
            }

            editable_select();
            function editable_select(){
                var source_stored = query_hrhType();
                $(".editable_select").each(function(index) {
                    $('#'+this.id).editable({
                        name : this.id,
                        type: 'select2',
                        source: source_stored,
                        select2: {
                            width: 300
                        },
                        success: function(data, value) {
                            var id = this.id.split('pId')[1].split('column')[0];
                            var column = this.id.split('pId')[1].split('column')[1];
                            var json = {
                                "column": column,
                                "id": id,
                                'value': value
                            };
                            var url = "<?php echo asset('updateProvince'); ?>";
                            $.post(url,json,function(result){
                                console.log(result);
                            });
                        },
                        error: function(errors) {
                            alert('slow internet connection..');
                        }
                    });
                });
            }


        });
        @endif
    </script>
@endsection