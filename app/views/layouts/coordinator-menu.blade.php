<ul class="nav navbar-nav">
    <li><a href="{{ url('/') }}"><i class="fa fa-home"></i> Home</a></li>
    <li><a href="{{ url('/profile') }}"><i class="fa fa-home"></i> Profile</a></li>
    <li><a href="{{ url('/hrhList') }}"><i class="ace-icon fa fa-users"></i> Hrh List</a></li>
    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user"></i> Account<span class="caret"></span></a>
        <ul class="dropdown-menu">
            <li><a href="{{ asset('resetpass')}}"><i class="fa fa-unlock"></i>&nbsp;&nbsp; Change Password</a></li>
            <li class="divider"></li>
            <li><a href="{{ url('/logout') }}"><i class="fa fa-sign-out"></i>&nbsp;&nbsp; Logout</a></li>
        </ul>
    </li>
</ul>
<!--
<div class="navbar-buttons navbar-header" role="navigation">
    <ul class="nav navbar-nav">
        <li>
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
</div>
-->