
@extends('admin.layouts.login')

@section('title', 'Login')


@section('PagePluginsStyles')
<link href="{{ URL::asset('assets/global/plugins/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('assets/global/plugins/select2/css/select2-bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
@endsection


@section('PageStyles')
<link href="{{ URL::asset('assets/global/plugins/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('assets/global/plugins/select2/css/select2-bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
@endsection


@section('ThemeLayoutStyles')
<link href="{{ URL::asset('assets/pages/css/login-4.css') }}" rel="stylesheet" type="text/css" />
@endsection


 @section('ThemeLayoutStyles')
 @endsection
 

@section('PagePluginsScripts')
<script src="{{ URL::asset('assets/global/plugins/jquery-validation/js/jquery.validate.min.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('assets/global/plugins/jquery-validation/js/additional-methods.min.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('assets/global/plugins/select2/js/select2.full.min.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('assets/global/plugins/backstretch/jquery.backstretch.min.js') }}" type="text/javascript"></script>
@endsection


@section('PageScripts')
        <script src="{{ URL::asset('assets/pages/scripts/login-4.js') }}" type="text/javascript"></script>
@endsection


 @section('LayoutScripts')
 @endsection

@section('content')
<!-- BEGIN LOGIN FORM -->
            <form class="login-form" method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}
                <h3 class="form-title">Login to your account</h3>
                <div class="alert alert-danger display-hide">
                    <button class="close" data-close="alert"></button>
                    <span> Enter your email and password. </span>
                </div>
                <div class="form-group  @if ($errors->has('email')) has-error @endif">
                    <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                    <label class="control-label visible-ie8 visible-ie9">Username</label>
                    <div class="input-icon">
                        <i class="fa fa-user"></i>
                        <input   name="email"  id="email" type="email" class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Email Address" value="{{ old('email') }}" required autofocus/> </div>
                        
                               @if ($errors->has('email'))
                                    <span id="email-error" class="help-block">
                                        {{ $errors->first('email') }}
                                    </span>
                                @endif

                </div>
                <div class="form-group  @if ($errors->has('password')) has-error @endif ">
                    <label class="control-label visible-ie8 visible-ie9">Password</label>
                    <div class="input-icon">
                        <i class="fa fa-lock"></i>
                        <input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="Password"  name="password" required/> </div>
                               @if ($errors->has('password'))
                                    <span id="password-error" class="help-block">
                                        {{ $errors->first('password') }}
                                    </span>
                                @endif

                </div>
                <div class="form-actions">
                    <label class="rememberme mt-checkbox mt-checkbox-outline">
                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }} /> Remember me
                        <span></span>
                    </label>
                    <button type="submit" class="btn green pull-right"> Login </button>
                </div>
                <div class="forget-password">
                    <h4>Forgot your password ?</h4>
                    <p> no worries, click
                        <a href="{{ route('password.request') }}" id="forget-password"> here </a> to reset your password. </p>
                </div>
            </form>
            <!-- END LOGIN FORM -->
@endsection
