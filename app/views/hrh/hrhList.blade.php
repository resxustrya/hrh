@extends('layouts.app')
@section('content')
    <div class="page-content">
        <div class="page-header">
            <h1>
                HRH LIST
            </h1>
        </div><!-- /.page-header -->
        <div class="space-10"></div>
        @if(isset($users) and count($users) > 0)
        <div class="clearfix">
            <ul class="nav nav-tabs padding-18" id="myTab">
                <?php
                    $statusCount = 0;
                    $counter = 0;
                    $color = ['blue','orange','green','red','purple'];
                    $badge = ['primary','warning','success','danger','purple'];
                ?>
                @foreach($employee_status as $status)
                <?php $statusCount++; ?>
                <li class="@if($statusCount == 1){{ 'active' }}@endif">
                    <a data-toggle="tab" class="m-tab" href="#{{ $status->id }}">
                        <i class="{{ $color[$counter] }} ace-icon fa fa-question-circle bigger-120"></i>
                        {{ $status->description }}
                        <span class="badge badge-{{ $badge[$counter] }} badge-{{ $statusCount }}">{{ $user_count[$status->id] }}</span>
                        <?php
                            $counter++;
                            if($counter >= 5) $counter = 0;
                        ?>
                    </a>
                </li>
                @endforeach
            </ul>
        </div>
        <div class="space-20"></div>
        <form id="searchForm">
            <div class="row">
                <form action="" id="searchForm">
                    <div class="col-xs-12 col-md-6">
                        <label class="block clearfix">
                            <span class="block input-icon input-icon-right">
                                <input type="text" class="form-control" value="{{ Session::get('keyword') }}" id="search" name="keyword" placeholder="Search municipality..." autofocus/>
                                <i class="ace-icon fa fa-search icon-on-right bigger-110"></i>
                            </span>
                        </label>
                    </div>
                    <div class="col-xs-12 col-md-6">
                        <button type="submit" class="btn btn-sm btn-primary"><i class="ace-icon fa fa-search icon-on-right bigger-110"></i> Search</button>
                    </div>
                </form>
            </div>
        </form>
        <div class="space-10"></div>

        <div class="tab-content no-border no-padding">
            <?php $statusCount = 0; ?>
            @foreach($employee_status as $status)
            <?php $statusCount++; ?>
            <div id="{{ $status->id }}" class="tab-pane fade @if($statusCount == 1){{ 'in active' }}@endif">
                <div class="posts_{{ $status->id }}">
                    <div class="row">
                        <div class="col-xs-12">
                            @include('hrh.hrhPagination')
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        @else
            <div class="alert alert-danger" role="alert">HRH records are empty.</div>
        @endif
    </div><!-- PAGE CONTENT ENDS -->

@endsection
@section('js')
    <script type="text/javascript">
        @if(isset($users) and count($users) > 0)
        jQuery(function($) {

            $("#searchForm").submit(function(e) {
                keyword = $("input[name='keyword']").val();
                getPosts(1,keyword);
                this.focus();
                return false;
            });

            $("a[href='#document_form']").on('click',function(){
                $('.modal-content').html(loadingState);
                var url = $(this).data('link');
                console.log(url);
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

            //global variable
            var keyword = '';
            var type = "<?php echo $employee_status[0]->id; ?>";

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
                        return index < 15;
                    });
                }
            });

            var users = [];
            $.each(<?php echo $users_select; ?>,function(x,data){
                users.push({ label:data.fname+" "+data.lname+", "+data.mname , id:data.id });
            });

            $( "#search" ).catcomplete({
                delay: 0,
                source: users,
                select: function(e, ui) {
                    keyword = ui.item.value;
                    getPosts(1,keyword);
                }
            });

            /*$("input[name='keyword']").on("keyup",function(e){
                console.log(this);
                this.focus();
                e.preventDefault();
                if(e.keyCode >= 48 && e.keyCode <= 90 || e.keyCode == 8){
                    keyword = $("input[name='keyword']").val();
                    getPosts(1,keyword);
                }
            });*/

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
                $(document).on('click', '.pagination a', function (e) {
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
                    location.hash = page;
                    setTimeout(function(){
                        $.each(<?php echo $employee_status; ?>,function(index){
                            $('.badge-'+index+1).html(data.user_count[index+1]);
                        });
                        $('.posts_'+type).html(data.view);
                    },700);
                }).fail(function () {
                    alert('Posts could not be loaded.');
                });
            }

        });
        @endif
    </script>
@endsection