@extends('layouts.app')
@section('content')
<style>
    th{
        font-size: 7pt;
    }
    label{
        font-size:9pt;
    }
</style>
<div class="page-content">
    <div class="row">
        <div class="col-xs-12">
            <div class="widget-box">
                <div class="widget-header widget-header-blue widget-header-flat">
                    <h4 class="widget-title lighter">Registration</h4>
                </div>
                <div class="widget-body">
                    <div class="widget-main">
                        <div id="fuelux-wizard-container">
                            <div>
                                <ul class="steps">
                                    <li data-step="1" class="active">
                                        <span class="step">1</span>
                                        <div class="row">
                                        <span class="title">Personal Information</span>
                                        </div>
                                    </li>

                                    <li data-step="2">
                                        <span class="step">2</span>
                                        <div class="row">
                                        <span class="title">Family Background</span>
                                        </div>
                                    </li>

                                    <li data-step="3">
                                        <span class="step">3</span>
                                        <div class="row">
                                        <span class="title">Educational Background</span>
                                        </div>
                                    </li>

                                    <li data-step="4">
                                        <span class="step">4</span>
                                        <div class="row">
                                        <span class="title">Civil Service Eligibility</span>
                                        </div>
                                    </li>

                                    <li data-step="5">
                                        <span class="step">5</span>
                                        <div class="row">
                                        <span class="title">Work Experience</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <hr />
                            <div class="step-content pos-rel">
                                <div class="step-pane active" data-step="1">
                                    <h3 class="lighter block green">Enter the following information</h3>

                                    <form class="form-horizontal" id="validation-form">
                                        <div class="form-group">
                                            <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="email">2. Designation:</label>
                                            <div class="col-xs-12 col-sm-9">
                                                <div class="clearfix">
                                                    <select name="designation" id="designation" class="col-xs-12 col-sm-6">
                                                        <option value="">Select designation</option>
                                                        @foreach($hrhType as $row)
                                                            <option value="{{ $row['id'] }}">{{ $row['description'] }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="space-2"></div>

                                        <div class="form-group">
                                            <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="email">SURNAME:</label>
                                            <div class="col-xs-12 col-sm-9">
                                                <div class="clearfix">
                                                    <input type="text" name="email" id="email" class="col-xs-12 col-sm-6" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="space-2"></div>

                                        <div class="form-group">
                                            <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="password">FIRSTNAME :</label>
                                            <div class="col-xs-12 col-sm-9">
                                                <div class="clearfix">
                                                    <input type="text" name="firstname" id="firstname" class="col-xs-12 col-sm-6" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="space-2"></div>

                                        <div class="form-group">
                                            <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="password2">MIDDLE NAME:</label>

                                            <div class="col-xs-12 col-sm-9">
                                                <div class="clearfix">
                                                    <input type="text" name="mname" id="mname" class="col-xs-12 col-sm-6" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="space-2"></div>

                                        <div class="form-group">
                                            <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="name">NAME EXTENSTION(JR,,SR):</label>
                                            <div class="col-xs-12 col-sm-9">
                                                <div class="clearfix">
                                                    <input type="text" id="ext_name" name="ext_name" class="col-xs-12 col-sm-6" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="hr hr-dotted"></div>

                                        <div class="form-group">
                                            <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="name">3. DATE OF BIRTH(mm/dd/yyyy):</label>
                                            <div class="col-xs-12 col-sm-9">
                                                <div class="clearfix">
                                                    <input type="text" id="bdate" name="bdate" class="col-xs-12 col-sm-6" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="hr hr-dotted"></div>

                                        <div class="form-group">
                                            <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="phone">4.PLACE OF BIRTH:</label>
                                            <div class="col-xs-12 col-sm-9">
                                                <div class="clearfix">
                                                    <input type="text" id="place_birth" name="place_birth" class="col-xs-12 col-sm-6" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="hr hr-dotted"></div>

                                        <div class="form-group">
                                            <label class="control-label col-xs-12 col-sm-3 no-padding-right">5.SEX</label>
                                            <div class="col-xs-12 col-sm-9">
                                                <div>
                                                    <label class="line-height-1 blue">
                                                        <input name="gender" value="1" type="radio" class="ace" />
                                                        <span class="lbl"> Male</span>
                                                    </label>
                                                </div>
                                                <div>
                                                    <label class="line-height-1 blue">
                                                        <input name="gender" value="2" type="radio" class="ace" />
                                                        <span class="lbl"> Female</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="hr hr-dotted"></div>

                                        <div class="form-group">
                                            <label class="control-label col-xs-12 col-sm-3 no-padding-right">6.CIVIL STATUS:</label>
                                            <div class="col-xs-12 col-sm-9">
                                                <div>
                                                    <label class="line-height-1 blue">
                                                        <input name="civil_status" value="1" type="radio" class="ace" />
                                                        <span class="lbl"> Single</span>
                                                    </label>
                                                </div>
                                                <div>
                                                    <label class="line-height-1 blue">
                                                        <input name="civil_status" value="2" type="radio" class="ace" />
                                                        <span class="lbl"> Widowed</span>
                                                    </label>
                                                </div>
                                                <div>
                                                    <label class="line-height-1 blue">
                                                        <input name="civil_status" value="2" type="radio" class="ace" />
                                                        <span class="lbl"> Other/s</span>
                                                    </label>
                                                </div>
                                                <div>
                                                    <label class="line-height-1 blue">
                                                        <input name="civil_status" value="2" type="radio" class="ace" />
                                                        <span class="lbl"> Married</span>
                                                    </label>
                                                </div>
                                                <div>
                                                    <label class="line-height-1 blue">
                                                        <input name="civil_status" value="2" type="radio" class="ace" />
                                                        <span class="lbl"> Separated</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="hr hr-dotted"></div>

                                        <div class="form-group">
                                            <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="url">7.PHILHEALTH NO:</label>

                                            <div class="col-xs-12 col-sm-9">
                                                <div class="clearfix">
                                                    <input type="url" id="philhealth_no" name="philhealth_no" class="col-xs-12 col-sm-6" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="hr hr-dotted"></div>

                                        <div class="form-group">
                                            <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="url">8.TIN NO:</label>
                                            <div class="col-xs-12 col-sm-9">
                                                <div class="clearfix">
                                                    <input type="url" id="tin_no" name="tin_no" class="col-xs-12 col-sm-6" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="hr hr-dotted"></div>

                                        <div class="form-group">
                                            <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="url">10.NAME OF GSIS GROUP INSURANCE BENEFICIARIES:</label>
                                            <div class="col-xs-12 col-sm-9">
                                                <div class="clearfix">
                                                    <input type="url" id="gsis_name1" name="gsis_name1" class="col-xs-12 col-sm-6" />
                                                </div>
                                            </div>
                                            <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="url"></label>
                                            <div class="col-xs-12 col-sm-9">
                                                <div class="clearfix">
                                                    <input type="url" id="gsis_name2" name="gsis_name2" class="col-xs-12 col-sm-6" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="hr hr-dotted"></div>

                                        <div class="form-group">
                                            <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="url">11.PRC LICENSE NUMBER:</label>
                                            <div class="col-xs-12 col-sm-9">
                                                <div class="clearfix">
                                                    <input type="url" id="prc_license" name="prc_license" class="col-xs-12 col-sm-6" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="hr hr-dotted"></div>

                                        <div class="form-group">
                                            <label class="control-label col-xs-12 col-sm-3 no-padding-right">12.CITIZENSHIP:</label>
                                            <div class="col-xs-12 col-sm-9">
                                                <div>
                                                    <label class="line-height-1 blue">
                                                        <input name="citizenship" value="1" type="radio" class="ace" />
                                                        <span class="lbl"> Filipino</span>
                                                    </label>
                                                </div>
                                                <div>
                                                    <label class="line-height-1 blue">
                                                        <input name="citizenship" value="2" type="radio" class="ace" />
                                                        <span class="lbl"> Dual Citizenship</span>
                                                    </label>
                                                </div>
                                                <div>
                                                    <label class="line-height-1 blue">
                                                        <input name="citizenship" value="2" type="radio" class="ace" />
                                                        <span class="lbl"> by birth</span>
                                                    </label>
                                                </div>
                                                <div>
                                                    <label class="line-height-1 blue">
                                                        <input name="citizenship" value="2" type="radio" class="ace" />
                                                        <span class="lbl"> by naturalization</span>
                                                    </label>
                                                </div>
                                                <div>

                                                    <select id="state" name="state" class="col-xs-12 col-sm-6 select2" data-placeholder="Pls. indicate country:.">
                                                        <option value=""></option>

                                                        <option value="AL">Alabama</option>
                                                        <option value="AK">Alaska</option>
                                                        <option value="AZ">Arizona</option>
                                                        <option value="AR">Arkansas</option>
                                                        <option value="CA">California</option>
                                                        <option value="CO">Colorado</option>
                                                        <option value="CT">Connecticut</option>
                                                        <option value="DE">Delaware</option>
                                                        <option value="FL">Florida</option>
                                                        <option value="GA">Georgia</option>
                                                        <option value="HI">Hawaii</option>
                                                        <option value="ID">Idaho</option>
                                                        <option value="IL">Illinois</option>
                                                        <option value="IN">Indiana</option>
                                                        <option value="IA">Iowa</option>
                                                        <option value="KS">Kansas</option>
                                                        <option value="KY">Kentucky</option>
                                                        <option value="LA">Louisiana</option>
                                                        <option value="ME">Maine</option>
                                                        <option value="MD">Maryland</option>
                                                        <option value="MA">Massachusetts</option>
                                                        <option value="MI">Michigan</option>
                                                        <option value="MN">Minnesota</option>
                                                        <option value="MS">Mississippi</option>
                                                        <option value="MO">Missouri</option>
                                                        <option value="MT">Montana</option>
                                                        <option value="NE">Nebraska</option>
                                                        <option value="NV">Nevada</option>
                                                        <option value="NH">New Hampshire</option>
                                                        <option value="NJ">New Jersey</option>
                                                        <option value="NM">New Mexico</option>
                                                        <option value="NY">New York</option>
                                                        <option value="NC">North Carolina</option>
                                                        <option value="ND">North Dakota</option>
                                                        <option value="OH">Ohio</option>
                                                        <option value="OK">Oklahoma</option>
                                                        <option value="OR">Oregon</option>
                                                        <option value="PA">Pennsylvania</option>
                                                        <option value="RI">Rhode Island</option>
                                                        <option value="SC">South Carolina</option>
                                                        <option value="SD">South Dakota</option>
                                                        <option value="TN">Tennessee</option>
                                                        <option value="TX">Texas</option>
                                                        <option value="UT">Utah</option>
                                                        <option value="VT">Vermont</option>
                                                        <option value="VA">Virginia</option>
                                                        <option value="WA">Washington</option>
                                                        <option value="WV">West Virginia</option>
                                                        <option value="WI">Wisconsin</option>
                                                        <option value="WY">Wyoming</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="hr hr-dotted"></div>

                                        <div class="form-group">
                                            <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="comment">13. RESIDENTIAL ADDRESS</label>
                                            <div class="col-xs-12 col-sm-9">
                                                <div class="clearfix">
                                                    <textarea class="col-xs-12 col-sm-6" name="resident_address" id="resident_address"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="space-2"></div>
                                        <div class="form-group">
                                            <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="name">ZIP CODE:</label>
                                            <div class="col-xs-12 col-sm-9">
                                                <div class="clearfix">
                                                    <input type="text" id="resident_zip_code" name="resident_zip_code" class="col-xs-12 col-sm-6" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="hr hr-dotted"></div>

                                        <div class="form-group">
                                            <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="comment">14. PERMANENT ADDRESS</label>
                                            <div class="col-xs-12 col-sm-9">
                                                <div class="clearfix">
                                                    <textarea class="col-xs-12 col-sm-6" name="permanent_address" id="permanent_address"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="space-2"></div>
                                        <div class="form-group">
                                            <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="name">ZIP CODE:</label>
                                            <div class="col-xs-12 col-sm-9">
                                                <div class="clearfix">
                                                    <input type="text" id="permanent_zip_code" name="permanent_zip_code" class="col-xs-12 col-sm-6" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="hr hr-dotted"></div>

                                        <div class="form-group">
                                            <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="name">15. TELEPHONE NO:</label>
                                            <div class="col-xs-12 col-sm-9">
                                                <div class="clearfix">
                                                    <input type="tel" id="tel_no" name="tel_no" class="col-xs-12 col-sm-6" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="hr hr-dotted"></div>

                                        <div class="form-group">
                                            <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="name">16. MOBILE NO:</label>
                                            <div class="col-xs-12 col-sm-9">
                                                <div class="clearfix">
                                                    <input type="tel" id="mobile_no" name="mobile_no" class="col-xs-12 col-sm-6" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="hr hr-dotted"></div>

                                        <div class="form-group">
                                            <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="name">17. E-MAIL ADDRESS:</label>
                                            <div class="col-xs-12 col-sm-9">
                                                <div class="clearfix">
                                                    <input type="email" id="email" name="email" class="col-xs-12 col-sm-6" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="space-2"></div>
                                        <div class="form-group">
                                            <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="name">AREA OF ASSIGNMENT(Province):</label>
                                            <div class="col-xs-12 col-sm-9">
                                                <div class="clearfix">

                                                    <select id="area_of_work_province" onchange="add_data($(this))" name="area_of_work_province" class="col-xs-12 col-sm-6 select2" data-placeholder="Pls. indicate province:.">
                                                        <option value=""></option>
                                                        @foreach($province as $row)
                                                            <option value="{{ $row['id'] }}">{{ $row['description'] }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="space-2"></div>

                                        <div class="form-group">
                                            <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="name">AREA OF ASSIGNMENT(Municipality):</label>
                                            <div class="col-xs-12 col-sm-9">
                                                <div class="clearfix">

                                                    <select id="area_of_work_municipal" name="area_of_work_municipal" class="col-xs-12 col-sm-6 select2" data-placeholder="Pls. indicate municipality:.">
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="space-2"></div>

                                        <div class="form-group">
                                            <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="name">DATE OF ENTRANCE TO DUTY:</label>
                                            <div class="col-xs-12 col-sm-9">
                                                <div class="clearfix">
                                                    <input type="email" id="name" name="date_entrance_duty" class="col-xs-12 col-sm-6" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="space-2"></div>
                                    </form>
                                </div>

                                <div class="step-pane" data-step="2">
                                    <h3 class="lighter block green">Enter the following information</h3>
                                    <form class="form-horizontal" id="validation-form">
                                        <div class="form-group">
                                            <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="email">18. SPOUSE'S SURNAME:</label>
                                            <div class="col-xs-12 col-sm-9">
                                                <div class="clearfix">
                                                    <input type="text" name="spouse_surname" id="spouse_surname" class="col-xs-12 col-sm-6" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="space-2"></div>

                                        <div class="form-group">
                                            <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="password">FIRSTNAME :</label>

                                            <div class="col-xs-12 col-sm-9">
                                                <div class="clearfix">
                                                    <input type="text" name="spouse_firstname" id="spouse_firstname" class="col-xs-12 col-sm-6" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="space-2"></div>

                                        <div class="form-group">
                                            <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="password2">MIDDLE NAME:</label>

                                            <div class="col-xs-12 col-sm-9">
                                                <div class="clearfix">
                                                    <input type="text" name="spouse_mname" id="spouse_mname" class="col-xs-12 col-sm-6" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="space-2"></div>

                                        <div class="form-group">
                                            <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="name">NAME EXTENSTION(JR,,SR):</label>
                                            <div class="col-xs-12 col-sm-9">
                                                <div class="clearfix">
                                                    <input type="text" id="spouse_ext_name" name="spouse_ext_name" class="col-xs-12 col-sm-6" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="space-2"></div>

                                        <div class="form-group">
                                            <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="name">OCCUPATION:</label>
                                            <div class="col-xs-12 col-sm-9">
                                                <div class="clearfix">
                                                    <input type="text" id="spouse_occupation" name="spouse_occupation" class="col-xs-12 col-sm-6" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="space-2"></div>

                                        <div class="form-group">
                                            <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="phone">EMPLOYER/BUSINESS NAME:</label>
                                            <div class="col-xs-12 col-sm-9">
                                                <input type="text" class="col-xs-12 col-sm-6" id="employer_business_name" name="employer_business_name" />
                                            </div>
                                        </div>
                                        <div class="space-2"></div>

                                        <div class="form-group">
                                            <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="phone">TELEPHONE NO:</label>
                                            <div class="col-xs-12 col-sm-9">
                                                <input type="tel" class="col-xs-12 col-sm-6" id="emp_telno" name="emp_telno" />
                                            </div>
                                        </div>
                                        <div class="hr hr-dotted"></div>

                                        <div class="form-group table-responsive">
                                            <label class="control-label col-xs-12 col-sm-1 no-padding-right" for="phone"></label>
                                            <div class="col-xs-12 col-sm-9">
                                                <table class="table table-striped table-bordered table-hover no-margin-bottom no-border-top">
                                                    <thead>
                                                    <tr class="info">
                                                        <th>4. NAME of CHILDREN (Write full name and list all):</th>
                                                        <th>DATE OF BIRTH (mm/dd/yyyy)</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @for($i=0;$i<10;$i++)
                                                        <tr>
                                                            <td>
                                                                <input type="text" id="phone" name="children_name[]" class="form-control" />
                                                            </td>
                                                            <td>
                                                                <input type="date" id="phone" name="children_b_date[]" class="form-control" />
                                                            </td>
                                                        </tr>
                                                    @endfor
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="hr hr-dotted"></div>

                                        <div class="form-group">
                                            <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="email">19. FATHER'S SURNAME:</label>
                                            <div class="col-xs-12 col-sm-9">
                                                <div class="clearfix">
                                                    <input type="text" name="father_surname" id="father_surname" class="col-xs-12 col-sm-6" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="space-2"></div>

                                        <div class="form-group">
                                            <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="password">FIRST NAME :</label>

                                            <div class="col-xs-12 col-sm-9">
                                                <div class="clearfix">
                                                    <input type="text" name="father_firstname" id="father_firstname" class="col-xs-12 col-sm-6" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="space-2"></div>

                                        <div class="form-group">
                                            <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="password2">MIDDLE NAME:</label>

                                            <div class="col-xs-12 col-sm-9">
                                                <div class="clearfix">
                                                    <input type="text" name="father_mname" id="father_mname" class="col-xs-12 col-sm-6" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="name">NAME EXTENSTION(JR,,SR):</label>
                                            <div class="col-xs-12 col-sm-9">
                                                <div class="clearfix">
                                                    <input type="text" id="father_ext_name" name="father_ext_name" class="col-xs-12 col-sm-6" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="hr hr-dotted"></div>

                                        <div class="form-group">
                                            <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="email">16. MOTHER'S SURNAME:</label>
                                            <div class="col-xs-12 col-sm-9">
                                                <div class="clearfix">
                                                    <input type="text" name="mother_surname" id="mother_surname" class="col-xs-12 col-sm-6" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="space-2"></div>

                                        <div class="form-group">
                                            <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="password">FIRST NAME :</label>

                                            <div class="col-xs-12 col-sm-9">
                                                <div class="clearfix">
                                                    <input type="text" name="mother_firstname" id="mother_firstname" class="col-xs-12 col-sm-6" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="space-2"></div>

                                        <div class="form-group">
                                            <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="password2">MIDDLE NAME:</label>

                                            <div class="col-xs-12 col-sm-9">
                                                <div class="clearfix">
                                                    <input type="text" name="mother_mname" id="mother_mname" class="col-xs-12 col-sm-6" />
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                                <div class="step-pane" data-step="3">
                                    <h3 class="lighter block green">Enter the following information</h3>
                                    <form class="form-horizontal" id="validation-form">
                                        <div class="form-group table-responsive">
                                            <label class="col-xs-12 col-sm-2 no-padding-right" for="phone"></label>
                                            <div class="col-xs-12 col-sm-12">
                                                <table class="table table-striped table-bordered table-hover">
                                                    <thead class="thin-border-bottom">
                                                    <tr class="info">
                                                        <th class="center" rowspan="2">20. LEVEL</th>
                                                        <th class="center" rowspan="2">NAME OF SCHOOL (Write in full)</th>
                                                        <th class="center" rowspan="2">BASIC EDUCATION/DEGREE/COURSE (Write in full)</th>
                                                        <th class="center" colspan="2">PERIOD OF ATTENDANCE</th>
                                                        <th class="center" rowspan="2">HIGHEST LEVEL/UNITS EARNED (if not graduated)</th>
                                                        <th class="center" rowspan="2">YEAR GRADUATED</th>
                                                        <th class="center" rowspan="2">SCHOLARSHIP/ACADEMIC HONORS RECEIVE</th>
                                                    </tr>
                                                    <tr class="info">
                                                        <th class="center">From</th>
                                                        <th class="center">To</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <th class="center col-xs-1">ELEMENTARY</th>
                                                        <td class="col-xs-2">
                                                            <input type="text" id="elementary_name" name="elementary_name" class="form-control" />
                                                        </td>
                                                        <td class="col-xs-2">
                                                            <input type="text" id="elem_degree_course" name="elem_degree_course" class="form-control" />
                                                        </td>
                                                        <td class="col-xs-1">
                                                            <input type="text" id="elem_attend_from" name="elem_attend_from" class="form-control" />
                                                        </td>
                                                        <td class="col-xs-1">
                                                            <input type="text" id="elem_attend_to" name="elem_attend_to" class="form-control" />
                                                        </td>
                                                        <td class="col-xs-2">
                                                            <input type="date" id="elem_highest_elem" name="elem_highest_elem" class="form-control" />
                                                        </td>
                                                        <td class="col-xs-1">
                                                            <input type="text" id="elem_year_graduated" name="elem_year_graduated" class="form-control" />
                                                        </td>
                                                        <td class="col-xs-2">
                                                            <input type="date" id="elem_scholarship" name="elem_scholarship" class="form-control" />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th class="center">SECONDARY</th>
                                                        <td class="col-xs-2">
                                                            <input type="text" id="secondary_name" name="secondary_name" class="form-control" />
                                                        </td>
                                                        <td class="col-xs-2">
                                                            <input type="text" id="secondary_degree_course" name="secondary_degree_course" class="form-control" />
                                                        </td>
                                                        <td class="col-xs-1">
                                                            <input type="text" id="secondary_attend_from" name="secondary_attend_from" class="form-control" />
                                                        </td>
                                                        <td class="col-xs-1">
                                                            <input type="text" id="secondary_attend_to" name="secondary_attend_to" class="form-control" />
                                                        </td>
                                                        <td class="col-xs-2">
                                                            <input type="date" id="secondary_highest_elem" name="secondary_highest_elem" class="form-control" />
                                                        </td>
                                                        <td class="col-xs-1">
                                                            <input type="text" id="secondary_year_graduated" name="secondary_year_graduated" class="form-control" />
                                                        </td>
                                                        <td class="col-xs-2">
                                                            <input type="date" id="secondary_scholarship" name="secondary_scholarship" class="form-control" />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th class="center">VOCATIONAL/TRADE COURSE</th>
                                                        <td class="col-xs-2">
                                                            <input type="text" id="vocational_name" name="vocational_name" class="form-control" />
                                                        </td>
                                                        <td class="col-xs-2">
                                                            <input type="text" id="vocational_degree_course" name="vocational_degree_course" class="form-control" />
                                                        </td>
                                                        <td class="col-xs-1">
                                                            <input type="text" id="vocational_attend_from" name="vocational_attend_from" class="form-control" />
                                                        </td>
                                                        <td class="col-xs-1">
                                                            <input type="text" id="vocational_attend_to" name="vocational_attend_to" class="form-control" />
                                                        </td>
                                                        <td class="col-xs-2">
                                                            <input type="date" id="vocational_highest_elem" name="vocational_highest_elem" class="form-control" />
                                                        </td>
                                                        <td class="col-xs-1">
                                                            <input type="text" id="vocational_year_graduated" name="vocational_year_graduated" class="form-control" />
                                                        </td>
                                                        <td class="col-xs-2">
                                                            <input type="date" id="vocational_scholarship" name="vocational_scholarship" class="form-control" />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th class="center">COLLEGE</th>
                                                        <td class="col-xs-2">
                                                            <input type="text" id="college_name" name="secondary_name" class="form-control" />
                                                        </td>
                                                        <td class="col-xs-2">
                                                            <input type="text" id="college_degree_course" name="secondary_degree_course" class="form-control" />
                                                        </td>
                                                        <td class="col-xs-1">
                                                            <input type="text" id="college_attend_from" name="college_attend_from" class="form-control" />
                                                        </td>
                                                        <td class="col-xs-1">
                                                            <input type="text" id="college_attend_to" name="college_attend_to" class="form-control" />
                                                        </td>
                                                        <td class="col-xs-2">
                                                            <input type="date" id="college_highest_elem" name="college_highest_elem" class="form-control" />
                                                        </td>
                                                        <td class="col-xs-1">
                                                            <input type="text" id="college_year_graduated" name="college_year_graduated" class="form-control" />
                                                        </td>
                                                        <td class="col-xs-2">
                                                            <input type="date" id="college_scholarship" name="college_scholarship" class="form-control" />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th class="center">GRADUATE STUDIES</th>
                                                        <td class="col-xs-2">
                                                            <input type="text" id="graduate_name" name="graduate_name" class="form-control" />
                                                        </td>
                                                        <td class="col-xs-2">
                                                            <input type="text" id="graduate_degree_course" name="graduate_degree_course" class="form-control" />
                                                        </td>
                                                        <td class="col-xs-1">
                                                            <input type="text" id="graduate_attend_from" name="graduate_attend_from" class="form-control" />
                                                        </td>
                                                        <td class="col-xs-1">
                                                            <input type="text" id="graduate_attend_to" name="graduate_attend_to" class="form-control" />
                                                        </td>
                                                        <td class="col-xs-2">
                                                            <input type="date" id="graduate_highest_elem" name="graduate_highest_elem" class="form-control" />
                                                        </td>
                                                        <td class="col-xs-1">
                                                            <input type="text" id="graduate_year_graduated" name="graduate_year_graduated" class="form-control" />
                                                        </td>
                                                        <td class="col-xs-2">
                                                            <input type="date" id="graduate_scholarship" name="graduate_scholarship" class="form-control" />
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                                <div class="step-pane" data-step="4">
                                    <h3 class="lighter block green">Enter the following information</h3>
                                    <form class="form-horizontal" id="validation-form">
                                        <div class="form-group table-responsive">
                                            <label class="col-xs-12 col-sm-2 no-padding-right" for="phone"></label>
                                            <div class="col-xs-12 col-sm-12">
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
                                    </form>
                                </div>

                                <div class="step-pane" data-step="5">
                                    <h3 class="lighter block green">Enter the following information</h3>
                                    <form class="form-horizontal" id="validation-form">
                                        <div class="form-group table-responsive">
                                            <label class="col-xs-12 col-sm-2 no-padding-right" for="phone"></label>
                                            <div class="col-xs-12 col-sm-12">
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
                                    </form>
                                </div>
                            </div>
                        </div>
                        <hr />
                        <div class="wizard-actions">
                            <button class="btn btn-prev">
                                <i class="ace-icon fa fa-arrow-left"></i>
                                Prev
                            </button>

                            <button class="btn btn-success btn-next" data-last="Finish">
                                Next
                                <i class="ace-icon fa fa-arrow-right icon-on-right"></i>
                            </button>
                        </div>
                    </div><!-- /.widget-main -->
                </div><!-- /.widget-body -->
            </div><!-- /.widget-box -->
        </div><!-- /.col -->
    </div><!-- /.row -->
</div><!-- PAGE CONTENT ENDS -->
<input type="hidden" id="municipality_url" value="{{ asset('municipality') }}">
@endsection
@section('js')

    <script type="text/javascript">
        if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
    </script>

    <!-- page specific plugin scripts -->
    <script src="{{ asset('public/assets_ace/js/wizard.min.js') }}"></script>
    <script src="{{ asset('public/assets_ace/js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('public/assets_ace/js/jquery-additional-methods.min.js') }}"></script>
    <script src="{{ asset('public/assets_ace/js/bootbox.js') }}"></script>
    <script src="{{ asset('public/assets_ace/js/jquery.maskedinput.min.js') }}"></script>
    <script src="{{ asset('public/assets_ace/js/select2.min.js') }}"></script>

    <!-- ace scripts -->
    <script src="{{ asset('public/assets_ace/js/ace-elements.min.js') }}"></script>
    <script src="{{ asset('public/assets_ace/js/ace.min.js') }}"></script>
    <script type="text/javascript">

        function add_data(data){
            $('#municipality').val('').trigger('change');
            $('#municipality option').remove();
            $("#municipality").append(
                    new Option("","", true, true)
            ).trigger('change');
            if(data.val() == 1)
                var municipality = <?php echo $municipality; ?>['cebu'];
            else if(data.val() == 2)
                var municipality = <?php echo $municipality; ?>['bohol'];
            else if(data.val() == 3)
                var municipality = <?php echo $municipality; ?>['negros'];

            for(var i = 0; i<municipality.length; i++){
                $("#municipality").append(
                        new Option(municipality[i]['description'], municipality[i]['id'], true, true)
                ).trigger('change');
            }
        }

        jQuery(function($) {
            for(var i=1; i<=10; i++){
                $("#inclusive_dates"+i).daterangepicker();
            }
            $( "#datepicker" ).datepicker({
                showOtherMonths: true,
                selectOtherMonths: false,
                autoclose:true
                //isRTL:true,


                /*
                 changeMonth: true,
                 changeYear: true,

                 showButtonPanel: true,
                 beforeShow: function() {
                 //change button colors
                 var datepicker = $(this).datepicker( "widget" );
                 setTimeout(function(){
                 var buttons = datepicker.find('.ui-datepicker-buttonpane')
                 .find('button');
                 buttons.eq(0).addClass('btn btn-xs');
                 buttons.eq(1).addClass('btn btn-xs btn-success');
                 buttons.wrapInner('<span class="bigger-110" />');
                 }, 0);
                 }
                 */
            });

            $('[data-rel=tooltip]').tooltip();

            $('.select2').css('class','col-xs-12 col-sm-6').select2({allowClear:true})
            .on('change', function(){
                $(this).closest('form').validate().element($(this));
            });

            var $validation = false;
            $('#fuelux-wizard-container')
                    .ace_wizard({
                        //step: 2 //optional argument. wizard will jump to step "2" at first
                        //buttons: '.wizard-actions:eq(0)'
                    })
                    .on('actionclicked.fu.wizard' , function(e, info){
                        if(info.step == 1 && $validation) {
                            if(!$('#validation-form').valid()) e.preventDefault();
                        }
                    })
                    //.on('changed.fu.wizard', function() {
                    //})
                    .on('finished.fu.wizard', function(e) {
                        bootbox.dialog({
                            message: "Thank you! Your information was successfully saved!",
                            buttons: {
                                "success" : {
                                    "label" : "OK",
                                    "className" : "btn-sm btn-primary"
                                }
                            }
                        });
                    }).on('stepclick.fu.wizard', function(e){
                //e.preventDefault();//this will prevent clicking and selecting steps
            });


            //jump to a step
            /**
             var wizard = $('#fuelux-wizard-container').data('fu.wizard')
             wizard.currentStep = 3;
             wizard.setState();
             */

                //determine selected step
                //wizard.selectedItem().step



                //hide or show the other form which requires validation
                //this is for demo only, you usullay want just one form in your application
            $('#skip-validation').removeAttr('checked').on('click', function(){
                $validation = this.checked;
                if(this.checked) {
                    $('#sample-form').hide();
                    $('#validation-form').removeClass('hide');
                }
                else {
                    $('#validation-form').addClass('hide');
                    $('#sample-form').show();
                }
            })



            //documentation : http://docs.jquery.com/Plugins/Validation/validate


            $.mask.definitions['~']='[+-]';
            $('#phone').mask('(999) 999-9999');

            jQuery.validator.addMethod("phone", function (value, element) {
                return this.optional(element) || /^\(\d{3}\) \d{3}\-\d{4}( x\d{1,6})?$/.test(value);
            }, "Enter a valid phone number.");

            $('#validation-form').validate({
                errorElement: 'div',
                errorClass: 'help-block',
                focusInvalid: false,
                ignore: "",
                rules: {
                    email: {
                        required: true,
                        email:true
                    },
                    password: {
                        required: true,
                        minlength: 5
                    },
                    password2: {
                        required: true,
                        minlength: 5,
                        equalTo: "#password"
                    },
                    name: {
                        required: true
                    },
                    phone: {
                        required: true,
                        phone: 'required'
                    },
                    url: {
                        required: true,
                        url: true
                    },
                    comment: {
                        required: true
                    },
                    province: {
                        required: true
                    },
                    platform: {
                        required: true
                    },
                    subscription: {
                        required: true
                    },
                    gender: {
                        required: true,
                    },
                    agree: {
                        required: true,
                    }
                },

                messages: {
                    email: {
                        required: "Please provide a valid email.",
                        email: "Please provide a valid email."
                    },
                    password: {
                        required: "Please specify a password.",
                        minlength: "Please specify a secure password."
                    },
                    province: "Please choose province",
                    subscription: "Please choose at least one option",
                    gender: "Please choose gender",
                    agree: "Please accept our policy"
                },


                highlight: function (e) {
                    $(e).closest('.form-group').removeClass('has-info').addClass('has-error');
                },

                success: function (e) {
                    $(e).closest('.form-group').removeClass('has-error');//.addClass('has-info');
                    $(e).remove();
                },

                errorPlacement: function (error, element) {
                    if(element.is('input[type=checkbox]') || element.is('input[type=radio]')) {
                        var controls = element.closest('div[class*="col-"]');
                        if(controls.find(':checkbox,:radio').length > 1) controls.append(error);
                        else error.insertAfter(element.nextAll('.lbl:eq(0)').eq(0));
                    }
                    else if(element.is('.select2')) {
                        error.insertAfter(element.siblings('[class*="select2-container"]:eq(0)'));
                    }
                    else if(element.is('.chosen-select')) {
                        error.insertAfter(element.siblings('[class*="chosen-container"]:eq(0)'));
                    }
                    else error.insertAfter(element.parent());
                },

                submitHandler: function (form) {
                },
                invalidHandler: function (form) {
                }
            });




            $('#modal-wizard-container').ace_wizard();
            $('#modal-wizard .wizard-actions .btn[data-dismiss=modal]').removeAttr('disabled');


            /**
             $('#date').datepicker({autoclose:true}).on('changeDate', function(ev) {
					$(this).closest('form').validate().element($(this));
				});

             $('#mychosen').chosen().on('change', function(ev) {
					$(this).closest('form').validate().element($(this));
				});
             */


            $(document).one('ajaxloadstart.page', function(e) {
                //in ajax mode, remove remaining elements before leaving page
                $('[class*=select2]').remove();
            });
        })
    </script>

@endsection
