<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
    @include('admin.commons.head') 
    </head>

<body class="page-header-fixed page-sidebar-fixed  page-sidebar-closed-hide-logo page-content-white"> 
<div class="page-wrapper">   
@include('admin.commons.header') 
<!-- BEGIN HEADER & CONTENT DIVIDER -->
<div class="clearfix"> </div>
<!-- END HEADER & CONTENT DIVIDER -->
      <!-- BEGIN CONTAINER -->
 <div class="page-container">
@include('admin.commons.sidebar') 
@yield('content')
	</div>
@include('admin.commons.footer')  
	</div> 
	
@include('admin.commons.scriptFooter')   
          
</body>
</html>
