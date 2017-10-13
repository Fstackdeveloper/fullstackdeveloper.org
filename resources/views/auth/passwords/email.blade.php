@extends('admin.layouts.login')

@section('title', 'Forgot Password')


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
            <!-- BEGIN FORGOT PASSWORD FORM -->
                    
            <form class="login-form" method="POST" action="{{ route('password.email') }}">
               {{ csrf_field() }}
               
               @if (session('status'))
               <div class="alert alert-success">
                  {{ session('status') }}
                </div>
                @endif
                
                <h3>Reset Password</h3>                
                <div class="form-group  {{ $errors->has('email') ? ' has-error' : '' }}">
                   <label class="control-label visible-ie8 visible-ie9">E-Mail Address</label>
                    <div class="input-icon">
                        <i class="fa fa-user"></i>
                        <input class="form-control placeholder-no-fix" type="email" autocomplete="off" placeholder="E-Mail Address" id="email" name="email" value="{{ $email or old('email') }}" required autofocus> </div>
                        
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
               
                </div>
                
              
                   
                <div class="form-actions">
                    <button type="submit" class="btn green pull-right"> Send Reset Link </button>
                </div>
            </form>
            <!-- END FORGOT PASSWORD FORM -->
            
            @endsection



