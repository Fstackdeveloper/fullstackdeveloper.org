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

<script>
$(function() {
    $('#projects-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{!! route('message.data') !!}',
        columns: [
            { data: 'id', name: 'id' },
            { data: 'name', name: 'name' },
	        { data: 'email', name: 'email' },
			{ data: 'phone', name: 'phone' },
            { data: 'updated_at', name: 'updated_at' },
			{"mRender": function ( data, type, row, meta ) {
                        return '<a href="/admin/message/'+row.id+'" class="btn btn-circle green">Show <i class="fa fa-eye"></i></a>'+
							   '<a href="{{ url('/admin/message/destroy') }}/'+row.id+'" onclick="event.preventDefault();document.getElementById(\'destroy-form'+row.id+'\').submit();" class="btn btn-circle red" >Delete <i class="fa fa-trash-o"></i></a><form id="destroy-form'+row.id+'" action="{{ url('/admin/message/destroy') }}/'+row.id+'" method="POST" style="display: none;"><input type="hidden" name="_token" value="{{ csrf_token() }}"></form>';
			}}
        ]
    });
});
</script>

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
                                    <span>Messages</span>
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
                                            <i class="fa fa-shopping-cart"></i>Messages</div>
                                        
                                    </div>
 <div class="portlet-body">  
<div class="table-container">                      
                                                          
    <table class="table table-bordered" id="projects-table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
				<th>Latest Update</th>
                <th></th>
            </tr>
        </thead>
    </table>
                                                                                                                  
                                 </div>     
                                 <!-- END table-container -->                                                                                
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