<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>DOHRO7 HRH | Log in</title>

    <!-- bootstrap & fontawesome -->
    <link rel="stylesheet" href="{{ asset('public/assets_ace/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/assets_ace/font-awesome/4.5.0/css/font-awesome.min.css') }}" />

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

                            @for($i=0;$i<5;$i++)
                            <div class="space-20"></div>
                            @endfor
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
                                            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                                            <p class="has-feedback text-center">
                                                @if(Session::has('ops'))
                                                    {{ Session::get('ops') }}
                                                @endif
                                            </p>
                                            <div class="hold-transition login-page">
                                            <div id="login-box" class="login-box visible widget-box no-border">
                                                <div class="widget-body">
                                                    <div class="widget-main">
                                                        <!--
                                                        <h4 class="header blue lighter bigger">
                                                            <i class="ace-icon fa fa-coffee green"></i>
                                                            Please Enter Your Information
                                                        </h4>
                                                        -->
                                                        <p class="login-box-msg center">Sign in to start your session</p>
                                                        <div class="form-group has-feedback {{ Session::has('ops') ? ' has-error' : '' }}">
                                                            <input id="username" type="text" placeholder="Login ID" class="form-control" name="username">
                                                            <span class="glyphicon glyphicon-user form-control-feedback"></span>

                                                        </div>
                                                        <div class="form-group has-feedback{{ Session::has('ops') ? ' has-error' : '' }}">
                                                            <input id="password" type="password" class="form-control" name="password" placeholder="Password">
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
                                                            <a href="#" data-target="#signup-box" class="user-signup-link">
                                                                I want to register
                                                                <i class="ace-icon fa fa-arrow-right"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div><!-- /.widget-body -->
                                            </div><!-- /.login-box -->
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

                                            <form>
                                                <fieldset>
                                                    <label class="block clearfix">
                                                        <span class="block input-icon input-icon-right">
                                                            <input type="text" class="form-control" placeholder="Surname" />
                                                            <i class="ace-icon fa fa-user"></i>
                                                        </span>
                                                    </label>

                                                    <label class="block clearfix">
                                                        <span class="block input-icon input-icon-right">
                                                            <input type="text" class="form-control" placeholder="First name" />
                                                            <i class="ace-icon fa fa-user"></i>
                                                        </span>
                                                    </label>

                                                    <label class="block clearfix">
                                                        <span class="block input-icon input-icon-right">
                                                            <input type="text" class="form-control" placeholder="Middle Name" />
                                                            <i class="ace-icon fa fa-user"></i>
                                                        </span>
                                                    </label>

                                                    <label class="block clearfix">
                                                        <span class="block input-icon input-icon-right">
                                                            <input type="text" class="form-control" placeholder="Username" />
                                                            <i class="ace-icon fa fa-user"></i>
                                                        </span>
                                                    </label>

                                                    <label class="block clearfix">
                                                        <span class="block input-icon input-icon-right">
                                                            <input type="password" class="form-control" placeholder="Password" />
                                                            <i class="ace-icon fa fa-lock"></i>
                                                        </span>
                                                    </label>

                                                    <label class="block clearfix">
                                                        <span class="block input-icon input-icon-right">
                                                            <input type="password" class="form-control" placeholder="Repeat password" />
                                                            <i class="ace-icon fa fa-retweet"></i>
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

                                                        <button type="button" class="width-65 pull-right btn btn-sm btn-success">
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

<!-- inline scripts related to this page -->
<script type="text/javascript">
    jQuery(function($) {
        $(document).on('click', '.toolbar a[data-target]', function(e) {
            e.preventDefault();
            var target = $(this).data('target');
            $('.widget-box.visible').removeClass('visible');//hide others
            $(target).addClass('visible');//show target
        });
    });

</script>

