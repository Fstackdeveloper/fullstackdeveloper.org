@extends('admin.layouts.master')

@section('title', 'Messages')


@section('PagePluginsStyles')
<link href="{{ URL::asset('assets/global/plugins/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('assets/global/plugins/fancybox/source/jquery.fancybox.css') }}" rel="stylesheet" type="text/css" />
@endsection


@section('PagePluginsScripts')
<script src="{{ URL::asset('assets/global/scripts/datatable.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('assets/global/plugins/datatables/datatables.min.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('assets/global/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('assets/global/plugins/fancybox/source/jquery.fancybox.pack.js') }}" type="text/javascript"></script>
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
                                    <a href="{{ route('message') }}">Messages</a>
                                    <i class="fa fa-circle"></i>
                                </li>
                                <li>
                                	<span>{{ $message->name }}</span>
                                </li>
                            </ul>

                        </div>
                        <!-- END PAGE BAR -->
                        
                                                
                        
                        <!-- END PAGE HEADER-->

						
                       
                       
                       
                       
                       
    
                                    
                                    
                    
                    
    <div class="row">
   <div class="col-md-12">
                             
                             
                             
                            <div class="portlet ">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="fa fa-shopping-cart"></i>Message</div>
                                        
                                    </div>
 <div class="portlet-body">  

                                
 <div class="col-md-12">
  							<div class="col-md-1">
  								Name
  							</div>
  							
  							<div class="col-md-11">
  								{{ $message->name }}
  							</div>
   							
	 </div>                               

   							
 <div class="col-md-12">
  							<div class="col-md-1">
  								Phone
  							</div>
  							
  							<div class="col-md-11">
  								{{ $message->phone }}
  							</div>
   							
	 </div>                               

 <div class="col-md-12">
  							<div class="col-md-1">
  								Email
  							</div>
  							
  							<div class="col-md-11">
  								{{ $message->email }}
  							</div>
   							
	 </div>    
 							
 							

 <div class="col-md-12">
  							<div class="col-md-1">
  								Message
  							</div>
  							
  							<div class="col-md-11">
  								{{ $message->message }}
  							</div>
   							
	 </div>    
  					
  							
   							
   							
 </div>                                                                                                                      <!-- END portlet-body -->
	   							</div>                                   
                                 <!-- END portlet -->                                                                                                                                                                                                                                  
                                                                                                                    
                                                                                                                                                                              
                             
											</div>
						</div>
                     
                      
                        </div>
                    <!-- END CONTENT BODY -->
                </div>
                <!-- END CONTENT -->


@endsection