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
    .profile-info-name{
        width: 30%;
    }
    .editable-empty{
        color: black;
    }
</style>
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
                                <i class="orange ace-icon fa fa-picture-o bigger-120"></i>
                                Family Background
                            </a>
                        </li>
                        <li >
                            <a data-toggle="tab" href="#educational_background">
                                <i class="blue ace-icon fa fa-rss bigger-120"></i>
                                Educational Background
                            </a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#service_eligibility">
                                <i class="pink ace-icon fa fa-certificate bigger-120"></i>
                                Civil Service Eligibility
                            </a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#work_experience">
                                <i class="red ace-icon fa fa-briefcase bigger-120"></i>
                                Work Experience
                            </a>
                        </li>
                    </ul>
                    <div class="hr dotted"></div>

                    <div>
                        <div id="user-profile-1" class="user-profile row">
                            <div class="col-xs-12 col-sm-3 center">
                                @if(!isset($user->photo))
                                    <div class="alert alert-info" id="note"><i class="fa fa-info"></i> Note: 2 by 2 picture</div>
                                @endif
                                <div>
                                <span class="profile-picture">
                                    <a href="#">
                                    <img id="avatar_picture" class="img-responsive" alt="Alex's Avatar" src="
                                    <?php
                                        if(isset($user->photo)){
                                            echo asset('public/upload_picture/picture').'/'.$user->photo;
                                        } else {
                                            if($user->sex == 'Female')
                                                echo asset('public/assets_ace/images/avatars/female1.png');
                                            else
                                                echo asset('public/assets_ace/images/avatars/male1.png');
                                        }
                                    ?>" />
                                    </a>
                                </span>
                                <div class="rating inline"></div>
                                <div class="space-4"></div>
                                <div class="width-80 label label-info label-xlg arrowed-in arrowed-in-right">
                                    <div class="inline position-relative">
                                        <a href="#" class="user-title-label dropdown-toggle" data-toggle="dropdown">
                                            <i class="ace-icon fa fa-circle light-green"></i>
                                            &nbsp;
                                            <span class="white">{{ $user->fname.' '.$user->lname }}</span>
                                        </a>

                                        <ul class="align-left @if(Auth::user()->usertype) dropdown-menu @endif dropdown-caret dropdown-lighter">
                                            @if(Auth::user()->usertype)
                                                <li class="dropdown-header"> Change Status </li>
                                                <?php
                                                    $statusCount = 0;
                                                    $counter = 0;
                                                    $color = ['blue','orange','green','red','purple'];
                                                ?>
                                                @foreach($employee_status as $status)
                                                <?php $statusCount++; ?>
                                                <li>
                                                    <a href="#soe{{ $status->id }}" class="change-status" data-color="{{ $color[$counter] }}" data-description="{{ $status->description }}">
                                                        <i class="ace-icon fa fa-circle {{ $color[$counter] }}"></i>
                                                        &nbsp;
                                                        <span class="{{ $color[$counter] }}">{{ $status->description }}</span>
                                                        <?php
                                                            $counter++;
                                                            if($counter >= 5) $counter = 0;
                                                        ?>
                                                    </a>
                                                </li>
                                                @endforeach
                                            @endif
                                        </ul>
                                    </div>
                                </div>
                                </div>

                                <div class="space-6"></div>
                                <div class="profile-contact-info">
                                    <div class="profile-contact-links align-left">
                                        <a class="btn btn-link">
                                            <i class="ace-icon fa fa-sun-o bigger-120 green"></i>
                                            <label id="soe" class="green">
                                            {{ hrhController::hrh_status($user->status_of_employment) }}
                                            </label>
                                        </a>
                                        <a href="http://ro7.doh.gov.ph/" target="_blank" class="btn btn-link">
                                            <i class="ace-icon fa fa-globe bigger-125 blue"></i>
                                            www.ro7.doh.gov.ph
                                        </a>
                                    </div>
                                </div>

                                <div class="space-4"></div>
                            </div>

                            <div class="col-xs-12 col-sm-9">
                                <div id="user-profile-2" class="user-profile">
                                    <div class="tabbable">
                                        <div class="tab-content no-border padding-5">
                                            <div id="personal_information" class="tab-pane fade in active">
                                                <div class="row">
                                                    <div class="col-xs-12">
                                                        <h3 class="lighter block green">Personal Information</h3>
                                                        <div class="profile-user-info">
                                                            <div class="profile-user-info profile-user-info-striped">

                                                                <div class="profile-info-row">
                                                                    <div class="profile-info-name">HRH_TYPE</div>
                                                                    <div class="profile-info-value">
                                                                        <span class="editable_select" id="hrh_type">{{ hrhController::hrh_type($user->hrh_type) }}</span>
                                                                    </div>
                                                                </div>

                                                                <div class="profile-info-row">
                                                                    <div class="profile-info-name"> SURNAME </div>
                                                                    <div class="profile-info-value">
                                                                        <span id="lname" class="editable">{{ $user->lname }}</span>
                                                                    </div>
                                                                </div>

                                                                <div class="profile-info-row">
                                                                    <div class="profile-info-name"> FIRSTNAME </div>
                                                                    <div class="profile-info-value">
                                                                        <span class="editable" id="fname">{{ $user->fname }}</span>
                                                                    </div>
                                                                </div>

                                                                <div class="profile-info-row">
                                                                    <div class="profile-info-name"> MIDDLE NAME </div>
                                                                    <div class="profile-info-value">
                                                                        <span class="editable" id="mname">{{ $user->mname }}</span>
                                                                    </div>
                                                                </div>

                                                                <div class="profile-info-row">
                                                                    <div class="profile-info-name"> NAME EXTENSION(JR,,SR): </div>
                                                                    <div class="profile-info-value">
                                                                        <span class="editable_select" id="name_extension">{{ hrhController::hrh_extension($user->name_extension) }}</span>
                                                                    </div>
                                                                </div>

                                                                <div class="profile-info-row">
                                                                    <div class="profile-info-name"> DATE OF BIRTH </div>
                                                                    <div class="profile-info-value">
                                                                        <span class="editable_datepicker" id="date_of_birth">{{ $user->date_of_birth }}</span>
                                                                    </div>
                                                                </div>

                                                                <div class="profile-info-row">
                                                                    <div class="profile-info-name"> PLACE OF BIRTH </div>
                                                                    <div class="profile-info-value">
                                                                        <span class="editable" id="place_of_birth">{{ $user->place_of_birth }}</span>
                                                                    </div>
                                                                </div>

                                                                <div class="profile-info-row">
                                                                    <div class="profile-info-name"> SEX </div>
                                                                    <div class="profile-info-value">
                                                                        <span class="editable_radio" id="sex">{{ $user->sex }}</span>
                                                                    </div>
                                                                </div>

                                                                <div class="profile-info-row">
                                                                    <div class="profile-info-name"> CIVIL STATUS </div>
                                                                    <div class="profile-info-value">
                                                                        <span class="editable_radio" id="civil_status">{{ $user->civil_status }}</span>
                                                                    </div>
                                                                </div>

                                                                <div class="profile-info-row">
                                                                    <div class="profile-info-name"> PHILHEALTH NO: </div>
                                                                    <div class="profile-info-value">
                                                                        <span class="editable" id="philhealth_no">{{ $user->philhealth_no }}</span>
                                                                    </div>
                                                                </div>

                                                                <div class="profile-info-row">
                                                                    <div class="profile-info-name"> TIN NO: </div>
                                                                    <div class="profile-info-value">
                                                                        <span class="editable" id="tin_no">{{ $user->tin_no }}</span>
                                                                    </div>
                                                                </div>

                                                                <div class="profile-info-row">
                                                                    <div class="profile-info-name"> NAME OF GSIS GROUP INSURANCE BENEFICIARIES: </div>
                                                                    <div class="profile-info-value">
                                                                        <span class="editable" id="gsis_beneficiaries1">{{ $user->gsis_beneficiaries1 }}</span>
                                                                        <span class="editable" id="gsis_beneficiaries2">{{ $user->gsis_beneficiaries2 }}</span>
                                                                    </div>
                                                                </div>

                                                                <div class="profile-info-row">
                                                                    <div class="profile-info-name"> PRC LICENSE: </div>
                                                                    <div class="profile-info-value">
                                                                        <span class="editable" id="prc_license">{{ $user->prc_license }}</span>
                                                                    </div>
                                                                </div>

                                                                <div class="profile-info-row">
                                                                    <div class="profile-info-name"> CITIZENSHIP: </div>
                                                                    <div class="profile-info-value">
                                                                        <span class="editable_radio" id="citizenship">{{ $user->citizenship }}</span>
                                                                    </div>
                                                                </div>

                                                                <div class="profile-info-row">
                                                                    <div class="profile-info-name"> RESIDENTIAL ADDRESS: </div>
                                                                    <div class="profile-info-value">
                                                                        <span class="editable" id="residential_address">{{ $user->residential_address }}</span>
                                                                    </div>
                                                                </div>

                                                                <div class="profile-info-row">
                                                                    <div class="profile-info-name"> PERMANENT ADDRESS: </div>
                                                                    <div class="profile-info-value">
                                                                        <span class="editable" id="permanent_address">{{ $user->permanent_address }}</span>
                                                                    </div>
                                                                </div>

                                                                <div class="profile-info-row">
                                                                    <div class="profile-info-name"> ZIP CODE: </div>
                                                                    <div class="profile-info-value">
                                                                        <span class="editable" id="zip_code">{{ $user->zip_code }}</span>
                                                                    </div>
                                                                </div>

                                                                <div class="profile-info-row">
                                                                    <div class="profile-info-name"> TELEPHONE NO: </div>
                                                                    <div class="profile-info-value">
                                                                        <span class="editable" id="telephone_no">{{ $user->telephone_no }}</span>
                                                                    </div>
                                                                </div>

                                                                <div class="profile-info-row">
                                                                    <div class="profile-info-name"> MOBILE NO: </div>
                                                                    <div class="profile-info-value">
                                                                        <span class="editable" id="mobile_no">{{ $user->mobile_no }}</span>
                                                                    </div>
                                                                </div>

                                                                <div class="profile-info-row">
                                                                    <div class="profile-info-name"> EMAIL ADDRESS: </div>
                                                                    <div class="profile-info-value">
                                                                        <span class="editable" id="email_address">{{ $user->email_address}}</span>
                                                                    </div>
                                                                </div>

                                                                <div class="profile-info-row">
                                                                    <div class="profile-info-name"> AREA OF ASSIGNMENT(Province): </div>
                                                                    <div class="profile-info-value">
                                                                        <span class="@if(Auth::user()->usertype)editable_select @endif" id="province">{{ hrhController::hrh_province($user->province) }}</span>
                                                                    </div>
                                                                </div>

                                                                <div class="profile-info-row">
                                                                    <div class="profile-info-name"> AREA OF ASSIGNMENT(Municipality): </div>
                                                                    <div class="profile-info-value">
                                                                        <span class="@if(Auth::user()->usertype)editable_select @endif" id="municipality">{{ hrhController::hrh_municipality($user->municipality) }}</span>
                                                                    </div>
                                                                </div>

                                                                <div class="profile-info-row">
                                                                    <div class="profile-info-name"> DATE OF ENTRANCE TO DUTY: </div>
                                                                    <div class="profile-info-value">
                                                                        <span class="@if(Auth::user()->usertype)editable_datepicker @endif" id="date_of_entrance_to_duty">{{ $user->date_of_entrance_to_duty }}</span>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>

                                                    </div><!-- /.col -->
                                                </div><!-- /.row -->

                                            </div><!-- /#personal information -->

                                            <div id="family_background" class="tab-pane fade">
                                                <div class="row">
                                                    <div class="col-xs-12">
                                                        <h3 class="lighter block green">Family Background</h3>
                                                        <div class="profile-user-info">
                                                            <div class="profile-user-info profile-user-info-striped">
                                                                <div class="profile-info-row">
                                                                    <div class="profile-info-name">Spouse Surname:</div>
                                                                    <div class="profile-info-value">
                                                                        <span class="editable" id="spouse_lname">{{ $user->spouse_lname }}</span>
                                                                    </div>
                                                                </div>

                                                                <div class="profile-info-row">
                                                                    <div class="profile-info-name">Spouse Firstname:</div>
                                                                    <div class="profile-info-value">
                                                                        <span class="editable" id="spouse_fname">{{ $user->spouse_fname }}</span>
                                                                    </div>
                                                                </div>

                                                                <div class="profile-info-row">
                                                                    <div class="profile-info-name">Spouse Middlename:</div>
                                                                    <div class="profile-info-value">
                                                                        <span class="editable" id="spouse_mname">{{ $user->spouse_lname }}</span>
                                                                    </div>
                                                                </div>

                                                                <div class="profile-info-row">
                                                                    <div class="profile-info-name">Spouse Name Extension(JR,,SR):</div>
                                                                    <div class="profile-info-value">
                                                                        <span class="editable_select" id="spouse_nextension">{{ hrhController::hrh_extension($user->spouse_nextension) }}</span>
                                                                    </div>
                                                                </div>

                                                                <div class="profile-info-row">
                                                                    <div class="profile-info-name">Occupation:</div>
                                                                    <div class="profile-info-value">
                                                                        <span class="editable" id="spouse_occupation">{{ $user->spouse_occupation }}</span>
                                                                    </div>
                                                                </div>

                                                                <div class="profile-info-row">
                                                                    <div class="profile-info-name">Employer/Business Name:</div>
                                                                    <div class="profile-info-value">
                                                                        <span class="editable" id="spouse_business_name">{{ $user->spouse_business_name }}</span>
                                                                    </div>
                                                                </div>

                                                                <div class="profile-info-row">
                                                                    <div class="profile-info-name">Telephone No:</div>
                                                                    <div class="profile-info-value">
                                                                        <span class="editable" id="spouse_telephone_no">{{ $user->spouse_telephone_no }}</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <h5 class="lighter block blue">Name of children</h5>
                                                        <div class="profile-user-info">
                                                            <div class="profile-user-info profile-user-info-striped">
                                                                <div id="children_append">
                                                                    <div class="profile-info-row">
                                                                        <div class="profile-info-name warning"><b><i>NAME of CHILDREN (Write full name):</i></b></div>
                                                                        <div class="profile-info-value pull-left">
                                                                            <span class="editable_picker"><b><i>DATE OF BIRTH (mm/dd/yyyy)</i></b></span>
                                                                        </div>
                                                                    </div>
                                                                    <?php $childrenCount = 0; ?>
                                                                    @foreach($children as $row)
                                                                    <?php $childrenCount++; ?>
                                                                    <div class="profile-info-row">
                                                                        <div class="profile-info-name editable children_name" id="{{ 'childrenName'.$childrenCount.'c_id'.$row->id }}">{{ $row->name }}</div>
                                                                        <div class="profile-info-value pull-left">
                                                                            <span class="editable_datepicker children_picker update_children" id="{{ 'childrenValue'.$childrenCount.'c_id'.$row->id }}">{{ $row->date_of_birth }}</span>
                                                                        </div>
                                                                    </div>
                                                                    @endforeach
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div style="padding-right: 3%;padding-top: 1%">
                                                            <a href="#" class="pull-right red" onclick="addChildren();"><i class="fa fa-plus"></i> Add Children</a>
                                                        </div>

                                                        <h5 class="lighter block blue">Name of parent</h5>
                                                        <div class="profile-user-info">
                                                            <div class="profile-user-info profile-user-info-striped">
                                                                <div class="profile-info-row">
                                                                    <div class="profile-info-name">Father Lastname:</div>
                                                                    <div class="profile-info-value">
                                                                        <span class="editable" id="father_lname">{{ $user->father_lname }}</span>
                                                                    </div>
                                                                </div>

                                                                <div class="profile-info-row">
                                                                    <div class="profile-info-name">Father Firstname:</div>
                                                                    <div class="profile-info-value">
                                                                        <span class="editable" id="father_fname">{{ $user->father_fname }}</span>
                                                                    </div>
                                                                </div>

                                                                <div class="profile-info-row">
                                                                    <div class="profile-info-name">Father Middle Name:</div>
                                                                    <div class="profile-info-value">
                                                                        <span class="editable" id="father_mname">{{ $user->father_mname }}</span>
                                                                    </div>
                                                                </div>

                                                                <div class="profile-info-row">
                                                                    <div class="profile-info-name">Name Extension(JR,,SR):</div>
                                                                    <div class="profile-info-value">
                                                                        <span class="editable_select" id="father_nextension">{{ hrhController::hrh_extension($user->father_nextension ) }}</span>
                                                                    </div>
                                                                </div>

                                                                <div class="profile-info-row">
                                                                    <div class="profile-info-name">Mother Maidenname:</div>
                                                                    <div class="profile-info-value">
                                                                        <span class="editable" id="mother_lname">{{ $user->mother_lname}}</span>
                                                                    </div>
                                                                </div>

                                                                <div class="profile-info-row">
                                                                    <div class="profile-info-name">Mother Firstname:</div>
                                                                    <div class="profile-info-value">
                                                                        <span class="editable" id="mother_fname">{{ $user->mother_fname }}</span>
                                                                    </div>
                                                                </div>

                                                                <div class="profile-info-row">
                                                                    <div class="profile-info-name">Mother Middle Name:</div>
                                                                    <div class="profile-info-value">
                                                                        <span class="editable" id="mother_mname">{{ $user->mother_mname }}</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div> <!-- PARENT -->
                                                        <div class="hr hr-8 dotted"></div>

                                                    </div><!-- /.col -->
                                                </div><!-- /.row -->
                                            </div><!-- /#family background -->
                                            <div id="educational_background" class="fade tab-pane">
                                                <div class="row">
                                                    <div class="col-xs-12">
                                                        <h3 class="lighter block green">Educational Background</h3>
                                                        <div class="hr dotted hr-8"></div>
                                                        <?php $education_exist = array(); ?>
                                                        @foreach($educationalBackground as $row)
                                                            <?php $education_exist[] = $row->education_type; ?>
                                                            <h5 class="lighter block blue">
                                                                {{ hrhController::hrh_education_type($row->education_type) }}
                                                            </h5>
                                                            <div class="profile-user-info">
                                                                <div class="profile-user-info profile-user-info-striped" id="{{ 'educationType'.$row->education_type }}">
                                                                    <div class="profile-info-row">
                                                                        <div class="profile-info-name">Name of School(Write in full)</div>
                                                                        <div class="profile-info-value">
                                                                            <span class="editable update_eb" id="{{ 'nmulocname_of_schoolebid'.$row->id }}">{{ $row->name_of_school }}</span>
                                                                        </div>
                                                                    </div>

                                                                    <div class="profile-info-row">
                                                                        <div class="profile-info-name">Education/degree/course(Write in full):</div>
                                                                        <div class="profile-info-value">
                                                                            <span class="editable update_eb" id="{{ 'nmulocdegreeebid'.$row->id }}">{{ $row->degree }}</span>
                                                                        </div>
                                                                    </div>

                                                                    <div class="profile-info-row">
                                                                        <div class="profile-info-name">Period of attendance from:</div>
                                                                        <div class="profile-info-value">
                                                                            <span class="editable_select update_eb" id="{{ 'nmulocperiod_fromebid'.$row->id }}">{{ $row->period_from }}</span>
                                                                        </div>
                                                                    </div>

                                                                    <div class="profile-info-row">
                                                                        <div class="profile-info-name">Period of attendance to::</div>
                                                                        <div class="profile-info-value">
                                                                            <span class="editable_select update_eb" id="{{ 'nmulocperiod_toebid'.$row->id }}">{{ $row->period_to }}</span>
                                                                        </div>
                                                                    </div>

                                                                    <div class="profile-info-row">
                                                                        <div class="profile-info-name">Highest level/units earned(if not graduated):</div>
                                                                        <div class="profile-info-value">
                                                                            <span class="editable update_eb" id="{{ 'nmulocunits_earnedebid'.$row->id }}">{{ $row->units_earned }}</span>
                                                                        </div>
                                                                    </div>

                                                                    <div class="profile-info-row">
                                                                        <div class="profile-info-name">Year Graduated:</div>
                                                                        <div class="profile-info-value">
                                                                            <span class="editable_select update_eb" id="{{ 'nmulocyear_graduatedebid'.$row->id }}">{{ $row->year_graduated }}</span>
                                                                        </div>
                                                                    </div>

                                                                    <div class="profile-info-row">
                                                                        <div class="profile-info-name">Scholarship/academic honors receive:</div>
                                                                        <div class="profile-info-value">
                                                                            <span class="editable update_eb" id="{{ 'nmulocscholarshipebid'.$row->id }}">{{ $row->scholarship }}</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                        @foreach($education_type as $eduType)
                                                            @if(!in_array($eduType->id,$education_exist))
                                                                <h5 class="lighter block blue">
                                                                    {{ $eduType->description }}
                                                                </h5>
                                                                <div class="profile-user-info" id="{{ $eduType->description.date('Y-').$user->id.date('mdHis') }}">
                                                                    <div class="profile-user-info profile-user-info-striped" id="{{ 'educationType'.$eduType->id }}">
                                                                        <div class="profile-info-row">
                                                                            <div class="profile-info-name">Name of School(Write in full)</div>
                                                                            <div class="profile-info-value">
                                                                                <span class="editable new_eb" id="{{ str_replace(['/',' '],'',$eduType->description).'nmulocname_of_school' }}"></span>
                                                                            </div>
                                                                        </div>

                                                                        <div class="profile-info-row">
                                                                            <div class="profile-info-name">Education/degree/course(Write in full):</div>
                                                                            <div class="profile-info-value">
                                                                                <span class="editable new_eb" id="{{ str_replace(['/',' '],'',$eduType->description).'nmulocdegree' }}"></span>
                                                                            </div>
                                                                        </div>

                                                                        <div class="profile-info-row">
                                                                            <div class="profile-info-name">Period of attendance from:</div>
                                                                            <div class="profile-info-value">
                                                                                <span class="editable_select new_eb" id="{{ str_replace(['/',' '],'',$eduType->description).'nmulocperiod_from' }}"></span>
                                                                            </div>
                                                                        </div>

                                                                        <div class="profile-info-row">
                                                                            <div class="profile-info-name">Period of attendance to::</div>
                                                                            <div class="profile-info-value">
                                                                                <span class="editable_select new_eb" id="{{ str_replace(['/',' '],'',$eduType->description).'nmulocperiod_to' }}"></span>
                                                                            </div>
                                                                        </div>

                                                                        <div class="profile-info-row">
                                                                            <div class="profile-info-name">Highest level/units earned(if not graduated):</div>
                                                                            <div class="profile-info-value">
                                                                                <span class="editable new_eb" id="{{ str_replace(['/',' '],'',$eduType->description).'nmulocunits_earned' }}"></span>
                                                                            </div>
                                                                        </div>

                                                                        <div class="profile-info-row">
                                                                            <div class="profile-info-name">Year Graduated:</div>
                                                                            <div class="profile-info-value">
                                                                                <span class="editable_select new_eb" id="{{ str_replace(['/',' '],'',$eduType->description).'nmulocyear_graduated' }}"></span>
                                                                            </div>
                                                                        </div>

                                                                        <div class="profile-info-row">
                                                                            <div class="profile-info-name">Scholarship/academic honors receive:</div>
                                                                            <div class="profile-info-value">
                                                                                <span class="editable new_eb" id="{{ str_replace(['/',' '],'',$eduType->description).'nmulocscholarship' }}"></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            @endif
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div><!-- /#education background -->

                                            <div id="service_eligibility" class="fade tab-pane">
                                                <div class="row">
                                                    <div class="col-xs-12">
                                                        <h3 class="lighter block green">Civil Service Eligibility</h3>
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
                                                                <tbody id="service_append">
                                                                    <?php $serviceCount = 0; ?>
                                                                    @foreach($serviceEligibility as $row)
                                                                    <?php $serviceCount++; ?>
                                                                        <tr>
                                                                            <td class="center"><span class="editable update_service" id="{{ 'career_service'.$serviceCount.'sid'.$row->id }}" >{{ $row->career_service }}</span></td>
                                                                            <td class="center"><span class="editable update_service" id="{{ 'rating'.$serviceCount.'sid'.$row->id }}" >{{ $row->rating }}</span></td>
                                                                            <td class="center"><span class="editable_datepicker update_service" id="{{ 'date_of_examination'.$serviceCount.'sid'.$row->id }}" >{{ $row->date_of_examination }}</span></td>
                                                                            <td><span class="editable update_service" id="{{ 'place_of_examination'.$serviceCount.'sid'.$row->id }}" >{{ $row->place_of_examination }}</span></td>
                                                                            <td class="center"><span class="editable update_service" id="{{ 'license_number'.$serviceCount.'sid'.$row->id }}" >{{ $row->license_number }}</span></td>
                                                                            <td class="center"><span class="editable_datepicker update_service" id="{{ 'date_of_validity'.$serviceCount.'sid'.$row->id }}" >{{ $row->date_of_validity }}</span></td>
                                                                        </tr>
                                                                    @endforeach
                                                                </tbody>
                                                            </table><br>
                                                            <a href="#" class="pull-right red" onclick="addService()"><i class="fa fa-plus"></i> Add Service Eligibility</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- /#Service Eligibility -->

                                            <div id="work_experience" class="fade tab-pane">
                                                <div class="row">
                                                    <div class="col-xs-12">
                                                        <h3 class="lighter block green">Work Experience</h3>
                                                        <div class="form-group table-responsive">
                                                            <table class="table table-list table-hover table-striped">
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
                                                                <tbody id="work_append">
                                                                <?php $workCount = 0; ?>
                                                                @foreach($workExperience as $row)
                                                                <?php $workCount++; ?>
                                                                    <tr>
                                                                        <td class="col-xs-2" colspan="2"><span class="editable_daterangepicker update_work" id="{{ 'inclusive_dates'.$workCount.'wid'.$row->id }}">{{ $row->inclusive_dates }}</span></td>
                                                                        <td class="col-xs-2"><span class="editable update_work" id="{{ 'position'.$workCount.'wid'.$row->id  }}">{{ $row->position }}</span></td>
                                                                        <td class="col-xs-2"><span class="editable update_work" id="{{ 'company'.$workCount.'wid'.$row->id  }}">{{ $row->company }}</span></td>
                                                                        <td class="col-xs-2"><span class="editable update_work" id="{{ 'monthly_salary'.$workCount.'wid'.$row->id  }}">{{ $row->monthly_salary }}</span></td>
                                                                        <td class="col-xs-2"><span class="editable update_work" id="{{ 'pay_grade'.$workCount.'wid'.$row->id  }}">{{ $row->pay_grade }}</span></td>
                                                                        <td class="col-xs-1"><span class="editable update_work" id="{{ 'status_appointment'.$workCount.'wid'.$row->id  }}">{{ $row->status_appointment }}</span></td>
                                                                        <td class="col-xs-1"><span class="editable update_work" id="{{ 'gov_service'.$workCount.'wid'.$row->id }}">{{ $row->gov_service }}</span></td>
                                                                    </tr>
                                                                @endforeach
                                                                </tbody>
                                                            </table>
                                                            <a href="#" class="pull-right red" onclick="addWork()"><i class="fa fa-plus"></i> Add Work Experience</a>
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
        var todayDate = new Date();
        var month = todayDate.getMonth()+1;
        var day = todayDate.getDate();
        var year = todayDate.getFullYear()-20;
        var hours = todayDate.getDate();
        var minutes = todayDate.getMinutes();
        var seconds = todayDate.getSeconds();
        var childrenName = 0;
        var childrenValue = 0;
        var childrenTag = ['childrenName','childrenValue'];
        var childrenEditable = ['text','radiolist'];
        var childrenCount = "<?php echo $childrenCount; ?>";
        var childrenLimit = childrenCount;

        var $hrhId = 0;
        function filter_hrh(hrhId){
            $hrhId = hrhId.val();
            var provinceElement = $('#province');
            filter_province($hrhId,true);
            provinceElement.val('').trigger('change');
            provinceElement.html('').select2({data: {id:null, text: null}});
            provinceElement.append(
                    new Option("","", true, true)
            ).trigger('change');

            $.each(<?php echo $province?>,function(index,query){
                if($hrhId == query.hrh_type){
                    provinceElement.append(
                            new Option(query.description, query.id, true, true)
                    ).trigger('change');
                }
            });

        }

        var $provinceId = 0;
        function filter_province(provinceId,automatic = null){
            if(automatic)
                $provinceId = provinceId;
            else
                $provinceId = provinceId.val();

            var municipalityElement = $('#municipality');
            municipalityElement.val('').trigger('change');
            municipalityElement.html('').select2({data: {id:null, text: null}});
            municipalityElement.append(
                    new Option("","", true, true)
            ).trigger('change');

            $.each(<?php echo $municipality?>,function(x,query){
                if($provinceId == query.province){
                    municipalityElement.append(
                            new Option(query.description, query.id, true, true)
                    ).trigger('change');
                }
            });

        }

        function addChildren(){
            if(childrenLimit < 10)
            {
                var todayDate = new Date();
                var childrenFade = "children"+todayDate.getFullYear()+"<?php echo $user->id; ?>"+todayDate.getTime()+"<?php echo csrf_token(); ?>";
                event.preventDefault();
                var childrenAppend =
                        '<div class="profile-info-row" id="childrenFade'+childrenFade+'">\
                            <div class="profile-info-name editable_name" id="'+'childrenName'+childrenName+'"></div>\
                            <div class="profile-info-value pull-left">\
                                <span class="editable_picker" id="'+'childrenValue'+childrenValue+'"></span>\
                            </div>\
                        </div>';
                $("#children_append").append(childrenAppend);
                $("#childrenFade"+childrenFade).hide().fadeIn();
                $.each(childrenTag,function(index){
                    $('#'+childrenTag[index]+childrenName).editable({
                        type: childrenEditable[index],
                        name: this.id,
                        source: [{value: 'Male', text: 'Male'}],
                        validate: function(value) {
                            var string = this.className;
                            var json,unique_row;
                            var url = "<?php echo asset('updateChildren'); ?>";
                            if(string.includes('editable_name')){
                                unique_row = $(this).parent().attr('id').split('childrenFade')[1];
                                json = {
                                     "userId" : "<?php echo $user->id; ?>",
                                     "column" : 'name',
                                     "value" : value,
                                     "unique_row" : unique_row
                                     };
                            } else {
                                var date_picker = $("#"+this.id+"input").val();
                                var element = $("#"+this.id);
                                unique_row = $(this).parents(':eq(1)').attr('id').split('childrenFade')[1];
                                element.removeClass('editable-empty');
                                element.html(date_picker);
                                json = {
                                    "serviceId" : "",
                                    "userId" : "<?php echo $user->id; ?>",
                                    "column" : 'date_of_birth',
                                    "value" : date_picker,
                                    "unique_row" : unique_row
                                };
                            }
                            $.post(url,json,function(result){
                                console.log(result);
                            });
                        },
                        error: function(errors) {
                            alert('slow internet connection..');
                        }
                    });
                });
                childrenName++;
                childrenValue++;
                childrenLimit++;
            } else {
                event.preventDefault();
                alert('you reach the limit');
            }
        }

        var serviceLimit= "<?php echo $serviceCount; ?>";
        var serviceEditable = ['text','radiolist'];
        var serviceTag = ['editable_service','editable_datepicker_service'];
        function addService(){
            if(serviceLimit < 10){
                serviceLimit++;
                var todayDate = new Date();
                var serviceFade = "service"+todayDate.getFullYear()+"<?php echo $user->id; ?>"+todayDate.getTime()+"<?php echo csrf_token(); ?>";
                event.preventDefault();
                var serviceAppend =
                        '<tr id="serviceFade'+serviceFade+'">\
                            <td class="center"><span class="editable_service" id="career_service'+serviceLimit+'"></span></td>\
                            <td class="center"><span class="editable_service" id="rating'+serviceLimit+'"></span></td>\
                            <td class="center"><span class="editable_datepicker_service" id="date_of_examination'+serviceLimit+'"></span></td>\
                            <td><span class="editable_service" id="place_of_examination'+serviceLimit+'"></span></td>\
                            <td class="center"><span class="editable_service" id="license_number'+serviceLimit+'"></span></td>\
                            <td class="center"><span class="editable_datepicker_service" id="date_of_validity'+serviceLimit+'"></span></td>\
                        </tr>';

                $("#service_append").append(serviceAppend);
                $("#serviceFade"+serviceFade).hide().fadeIn();

                $.each(serviceEditable,function(index){
                    $('.'+serviceTag[index]).editable({
                        type: serviceEditable[index],
                        name: this.id,
                        source: [{value: 'Male', text: 'Male'}],
                        validate: function(value) {
                            var string = this.className;
                            var json,unique_row;
                            var url = "<?php echo asset('updateService'); ?>";
                            unique_row = $(this).parents(':eq(1)').attr('id').split('serviceFade')[1];
                            if(string.includes('editable_service')){
                                json = {
                                    "userId" : "<?php echo $user->id; ?>",
                                    "column" : this.id.replace(/\d+/g, ''),
                                    "value" : value,
                                    "unique_row" : unique_row
                                };
                            }
                            else if(string.includes('editable_datepicker_service')) {
                                var serviceValue = $("#"+this.id+"input").val();
                                var element = $("#"+this.id);
                                element.removeClass('editable-empty');
                                element.html(serviceValue);
                                json = {
                                    "userId" : "<?php echo $user->id; ?>",
                                    "column" : this.id.replace(/\d+/g, ''),
                                    "value" : serviceValue,
                                    "unique_row" : unique_row
                                };
                            }

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
            else {
                event.preventDefault();
                alert('you reach the limit');
            }
        }

        var workLimit= "<?php echo $workCount; ?>";
        var workEditable = ['text','radiolist'];
        var workTag = ['editable_work','editable_daterangepicker_work'];
        function addWork(){
            if(workLimit < 10){
                workLimit++;
                var todayDate = new Date();
                var workFade = "work"+todayDate.getFullYear()+"<?php echo $user->id; ?>"+todayDate.getTime()+"<?php echo csrf_token(); ?>";
                event.preventDefault();
                var workAppend =
                        '<tr id="workFade'+workFade+'">\
                            <td class="col-xs-2" colspan="2"><span class="editable_daterangepicker_work addWork" id="inclusive_dates'+workLimit+'"></span></td>\
                            <td class="col-xs-2"><span class="editable_work addWwork" id="position'+workLimit+'"></span></td>\
                            <td class="col-xs-2"><span class="editable_work addWwork" id="company'+workLimit+'"></span></td>\
                            <td class="col-xs-2"><span class="editable_work addWwork" id="monthly_salary'+workLimit+'"></span></td>\
                            <td class="col-xs-2"><span class="editable_work addWwork" id="pay_grade'+workLimit+'"></span></td>\
                            <td class="col-xs-1"><span class="editable_work addWwork" id="status_appointment'+workLimit+'"></span></td>\
                            <td class="col-xs-1"><span class="editable_work addWwork" id="gov_service'+workLimit+'"></span></td>\
                        </tr>';

                $("#work_append").append(workAppend);
                $("#workFade"+workFade).hide().fadeIn();

                $.each(workEditable,function(index){
                    $('.'+workTag[index]).editable({
                        type: workEditable[index],
                        name: this.id,
                        source: [{value: 'Male', text: 'Male'}],
                        validate: function(value) {
                            var string = this.className;
                            var json,unique_row;
                            var url = "<?php echo asset('updateWork'); ?>";
                            unique_row = $(this).parents(':eq(1)').attr('id').split('workFade')[1];
                            if(string.includes('editable_work')){
                                json = {
                                    "userId" : "<?php echo $user->id; ?>",
                                    "column" : this.id.replace(/\d+/g, ''),
                                    "value" : value,
                                    "unique_row" : unique_row
                                };
                            }
                            else if(string.includes('editable_daterangepicker_work')){
                                console.log('work_editable');
                                inclusive_dates = $('#'+this.id.split("wid")[0]+"input").val();
                                $('#'+this.id).html(inclusive_dates);
                                json = {
                                    "workId" : this.id.split('wid')[1],
                                    "userId" : "<?php echo $user->id; ?>",
                                    "column" : this.id.split('wid')[0].replace(/\d+/g, ''),
                                    "value" : inclusive_dates,
                                    "unique_row" : unique_row
                                };
                                url = "<?php echo asset('updateWork'); ?>";
                            }
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
            else {
                event.preventDefault();
                alert('you reach the limit');
            }
        }

        var color = {
            blue:'blue',
            orange:'orange',
            green:'green',
            red:'red',
            purple:'purple'
        };

        var removeColor = 'green';
        $(".change-status").each(function(index){
            var href = $(this).attr('href');
            $("a[href='"+href+"']").on("click",function(){
                soeId = this.href.split('#soe')[1];
                var appendElement = $("#soe");
                appendElement.html($(this).data('description'));
                appendElement.removeClass(removeColor);
                appendElement.addClass($(this).data('color'));

                appendElement.siblings().removeClass(removeColor);
                appendElement.siblings().addClass($(this).data('color'));
                removeColor = $(this).data('color');

                url = "<?php echo asset('updateUser'); ?>";
                json = {
                    "id" : "<?php echo $user->id; ?>",
                    "column" : 'status_of_employment',
                    "value" : soeId
                };
                $.post(url,json,function(){});
            });
        });

        jQuery(function($) {

            $('.rating').raty({
                'half': true,
                'starType' : 'i',
                'score' : 4
            });

            //editables on first profile page
            // inline or popup
            $.fn.editable.defaults.mode = 'popup';
            $.fn.editableform.loading = "<div class='editableform-loading'><i class='ace-icon fa fa-spinner fa-spin fa-2x light-blue'></i></div>";
            $.fn.editableform.buttons = '<button type="submit" class="btn btn-info editable-submit"><i class="ace-icon fa fa-check"></i></button>'+
                                        '<button type="button" class="btn editable-cancel"><i class="ace-icon fa fa-times"></i></button>';


            //another option is using modals
            $('#avatar_picture').on('click', function(){
                var last_gritter;
                var modal =
                    '<div class="modal fade">\
                      <div class="modal-dialog">\
                       <div class="modal-content">\
                        <div class="modal-header">\
                            <button type="button" class="close" data-dismiss="modal">&times;</button>\
                            <h4 class="blue">Change Picture</h4>\
                        </div>\
                        \
                        <form class="no-margin" id="uploadPicture" enctype="multipart/form-data">\
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
                    btn_choose:'Click to choose new picture',
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
                    if(!file.data('ace_input_files')) {
                        last_gritter = $.gritter.add({
                            title: 'no image!',
                            text: 'Please choose a jpg|gif|png image!',
                            class_name: 'gritter-error gritter-center'
                        });
                        console.log($("input[name='file-input']").prop('files')[0]);
                        return false;
                    }

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
                        //if(thumb) $('#avatar2').get(0).src = thumb;

                        //process upload
                        var url = "<?php echo asset('/uploadPicture'); ?>";
                        var file_data = form.find('input[type=file]').eq(0).prop('files')[0];

                        var form_data = new FormData();
                        form_data.append('picture', file_data);
                        form_data.append('id',"<?php echo $user->id ?>");
                        $.ajaxSetup(
                            {
                                headers:
                                    {
                                        'X-CSRF-Token': "<?php echo csrf_token(); ?>"
                                    }
                            });
                        $.ajax({
                            url:url,
                            data: form_data,
                            type: 'POST',
                            contentType: false, // The content type used when sending data to the server.
                            cache: false, // To unable request pages to be cached
                            processData: false,
                            success: function(result) {
                                console.log(result);
                                last_gritter = $.gritter.add({
                                    title: 'Picture Updated!',
                                    text: 'Uploading to server.. successfully save..',
                                    class_name: 'gritter-info gritter-center',
                                });
                                $('#avatar_picture').get(0).src = "<?php echo asset('public/upload_picture/picture')?>"+result.split("upload_picture/picture")[1];
                                $("#note").remove();
                            }
                        });
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
                });
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
            function query_province($hrhId = null){
                var province = [];
                jQuery.map(<?php echo $province; ?>,function(obj){
                    if(obj.hrh_type == $hrhId){
                        province.push({ id: obj.id, hrhType: obj.hrh_type, text: obj.description });
                    }
                });
                return province;
            }
            function query_municipality($provinceId = null){
                var municipality = [];
                jQuery.map(<?php echo $municipality; ?>,function(obj){
                    if(obj.province == $provinceId){
                        municipality.push({ id: obj.id, province: obj.province, text: obj.description });
                    }
                });
                return municipality;
            }
            function source_func($hrhId = null,$provinceId = null){
                var hrhType = [];
                $.each(<?php echo $hrh_type; ?>, function(x, data) {
                    hrhType.push({id: data.id, text: data.description});
                });

                var nameExtension = [];
                $.each(<?php echo $name_extension;?>,function(x,data){
                    nameExtension.push({id: data.id, text: data.suffix});
                });

                var year = [];
                for(var i=new Date().getFullYear(); i>=1970; i--){
                    year.push({ id: i, text: i });
                }

                var province = [];
                var municipality = [];
                <?php if(Auth::user()->usertype): ?>
                    province = query_province($hrhId ? $hrhId : 0);
                    municipality = query_municipality($provinceId ? $provinceId : 0);
                <?php endif; ?>

                return [
                    {
                        "hrh_type": hrhType,
                        "name_extension": nameExtension,
                        "spouse_nextension": nameExtension,
                        "father_nextension": nameExtension,
                        "province": province,
                        "municipality" : municipality,
                        "year": year
                    }
                ];
            }

            var source_stored = source_func(<?php echo $user->hrh_type ?>,"<?php echo $user->province ?>");
            $(".editable_select").each(function(index) {
                var source = [];
                if(this.id.includes('year_graduated') || this.id.includes('period_from') || this.id.includes('period_to')){
                    source = source_stored[0]["year"];
                } else {
                    source = source_stored[0][this.id];
                }
                $('#'+this.id).editable({
                    name : this.id,
                    type: 'select2',
                    source: source,
                    select2: {
                        width: 300
                    },
                    success: function(data, value) {
                        var string = this.className;
                        var json,url;

                        if(string.includes('update_eb')){
                            json = {
                                "ebid" : this.id.split('nmuloc')[1].split('ebid')[1],
                                "userid" : "<?php echo $user->id; ?>",
                                "column" : this.id.split('nmuloc')[1].split('ebid')[0],
                                "education_type" : $(this).parents(':eq(2)').attr('id').split('educationType')[1],
                                "value" : value
                            };
                            url = "<?php echo asset('updateEducationalBackground'); ?>";
                        }
                        else if(string.includes('new_eb')){
                            json = {
                                "userid" : "<?php echo $user->id; ?>",
                                "column" : this.id.split('nmuloc')[1].split('ebid')[0],
                                "education_type" : $(this).parents(':eq(2)').attr('id').split('educationType')[1],
                                "unique_row" : $(this).parents(':eq(3)').attr('id'),
                                "value" : value
                            };
                            url = "<?php echo asset('updateEducationalBackground'); ?>";
                        }
                        else {
                            url = "<?php echo asset('updateUser'); ?>";
                            json = {
                                "id" : "<?php echo $user->id; ?>",
                                "column" : this.id,
                                "value" : value
                            };
                        }
                        $.post(url,json,function(result){
                            if(json.column == 'hrh_type'){
                                province_filter(url,value);
                                source_stored = query_province(value);
                                municipality_filter(url,source_stored[0].id);
                            }
                            else if(json.column == 'province'){
                                municipality_filter(url,value);
                            }
                            console.log(result);
                        });

                        <?php if(!Auth::user()->usertype): ?>
                        if(this.id == 'hrh_type'){
                            $(".title-desc_hrhtype").html(result);
                        }
                        <?php endif; ?>

                    },
                    error: function(errors) {
                        alert('slow internet connection..');
                    }
                });
            });

            function province_filter(url,$hrhId){
                source_stored = query_province($hrhId);

                var element = $("#province");
                var province = element.removeAttr('id').get(0);
                $(province).clone().attr('id', 'province').text('Select Province').editable({
                    type: 'select2',
                    value: null,
                    source: source_stored,
                    select2: {
                        'width': 300
                    },
                    success: function (data, value) {
                        json = {
                            "id": "<?php echo $user->id; ?>",
                            "column": 'province',
                            "value": value
                        };
                        $.post(url, json, function (result) {
                            municipality_filter(url,value);
                        });
                    }
                }).insertAfter(province);
                $(province).remove();
            }

            function municipality_filter(url,$hrhId){
                source_stored = query_municipality($hrhId);

                var element = $("#municipality");
                var municipality = element.removeAttr('id').get(0);
                $(municipality).clone().attr('id', 'municipality').text('Select Municipality').editable({
                    type: 'select2',
                    value: null,
                    source: source_stored,
                    select2: {
                        'width': 300
                    },
                    success: function (data, value) {
                        json = {
                            "id": "<?php echo $user->id; ?>",
                            "column": 'municipality',
                            "value": value
                        };
                        $.post(url, json, function (result) {});
                    }
                }).insertAfter(municipality);//insert it after previous instance
                $(municipality).remove();//remove previous instance
            }


            $(".editable").each(function() {
                $('#'+this.id).editable({
                    type: 'text',
                    name: this.id,
                    emptytext: "Not Applicable",
                    success: function(data, value) {
                        var string = this.className;
                        var json,url;
                        if(string.includes('children_name')){
                            json = {
                                "childrenId" : this.id.split('c_id')[1],
                                "userId" : "<?php echo $user->id; ?>",
                                "column" : 'name',
                                "value" : value
                            };
                            url = "<?php echo asset('updateChildren'); ?>";
                        }
                        else if(string.includes('update_eb')){
                            json = {
                                "ebid" : this.id.split('nmuloc')[1].split('ebid')[1],
                                "userid" : "<?php echo $user->id; ?>",
                                "column" : this.id.split('nmuloc')[1].split('ebid')[0],
                                "education_type" : $(this).parents(':eq(2)').attr('id').split('educationType')[1],
                                "value" : value
                            };
                            url = "<?php echo asset('updateEducationalBackground'); ?>";
                        }
                        else if(string.includes('new_eb')){
                            json = {
                                "userid" : "<?php echo $user->id; ?>",
                                "column" : this.id.split('nmuloc')[1].split('ebid')[0],
                                "education_type" : $(this).parents(':eq(2)').attr('id').split('educationType')[1],
                                "unique_row" : $(this).parents(':eq(3)').attr('id'),
                                "value" : value
                            };
                            url = "<?php echo asset('updateEducationalBackground'); ?>";
                        }
                        else if(string.includes('update_service')){
                            json = {
                                "serviceId" : this.id.split('sid')[1],
                                "userId" : "<?php echo $user->id; ?>",
                                "column" : this.id.split('sid')[0].replace(/\d+/g, ''),
                                "value" : value
                            };
                            url = "<?php echo asset('updateService'); ?>";
                        }
                        else if(string.includes('update_work')){
                            json = {
                                "workId" : this.id.split('wid')[1],
                                "userId" : "<?php echo $user->id; ?>",
                                "column" : this.id.split('wid')[0].replace(/\d+/g, ''),
                                "value" : value
                            };
                            url = "<?php echo asset('updateWork'); ?>";
                        }
                        else {
                            json = {
                                "id" : "<?php echo $user->id; ?>",
                                "column" : this.id,
                                "value" : value
                            };
                            url = "<?php echo asset('updateUser'); ?>";
                        }
                        $.post(url,json,function(result){
                            console.log(result);
                        });
                    },
                    error: function(errors) {
                        alert('slow internet connection..');
                    }
                });
            });

            $(".editable_daterangepicker").each(function(index){
                $('#'+this.id).editable({
                    type: 'radiolist',
                    name: this.id,
                    source: [{value:'',text:''}],
                    validate: function(value) {
                        var string = this.className;
                        var inclusive_dates,json,url;
                        if(string.includes("update_work")){
                            inclusive_dates = $('#'+this.id.split("wid")[0]+"input").val();
                            $('#'+this.id).html(inclusive_dates);
                            json = {
                                "workId" : this.id.split('wid')[1],
                                "userId" : "<?php echo $user->id; ?>",
                                "column" : this.id.split('wid')[0].replace(/\d+/g, ''),
                                "value" : inclusive_dates
                            };
                            url = "<?php echo asset('updateWork'); ?>";
                        }
                        $.post(url,json,function(result){
                            console.log(result);
                        });
                    }
                })
            });

            //custom date editable
            $(".editable_datepicker").each(function(index){
                $('#'+this.id).editable({
                    type: 'radiolist',
                    name: this.id,
                    source: [{value:'',text:''}],
                    validate: function() {
                        var string = this.className;
                        var date_picker,json,url;
                        if(string.includes('update_children')){
                            date_picker = $("#"+this.id+"input").val();
                            $("#"+this.id).html(date_picker);
                            json = {
                                "childrenId" : this.id.split('c_id')[1],
                                "userId" : "<?php echo $user->id; ?>",
                                "column" : 'date_of_birth',
                                "value" : date_picker
                            };
                            url = "<?php echo asset('updateChildren'); ?>";
                        }
                        else if(string.includes('update_service')){
                            var element = "#"+this.id;
                            var serviceValue = $(element+"input").val();
                            $(element).removeClass('editable-empty');
                            $(element).html(serviceValue);

                            json = {
                                "serviceId" : this.id.split('sid')[1],
                                "userId" : "<?php echo $user->id; ?>",
                                "column" : this.id.split('sid')[0].replace(/\d+/g, ''),
                                "value" : serviceValue
                            };
                            url = "<?php echo asset('updateService'); ?>";
                        }
                        else {
                            date_picker = $("#"+this.id+"input").val();
                            $("#"+this.id).html(date_picker);
                            json = {
                                "id" : "<?php echo $user->id; ?>",
                                "column" : this.id,
                                "value" : date_picker
                            };
                            url = "<?php echo asset('updateUser'); ?>";
                        }
                        $.post(url,json,function(result){
                            console.log(result);
                        });

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
                    {value: 'by birth', text: 'by birth'},
                    {value: 'by naturalization', text: 'by naturalization'}
                ]
            ];

            $(".editable_radio").each(function(index){
                $('#'+this.id).editable({
                    type: 'radiolist',
                    name: this.id,
                    source: source_radio[index],
                    validate: function(value) {
                        var string = this.className;

                        if(value != null){
                            $("#"+this.id).html(value);
                            var json = {
                                "id" : "<?php echo $user->id; ?>",
                                "column" : this.id,
                                "value" : value,
                                "other_country" : $("#other_country").val()
                            };
                            var url = "<?php echo asset('updateUser'); ?>";
                            $.post(url,json,function(result){
                                console.log(result);
                            });
                        }

                    }
                });
            });

        });

        (function($) {
            //global variable
            var name = '';
            var $value = '';
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
                        name = this.options.scope.id;
                        $value = $("#"+name).text();
                        if(name == 'citizenship' || name == 'sex' || name == 'civil_status'){
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
                    }

                    if(name == 'citizenship'){
                        this.$tpl.append("<br><br>" +
                                "<select id='other_country' name='other_country' class='form-control' width='500px'> "  +
                                "<option value=''>Pls. indicate country.</option>" +
                                "@foreach($country as $row)<option value='{{ $row->id }}'>{{ $row->description }}</option>@endforeach" +
                                "</select>");
                    }
                    else if(name == 'date_of_birth' || name == 'date_of_entrance_to_duty'){
                        var value = $("#"+name).text();
                        if(name == 'date_of_entrance_to_duty'){
                            if(value == 'Empty')
                                value = '';
                        }
                        else if(name == 'date_of_birth'){
                            if(value == 'Empty')
                                value = month+'/'+day+'/'+year;
                        }

                        this.$tpl.append("<input type='text' value='"+value+"' id='" + name + "input"+"' style='margin-right:15px;width:100%' readonly>");
                        $("#"+name+"input").datepicker({
                            showOtherMonths: true,
                            selectOtherMonths: true,
                            autoclose:true,
                            changeMonth: true,
                            changeYear: true,
                        });
                    }

                    console.log(name.split('wid')[0]);
                    for(var j = 0; j< 10; j++){
                        var temp,value,styleInput;
                        if(name.includes('c_id')){
                            if($("#"+name).text() == 'Empty')
                                value = month+'/'+day+'/'+year;
                            else
                                value = $("#"+name).text();

                            temp = name.split('c_id')[0];
                        }
                        else if(name.split('sid')[0].includes('date_of_examination') || name.split('sid')[0].includes('date_of_validity')){
                            if($("#"+name).text() == 'Empty')
                                value = '';
                            else
                                value = $("#"+name).text();

                            temp = name.split('sid')[0];
                        }
                        else {
                            value = month+'/'+day+'/'+year;
                            temp = name;
                        }

                        if(temp == 'childrenValue'+j || temp == 'date_of_examination'+j || temp == 'date_of_validity'+j){
                            if(temp == 'date_of_validity')
                                styleInput = 'margin-right:100px;';

                            this.$tpl.append("<input type='text' value='"+value+"' id='" + name + "input"+"' style='"+styleInput+"width:100%'>");
                            $("#"+name+"input").datepicker({
                                showOtherMonths: true,
                                selectOtherMonths: true,
                                autoclose:true,
                                changeMonth: true,
                                changeYear: true,
                            });
                        }
                    }

                    $(function() {
                        $(document).on('click', '.applyBtn', function() {
                            return false;
                        });
                        $(document).on('click', '.input-mini', function(){
                            return false;
                        });
                    });
                    for (var i = 1; i <= 10; i++) {
                        if(name.split('wid')[0] == 'inclusive_dates'+i){
                            var element = $("#"+name);
                            if(element.text() == 'Empty')
                                value = '';
                            else
                                value = element.text();

                            this.$tpl.append("<input type='text' id='" + name.split('wid')[0] + "input" + "' value='"+value+"' style='margin-right:20px;'>");
                        }
                        $("#inclusive_dates" + i + "input").daterangepicker();
                    }

                    this.$input = this.$tpl.find('input[type="radio"]');
                    this.setClass();
                },

                value2str: function(value) {
                    return $.isArray(value) ? value.sort().join($.trim(this.options.separator)) : '';
                },

                //parse separated string og mo trigger ig click sa editable
                str2value: function(str) {
                    //console.log("str2value");
                    var reg, value = null;
                    if(typeof str === 'string' && str.length) {
                        reg = new RegExp('\\s*'+$.trim(this.options.separator)+'\\s*');
                        value = str.split(reg);
                    } else if($.isArray(str)) {
                        value = str;
                    }
                    return value;
                },

                //set checked on required radio buttons og mo trigger ig click sa editable
                //!!Could probably be cleaned up since this was for select multiple originally
                value2input: function(value) {
                    //this.$input.prop('checked', true);
                    $("input[name="+name+"][value='"+$value+"']").prop("checked",true);
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
                    console.log("value2htmlFinal");
                    checked = $.fn.editableutils.itemsByValue(value, this.sourceData);
                    if(checked.length) {
                        $(element).html($.fn.editableutils.escape(value));
                    } else {
                        $(element).empty();
                    }
                },

                value2submit: function(value) {
                    console.log("value2submit");
                    return value;
                },
                //og mo trigger ig click sa editable
                activate: function() {
                    //console.log("activate");
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

