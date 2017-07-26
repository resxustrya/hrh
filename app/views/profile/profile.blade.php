@extends('layouts.app')
@section('content')
<style>
    .profile-info-name{
        font-size: 8pt;
    }
    th,input{
        font-size: 7pt;
    }
    input[type="text"] {
        font-size:11px;
    }
</style>
<script type="text/javascript">
    try{ace.settings.loadState('main-container')}catch(e){}
</script>
<div class="main-content">
    <div class="main-content-inner">
        <div class="page-content">

            <div class="page-header">
                <h1>
                    User Profile Page
                </h1>
            </div><!-- /.page-header -->

            <div class="row">
                <div class="col-xs-12">
                    <!-- PAGE CONTENT BEGINS -->
                    <ul class="nav nav-tabs padding-18">
                        <li class="active">
                            <a data-toggle="tab" href="#personal_information">
                                <i class="green ace-icon fa fa-user bigger-120"></i>
                                Personal Information
                            </a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#family_background">
                                <i class="orange ace-icon fa fa-rss bigger-120"></i>
                                Family Background
                            </a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#educational_background">
                                <i class="blue ace-icon fa fa-users bigger-120"></i>
                                Educational Background
                            </a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#service_eligibility">
                                <i class="pink ace-icon fa fa-picture-o bigger-120"></i>
                                Civil Service Eligibility
                            </a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#work_experience">
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
                                                        <span class="green">HIRED</span>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="#">
                                                        <i class="ace-icon fa fa-circle red"></i>
                                                        &nbsp;
                                                        <span class="red">REHIRED</span>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="#">
                                                        <i class="ace-icon fa fa-circle grey"></i>
                                                        &nbsp;
                                                        <span class="grey">NEW</span>
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
                                            HIRED
                                        </a>
                                        <a href="#" class="btn btn-link">
                                            <i class="ace-icon fa fa-envelope bigger-120 pink"></i>
                                            Send a message
                                        </a>
                                        <a href="#" class="btn btn-link">
                                            <i class="ace-icon fa fa-globe bigger-125 blue"></i>
                                            www.ro7.doh.gov.ph
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

                                <div class="space-4"></div>

                                <div class="clearfix">
                                    <div class="widget-box transparent">
                                        <div class="widget-header widget-header-small header-color-blue2">
                                            <h4 class="widget-title smaller">
                                                <i class="ace-icon fa fa-lightbulb-o bigger-120"></i>
                                                My Skills
                                            </h4>
                                        </div>

                                        <div class="widget-body">
                                            <div class="widget-main padding-16">
                                                <div class="profile-skills">
                                                    <div class="progress">
                                                        <div class="progress-bar" style="width:90%">
                                                            <span class="pull-left">Plastic Surgery</span>
                                                            <span class="pull-right">90%</span>
                                                        </div>
                                                    </div>

                                                    <div class="progress">
                                                        <div class="progress-bar progress-bar-success" style="width:72%">
                                                            <span class="pull-left">Triaging Patients</span>

                                                            <span class="pull-right">72%</span>
                                                        </div>
                                                    </div>

                                                    <div class="progress">
                                                        <div class="progress-bar progress-bar-purple" style="width:70%">
                                                            <span class="pull-left">Performing CPR</span>

                                                            <span class="pull-right">70%</span>
                                                        </div>
                                                    </div>

                                                    <div class="progress">
                                                        <div class="progress-bar progress-bar-warning" style="width:60%">
                                                            <span class="pull-left">EKGs</span>

                                                            <span class="pull-right">60%</span>
                                                        </div>
                                                    </div>

                                                    <div class="progress">
                                                        <div class="progress-bar progress-bar-danger" style="width:50%">
                                                            <span class="pull-left">Blood</span>

                                                            <span class="pull-right">50%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="hr hr16 dotted"></div>
                            </div>

                            <div class="col-xs-12 col-sm-9">
                                <div id="user-profile-2" class="user-profile">
                                    <div class="tabbable">
                                        <div class="tab-content no-border padding-5">
                                            <div id="personal_information" class="tab-pane in active">
                                                <div class="row">
                                                    <div class="col-xs-12">
                                                        <h3 class="lighter block green">Personal Information</h3>

                                                        <div class="profile-user-info">
                                                            <div class="profile-user-info profile-user-info-striped">
                                                                <div class="profile-info-row">
                                                                    <div class="profile-info-name">HRH_TYPE</div>
                                                                    <div class="profile-info-value">
                                                                        <span class="editable_select" id="hrh_type">{{ hrhController::hrh_type(Auth::user()->hrh_type)->description }}</span>
                                                                    </div>
                                                                </div>

                                                                <div class="profile-info-row">
                                                                    <div class="profile-info-name"> SURNAME </div>
                                                                    <div class="profile-info-value">
                                                                        <span class="editable" id="lname">{{ Auth::user()->lname }}</span>
                                                                    </div>
                                                                </div>

                                                                <div class="profile-info-row">
                                                                    <div class="profile-info-name"> FIRSTNAME </div>
                                                                    <div class="profile-info-value">
                                                                        <span class="editable" id="fname">{{ Auth::user()->fname }}</span>
                                                                    </div>
                                                                </div>

                                                                <div class="profile-info-row">
                                                                    <div class="profile-info-name"> MIDDLE NAME </div>
                                                                    <div class="profile-info-value">
                                                                        <span class="editable" id="mname">{{ Auth::user()->mname }}</span>
                                                                    </div>
                                                                </div>

                                                                <div class="profile-info-row">
                                                                    <div class="profile-info-name"> NAME EXTENSION(JR,,SR): </div>
                                                                    <div class="profile-info-value">
                                                                        <span class="editable_select" id="n_ext">{{ Auth::user()->name_extensions }}</span>
                                                                    </div>
                                                                </div>

                                                                <div class="profile-info-row">
                                                                    <div class="profile-info-name"> DATE OF BIRTH </div>
                                                                    <div class="profile-info-value">
                                                                        <span class="editable" id="date_of_birth">{{ Auth::user()->date_of_birth }}</span>
                                                                    </div>
                                                                </div>

                                                                <div class="profile-info-row">
                                                                    <div class="profile-info-name"> PLACE OF BIRTH </div>
                                                                    <div class="profile-info-value">
                                                                        <span class="editable" id="place_of_birth">{{ Auth::user()->place_of_birth }}</span>
                                                                    </div>
                                                                </div>

                                                                <div class="profile-info-row">
                                                                    <div class="profile-info-name"> SEX </div>
                                                                    <div class="profile-info-value">
                                                                        <span class="editable_radio" id="sex">{{ Auth::user()->gender }}</span>
                                                                    </div>
                                                                </div>

                                                                <div class="profile-info-row">
                                                                    <div class="profile-info-name"> CIVIL STATUS </div>
                                                                    <div class="profile-info-value">
                                                                        <span class="editable_radio" id="civil_status">{{ Auth::user()->civil_status }}</span>
                                                                    </div>
                                                                </div>

                                                                <div class="profile-info-row">
                                                                    <div class="profile-info-name"> PHILHEALTH NO: </div>
                                                                    <div class="profile-info-value">
                                                                        <span class="editable" id="philhealth">{{ Auth::user()->philhealth }}</span>
                                                                    </div>
                                                                </div>

                                                                <div class="profile-info-row">
                                                                    <div class="profile-info-name"> TIN NO: </div>
                                                                    <div class="profile-info-value">
                                                                        <span class="editable" id="tin_no">{{ Auth::user()->tin }}</span>
                                                                    </div>
                                                                </div>

                                                                <div class="profile-info-row">
                                                                    <div class="profile-info-name"> NAME OF GSIS GROUP INSURANCE BENEFICIARIES: </div>
                                                                    <div class="profile-info-value">
                                                                        <span class="editable" id="gsis_beneficiaries1">{{ Auth::user()->gsis_beneficiaries1 }}</span>
                                                                        <span class="editable" id="gsis_beneficiaries2">{{ Auth::user()->gsis_beneficiaries2 }}</span>
                                                                    </div>
                                                                </div>

                                                                <div class="profile-info-row">
                                                                    <div class="profile-info-name"> PRC LICENSE: </div>
                                                                    <div class="profile-info-value">
                                                                        <span class="editable" id="prc_license">{{ Auth::user()->prc_license }}</span>
                                                                    </div>
                                                                </div>

                                                                <div class="profile-info-row">
                                                                    <div class="profile-info-name"> CITIZENSHIP: </div>
                                                                    <div class="profile-info-value">
                                                                        <span class="editable_radio" id="citizenship">{{ Auth::user()->citizenship }}</span>
                                                                    </div>
                                                                </div>

                                                                <div class="profile-info-row">
                                                                    <div class="profile-info-name"> RESIDENTIAL ADDRESS: </div>
                                                                    <div class="profile-info-value">
                                                                        <span class="editable" id="residential_address">{{ Auth::user()->residential_address }}</span>
                                                                    </div>
                                                                </div>

                                                                <div class="profile-info-row">
                                                                    <div class="profile-info-name"> ZIP CODE: </div>
                                                                    <div class="profile-info-value">
                                                                        <span class="editable" id="zip_code1">{{ Auth::user()->zip_code }}</span>
                                                                    </div>
                                                                </div>

                                                                <div class="profile-info-row">
                                                                    <div class="profile-info-name"> PERMANENT ADDRESS: </div>
                                                                    <div class="profile-info-value">
                                                                        <span class="editable" id="permanent_address">{{ Auth::user()->permanent_address }}</span>
                                                                    </div>
                                                                </div>

                                                                <div class="profile-info-row">
                                                                    <div class="profile-info-name"> ZIP_COE: </div>
                                                                    <div class="profile-info-value">
                                                                        <span class="editable" id="zip_code2">{{ Auth::user()->zip_code }}</span>
                                                                    </div>
                                                                </div>

                                                                <div class="profile-info-row">
                                                                    <div class="profile-info-name"> AREA OF ASSIGNMENT(Province): </div>
                                                                    <div class="profile-info-value">
                                                                        <span class="editable" id="province">{{ hrhController::hrh_province(Auth::user()->province)->description }}</span>
                                                                    </div>
                                                                </div>

                                                                <div class="profile-info-row">
                                                                    <div class="profile-info-name"> AREA OF ASSIGNMENT(Municipality): </div>
                                                                    <div class="profile-info-value">
                                                                        <span class="editable" id="municipality">{{ hrhController::hrh_municipality(Auth::user()->municipality)->description }}</span>
                                                                    </div>
                                                                </div>

                                                                <div class="profile-info-row">
                                                                    <div class="profile-info-name"> DATE OF ENTRANCE TO DUTY: </div>
                                                                    <div class="profile-info-value">
                                                                        <span class="editable" id="date_of_entrance_to_duty">{{ Auth::user()->date_of_entrance_to_dutyy }}</span>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>

                                                        <div class="hr hr-8 dotted"></div>

                                                        <div class="profile-user-info">
                                                            <div class="profile-info-row">
                                                                <div class="profile-info-name"> Website </div>

                                                                <div class="profile-info-value">
                                                                    <a href="#" target="_blank">www.ro7.doh.gov.ph</a>
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
                                                                        Our friendly and approachable tutors are leaders in the fields of plastic surgery, orthopaedic surgery, dermatology, physiotherapy and general practice. We pride ourselves on our fun and engaging teaching style and our trainers are always happy to offer their expert post course support
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
                                                                            Administering Injections
                                                                        </div>

                                                                        <div class="grid3 center">
                                                                            <div class="center easy-pie-chart percentage" data-percent="90" data-color="#59A84B">
                                                                                <span class="percent">90</span>%
                                                                            </div>

                                                                            <div class="space-2"></div>
                                                                            Arranging Prescription Refills
                                                                        </div>

                                                                        <div class="grid3 center">
                                                                            <div class="center easy-pie-chart percentage" data-percent="80" data-color="#9585BF">
                                                                                <span class="percent">80</span>%
                                                                            </div>
                                                                            Remaining Calm with Distressed Patients
                                                                            <div class="space-2"></div>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- /#personal information -->

                                            <div id="family_background" class="tab-pane">
                                                <div class="row">
                                                    <div class="col-xs-12">
                                                        <h3 class="lighter block green">Family Background</h3>
                                                        <div class="profile-user-info">
                                                            <div class="profile-user-info profile-user-info-striped">
                                                                <div class="profile-info-row">
                                                                    <div class="profile-info-name">SPOUSE'S SURNAME:</div>
                                                                    <div class="profile-info-value">
                                                                        <span class="editable" id="hrh_type">{{ hrhController::hrh_type(Auth::user()->hrh_type)->description }}</span>
                                                                    </div>
                                                                </div>

                                                                <div class="profile-info-row">
                                                                    <div class="profile-info-name">FIRSTNAME:</div>
                                                                    <div class="profile-info-value">
                                                                        <span class="editable" id="tayong">{{ Auth::user()->lname }}</span>
                                                                    </div>
                                                                </div>

                                                                <div class="profile-info-row">
                                                                    <div class="profile-info-name">MIDDLE NAME:</div>
                                                                    <div class="profile-info-value">
                                                                        <span class="editable" id="mname1">{{ Auth::user()->fname }}</span>
                                                                    </div>
                                                                </div>

                                                                <div class="profile-info-row">
                                                                    <div class="profile-info-name">NAME EXTENSTION(JR,,SR):</div>
                                                                    <div class="profile-info-value">
                                                                        <span class="editable" id="lname">{{ Auth::user()->mname }}</span>
                                                                    </div>
                                                                </div>

                                                                <div class="profile-info-row">
                                                                    <div class="profile-info-name">OCCUPATION:</div>
                                                                    <div class="profile-info-value">
                                                                        <span class="editable" id="lname">{{ Auth::user()->mname }}</span>
                                                                    </div>
                                                                </div>

                                                                <div class="profile-info-row">
                                                                    <div class="profile-info-name">EMPLOYER/BUSINESS NAME:</div>
                                                                    <div class="profile-info-value">
                                                                        <span class="editable" id="date_of_birth">{{ Auth::user()->date_of_birth }}</span>
                                                                    </div>
                                                                </div>

                                                                <div class="profile-info-row">
                                                                    <div class="profile-info-name">TELEPHONE NO:</div>
                                                                    <div class="profile-info-value">
                                                                        <span class="editable" id="place_of_birth">{{ Auth::user()->place_of_birth }}</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <h5 class="lighter block blue">Name of children</h5>
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
                                                        </div><!-- CHILDREN -->

                                                        <h5 class="lighter block blue">Name of parent</h5>
                                                        <div class="profile-user-info">
                                                            <div class="profile-user-info profile-user-info-striped">
                                                                <div class="profile-info-row">
                                                                    <div class="profile-info-name">FATHER'S SURNAME:</div>
                                                                    <div class="profile-info-value">
                                                                        <span class="editable" id="hrh_type">{{ hrhController::hrh_type(Auth::user()->hrh_type)->description }}</span>
                                                                    </div>
                                                                </div>

                                                                <div class="profile-info-row">
                                                                    <div class="profile-info-name">FIRSTNAME:</div>
                                                                    <div class="profile-info-value">
                                                                        <span class="editable" id="surname">{{ Auth::user()->lname }}</span>
                                                                    </div>
                                                                </div>

                                                                <div class="profile-info-row">
                                                                    <div class="profile-info-name">MIDDLE NAME:</div>
                                                                    <div class="profile-info-value">
                                                                        <span class="editable" id="fname">{{ Auth::user()->fname }}</span>
                                                                    </div>
                                                                </div>

                                                                <div class="profile-info-row">
                                                                    <div class="profile-info-name">NAME EXTENSTION(JR,,SR):</div>
                                                                    <div class="profile-info-value">
                                                                        <span class="editable" id="lname">{{ Auth::user()->mname }}</span>
                                                                    </div>
                                                                </div>

                                                                <div class="profile-info-row">
                                                                    <div class="profile-info-name">MOTHER'S SURNAME:</div>
                                                                    <div class="profile-info-value">
                                                                        <span class="editable" id="lname">{{ Auth::user()->mname }}</span>
                                                                    </div>
                                                                </div>

                                                                <div class="profile-info-row">
                                                                    <div class="profile-info-name">FIRST NAME :</div>
                                                                    <div class="profile-info-value">
                                                                        <span class="editable" id="date_of_birth">{{ Auth::user()->date_of_birth }}</span>
                                                                    </div>
                                                                </div>

                                                                <div class="profile-info-row">
                                                                    <div class="profile-info-name">MIDDLE NAME:</div>
                                                                    <div class="profile-info-value">
                                                                        <span class="editable" id="place_of_birth">{{ Auth::user()->place_of_birth }}</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div> <!-- PARENT -->

                                                        <div class="hr hr-8 dotted"></div>

                                                        <div class="profile-user-info">
                                                            <div class="profile-info-row">
                                                                <div class="profile-info-name"> Website </div>

                                                                <div class="profile-info-value">
                                                                    <a href="#" target="_blank">www.ro7.doh.gov.ph</a>
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
                                            </div><!-- /#family background -->

                                            <div id="educational_background" class="tab-pane">
                                                <div class="row">
                                                    <div class="col-xs-12">
                                                        <h3 class="lighter block green">Educational Background</h3>
                                                        <div class="hr dotted hr-8"></div>
                                                        <h5 class="lighter block blue">Elementary</h5>
                                                        <div class="profile-user-info">
                                                            <div class="profile-user-info profile-user-info-striped">
                                                                <div class="profile-info-row">
                                                                    <div class="profile-info-name">Name of School(Write in full)</div>
                                                                    <div class="profile-info-value">
                                                                        <span class="editable" id="hrh_type">{{ hrhController::hrh_type(Auth::user()->hrh_type)->description }}</span>
                                                                    </div>
                                                                </div>

                                                                <div class="profile-info-row">
                                                                    <div class="profile-info-name">Education/degree/course(Write in full):</div>
                                                                    <div class="profile-info-value">
                                                                        <span class="editable" id="surname">{{ Auth::user()->lname }}</span>
                                                                    </div>
                                                                </div>

                                                                <div class="profile-info-row">
                                                                    <div class="profile-info-name">Period of attendance from:</div>
                                                                    <div class="profile-info-value">
                                                                        <span class="editable" id="fname">{{ Auth::user()->fname }}</span>
                                                                    </div>
                                                                </div>

                                                                <div class="profile-info-row">
                                                                    <div class="profile-info-name">Period of attendance to::</div>
                                                                    <div class="profile-info-value">
                                                                        <span class="editable" id="lname">{{ Auth::user()->mname }}</span>
                                                                    </div>
                                                                </div>

                                                                <div class="profile-info-row">
                                                                    <div class="profile-info-name">Highest level/units earned(if not graduated):</div>
                                                                    <div class="profile-info-value">
                                                                        <span class="editable" id="lname">{{ Auth::user()->mname }}</span>
                                                                    </div>
                                                                </div>

                                                                <div class="profile-info-row">
                                                                    <div class="profile-info-name">Year Graduated:</div>
                                                                    <div class="profile-info-value">
                                                                        <span class="editable" id="date_of_birth">{{ Auth::user()->date_of_birth }}</span>
                                                                    </div>
                                                                </div>

                                                                <div class="profile-info-row">
                                                                    <div class="profile-info-name">Scholarship/academic honors receive:</div>
                                                                    <div class="profile-info-value">
                                                                        <span class="editable" id="place_of_birth">{{ Auth::user()->place_of_birth }}</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div> <!-- ELEMENTARY -->
                                                        <h5 class="lighter block blue">Secondary</h5>
                                                        <div class="profile-user-info">
                                                            <div class="profile-user-info profile-user-info-striped">
                                                                <div class="profile-info-row">
                                                                    <div class="profile-info-name">Name of School(Write in full)</div>
                                                                    <div class="profile-info-value">
                                                                        <span class="editable" id="hrh_type">{{ hrhController::hrh_type(Auth::user()->hrh_type)->description }}</span>
                                                                    </div>
                                                                </div>

                                                                <div class="profile-info-row">
                                                                    <div class="profile-info-name">Education/degree/course(Write in full):</div>
                                                                    <div class="profile-info-value">
                                                                        <span class="editable" id="surname">{{ Auth::user()->lname }}</span>
                                                                    </div>
                                                                </div>

                                                                <div class="profile-info-row">
                                                                    <div class="profile-info-name">Period of attendance from:</div>
                                                                    <div class="profile-info-value">
                                                                        <span class="editable" id="fname">{{ Auth::user()->fname }}</span>
                                                                    </div>
                                                                </div>

                                                                <div class="profile-info-row">
                                                                    <div class="profile-info-name">Period of attendance to::</div>
                                                                    <div class="profile-info-value">
                                                                        <span class="editable" id="lname">{{ Auth::user()->mname }}</span>
                                                                    </div>
                                                                </div>

                                                                <div class="profile-info-row">
                                                                    <div class="profile-info-name">Highest level/units earned(if not graduated):</div>
                                                                    <div class="profile-info-value">
                                                                        <span class="editable" id="lname">{{ Auth::user()->mname }}</span>
                                                                    </div>
                                                                </div>

                                                                <div class="profile-info-row">
                                                                    <div class="profile-info-name">Year Graduated:</div>
                                                                    <div class="profile-info-value">
                                                                        <span class="editable" id="date_of_birth">{{ Auth::user()->date_of_birth }}</span>
                                                                    </div>
                                                                </div>

                                                                <div class="profile-info-row">
                                                                    <div class="profile-info-name">Scholarship/academic honors receive:</div>
                                                                    <div class="profile-info-value">
                                                                        <span class="editable" id="place_of_birth">{{ Auth::user()->place_of_birth }}</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div> <!-- SECONDARY -->
                                                        <h5 class="lighter block blue">VOCATIONAL/TRADE COURSE</h5>
                                                        <div class="profile-user-info">
                                                            <div class="profile-user-info profile-user-info-striped">
                                                                <div class="profile-info-row">
                                                                    <div class="profile-info-name">Name of School(Write in full)</div>
                                                                    <div class="profile-info-value">
                                                                        <span class="editable" id="hrh_type">{{ hrhController::hrh_type(Auth::user()->hrh_type)->description }}</span>
                                                                    </div>
                                                                </div>

                                                                <div class="profile-info-row">
                                                                    <div class="profile-info-name">Education/degree/course(Write in full):</div>
                                                                    <div class="profile-info-value">
                                                                        <span class="editable" id="surname">{{ Auth::user()->lname }}</span>
                                                                    </div>
                                                                </div>

                                                                <div class="profile-info-row">
                                                                    <div class="profile-info-name">Period of attendance from:</div>
                                                                    <div class="profile-info-value">
                                                                        <span class="editable" id="fname">{{ Auth::user()->fname }}</span>
                                                                    </div>
                                                                </div>

                                                                <div class="profile-info-row">
                                                                    <div class="profile-info-name">Period of attendance to::</div>
                                                                    <div class="profile-info-value">
                                                                        <span class="editable" id="lname">{{ Auth::user()->mname }}</span>
                                                                    </div>
                                                                </div>

                                                                <div class="profile-info-row">
                                                                    <div class="profile-info-name">Highest level/units earned(if not graduated):</div>
                                                                    <div class="profile-info-value">
                                                                        <span class="editable" id="lname">{{ Auth::user()->mname }}</span>
                                                                    </div>
                                                                </div>

                                                                <div class="profile-info-row">
                                                                    <div class="profile-info-name">Year Graduated:</div>
                                                                    <div class="profile-info-value">
                                                                        <span class="editable" id="date_of_birth">{{ Auth::user()->date_of_birth }}</span>
                                                                    </div>
                                                                </div>

                                                                <div class="profile-info-row">
                                                                    <div class="profile-info-name">Scholarship/academic honors receive:</div>
                                                                    <div class="profile-info-value">
                                                                        <span class="editable" id="place_of_birth">{{ Auth::user()->place_of_birth }}</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div> <!-- VOCATIONAL -->

                                                        <h5 class="lighter block blue">COLLEGE</h5>
                                                        <div class="profile-user-info">
                                                            <div class="profile-user-info profile-user-info-striped">
                                                                <div class="profile-info-row">
                                                                    <div class="profile-info-name">Name of School(Write in full)</div>
                                                                    <div class="profile-info-value">
                                                                        <span class="editable" id="hrh_type">{{ hrhController::hrh_type(Auth::user()->hrh_type)->description }}</span>
                                                                    </div>
                                                                </div>

                                                                <div class="profile-info-row">
                                                                    <div class="profile-info-name">Education/degree/course(Write in full):</div>
                                                                    <div class="profile-info-value">
                                                                        <span class="editable" id="surname">{{ Auth::user()->lname }}</span>
                                                                    </div>
                                                                </div>

                                                                <div class="profile-info-row">
                                                                    <div class="profile-info-name">Period of attendance from:</div>
                                                                    <div class="profile-info-value">
                                                                        <span class="editable" id="fname">{{ Auth::user()->fname }}</span>
                                                                    </div>
                                                                </div>

                                                                <div class="profile-info-row">
                                                                    <div class="profile-info-name">Period of attendance to::</div>
                                                                    <div class="profile-info-value">
                                                                        <span class="editable" id="lname">{{ Auth::user()->mname }}</span>
                                                                    </div>
                                                                </div>

                                                                <div class="profile-info-row">
                                                                    <div class="profile-info-name">Highest level/units earned(if not graduated):</div>
                                                                    <div class="profile-info-value">
                                                                        <span class="editable" id="lname">{{ Auth::user()->mname }}</span>
                                                                    </div>
                                                                </div>

                                                                <div class="profile-info-row">
                                                                    <div class="profile-info-name">Year Graduated:</div>
                                                                    <div class="profile-info-value">
                                                                        <span class="editable" id="date_of_birth">{{ Auth::user()->date_of_birth }}</span>
                                                                    </div>
                                                                </div>

                                                                <div class="profile-info-row">
                                                                    <div class="profile-info-name">Scholarship/academic honors receive:</div>
                                                                    <div class="profile-info-value">
                                                                        <span class="editable" id="place_of_birth">{{ Auth::user()->place_of_birth }}</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div> <!-- COLLEGE -->

                                                        <h5 class="lighter block blue">GRADUATE STUDIES</h5>
                                                        <div class="profile-user-info">
                                                            <div class="profile-user-info profile-user-info-striped">
                                                                <div class="profile-info-row">
                                                                    <div class="profile-info-name">Name of School(Write in full)</div>
                                                                    <div class="profile-info-value">
                                                                        <span class="editable" id="hrh_type">{{ hrhController::hrh_type(Auth::user()->hrh_type)->description }}</span>
                                                                    </div>
                                                                </div>

                                                                <div class="profile-info-row">
                                                                    <div class="profile-info-name">Education/degree/course(Write in full):</div>
                                                                    <div class="profile-info-value">
                                                                        <span class="editable" id="surname">{{ Auth::user()->lname }}</span>
                                                                    </div>
                                                                </div>

                                                                <div class="profile-info-row">
                                                                    <div class="profile-info-name">Period of attendance from:</div>
                                                                    <div class="profile-info-value">
                                                                        <span class="editable" id="fname">{{ Auth::user()->fname }}</span>
                                                                    </div>
                                                                </div>

                                                                <div class="profile-info-row">
                                                                    <div class="profile-info-name">Period of attendance to::</div>
                                                                    <div class="profile-info-value">
                                                                        <span class="editable" id="lname">{{ Auth::user()->mname }}</span>
                                                                    </div>
                                                                </div>

                                                                <div class="profile-info-row">
                                                                    <div class="profile-info-name">Highest level/units earned(if not graduated):</div>
                                                                    <div class="profile-info-value">
                                                                        <span class="editable" id="lname">{{ Auth::user()->mname }}</span>
                                                                    </div>
                                                                </div>

                                                                <div class="profile-info-row">
                                                                    <div class="profile-info-name">Year Graduated:</div>
                                                                    <div class="profile-info-value">
                                                                        <span class="editable" id="date_of_birth">{{ Auth::user()->date_of_birth }}</span>
                                                                    </div>
                                                                </div>

                                                                <div class="profile-info-row">
                                                                    <div class="profile-info-name">Scholarship/academic honors receive:</div>
                                                                    <div class="profile-info-value">
                                                                        <span class="editable" id="place_of_birth">{{ Auth::user()->place_of_birth }}</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div> <!-- GRADUATE STUDIES -->

                                                    </div>
                                                </div>
                                            </div><!-- /#education background -->

                                            <div id="service_eligibility" class="tab-pane">
                                                <div class="row">
                                                    <div class="col-xs-12">
                                                        <h3 class="lighter block green">Educational Background</h3>
                                                        <div class="form-group table-responsive">
                                                            <table class="table table-striped table-bordered table-hover no-margin-bottom no-border-top">
                                                                <thead>
                                                                <tr class="info">
                                                                    <th class="center" rowspan="2">21. CAREER SERVICE/RA 1080 (BOARD/BAR) UNDER SPECIAL LAWS/CES/CSEE BARANGAY ELIGIBILITY/DRIVER'S LICENCE</th>
                                                                    <th class="center" rowspan="2">RATING (if Applicable)</th>
                                                                    <th class="center" rowspan="2">DATE OF EXAMINATION / CONFERMENT</th>
                                                                    <th class="center" rowspan="2">PLACE OF EXAMINATION / CONFERMENT</th>
                                                                    <th class="center" colspan="2">LICENSE (if applicable)</th>
                                                                </tr>
                                                                <tr class="info">
                                                                    <th class="center">NUMBER</th>
                                                                    <th class="center">Date of Validity</th>
                                                                </tr>
                                                                </thead>
                                                                <tbody>
                                                                @for($i=0;$i<10;$i++)
                                                                    <tr>
                                                                        <td><input type="text" class="form-control" id="{{ "career_service_name".$i }}" name="career_service_name[]"></td>
                                                                        <td><input type="text" class="form-control" id="{{ "rating".$i }}" name="rating[]"></td>
                                                                        <td><input type="text" class="form-control" id="{{ "date_of_examination".$i }}" name="date_of_examination[]"></td>
                                                                        <td><input type="text" class="form-control" id="{{ "place_of_examination".$i }}" name="place_of_examination[]"></td>
                                                                        <td><input type="text" class="form-control" id="{{ "license_number".$i }}" name="license_number[]"></td>
                                                                        <td><input type="text" class="form-control" id="{{ "license_date_validity".$i }}" name="license_date_validity[]"></td>
                                                                    </tr>
                                                                @endfor
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- /#Service Eligibility -->

                                            <div id="work_experience" class="tab-pane">
                                                <div class="row">
                                                    <div class="col-xs-12">
                                                        <h3 class="lighter block green">Educational Background</h3>
                                                        <div class="form-group table-responsive">
                                                            <table class="table table-striped table-bordered table-hover no-margin-bottom no-border-top">
                                                                <thead>
                                                                <tr class="info">
                                                                    <th class="center" colspan="2">22. INCLUSIVE DATES (mm/dd/yyyy)</th>
                                                                    <th class="center" rowspan="2">POSITION TITLE (Write in full/Do not abbreviate)</th>
                                                                    <th class="center" rowspan="2">DEPARTMENT / AGENCY / OFFICE / COMPANY (Write in full/Do not abrebiate)</th>
                                                                    <th class="center" rowspan="2">MONTHLY SALARY</th>
                                                                    <th class="center" rowspan="2">SALARY/JOB/PAY GRADE(if applicable)(Format *00-0*)/INCREMENT</th>
                                                                    <th class="center" rowspan="2">STATUS OF APPOINTMENT</th>
                                                                    <th class="center" rowspan="2">GOV'T SERVICE(Y/N)</th>
                                                                </tr>
                                                                <tr class="info">
                                                                    <th class="center">From</th>
                                                                    <th class="center">To</th>
                                                                </tr>
                                                                </thead>
                                                                <tbody>
                                                                @for($i=1;$i<=10;$i++)
                                                                    <tr>
                                                                        <td class="col-xs-2" colspan="2"><input type="text" id="{{ 'inclusive_dates'.$i }}" class="form-control"></td>
                                                                        <td class="col-xs-2"><input type="text" class="form-control"></td>
                                                                        <td class="col-xs-2"><input type="text" class="form-control"></td>
                                                                        <td class="col-xs-2"><input type="text" class="form-control"></td>
                                                                        <td class="col-xs-2"><input type="text" class="form-control"></td>
                                                                        <td class="col-xs-1"><input type="text" class="form-control"></td>
                                                                        <td class="col-xs-1"><input type="text" class="form-control"></td>
                                                                    </tr>
                                                                @endfor
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- /#Work Experience -->

                                        </div><!-- /tab-content -->
                                    </div><!-- /tabbable -->
                                </div><!-- /user-profile -->
                            </div><!-- /COL-->
                        </div><!-- /user-profile row-->
                    </div><!-- /DIV -->

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
            for(var i=1; i<=10; i++){
                $("#inclusive_dates"+i).daterangepicker();
            }
            //editables on first profile page
            $.fn.editable.defaults.mode = 'popup';
            $.fn.editableform.loading = "<div class='editableform-loading'><i class='ace-icon fa fa-spinner fa-spin fa-2x light-blue'></i></div>";
            $.fn.editableform.buttons = '<button type="submit" class="btn btn-info editable-submit"><i class="ace-icon fa fa-check"></i></button>'+
                    '<button type="button" class="btn editable-cancel"><i class="ace-icon fa fa-times"></i></button>';

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

            //// AJAX
            $('#date_of_birth').editable({
                type: 'adate',
                date: {
                    //datepicker plugin options
                    format: 'mm/dd/yyyy',
                    viewformat: 'mm/dd/yyyy',
                    weekStart: 1
                },
                success: function(data, config) {
                    console.log(config)
                },
                error: function(errors) {
                }
            });


            var hrhType = [];
            $.each(<?php echo $hrh_type; ?>, function(x, data) {
                hrhType.push({id: data.id, text: data.description});
            });

            var nameExtension = [];
            $.each(<?php echo $name_extension;?>,function(x,data){
                nameExtension.push({id: data.id, text: data.suffix});
            });

            var source_select = [
                hrhType,
                nameExtension,
                [
                    {value: 'Male', text: 'Male'},
                    {value: 'Female', text: 'Female'}
                ],
                [
                    {value: 'Single', text: 'Single'},
                    {value: 'Widowed', text: 'Widowed'},
                    {value: 'Other/s', text: 'Other/s'},
                    {value: 'Married', text: 'Married'},
                    {value: 'Separated', text: 'Separated'}
                ]
            ];
            $(".editable_select").each(function(index) {
                //console.log(index);
                $('#'+this.id).editable({
                    name : this.id,
                    type: 'select2',
                    source: source_select[index],
                    select2: {
                        width: 200
                    },
                    success: function(data, config) {
                        console.log(config)
                    },
                    error: function(errors) {
                    }
                });
            });

            $(".editable").each(function() {
                //console.log(this.id);
                $('#'+this.id).editable({
                    type: 'text',
                    name: this.id,
                    success: function(data, config) {
                        console.log(config)
                    },
                    error: function(errors) {
                    }
                });
            });

            var source_radio = [
                [
                    {value: 'Male', text: 'Male'},
                    {value: 'Female', text: 'Female'}
                ],
                [
                    {value: 'Single', text: 'Single'},
                    {value: 'Widowed', text: 'Widowed'},
                    {value: 'Others', text: 'Others'},
                    {value: 'Married', text: 'Married'},
                    {value: 'Separated', text: 'Separated'}
                ],
                [
                    {value: 'Filipino', text: 'Filipino'},
                    {value: 'Dual Citizenship', text: 'Dual Citizenship'},
                    {value: 'br birth', text: 'by birth'},
                    {value: 'by naturalization', text: 'by naturalization'}
                ]
            ];

            $(".editable_radio").each(function(index){
                $('#'+this.id).editable({
                    type: 'radiolist',
                    name: this.id,
                    source: source_radio[index],
                    validate: function(value) {
                        $("#sex").html(value);
                        console.log(value);
                    }
                });
            });

        });

        (function($) {
            var Radiolist = function (options) {
                this.init('radiolist', options, Radiolist.defaults);
            };
            $.fn.editableutils.inherit(Radiolist, $.fn.editabletypes.list);

            $.extend(Radiolist.prototype, {
                renderList: function() {
                    var $label;
                    this.$tpl.empty();
                    if(!$.isArray(this.sourceData)) {
                        return;
                    }
                    for(var i=0; i<this.sourceData.length; i++) {
                        // There should be a better way to get name. May need to be changed for other layouts
                        //var name = this.$input.closest('.editable_radio').find("[data-type='radiolist']").attr('id'); way gamit undefined
                        var name = this.options.scope.id;
                        $label = $('<label class="radio-inline" style="padding-right:10px;padding-top:5px;">')
                                .append($('<input>', {
                                    type: 'radio',
                                    name:  name,
                                    value: this.sourceData[i].value
                                }
                                ));
                        $label.append($('<span>').text(this.sourceData[i].text));
                        // Add radio buttons to template
                        this.$tpl.append($label);
                    }
                    if(name == 'citizenship'){
                        this.$tpl.append("<br><br>" +
                                "<select id='state' name='state' class='form-control'> "  +
                                "<option value=''>Pls. indicate country.</option>" +
                                "@foreach($country as $row)<option value='{{ $row->id }}'>{{ $row->description }}</option>@endforeach" +
                                "</select>");
                    }
                    this.$input = this.$tpl.find('input[type="radio"]');
                    this.setClass();
                },

                value2str: function(value) {
                    return $.isArray(value) ? value.sort().join($.trim(this.options.separator)) : '';
                },

                //parse separated string
                str2value: function(str) {
                    var reg, value = null;
                    if(typeof str === 'string' && str.length) {
                        reg = new RegExp('\\s*'+$.trim(this.options.separator)+'\\s*');
                        value = str.split(reg);
                    } else if($.isArray(str)) {
                        value = str;
                    }
                    return value;
                },

                //set checked on required radio buttons
                //!!Could probably be cleaned up since this was for select multiple originally
                value2input: function(value) {
                    this.$input.prop('checked', false);

                    if($.isArray(value) && value.length) {
                        this.$input.each(function(i, el) {
                            var $el = $(el);
                            // cannot use $.inArray as it performs strict comparison
                            $.each(value, function(j, val) {
                                if($el.val() == val) {
                                    $el.prop('checked', true);
                                }
                            });
                        });
                    }
                },

                input2value: function() {
                    return this.$input.filter(':checked').val();
                },

                //collect text of checked boxes
                value2htmlFinal: function(value, element) {
                    checked = $.fn.editableutils.itemsByValue(value, this.sourceData);
                    if(checked.length) {
                        $(element).html($.fn.editableutils.escape(value));
                    } else {
                        $(element).empty();
                    }
                },

                value2submit: function(value) {
                    return value;
                },

                activate: function() {
                    this.$input.first().focus();
                }
            });

            Radiolist.defaults = $.extend({}, $.fn.editabletypes.list.defaults, {
                /**
                 @property tpl
                 @default <div></div>
                 **/
                tpl:'<label class="editable-radiolist"></label>',

                /**
                 @property inputclass
                 @type string
                 @default null
                 **/
                inputclass: '',

                /**
                 Separator of values when reading from `data-value` attribute

                 @property separator
                 @type string
                 @default ','
                 **/
                separator: ','
            });

            $.fn.editabletypes.radiolist = Radiolist;

        }(window.jQuery));

    </script>

@endsection

