@extends('layouts.app')
@section('content')
<script type="text/javascript">
    try{ace.settings.loadState('main-container')}catch(e){}
</script>
<div class="main-content">
    <div class="main-content-inner">
        <div class="page-content">

            <div class="page-header">
                <h1>
                    User Profile Page
                    <small>
                        <i class="ace-icon fa fa-angle-double-right"></i>
                        3 styles with inline editable feature
                    </small>
                </h1>
            </div><!-- /.page-header -->

            <div class="row">
                <div class="col-xs-12">
                    <!-- PAGE CONTENT BEGINS -->

                    <ul class="nav nav-tabs padding-18">
                        <li class="active">
                            <a data-toggle="tab" href="#home">
                                <i class="green ace-icon fa fa-user bigger-120"></i>
                                Personal Information
                            </a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#feed">
                                <i class="orange ace-icon fa fa-rss bigger-120"></i>
                                Family Background
                            </a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#friends">
                                <i class="blue ace-icon fa fa-users bigger-120"></i>
                                Educational Background
                            </a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#pictures">
                                <i class="pink ace-icon fa fa-picture-o bigger-120"></i>
                                Civil Service Eligibility
                            </a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#pictures">
                                <i class="red ace-icon fa fa-trash bigger-120"></i>
                                Work Experience
                            </a>
                        </li>
                    </ul>
                    <div class="hr dotted"></div>
                    <div>
                        <div id="user-profile-1" class="user-profile row">
                            <div class="col-xs-12 col-sm-3 center">
                                <div>
                                <span class="profile-picture">
                                    <img id="avatar" class="editable img-responsive" alt="Alex's Avatar" src="{{ asset('public/assets_ace/images/avatars/profile-pic.jpg') }}" />
                                </span>
                                    <div class="rating inline"></div>
                                    <div class="space-4"></div>
                                    <div class="width-80 label label-info label-xlg arrowed-in arrowed-in-right">
                                        <div class="inline position-relative">
                                            <a href="#" class="user-title-label dropdown-toggle" data-toggle="dropdown">
                                                <i class="ace-icon fa fa-circle light-green"></i>
                                                &nbsp;
                                                <span class="white">{{ Auth::user()->fname.' '.Auth::user()->lname }}</span>
                                            </a>

                                            <ul class="align-left dropdown-menu dropdown-caret dropdown-lighter">
                                                <li class="dropdown-header"> Change Status </li>

                                                <li>
                                                    <a href="#">
                                                        <i class="ace-icon fa fa-circle green"></i>
                                                        &nbsp;
                                                        <span class="green">Available</span>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="#">
                                                        <i class="ace-icon fa fa-circle red"></i>
                                                        &nbsp;
                                                        <span class="red">Busy</span>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="#">
                                                        <i class="ace-icon fa fa-circle grey"></i>
                                                        &nbsp;
                                                        <span class="grey">Invisible</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="space-6"></div>
                                <div class="profile-contact-info">
                                    <div class="profile-contact-links align-left">
                                        <a href="#" class="btn btn-link">
                                            <i class="ace-icon fa fa-plus-circle bigger-120 green"></i>
                                            Add as a friend
                                        </a>
                                        <a href="#" class="btn btn-link">
                                            <i class="ace-icon fa fa-envelope bigger-120 pink"></i>
                                            Send a message
                                        </a>
                                        <a href="#" class="btn btn-link">
                                            <i class="ace-icon fa fa-globe bigger-125 blue"></i>
                                            www.alexdoe.com
                                        </a>
                                    </div>

                                    <div class="space-6"></div>

                                    <div class="profile-social-links align-center">
                                        <a href="#" class="tooltip-info" title="" data-original-title="Visit my Facebook">
                                            <i class="middle ace-icon fa fa-facebook-square fa-2x blue"></i>
                                        </a>

                                        <a href="#" class="tooltip-info" title="" data-original-title="Visit my Twitter">
                                            <i class="middle ace-icon fa fa-twitter-square fa-2x light-blue"></i>
                                        </a>

                                        <a href="#" class="tooltip-error" title="" data-original-title="Visit my Pinterest">
                                            <i class="middle ace-icon fa fa-pinterest-square fa-2x red"></i>
                                        </a>
                                    </div>
                                </div>

                                <div class="hr hr12 dotted"></div>

                                <div class="clearfix">
                                    <div class="grid2">
                                        <span class="bigger-175 blue">25</span>

                                        <br />
                                        Followers
                                    </div>

                                    <div class="grid2">
                                        <span class="bigger-175 blue">12</span>

                                        <br />
                                        Following
                                    </div>
                                </div>

                                <div class="hr hr16 dotted"></div>
                            </div>

                            <div class="col-xs-12 col-sm-9">
                                <div id="user-profile-2" class="user-profile">
                                    <div class="tabbable">
                                        <div class="tab-content no-border padding-5">
                                            <div id="home" class="tab-pane in active">
                                                <div class="row">
                                                    <div class="col-xs-12">
                                                        <h3 class="lighter block green">Personal Information</h3>

                                                        <div class="profile-user-info">
                                                            <div class="profile-user-info profile-user-info-striped">
                                                                <div class="profile-info-row">
                                                                    <div class="profile-info-name">HRH_TYPE</div>
                                                                    <div class="profile-info-value">
                                                                        <span class="editable" id="hrh_type">{{ hrhController::hrh_type(Auth::user()->hrh_type)->description }}</span>
                                                                    </div>
                                                                </div>

                                                                <div class="profile-info-row">
                                                                    <div class="profile-info-name"> Location </div>

                                                                    <div class="profile-info-value">
                                                                        <i class="fa fa-map-marker light-orange bigger-110"></i>
                                                                        <span class="editable" id="country">Netherlands</span>
                                                                        <span class="editable" id="city">Amsterdam</span>
                                                                    </div>
                                                                </div>

                                                                <div class="profile-info-row">
                                                                    <div class="profile-info-name"> Age </div>

                                                                    <div class="profile-info-value">
                                                                        <span class="editable" id="age">38</span>
                                                                    </div>
                                                                </div>

                                                                <div class="profile-info-row">
                                                                    <div class="profile-info-name"> Joined </div>

                                                                    <div class="profile-info-value">
                                                                        <span class="editable" id="signup">2010/06/20</span>
                                                                    </div>
                                                                </div>

                                                                <div class="profile-info-row">
                                                                    <div class="profile-info-name"> Last Online </div>

                                                                    <div class="profile-info-value">
                                                                        <span class="editable" id="login">3 hours ago</span>
                                                                    </div>
                                                                </div>

                                                                <div class="profile-info-row">
                                                                    <div class="profile-info-name"> About Me </div>

                                                                    <div class="profile-info-value">
                                                                        <span class="editable" id="about">Editable as WYSIWYG</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="hr hr-8 dotted"></div>

                                                        <div class="profile-user-info">
                                                            <div class="profile-info-row">
                                                                <div class="profile-info-name"> Website </div>

                                                                <div class="profile-info-value">
                                                                    <a href="#" target="_blank">www.alexdoe.com</a>
                                                                </div>
                                                            </div>

                                                            <div class="profile-info-row">
                                                                <div class="profile-info-name">
                                                                    <i class="middle ace-icon fa fa-facebook-square bigger-150 blue"></i>
                                                                </div>

                                                                <div class="profile-info-value">
                                                                    <a href="#">Find me on Facebook</a>
                                                                </div>
                                                            </div>

                                                            <div class="profile-info-row">
                                                                <div class="profile-info-name">
                                                                    <i class="middle ace-icon fa fa-twitter-square bigger-150 light-blue"></i>
                                                                </div>

                                                                <div class="profile-info-value">
                                                                    <a href="#">Follow me on Twitter</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><!-- /.col -->
                                                </div><!-- /.row -->

                                                <div class="space-20"></div>

                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-6">
                                                        <div class="widget-box transparent">
                                                            <div class="widget-header widget-header-small">
                                                                <h4 class="widget-title smaller">
                                                                    <i class="ace-icon fa fa-check-square-o bigger-110"></i>
                                                                    Little About Me
                                                                </h4>
                                                            </div>

                                                            <div class="widget-body">
                                                                <div class="widget-main">
                                                                    <p>
                                                                        My job is mostly lorem ipsuming and dolor sit ameting as long as consectetur adipiscing elit.
                                                                    </p>
                                                                    <p>
                                                                        Sometimes quisque commodo massa gets in the way and sed ipsum porttitor facilisis.
                                                                    </p>
                                                                    <p>
                                                                        The best thing about my job is that vestibulum id ligula porta felis euismod and nullam quis risus eget urna mollis ornare.
                                                                    </p>
                                                                    <p>
                                                                        Thanks for visiting my profile.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-xs-12 col-sm-6">
                                                        <div class="widget-box transparent">
                                                            <div class="widget-header widget-header-small header-color-blue2">
                                                                <h4 class="widget-title smaller">
                                                                    <i class="ace-icon fa fa-lightbulb-o bigger-120"></i>
                                                                    My Skills
                                                                </h4>
                                                            </div>

                                                            <div class="widget-body">
                                                                <div class="widget-main padding-16">
                                                                    <div class="clearfix">
                                                                        <div class="grid3 center">
                                                                            <div class="easy-pie-chart percentage" data-percent="45" data-color="#CA5952">
                                                                                <span class="percent">45</span>%
                                                                            </div>

                                                                            <div class="space-2"></div>
                                                                            Graphic Design
                                                                        </div>

                                                                        <div class="grid3 center">
                                                                            <div class="center easy-pie-chart percentage" data-percent="90" data-color="#59A84B">
                                                                                <span class="percent">90</span>%
                                                                            </div>

                                                                            <div class="space-2"></div>
                                                                            HTML5 & CSS3
                                                                        </div>

                                                                        <div class="grid3 center">
                                                                            <div class="center easy-pie-chart percentage" data-percent="80" data-color="#9585BF">
                                                                                <span class="percent">80</span>%
                                                                            </div>

                                                                            <div class="space-2"></div>
                                                                            Javascript/jQuery
                                                                        </div>
                                                                    </div>

                                                                    <div class="hr hr-16"></div>

                                                                    <div class="profile-skills">
                                                                        <div class="progress">
                                                                            <div class="progress-bar" style="width:80%">
                                                                                <span class="pull-left">HTML5 & CSS3</span>
                                                                                <span class="pull-right">80%</span>
                                                                            </div>
                                                                        </div>

                                                                        <div class="progress">
                                                                            <div class="progress-bar progress-bar-success" style="width:72%">
                                                                                <span class="pull-left">Javascript & jQuery</span>

                                                                                <span class="pull-right">72%</span>
                                                                            </div>
                                                                        </div>

                                                                        <div class="progress">
                                                                            <div class="progress-bar progress-bar-purple" style="width:70%">
                                                                                <span class="pull-left">PHP & MySQL</span>

                                                                                <span class="pull-right">70%</span>
                                                                            </div>
                                                                        </div>

                                                                        <div class="progress">
                                                                            <div class="progress-bar progress-bar-warning" style="width:50%">
                                                                                <span class="pull-left">Wordpress</span>

                                                                                <span class="pull-right">50%</span>
                                                                            </div>
                                                                        </div>

                                                                        <div class="progress">
                                                                            <div class="progress-bar progress-bar-danger" style="width:38%">
                                                                                <span class="pull-left">Photoshop</span>

                                                                                <span class="pull-right">38%</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- /#home -->

                                            <div id="feed" class="tab-pane">
                                                <div class="profile-feed row">
                                                    <div class="col-sm-6">
                                                        <div class="profile-activity clearfix">
                                                            <div>
                                                                <img class="pull-left" alt="Alex Doe's avatar" src="{{ asset('public/assets_ace/images/avatars/avatar5.png') }}" />
                                                                <a class="user" href="#"> Alex Doe </a>
                                                                changed his profile photo.
                                                                <a href="#">Take a look</a>

                                                                <div class="time">
                                                                    <i class="ace-icon fa fa-clock-o bigger-110"></i>
                                                                    an hour ago
                                                                </div>
                                                            </div>

                                                            <div class="tools action-buttons">
                                                                <a href="#" class="blue">
                                                                    <i class="ace-icon fa fa-pencil bigger-125"></i>
                                                                </a>

                                                                <a href="#" class="red">
                                                                    <i class="ace-icon fa fa-times bigger-125"></i>
                                                                </a>
                                                            </div>
                                                        </div>

                                                        <div class="profile-activity clearfix">
                                                            <div>
                                                                <img class="pull-left" alt="Susan Smith's avatar" src="{{ asset('public/assets_ace/images/avatars/avatar1.png') }}" />
                                                                <a class="user" href="#"> Susan Smith </a>

                                                                is now friends with Alex Doe.
                                                                <div class="time">
                                                                    <i class="ace-icon fa fa-clock-o bigger-110"></i>
                                                                    2 hours ago
                                                                </div>
                                                            </div>

                                                            <div class="tools action-buttons">
                                                                <a href="#" class="blue">
                                                                    <i class="ace-icon fa fa-pencil bigger-125"></i>
                                                                </a>

                                                                <a href="#" class="red">
                                                                    <i class="ace-icon fa fa-times bigger-125"></i>
                                                                </a>
                                                            </div>
                                                        </div>

                                                        <div class="profile-activity clearfix">
                                                            <div>
                                                                <i class="pull-left thumbicon fa fa-check btn-success no-hover"></i>
                                                                <a class="user" href="#"> Alex Doe </a>
                                                                joined
                                                                <a href="#">Country Music</a>

                                                                group.
                                                                <div class="time">
                                                                    <i class="ace-icon fa fa-clock-o bigger-110"></i>
                                                                    5 hours ago
                                                                </div>
                                                            </div>

                                                            <div class="tools action-buttons">
                                                                <a href="#" class="blue">
                                                                    <i class="ace-icon fa fa-pencil bigger-125"></i>
                                                                </a>

                                                                <a href="#" class="red">
                                                                    <i class="ace-icon fa fa-times bigger-125"></i>
                                                                </a>
                                                            </div>
                                                        </div>

                                                        <div class="profile-activity clearfix">
                                                            <div>
                                                                <i class="pull-left thumbicon fa fa-picture-o btn-info no-hover"></i>
                                                                <a class="user" href="#"> Alex Doe </a>
                                                                uploaded a new photo.
                                                                <a href="#">Take a look</a>

                                                                <div class="time">
                                                                    <i class="ace-icon fa fa-clock-o bigger-110"></i>
                                                                    5 hours ago
                                                                </div>
                                                            </div>

                                                            <div class="tools action-buttons">
                                                                <a href="#" class="blue">
                                                                    <i class="ace-icon fa fa-pencil bigger-125"></i>
                                                                </a>

                                                                <a href="#" class="red">
                                                                    <i class="ace-icon fa fa-times bigger-125"></i>
                                                                </a>
                                                            </div>
                                                        </div>

                                                        <div class="profile-activity clearfix">
                                                            <div>
                                                                <img class="pull-left" alt="David Palms's avatar" src="{{ asset('public/assets_ace/images/avatars/avatar4.png') }}" />
                                                                <a class="user" href="#"> David Palms </a>

                                                                left a comment on Alex's wall.
                                                                <div class="time">
                                                                    <i class="ace-icon fa fa-clock-o bigger-110"></i>
                                                                    8 hours ago
                                                                </div>
                                                            </div>

                                                            <div class="tools action-buttons">
                                                                <a href="#" class="blue">
                                                                    <i class="ace-icon fa fa-pencil bigger-125"></i>
                                                                </a>

                                                                <a href="#" class="red">
                                                                    <i class="ace-icon fa fa-times bigger-125"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div><!-- /.col -->

                                                    <div class="col-sm-6">
                                                        <div class="profile-activity clearfix">
                                                            <div>
                                                                <i class="pull-left thumbicon fa fa-pencil-square-o btn-pink no-hover"></i>
                                                                <a class="user" href="#"> Alex Doe </a>
                                                                published a new blog post.
                                                                <a href="#">Read now</a>

                                                                <div class="time">
                                                                    <i class="ace-icon fa fa-clock-o bigger-110"></i>
                                                                    11 hours ago
                                                                </div>
                                                            </div>

                                                            <div class="tools action-buttons">
                                                                <a href="#" class="blue">
                                                                    <i class="ace-icon fa fa-pencil bigger-125"></i>
                                                                </a>

                                                                <a href="#" class="red">
                                                                    <i class="ace-icon fa fa-times bigger-125"></i>
                                                                </a>
                                                            </div>
                                                        </div>

                                                        <div class="profile-activity clearfix">
                                                            <div>
                                                                <img class="pull-left" alt="Alex Doe's avatar" src="{{ asset('public/assets_ace/images/avatars/avatar5.png') }}" />
                                                                <a class="user" href="#"> Alex Doe </a>

                                                                upgraded his skills.
                                                                <div class="time">
                                                                    <i class="ace-icon fa fa-clock-o bigger-110"></i>
                                                                    12 hours ago
                                                                </div>
                                                            </div>

                                                            <div class="tools action-buttons">
                                                                <a href="#" class="blue">
                                                                    <i class="ace-icon fa fa-pencil bigger-125"></i>
                                                                </a>

                                                                <a href="#" class="red">
                                                                    <i class="ace-icon fa fa-times bigger-125"></i>
                                                                </a>
                                                            </div>
                                                        </div>

                                                        <div class="profile-activity clearfix">
                                                            <div>
                                                                <i class="pull-left thumbicon fa fa-key btn-info no-hover"></i>
                                                                <a class="user" href="#"> Alex Doe </a>

                                                                logged in.
                                                                <div class="time">
                                                                    <i class="ace-icon fa fa-clock-o bigger-110"></i>
                                                                    12 hours ago
                                                                </div>
                                                            </div>

                                                            <div class="tools action-buttons">
                                                                <a href="#" class="blue">
                                                                    <i class="ace-icon fa fa-pencil bigger-125"></i>
                                                                </a>

                                                                <a href="#" class="red">
                                                                    <i class="ace-icon fa fa-times bigger-125"></i>
                                                                </a>
                                                            </div>
                                                        </div>

                                                        <div class="profile-activity clearfix">
                                                            <div>
                                                                <i class="pull-left thumbicon fa fa-power-off btn-inverse no-hover"></i>
                                                                <a class="user" href="#"> Alex Doe </a>

                                                                logged out.
                                                                <div class="time">
                                                                    <i class="ace-icon fa fa-clock-o bigger-110"></i>
                                                                    16 hours ago
                                                                </div>
                                                            </div>

                                                            <div class="tools action-buttons">
                                                                <a href="#" class="blue">
                                                                    <i class="ace-icon fa fa-pencil bigger-125"></i>
                                                                </a>

                                                                <a href="#" class="red">
                                                                    <i class="ace-icon fa fa-times bigger-125"></i>
                                                                </a>
                                                            </div>
                                                        </div>

                                                        <div class="profile-activity clearfix">
                                                            <div>
                                                                <i class="pull-left thumbicon fa fa-key btn-info no-hover"></i>
                                                                <a class="user" href="#"> Alex Doe </a>

                                                                logged in.
                                                                <div class="time">
                                                                    <i class="ace-icon fa fa-clock-o bigger-110"></i>
                                                                    16 hours ago
                                                                </div>
                                                            </div>

                                                            <div class="tools action-buttons">
                                                                <a href="#" class="blue">
                                                                    <i class="ace-icon fa fa-pencil bigger-125"></i>
                                                                </a>

                                                                <a href="#" class="red">
                                                                    <i class="ace-icon fa fa-times bigger-125"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div><!-- /.col -->
                                                </div><!-- /.row -->

                                                <div class="space-12"></div>

                                                <div class="center">
                                                    <button type="button" class="btn btn-sm btn-primary btn-white btn-round">
                                                        <i class="ace-icon fa fa-rss bigger-150 middle orange2"></i>
                                                        <span class="bigger-110">View more activities</span>

                                                        <i class="icon-on-right ace-icon fa fa-arrow-right"></i>
                                                    </button>
                                                </div>
                                            </div><!-- /#feed -->

                                            <div id="friends" class="tab-pane">
                                                <div class="profile-users clearfix">
                                                    <div class="itemdiv memberdiv">
                                                        <div class="inline pos-rel">
                                                            <div class="user">
                                                                <a href="#">
                                                                    <img src="{{ asset('public/assets_ace/images/avatars/avatar4.png') }}" alt="Bob Doe's avatar" />
                                                                </a>
                                                            </div>

                                                            <div class="body">
                                                                <div class="name">
                                                                    <a href="#">
                                                                        <span class="user-status status-online"></span>
                                                                        Bob Doe
                                                                    </a>
                                                                </div>
                                                            </div>

                                                            <div class="popover">
                                                                <div class="arrow"></div>

                                                                <div class="popover-content">
                                                                    <div class="bolder">Content Editor</div>

                                                                    <div class="time">
                                                                        <i class="ace-icon fa fa-clock-o middle bigger-120 orange"></i>
                                                                        <span class="green"> 20 mins ago </span>
                                                                    </div>

                                                                    <div class="hr dotted hr-8"></div>

                                                                    <div class="tools action-buttons">
                                                                        <a href="#">
                                                                            <i class="ace-icon fa fa-facebook-square blue bigger-150"></i>
                                                                        </a>

                                                                        <a href="#">
                                                                            <i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
                                                                        </a>

                                                                        <a href="#">
                                                                            <i class="ace-icon fa fa-google-plus-square red bigger-150"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="itemdiv memberdiv">
                                                        <div class="inline pos-rel">
                                                            <div class="user">
                                                                <a href="#">
                                                                    <img src="{{ asset('public/assets_ace/images/avatars/avatar1.png') }}" alt="Rose Doe's avatar" />
                                                                </a>
                                                            </div>

                                                            <div class="body">
                                                                <div class="name">
                                                                    <a href="#">
                                                                        <span class="user-status status-offline"></span>
                                                                        Rose Doe
                                                                    </a>
                                                                </div>
                                                            </div>

                                                            <div class="popover">
                                                                <div class="arrow"></div>

                                                                <div class="popover-content">
                                                                    <div class="bolder">Graphic Designer</div>

                                                                    <div class="time">
                                                                        <i class="ace-icon fa fa-clock-o middle bigger-120 grey"></i>
                                                                        <span class="grey"> 30 min ago </span>
                                                                    </div>

                                                                    <div class="hr dotted hr-8"></div>

                                                                    <div class="tools action-buttons">
                                                                        <a href="#">
                                                                            <i class="ace-icon fa fa-facebook-square blue bigger-150"></i>
                                                                        </a>

                                                                        <a href="#">
                                                                            <i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
                                                                        </a>

                                                                        <a href="#">
                                                                            <i class="ace-icon fa fa-google-plus-square red bigger-150"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="itemdiv memberdiv">
                                                        <div class="inline pos-rel">
                                                            <div class="user">
                                                                <a href="#">
                                                                    <img src="{{ asset('public/assets_ace/images/avatars/avatar.png') }}" alt="Jim Doe's avatar" />
                                                                </a>
                                                            </div>

                                                            <div class="body">
                                                                <div class="name">
                                                                    <a href="#">
                                                                        <span class="user-status status-busy"></span>
                                                                        Jim Doe
                                                                    </a>
                                                                </div>
                                                            </div>

                                                            <div class="popover">
                                                                <div class="arrow"></div>

                                                                <div class="popover-content">
                                                                    <div class="bolder">SEO &amp; Advertising</div>

                                                                    <div class="time">
                                                                        <i class="ace-icon fa fa-clock-o middle bigger-120 red"></i>
                                                                        <span class="grey"> 1 hour ago </span>
                                                                    </div>

                                                                    <div class="hr dotted hr-8"></div>

                                                                    <div class="tools action-buttons">
                                                                        <a href="#">
                                                                            <i class="ace-icon fa fa-facebook-square blue bigger-150"></i>
                                                                        </a>

                                                                        <a href="#">
                                                                            <i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
                                                                        </a>

                                                                        <a href="#">
                                                                            <i class="ace-icon fa fa-google-plus-square red bigger-150"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="itemdiv memberdiv">
                                                        <div class="inline pos-rel">
                                                            <div class="user">
                                                                <a href="#">
                                                                    <img src="{{ asset('public/assets_ace/images/avatars/avatar5.png') }}" alt="Alex Doe's avatar" />
                                                                </a>
                                                            </div>

                                                            <div class="body">
                                                                <div class="name">
                                                                    <a href="#">
                                                                        <span class="user-status status-idle"></span>
                                                                        Alex Doe
                                                                    </a>
                                                                </div>
                                                            </div>

                                                            <div class="popover">
                                                                <div class="arrow"></div>

                                                                <div class="popover-content">
                                                                    <div class="bolder">Marketing</div>

                                                                    <div class="time">
                                                                        <i class="ace-icon fa fa-clock-o middle bigger-120 orange"></i>
                                                                        <span class=""> 40 minutes idle </span>
                                                                    </div>

                                                                    <div class="hr dotted hr-8"></div>

                                                                    <div class="tools action-buttons">
                                                                        <a href="#">
                                                                            <i class="ace-icon fa fa-facebook-square blue bigger-150"></i>
                                                                        </a>

                                                                        <a href="#">
                                                                            <i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
                                                                        </a>

                                                                        <a href="#">
                                                                            <i class="ace-icon fa fa-google-plus-square red bigger-150"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="itemdiv memberdiv">
                                                        <div class="inline pos-rel">
                                                            <div class="user">
                                                                <a href="#">
                                                                    <img src="{{ asset('public/assets_ace/images/avatars/avatar2.png') }}" alt="Phil Doe's avatar" />
                                                                </a>
                                                            </div>

                                                            <div class="body">
                                                                <div class="name">
                                                                    <a href="#">
                                                                        <span class="user-status status-online"></span>
                                                                        Phil Doe
                                                                    </a>
                                                                </div>
                                                            </div>

                                                            <div class="popover">
                                                                <div class="arrow"></div>

                                                                <div class="popover-content">
                                                                    <div class="bolder">Public Relations</div>

                                                                    <div class="time">
                                                                        <i class="ace-icon fa fa-clock-o middle bigger-120 orange"></i>
                                                                        <span class="green"> 2 hours ago </span>
                                                                    </div>

                                                                    <div class="hr dotted hr-8"></div>

                                                                    <div class="tools action-buttons">
                                                                        <a href="#">
                                                                            <i class="ace-icon fa fa-facebook-square blue bigger-150"></i>
                                                                        </a>

                                                                        <a href="#">
                                                                            <i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
                                                                        </a>

                                                                        <a href="#">
                                                                            <i class="ace-icon fa fa-google-plus-square red bigger-150"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="itemdiv memberdiv">
                                                        <div class="inline pos-rel">
                                                            <div class="user">
                                                                <a href="#">
                                                                    <img src="{{ asset('public/assets_ace/images/avatars/avatar3.png') }}" alt="Susan Doe's avatar" />
                                                                </a>
                                                            </div>

                                                            <div class="body">
                                                                <div class="name">
                                                                    <a href="#">
                                                                        <span class="user-status status-online"></span>
                                                                        Susan Doe
                                                                    </a>
                                                                </div>
                                                            </div>

                                                            <div class="popover">
                                                                <div class="arrow"></div>

                                                                <div class="popover-content">
                                                                    <div class="bolder">HR Management</div>

                                                                    <div class="time">
                                                                        <i class="ace-icon fa fa-clock-o middle bigger-120 orange"></i>
                                                                        <span class="green"> 20 mins ago </span>
                                                                    </div>

                                                                    <div class="hr dotted hr-8"></div>

                                                                    <div class="tools action-buttons">
                                                                        <a href="#">
                                                                            <i class="ace-icon fa fa-facebook-square blue bigger-150"></i>
                                                                        </a>

                                                                        <a href="#">
                                                                            <i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
                                                                        </a>

                                                                        <a href="#">
                                                                            <i class="ace-icon fa fa-google-plus-square red bigger-150"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="itemdiv memberdiv">
                                                        <div class="inline pos-rel">
                                                            <div class="user">
                                                                <a href="#">
                                                                    <img src="{{ asset('public/assets_ace/images/avatars/avatar1.png') }}" alt="Jennifer Doe's avatar" />
                                                                </a>
                                                            </div>

                                                            <div class="body">
                                                                <div class="name">
                                                                    <a href="#">
                                                                        <span class="user-status status-offline"></span>
                                                                        Jennifer Doe
                                                                    </a>
                                                                </div>
                                                            </div>

                                                            <div class="popover">
                                                                <div class="arrow"></div>

                                                                <div class="popover-content">
                                                                    <div class="bolder">Graphic Designer</div>

                                                                    <div class="time">
                                                                        <i class="ace-icon fa fa-clock-o middle bigger-120 grey"></i>
                                                                        <span class="grey"> 2 hours ago </span>
                                                                    </div>

                                                                    <div class="hr dotted hr-8"></div>

                                                                    <div class="tools action-buttons">
                                                                        <a href="#">
                                                                            <i class="ace-icon fa fa-facebook-square blue bigger-150"></i>
                                                                        </a>

                                                                        <a href="#">
                                                                            <i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
                                                                        </a>

                                                                        <a href="#">
                                                                            <i class="ace-icon fa fa-google-plus-square red bigger-150"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="itemdiv memberdiv">
                                                        <div class="inline pos-rel">
                                                            <div class="user">
                                                                <a href="#">
                                                                    <img src="{{ asset('public/assets_ace/images/avatars/avatar3.png') }}" alt="Alexa Doe's avatar" />
                                                                </a>
                                                            </div>

                                                            <div class="body">
                                                                <div class="name">
                                                                    <a href="#">
                                                                        <span class="user-status status-offline"></span>
                                                                        Alexa Doe
                                                                    </a>
                                                                </div>
                                                            </div>

                                                            <div class="popover">
                                                                <div class="arrow"></div>

                                                                <div class="popover-content">
                                                                    <div class="bolder">Accounting</div>

                                                                    <div class="time">
                                                                        <i class="ace-icon fa fa-clock-o middle bigger-120 grey"></i>
                                                                        <span class="grey"> 4 hours ago </span>
                                                                    </div>

                                                                    <div class="hr dotted hr-8"></div>

                                                                    <div class="tools action-buttons">
                                                                        <a href="#">
                                                                            <i class="ace-icon fa fa-facebook-square blue bigger-150"></i>
                                                                        </a>

                                                                        <a href="#">
                                                                            <i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
                                                                        </a>

                                                                        <a href="#">
                                                                            <i class="ace-icon fa fa-google-plus-square red bigger-150"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="hr hr10 hr-double"></div>

                                                <ul class="pager pull-right">
                                                    <li class="previous disabled">
                                                        <a href="#">&larr; Prev</a>
                                                    </li>

                                                    <li class="next">
                                                        <a href="#">Next &rarr;</a>
                                                    </li>
                                                </ul>
                                            </div><!-- /#friends -->

                                            <div id="pictures" class="tab-pane">
                                                <ul class="ace-thumbnails">
                                                    <li>
                                                        <a href="#" data-rel="colorbox">
                                                            <img alt="150x150" src="{{ asset('public/assets_ace/images/gallery/thumb-1.jpg') }}" />
                                                            <div class="text">
                                                                <div class="inner">Sample Caption on Hover</div>
                                                            </div>
                                                        </a>

                                                        <div class="tools tools-bottom">
                                                            <a href="#">
                                                                <i class="ace-icon fa fa-link"></i>
                                                            </a>

                                                            <a href="#">
                                                                <i class="ace-icon fa fa-paperclip"></i>
                                                            </a>

                                                            <a href="#">
                                                                <i class="ace-icon fa fa-pencil"></i>
                                                            </a>

                                                            <a href="#">
                                                                <i class="ace-icon fa fa-times red"></i>
                                                            </a>
                                                        </div>
                                                    </li>

                                                    <li>
                                                        <a href="#" data-rel="colorbox">
                                                            <img alt="150x150" src="assets/images/gallery/thumb-2.jpg" />
                                                            <div class="text">
                                                                <div class="inner">Sample Caption on Hover</div>
                                                            </div>
                                                        </a>

                                                        <div class="tools tools-bottom">
                                                            <a href="#">
                                                                <i class="ace-icon fa fa-link"></i>
                                                            </a>

                                                            <a href="#">
                                                                <i class="ace-icon fa fa-paperclip"></i>
                                                            </a>

                                                            <a href="#">
                                                                <i class="ace-icon fa fa-pencil"></i>
                                                            </a>

                                                            <a href="#">
                                                                <i class="ace-icon fa fa-times red"></i>
                                                            </a>
                                                        </div>
                                                    </li>

                                                    <li>
                                                        <a href="#" data-rel="colorbox">
                                                            <img alt="150x150" src="assets/images/gallery/thumb-3.jpg" />
                                                            <div class="text">
                                                                <div class="inner">Sample Caption on Hover</div>
                                                            </div>
                                                        </a>

                                                        <div class="tools tools-bottom">
                                                            <a href="#">
                                                                <i class="ace-icon fa fa-link"></i>
                                                            </a>

                                                            <a href="#">
                                                                <i class="ace-icon fa fa-paperclip"></i>
                                                            </a>

                                                            <a href="#">
                                                                <i class="ace-icon fa fa-pencil"></i>
                                                            </a>

                                                            <a href="#">
                                                                <i class="ace-icon fa fa-times red"></i>
                                                            </a>
                                                        </div>
                                                    </li>

                                                    <li>
                                                        <a href="#" data-rel="colorbox">
                                                            <img alt="150x150" src="assets/images/gallery/thumb-4.jpg" />
                                                            <div class="text">
                                                                <div class="inner">Sample Caption on Hover</div>
                                                            </div>
                                                        </a>

                                                        <div class="tools tools-bottom">
                                                            <a href="#">
                                                                <i class="ace-icon fa fa-link"></i>
                                                            </a>

                                                            <a href="#">
                                                                <i class="ace-icon fa fa-paperclip"></i>
                                                            </a>

                                                            <a href="#">
                                                                <i class="ace-icon fa fa-pencil"></i>
                                                            </a>

                                                            <a href="#">
                                                                <i class="ace-icon fa fa-times red"></i>
                                                            </a>
                                                        </div>
                                                    </li>

                                                    <li>
                                                        <a href="#" data-rel="colorbox">
                                                            <img alt="150x150" src="assets/images/gallery/thumb-5.jpg" />
                                                            <div class="text">
                                                                <div class="inner">Sample Caption on Hover</div>
                                                            </div>
                                                        </a>

                                                        <div class="tools tools-bottom">
                                                            <a href="#">
                                                                <i class="ace-icon fa fa-link"></i>
                                                            </a>

                                                            <a href="#">
                                                                <i class="ace-icon fa fa-paperclip"></i>
                                                            </a>

                                                            <a href="#">
                                                                <i class="ace-icon fa fa-pencil"></i>
                                                            </a>

                                                            <a href="#">
                                                                <i class="ace-icon fa fa-times red"></i>
                                                            </a>
                                                        </div>
                                                    </li>

                                                    <li>
                                                        <a href="#" data-rel="colorbox">
                                                            <img alt="150x150" src="assets/images/gallery/thumb-6.jpg" />
                                                            <div class="text">
                                                                <div class="inner">Sample Caption on Hover</div>
                                                            </div>
                                                        </a>

                                                        <div class="tools tools-bottom">
                                                            <a href="#">
                                                                <i class="ace-icon fa fa-link"></i>
                                                            </a>

                                                            <a href="#">
                                                                <i class="ace-icon fa fa-paperclip"></i>
                                                            </a>

                                                            <a href="#">
                                                                <i class="ace-icon fa fa-pencil"></i>
                                                            </a>

                                                            <a href="#">
                                                                <i class="ace-icon fa fa-times red"></i>
                                                            </a>
                                                        </div>
                                                    </li>

                                                    <li>
                                                        <a href="#" data-rel="colorbox">
                                                            <img alt="150x150" src="assets/images/gallery/thumb-1.jpg" />
                                                            <div class="text">
                                                                <div class="inner">Sample Caption on Hover</div>
                                                            </div>
                                                        </a>

                                                        <div class="tools tools-bottom">
                                                            <a href="#">
                                                                <i class="ace-icon fa fa-link"></i>
                                                            </a>

                                                            <a href="#">
                                                                <i class="ace-icon fa fa-paperclip"></i>
                                                            </a>

                                                            <a href="#">
                                                                <i class="ace-icon fa fa-pencil"></i>
                                                            </a>

                                                            <a href="#">
                                                                <i class="ace-icon fa fa-times red"></i>
                                                            </a>
                                                        </div>
                                                    </li>

                                                    <li>
                                                        <a href="#" data-rel="colorbox">
                                                            <img alt="150x150" src="assets/images/gallery/thumb-2.jpg" />
                                                            <div class="text">
                                                                <div class="inner">Sample Caption on Hover</div>
                                                            </div>
                                                        </a>

                                                        <div class="tools tools-bottom">
                                                            <a href="#">
                                                                <i class="ace-icon fa fa-link"></i>
                                                            </a>

                                                            <a href="#">
                                                                <i class="ace-icon fa fa-paperclip"></i>
                                                            </a>

                                                            <a href="#">
                                                                <i class="ace-icon fa fa-pencil"></i>
                                                            </a>

                                                            <a href="#">
                                                                <i class="ace-icon fa fa-times red"></i>
                                                            </a>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div><!-- /#pictures -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- PAGE CONTENT ENDS -->
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.page-content -->
    </div>
</div><!-- /.main-content -->
<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
    <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
</a>
@endsection
@section('js')

    <script>
        $('.rating').raty({
            'half': true,
            'starType' : 'i',
            'score' : 4
        });

        jQuery(function($) {

            //editables on first profile page
            $.fn.editable.defaults.mode = 'popup';
            $.fn.editableform.loading = "<div class='editableform-loading'><i class='ace-icon fa fa-spinner fa-spin fa-2x light-blue'></i></div>";
            $.fn.editableform.buttons = '<button type="submit" class="btn btn-info editable-submit"><i class="ace-icon fa fa-check"></i></button>'+
                    '<button type="button" class="btn editable-cancel"><i class="ace-icon fa fa-times"></i></button>';

            //editables
            //text editable


            /*$('#hrh_type')
                    .editable({
                        type: 'text',
                        name: 'hrh_type',
                        'width': 1000
                    });*/

            var hrhType = [];
            $.each(<?php echo $hrh_type; ?>, function(x, data) {
                hrhType.push({id: data.id, text: data.description});
            });

            $('#hrh_type').editable({
                name : 'hrh_type',
                type: 'select2',
                source: hrhType,
                select2: {
                    width: 200
                },
                success: function(data, config) {
                    console.log(config)
                },
                error: function(errors) {
                }
            });

            /*$('#hrh_type').editable({
                type: 'select2',
                url: '/ajax_test',
                pk: 1,
                onblur: 'submit',
                emptytext: 'None',
                select2: {
                    placeholder: 'Select a Requester',
                    allowClear: true,
                    width: '230px',
                    minimumInputLength: 3,
                    id: function (e) {
                        return e.EmployeeId;
                    },
                    ajax: {
                        url: '/ajax_test',
                        dataType: 'json',
                        data: function (term, page) {
                            return { query: term };
                        },
                        results: function (data, page) {
                            return { results: data };
                        }
                    },
                    formatResult: function (employee) {
                        return employee.EmployeeName;
                    },
                    formatSelection: function (employee) {
                        return employee.EmployeeName;
                    },
                    initSelection: function (element, callback) {
                        return $.get('/EmployeeLookupById', { query: element.val() }, function (data) {
                            callback(data);
                        }, 'json'); //added dataType
                    }
                }
                /!* suucess not needed
                 ,
                 success: function(response) {
                 $('#RequestUser').text(response.newVal);
                 }
                 *!/
            });*/


            //select2 editable
            var countries = [];
            $.each({ "CA": "Canada", "IN": "India", "NL": "Netherlands", "TR": "Turkey", "US": "United States"}, function(k, v) {
                countries.push({id: k, text: v});
            });

            var cities = [];
            cities["CA"] = [];
            $.each(["Toronto", "Ottawa", "Calgary", "Vancouver"] , function(k, v){
                cities["CA"].push({id: v, text: v});
            });
            cities["IN"] = [];
            $.each(["Delhi", "Mumbai", "Bangalore"] , function(k, v){
                cities["IN"].push({id: v, text: v});
            });
            cities["NL"] = [];
            $.each(["Amsterdam", "Rotterdam", "The Hague"] , function(k, v){
                cities["NL"].push({id: v, text: v});
            });
            cities["TR"] = [];
            $.each(["Ankara", "Istanbul", "Izmir"] , function(k, v){
                cities["TR"].push({id: v, text: v});
            });
            cities["US"] = [];
            $.each(["New York", "Miami", "Los Angeles", "Chicago", "Wysconsin"] , function(k, v){
                cities["US"].push({id: v, text: v});
            });

            var currentValue = "NL";
            $('#country').editable({
                type: 'select2',
                value : 'NL',
                //onblur:'ignore',
                source: countries,
                select2: {
                    'width': 140
                },
                success: function(response, newValue) {
                    if(currentValue == newValue) return;
                    currentValue = newValue;

                    var new_source = (!newValue || newValue == "") ? [] : cities[newValue];

                    //the destroy method is causing errors in x-editable v1.4.6+
                    //it worked fine in v1.4.5
                    /**
                     $('#city').editable('destroy').editable({
							type: 'select2',
							source: new_source
						}).editable('setValue', null);
                     */

                    //so we remove it altogether and create a new element
                    var city = $('#city').removeAttr('id').get(0);
                    $(city).clone().attr('id', 'city').text('Select City').editable({
                        type: 'select2',
                        value : null,
                        //onblur:'ignore',
                        source: new_source,
                        select2: {
                            'width': 140
                        }
                    }).insertAfter(city);//insert it after previous instance
                    $(city).remove();//remove previous instance

                }
            });

            $('#city').editable({
                type: 'select2',
                value : 'Amsterdam',
                //onblur:'ignore',
                source: cities[currentValue],
                select2: {
                    'width': 140
                }
            });



            //custom date editable
            $('#signup').editable({
                type: 'adate',
                date: {
                    //datepicker plugin options
                    format: 'yyyy/mm/dd',
                    viewformat: 'yyyy/mm/dd',
                    weekStart: 1

                    //,nativeUI: true//if true and browser support input[type=date], native browser control will be used
                    //,format: 'yyyy-mm-dd',
                    //viewformat: 'yyyy-mm-dd'
                }
            })

            $('#age').editable({
                type: 'spinner',
                name : 'age',
                spinner : {
                    min : 16,
                    max : 99,
                    step: 1,
                    on_sides: true
                    //,nativeUI: true//if true and browser support input[type=number], native browser control will be used
                }
            });


            $('#login').editable({
                type: 'slider',
                name : 'login',

                slider : {
                    min : 1,
                    max: 50,
                    width: 100
                    //,nativeUI: true//if true and browser support input[type=range], native browser control will be used
                },
                success: function(response, newValue) {
                    if(parseInt(newValue) == 1)
                        $(this).html(newValue + " hour ago");
                    else $(this).html(newValue + " hours ago");
                }
            });

            $('#about').editable({
                mode: 'inline',
                type: 'wysiwyg',
                name : 'about',

                wysiwyg : {
                    //css : {'max-width':'300px'}
                },
                success: function(response, newValue) {
                }
            });



            // *** editable avatar *** //
            try {//ie8 throws some harmless exceptions, so let's catch'em

                //first let's add a fake appendChild method for Image element for browsers that have a problem with this
                //because editable plugin calls appendChild, and it causes errors on IE at unpredicted points
                try {
                    document.createElement('IMG').appendChild(document.createElement('B'));
                } catch(e) {
                    Image.prototype.appendChild = function(el){}
                }

                var last_gritter
                $('#avatar').editable({
                    type: 'image',
                    name: 'avatar',
                    value: null,
                    //onblur: 'ignore',  //don't reset or hide editable onblur?!
                    image: {
                        //specify ace file input plugin's options here
                        btn_choose: 'Change Avatar',
                        droppable: true,
                        maxSize: 110000,//~100Kb

                        //and a few extra ones here
                        name: 'avatar',//put the field name here as well, will be used inside the custom plugin
                        on_error : function(error_type) {//on_error function will be called when the selected file has a problem
                            if(last_gritter) $.gritter.remove(last_gritter);
                            if(error_type == 1) {//file format error
                                last_gritter = $.gritter.add({
                                    title: 'File is not an image!',
                                    text: 'Please choose a jpg|gif|png image!',
                                    class_name: 'gritter-error gritter-center'
                                });
                            } else if(error_type == 2) {//file size rror
                                last_gritter = $.gritter.add({
                                    title: 'File too big!',
                                    text: 'Image size should not exceed 100Kb!',
                                    class_name: 'gritter-error gritter-center'
                                });
                            }
                            else {//other error
                            }
                        },
                        on_success : function() {
                            $.gritter.removeAll();
                        }
                    },
                    url: function(params) {
                        // ***UPDATE AVATAR HERE*** //
                        //for a working upload example you can replace the contents of this function with
                        //examples/profile-avatar-update.js

                        var deferred = new $.Deferred

                        var value = $('#avatar').next().find('input[type=hidden]:eq(0)').val();
                        if(!value || value.length == 0) {
                            deferred.resolve();
                            return deferred.promise();
                        }


                        //dummy upload
                        setTimeout(function(){
                            if("FileReader" in window) {
                                //for browsers that have a thumbnail of selected image
                                var thumb = $('#avatar').next().find('img').data('thumb');
                                if(thumb) $('#avatar').get(0).src = thumb;
                            }

                            deferred.resolve({'status':'OK'});

                            if(last_gritter) $.gritter.remove(last_gritter);
                            last_gritter = $.gritter.add({
                                title: 'Avatar Updated!',
                                text: 'Uploading to server can be easily implemented. A working example is included with the template.',
                                class_name: 'gritter-info gritter-center'
                            });

                        } , parseInt(Math.random() * 800 + 800))

                        return deferred.promise();

                        // ***END OF UPDATE AVATAR HERE*** //
                    },

                    success: function(response, newValue) {
                    }
                })
            }catch(e) {}

            /**
             //let's display edit mode by default?
             var blank_image = true;//somehow you determine if image is initially blank or not, or you just want to display file input at first
             if(blank_image) {
					$('#avatar').editable('show').on('hidden', function(e, reason) {
						if(reason == 'onblur') {
							$('#avatar').editable('show');
							return;
						}
						$('#avatar').off('hidden');
					})
				}
             */

                //another option is using modals
            $('#avatar2').on('click', function(){
                var modal =
                        '<div class="modal fade">\
                          <div class="modal-dialog">\
                           <div class="modal-content">\
                            <div class="modal-header">\
                                <button type="button" class="close" data-dismiss="modal">&times;</button>\
                                <h4 class="blue">Change Avatar</h4>\
                            </div>\
                            \
                            <form class="no-margin">\
                             <div class="modal-body">\
                                <div class="space-4"></div>\
                                <div style="width:75%;margin-left:12%;"><input type="file" name="file-input" /></div>\
                             </div>\
                            \
                             <div class="modal-footer center">\
                                <button type="submit" class="btn btn-sm btn-success"><i class="ace-icon fa fa-check"></i> Submit</button>\
                                <button type="button" class="btn btn-sm" data-dismiss="modal"><i class="ace-icon fa fa-times"></i> Cancel</button>\
                             </div>\
                            </form>\
                          </div>\
                         </div>\
                        </div>';


                var modal = $(modal);
                modal.modal("show").on("hidden", function(){
                    modal.remove();
                });

                var working = false;

                var form = modal.find('form:eq(0)');
                var file = form.find('input[type=file]').eq(0);
                file.ace_file_input({
                    style:'well',
                    btn_choose:'Click to choose new avatar',
                    btn_change:null,
                    no_icon:'ace-icon fa fa-picture-o',
                    thumbnail:'small',
                    before_remove: function() {
                        //don't remove/reset files while being uploaded
                        return !working;
                    },
                    allowExt: ['jpg', 'jpeg', 'png', 'gif'],
                    allowMime: ['image/jpg', 'image/jpeg', 'image/png', 'image/gif']
                });

                form.on('submit', function(){
                    if(!file.data('ace_input_files')) return false;

                    file.ace_file_input('disable');
                    form.find('button').attr('disabled', 'disabled');
                    form.find('.modal-body').append("<div class='center'><i class='ace-icon fa fa-spinner fa-spin bigger-150 orange'></i></div>");

                    var deferred = new $.Deferred;
                    working = true;
                    deferred.done(function() {
                        form.find('button').removeAttr('disabled');
                        form.find('input[type=file]').ace_file_input('enable');
                        form.find('.modal-body > :last-child').remove();

                        modal.modal("hide");

                        var thumb = file.next().find('img').data('thumb');
                        if(thumb) $('#avatar2').get(0).src = thumb;

                        working = false;
                    });


                    setTimeout(function(){
                        deferred.resolve();
                    } , parseInt(Math.random() * 800 + 800));

                    return false;
                });

            });



            //////////////////////////////
            $('#profile-feed-1').ace_scroll({
                height: '250px',
                mouseWheelLock: true,
                alwaysVisible : true
            });

            $('a[ data-original-title]').tooltip();

            $('.easy-pie-chart.percentage').each(function(){
                var barColor = $(this).data('color') || '#555';
                var trackColor = '#E2E2E2';
                var size = parseInt($(this).data('size')) || 72;
                $(this).easyPieChart({
                    barColor: barColor,
                    trackColor: trackColor,
                    scaleColor: false,
                    lineCap: 'butt',
                    lineWidth: parseInt(size/10),
                    animate:false,
                    size: size
                }).css('color', barColor);
            });

            ///////////////////////////////////////////

            //right & left position
            //show the user info on right or left depending on its position
            $('#user-profile-2 .memberdiv').on('mouseenter touchstart', function(){
                var $this = $(this);
                var $parent = $this.closest('.tab-pane');

                var off1 = $parent.offset();
                var w1 = $parent.width();

                var off2 = $this.offset();
                var w2 = $this.width();

                var place = 'left';
                if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) place = 'right';

                $this.find('.popover').removeClass('right left').addClass(place);
            }).on('click', function(e) {
                e.preventDefault();
            });


            ///////////////////////////////////////////
            $('#user-profile-3')
                    .find('input[type=file]').ace_file_input({
                        style:'well',
                        btn_choose:'Change avatar',
                        btn_change:null,
                        no_icon:'ace-icon fa fa-picture-o',
                        thumbnail:'large',
                        droppable:true,

                        allowExt: ['jpg', 'jpeg', 'png', 'gif'],
                        allowMime: ['image/jpg', 'image/jpeg', 'image/png', 'image/gif']
                    })
                    .end().find('button[type=reset]').on(ace.click_event, function(){
                        $('#user-profile-3 input[type=file]').ace_file_input('reset_input');
                    })
                    .end().find('.date-picker').datepicker().next().on(ace.click_event, function(){
                $(this).prev().focus();
            })
            $('.input-mask-phone').mask('(999) 999-9999');

            $('#user-profile-3').find('input[type=file]').ace_file_input('show_file_list', [{type: 'image', name: $('#avatar').attr('src')}]);


            ////////////////////
            //change profile
            $('[data-toggle="buttons"] .btn').on('click', function(e){
                var target = $(this).find('input[type=radio]');
                var which = parseInt(target.val());
                $('.user-profile').parent().addClass('hide');
                $('#user-profile-'+which).parent().removeClass('hide');
            });



            /////////////////////////////////////
            $(document).one('ajaxloadstart.page', function(e) {
                //in ajax mode, remove remaining elements before leaving page
                try {
                    $('.editable').editable('destroy');
                } catch(e) {}
                $('[class*=select2]').remove();
            });
        });

    </script>

@endsection

