<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>DOHRO7 HRH | Log in</title>
    <meta name="description" content="3 styles with inline editable feature" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

    <!-- bootstrap & fontawesome -->
    <link rel="stylesheet" href="{{ asset('public/assets_ace/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/assets_ace/font-awesome/4.5.0/css/font-awesome.min.css') }}" />

    <!-- page specific plugin styles -->
    <link rel="stylesheet" href="{{ asset('public/assets_ace/css/select2.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/assets_ace/css/jquery.gritter.min.css') }}" />

    <!-- text fonts -->
    <link rel="stylesheet" href="{{ asset('public/assets_ace/css/fonts.googleapis.com.css') }}" />

    <!-- ace styles -->
    <link rel="stylesheet" href="{{ asset('public/assets_ace/css/ace.min.css') }}" class="ace-main-stylesheet" id="main-ace-style" />
    <link rel="stylesheet" href="{{ asset('public/assets_ace/css/ace-rtl.min.css') }}" />

</head>

    <body class="login-layout light-login">
        <div class="main-container">
            <div class="main-content">
                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1">
                        <div class="login-container">
                            {{--@for($i=0;$i<5;$i++)
                            <div class="space-20"></div>
                            @endfor--}}
                            <div class="position-relative">
                                <div class="login-box">
                                    <div class="login-logo">
                                        <div class="center">
                                            <h1>
                                                <img src="{{ asset('public/img/logo.png') }}" />
                                                <br>
                                                <b>DOHROH7&nbsp;</b>HRH
                                            </h1>
                                        </div>
                                    </div>
                                    <div class="space-20"></div>
                                    <div class="position-relative">
                                        <form role="form" method="POST" action="{{ asset('/') }}">
                                            <div class="hold-transition login-page">
                                                @if(Session::has('ops'))
                                                    <div class="text-center alert alert-danger">
                                                        {{ Session::get('ops') }}
                                                    </div>
                                                @endif
                                                <div id="login-box" class="login-box visible widget-box no-border">
                                                    <div class="widget-body">
                                                        <div class="widget-main">
                                                            <p class="login-box-msg center">Sign in to start your session</p>
                                                            <div class="form-group has-feedback {{ Session::has('ops') ? ' has-error' : '' }}">
                                                                <input id="username" type="text" name="username" placeholder="Login ID" class="form-control" >
                                                                <span class="glyphicon glyphicon-user form-control-feedback"></span>
                                                            </div>
                                                            <div class="form-group has-feedback{{ Session::has('ops') ? ' has-error' : '' }}">
                                                                <input id="password" type="password" name="password" class="form-control"  placeholder="Password">
                                                                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                                                            </div>
                                                            <div class="space"></div>

                                                            <div class="clearfix">
                                                                <label class="inline">
                                                                    <input type="checkbox" class="ace" />
                                                                    <span class="lbl"> Remember Me</span>
                                                                </label>

                                                                <button type="submit" class="width-35 pull-right btn btn-sm btn-primary">
                                                                    <i class="ace-icon fa fa-key"></i>
                                                                    <span class="bigger-110">Login</span>
                                                                </button>
                                                            </div>
                                                            <div class="space-4"></div>
                                                        </div><!-- /.widget-main -->
                                                        <div class="toolbar clearfix">
                                                            <div>
                                                                <a href="#" data-target="#forgot-box" class="forgot-password-link">
                                                                    <i class="ace-icon fa fa-arrow-left"></i>
                                                                    I forgot my password
                                                                </a>
                                                            </div>
                                                            <div>
                                                                <a href="#" data-target="#signup-box" id="sign-up" class="user-signup-link">
                                                                    I want to register
                                                                    <i class="ace-icon fa fa-arrow-right"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div><!-- /.widget-body -->
                                                </div><!-- /.login-box -->
                                                @if(Session::get('successRegister'))
                                                    <div class="text-center alert alert-success">
                                                        <i class="fa fa-check"></i> Successfully Registered
                                                    </div>
                                                    <?php Session::forget('successRegister'); ?>
                                                @endif
                                            </div>
                                        </form>
                                    </div><!-- /.position-relative -->
                                </div><!-- /.login-box -->

                                <div id="forgot-box" class="forgot-box widget-box no-border">
                                    <div class="widget-body">
                                        <div class="widget-main">
                                            <h4 class="header red lighter bigger">
                                                <i class="ace-icon fa fa-key"></i>
                                                Retrieve Password
                                            </h4>

                                            <div class="space-6"></div>
                                            <p>
                                                Enter your email and to receive instructions
                                            </p>
                                            <form>
                                                <fieldset>
                                                    <label class="block clearfix">
                                                            <span class="block input-icon input-icon-right">
                                                                <input type="email" class="form-control" placeholder="Email" />
                                                                <i class="ace-icon fa fa-envelope"></i>
                                                            </span>
                                                    </label>

                                                    <div class="clearfix">
                                                        <button type="button" class="width-35 pull-right btn btn-sm btn-danger">
                                                            <i class="ace-icon fa fa-lightbulb-o"></i>
                                                            <span class="bigger-110">Send Me!</span>
                                                        </button>
                                                    </div>
                                                </fieldset>
                                            </form>
                                        </div><!-- /.widget-main -->

                                        <div class="toolbar center">
                                            <a href="#" data-target="#login-box" class="back-to-login-link">
                                                Back to login
                                                <i class="ace-icon fa fa-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div><!-- /.widget-body -->
                                </div><!-- /.forgot-box -->

                                <div id="signup-box" class="signup-box widget-box no-border">
                                    <div class="widget-body">
                                        <div class="widget-main">
                                            <h4 class="header green lighter bigger">
                                                <i class="ace-icon fa fa-users blue"></i>
                                                New User Registration
                                            </h4>
                                            <div class="space-6"></div>
                                            <p> Enter your details to begin: </p>
                                            <form id="validation-form">
                                                <fieldset>
                                                    <label class="block clearfix form-group">
                                                        <span class="block input-icon input-icon-right">
                                                            <input type="text" name="fname" class="form-control" placeholder="First name" />
                                                            <i class="ace-icon fa fa-user"></i>
                                                        </span>
                                                    </label>

                                                    <label class="block clearfix form-group">
                                                        <span class="block input-icon input-icon-right">
                                                            <input type="text" name="mname" class="form-control" placeholder="Middle Name" />
                                                            <i class="ace-icon fa fa-user"></i>
                                                        </span>
                                                    </label>

                                                    <label class="block clearfix form-group">
                                                        <span class="block input-icon input-icon-right">
                                                            <input type="text" class="form-control" name="lname" placeholder="Lastname" />
                                                            <i class="ace-icon fa fa-user"></i>
                                                        </span>
                                                    </label>

                                                    <label class="block clearfix form-group">
                                                        Gender: &nbsp;&nbsp;
                                                        <i class="ace-icon fa fa-male"></i>
                                                        <label class="line-height-1 blue">
                                                            <input name="sex" value="Male" type="radio" class="ace" />
                                                            <span class="lbl"> Male</span>
                                                        </label>
                                                        &nbsp;
                                                        <i class="ace-icon fa fa-female"></i>
                                                        <label class="line-height-1 blue">
                                                            <input name="sex" value="Female" type="radio" class="ace" />
                                                            <span class="lbl"> Female</span>
                                                        </label>
                                                    </label>

                                                    <label class="block clearfix form-group">
                                                        <select id="hrh_type" name="hrh_type" onchange="filter_province($(this))" class="select2" data-placeholder="Choose a HRH Type..." >
                                                            <option value="">&nbsp;</option>
                                                            @foreach($hrh_type as $row)
                                                                <option value="{{ $row->id }}">{{ $row->description }}</option>
                                                            @endforeach
                                                        </select>
                                                    </label>

                                                    <label class="block clearfix form-group">
                                                        <select id="province" name="province" onchange="filter_municipality($(this),null)" class="select2" data-placeholder="Choose a province..." >
                                                            <option value="">&nbsp;</option>
                                                        </select>
                                                    </label>

                                                    <label class="block clearfix form-group">
                                                        <select id="municipality" name="municipality" class="select2" data-placeholder="Choose a municipality..." >
                                                            <option value="">&nbsp;</option>
                                                        </select>
                                                    </label>

                                                    <label class="block clearfix form-group">
                                                        <span class="block input-icon input-icon-right">
                                                            <input type="text" class="form-control username" name="username" placeholder="Username" />
                                                            <i class="ace-icon fa fa-user"></i>
                                                        </span>
                                                        <div class="red username-error1">That username is taken. Try another</div>
                                                    </label>

                                                    <label class="block clearfix form-group">
                                                        <span class="block input-icon input-icon-right">
                                                            <input type="password" name="password" class="form-control" placeholder="Password" />
                                                            <i class="ace-icon fa fa-lock"></i>
                                                        </span>
                                                    </label>

                                                    <label class="block">
                                                        <input type="checkbox" class="ace" />
                                                        <span class="lbl">
                                                            I accept the
                                                            <a href="#">User Agreement</a>
                                                        </span>
                                                    </label>

                                                    <div class="space-24"></div>

                                                    <div class="clearfix">
                                                        <button type="reset" class="width-30 pull-left btn btn-sm">
                                                            <i class="ace-icon fa fa-refresh"></i>
                                                            <span class="bigger-110">Reset</span>
                                                        </button>

                                                        <button type="submit" class="width-65 pull-right btn btn-sm btn-success btnRegister">
                                                            <span class="bigger-110">Register</span>
                                                            <i class="ace-icon fa fa-arrow-right icon-on-right"></i>
                                                        </button>
                                                    </div>
                                                </fieldset>
                                            </form>

                                        </div>
                                        <div class="toolbar center">
                                            <a href="#" data-target="#login-box" class="back-to-login-link">
                                                <i class="ace-icon fa fa-arrow-left"></i>
                                                Back to login
                                            </a>
                                        </div>
                                    </div><!-- /.widget-body -->
                                </div><!-- /.signup-box -->
                            </div><!-- /.position-relative -->

                        </div>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.main-content -->
        </div><!-- /.main-container -->
    </body>
</html>
<!-- basic scripts -->

<script src="{{ asset('public/assets_ace/js/jquery-2.1.4.min.js') }}"></script>
<script src="{{ asset('public/assets_ace/js/wizard.min.js') }}"></script>
<script src="{{ asset('public/assets_ace/js/jquery.validate.min.js') }}"></script>
<script src="{{ asset('public/assets_ace/js/jquery-additional-methods.min.js') }}"></script>
<script src="{{ asset('public/assets_ace/js/select2.min.js') }}"></script>
<script src="{{ asset('public/assets_ace/js/jquery.gritter.min.js') }}"></script>

<!-- inline scripts related to this page -->
<script type="text/javascript">
    $("#sign-up").click(function(e){
        $(".alert-danger").hide();
        $(".alert-success").hide();
    });

    $(".username-error1").hide();

    $(".username").on("keyup",function(e){
        e.preventDefault();
        ajax_username();
    });

    function ajax_username(){
        var element = $(".username");
        var username = element.val();
        $.post("<?php echo asset('username_trapping')?>", { "username": username, "_token": "<?php echo csrf_token(); ?>" }, function(exist){
            console.log(exist);
            if(exist){
                $(".username-error1").show();
            } else {
                $(".username-error1").hide();
            }
        });
    }

    var $hrhId = 0;
    function filter_province(hrhId){
        $hrhId = hrhId.val();
        var provinceElement = $('#province');
        filter_municipality($hrhId,true);
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
    function filter_municipality(provinceId,automatic = null){
        if(automatic)
            $provinceId = provinceId;
        else {
            $provinceId = provinceId.val();
        }

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

    jQuery(function($) {
        $(document).on('click', '.toolbar a[data-target]', function(e) {
            e.preventDefault();
            var target = $(this).data('target');
            $('.widget-box.visible').removeClass('visible');//hide others
            $(target).addClass('visible');//show target
        });

        $('.select2').css('width','100%').select2({allowClear:true})
        .on('change', function(){
            $(this).closest('form').validate().element($(this));
        });

        $('#validation-form').validate({
            errorElement: 'div',
            errorClass: 'help-block',
            focusInvalid: true,
            ignore: "",
            rules: {
                lname: {
                    required: true
                },
                fname: {
                    required: true
                },
                mname: {
                    required: true
                },
                username: {
                    required: true,
                },
                password: {
                    required: true
                },
                captcha: {
                    required: true
                },
                sex: {
                    required: true
                },
                province: {
                    required: true
                },
                municipality: {
                    required: true
                },
                hrh_type: {
                    required: true
                }
            },
            messages: {
                lname: {
                    required: "Please provide a surname."
                },
                fname: {
                    required: "Please provide a first name."
                },
                sex: {
                    required: "Please provide a gender."
                },
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
                    var controls = element.parents(':eq(1)');
                    if(controls.find(':checkbox,:radio').length > 1) {
                        controls.append(error);
                    }
                    else {
                        error.insertAfter(element.nextAll('.lbl:eq(0)').eq(0));
                    }
                }
                else if(element.is('.select2')) {
                    error.insertAfter(element.siblings('[class*="select2-container"]:eq(0)'));
                }
                else if(element.is('.chosen-select')) {
                    error.insertAfter(element.siblings('[class*="chosen-container"]:eq(0)'));
                }
                else
                    error.insertAfter(element.parent());
            },

            submitHandler: function (form) {
                var element = $(".username");
                var username = element.val();
                $.post("<?php echo asset('username_trapping')?>", { "username": username, "_token": "<?php echo csrf_token(); ?>" }, function(exist){
                    console.log(exist);
                    if(exist){
                        $(".username-error1").show();
                    }
                    else {
                        $(".username-error1").hide();
                        $(".btnRegister").attr('disabled',true);
                        var json = [];
                        var url = "<?php echo asset('/register'); ?>";
                        var elementValue;
                        var sexStatus = 'notdone';
                        $.each($('form').find("input[name],select[name]"),function(index){
                            if(this.name == 'sex' && sexStatus == 'notdone'){
                                if($("input[name='sex'][value='Male']").is(':checked')){
                                    elementValue = 'Male';
                                }
                                else if($("input[name='sex'][value='Female']").is(':checked')){
                                    elementValue = 'Female';
                                }
                                sexStatus = 'done';
                            }
                            else if(sexStatus == 'done'){
                                sexStatus = 'continue';
                                return;
                            }
                            else {
                                elementValue = this.value;
                            }

                            json.push({
                                name:this.name,
                                value:elementValue
                            });
                        });
                        $.post(url,json,function(result){
                            console.log(result);
                            location.reload();
                        });
                    }
                });


            },
            invalidHandler: function (form) {
                ajax_username();
            }
        });


    });

</script>


