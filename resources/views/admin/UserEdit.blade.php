@extends('admin.layouts.master')

@section('title', 'Edit User')


@section('PagePluginsStyles')
<link href="{{ URL::asset('assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('assets/global/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('assets/global/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('assets/global/plugins/clockface/css/clockface.css') }}" rel="stylesheet" type="text/css" />

<link href="{{ URL::asset('assets/global/plugins/bootstrap-select/css/bootstrap-select.css') }}" rel="stylesheet" type="text/css" />


<link href="{{ URL::asset('assets/global/plugins/morris/morris.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('assets/global/plugins/fullcalendar/fullcalendar.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('assets/global/plugins/jqvmap/jqvmap/jqvmap.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css') }}" rel="stylesheet" type="text/css" />
@endsection


@section('PagePluginsScripts')
<script src="{{ URL::asset('assets/global/plugins/bootstrap-select/js/bootstrap-select.min.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('assets/global/plugins/moment.min.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('assets/global/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('assets/global/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('assets/global/plugins/clockface/js/clockface.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('assets/global/plugins/tinymce/tinymce.min.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js') }}"type="text/javascript"></script>
<script src="{{ URL::asset('assets/global/plugins/bootstrap-markdown/lib/markdown.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('assets/global/plugins/bootstrap-markdown/js/bootstrap-markdown.js') }}" type="text/javascript"></script>
@endsection


@section('PageScripts')
@endsection

@section('content')

                <!-- BEGIN CONTENT -->
                <div class="page-content-wrapper">
                    <!-- BEGIN CONTENT BODY -->
                    <div class="page-content">
                        <!-- BEGIN PAGE HEADER-->
                        
                        
                        <!-- BEGIN PAGE BAR -->
                        <div class="page-bar">
                            <ul class="page-breadcrumb">
                                <li>
                                    <a href="{{ route('adminHome') }}">Home</a>
                                    <i class="fa fa-circle"></i>
                                </li>
                                <li>
                                    <span>Edit User</span>
                                </li>
                            </ul>

                        </div>
                        <!-- END PAGE BAR -->
                        
                                                
                        
                        <!-- END PAGE HEADER-->

						
                       
                       
                       
                       
                       
      <h1 class="page-title">Users</h1>                  

                    
                    
    <div class="row">
                            <div class="col-md-12">
                                <!-- BEGIN PORTLET-->
                                <div class="portlet light form-fit bordered">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="icon-settings font-green"></i>
                                            <span class="caption-subject font-green sbold uppercase">Edit</span>
                                        </div>
                                    </div>
                                    <div class="portlet-body form">
                                        <!-- BEGIN FORM-->
                                        <form action="{{ route('user.update', array('id'=>$user->id)) }}" class="form-horizontal form-bordered"    method="post" enctype="multipart/form-data" >
                                            <div class="form-body">
                                            
                                            
                                        
                                          
                                           <div class="form-group">
                                                <label class="control-label col-md-3">Name</label>
                                                <div class="col-md-9">
                                                    <input name="user[name]" id="name" type="text" class="form-control input-circle" placeholder="Name" value="{{ old('user.name') ? old('user.name')  : $user->name }}"  required autofocus> 
                                                    
                                               @if ($errors->has('user.name'))
                                 			  	 <span class="help-block">
                                  		     	 <strong>{{ $errors->first('user.name') }}</strong>
                          	    			      </span>
                           					     @endif
                                                    
                                                    </div>
                                            </div>

                                             <div class="form-group">
                                                <label class="control-label col-md-3">Email</label>
                                                <div class="col-md-9">
                                                  <input name="user[email]" id="email" type="email" class="form-control input-circle" placeholder="info@example.com" value="{{ old('user.email') ? old('user.email')  : $user->email }}" required>
                                                  
                                                @if ($errors->has('user.email'))
                                 			  	 <span class="help-block">
                                  		     	 <strong>{{ $errors->first('user.email') }}</strong>
                          	    			      </span>
                           					     @endif
                                                  
                                                   </div>
                                             </div>
                                            
                                    
                                            
                                           
                                                                                             
                                               <div class="form-group ">
                                                    <label class="control-label col-md-3">Photo</label>
                                                    <div class="col-md-9">
                                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                                            <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;" > 
                                                           <img  src="{{ Storage::url($user->photo,'public') }}" >

                                                            </div>
                                                            <div>
                                                                <span class="btn red btn-outline btn-file">
                                                                    <span class="fileinput-new"> Select image </span>
                                                                    <span class="fileinput-exists"> Change </span>
                                                                    <input type="file" name="user[photo]" id="photo"> </span>
                                                                <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> Remove </a>
                                                            </div>
                                                        </div>
                                                
                                                @if ($errors->has('user.photo'))
                                 			  	 <span class="help-block">
                                  		     	 <strong>{{ $errors->first('user.photo') }}</strong>
                          	    			      </span>
                           					     @endif
                                                              
                                                              </div>
                                                               </div>
                                                                
                                                                                                                          
                                                                                              
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Password</label>
                                                <div class="col-md-9">
                                                    <input name="user[password]" id="password" type="password" class="form-control input-circle" > 
                                                    
                                                  @if ($errors->has('user.password'))
                                 			  	 <span class="help-block">
                                  		     	 <strong>{{ $errors->first('user.password') }}</strong>
                          	    			      </span>
                           					     @endif
                                                   
                                                    </div>
                                            </div>
                                            
                                            
                                            
                                           <div class="form-group">
                                                <label class="control-label col-md-3">Password</label>
                                                <div class="col-md-9">
                                                    <input name="user[password_confirmation]" id="password_confirmation" type="password" class="form-control input-circle"> 
                                                    


                                                    </div>
                                            </div>
                                            
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 
                                       <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          
                                  
                                       
                                        </div>
                                        <div class="form-actions">
                                            <button type="submit" class="btn blue">Submit</button>
                                            <button type="button" class="btn default">Cancel</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            
                            
                            <!-- END SAMPLE FORM PORTLET-->
											</div>
						</div>
                     
                      
                        </div>
                    <!-- END CONTENT BODY -->
                </div>
                <!-- END CONTENT -->


@endsection