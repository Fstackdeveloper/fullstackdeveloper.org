@extends('admin.layouts.master')

@section('title', 'Home')


@section('PagePluginsStyles')
<!-- BEGIN PAGE LEVEL PLUGINS -->
<link href="{{ URL::asset('assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('assets/global/plugins/morris/morris.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('assets/global/plugins/fullcalendar/fullcalendar.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('assets/global/plugins/jqvmap/jqvmap/jqvmap.css') }}" rel="stylesheet" type="text/css" />
<!-- END PAGE LEVEL PLUGINS -->
@endsection


@section('PageStyles')


@endsection


@section('PagePluginsScripts')

@endsection


@section('PageScripts')


@endsection



@section('content')

                <!-- BEGIN CONTENT -->
                <div class="page-content-wrapper">
                    <!-- BEGIN CONTENT BODY -->
                    <div class="page-content">
                        <!-- BEGIN PAGE HEADER-->


                        <!-- BEGIN PAGE TITLE-->
                        <h1 class="page-title"> Home
                        </h1>
                        <!-- END PAGE TITLE-->
                        <!-- END PAGE HEADER-->
                        <!-- BEGIN DASHBOARD STATS 1-->
                        <div class="row">
                        
                               <div class="col-md-12">
                                <!-- BEGIN SAMPLE TABLE PORTLET-->
                                <div class="portlet box green">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="fa fa-comments"></i>Statistics </div>
                                        <div class="tools">
                                            <a href="javascript:;" class="collapse"> </a>
                                            <a href="javascript:;" class="remove"> </a>
                                        </div>
                                    </div>
                                    <div class="portlet-body">
                                        <div class="table-scrollable">
                                            <table class="table table-striped table-hover">
                                                <tbody>
                                                    <tr>
                                                        <td class="align-middle"> Messages </td>
                                                        <td class="align-middle"> {{$count['messages']}} </td>
                                                        <td class="align-middle"> <a href="{{route('message')}}" class="btn btn-outline btn-circle btn-sm purple">
                                                                <i class="fa fa-eye"></i> View </a>  </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="align-middle"> Projects </td>
                                                        <td class="align-middle"> {{$count['projects']}} </td>
                                                        <td class="align-middle"> <a href="{{route('project')}}" class="btn btn-outline btn-circle btn-sm purple">
                                                                <i class="fa fa-eye"></i> View </a>  </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="align-middle"> Clients </td>
                                                        <td class="align-middle"> {{$count['clients']}} </td>
                                                        <td class="align-middle"> <a href="{{route('project.client')}}" class="btn btn-outline btn-circle btn-sm purple">
                                                                <i class="fa fa-eye"></i> View </a>  </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="align-middle"> Users </td>
                                                        <td class="align-middle"> {{$count['users']}} </td>
                                                        <td class="align-middle"> <a href="{{route('user')}}" class="btn btn-outline btn-circle btn-sm purple">
                                                                <i class="fa fa-eye"></i> View </a>  </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!-- END SAMPLE TABLE PORTLET-->
                            </div>

                        </div>
                        <div class="clearfix"></div>
                        <!-- END DASHBOARD STATS 1-->
                        <div class="row">

                        </div>
                       
                       
                    </div>
                    <!-- END CONTENT BODY -->
                </div>
                <!-- END CONTENT -->


@endsection