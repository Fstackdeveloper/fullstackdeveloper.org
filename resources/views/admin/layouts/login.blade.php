<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
    @include('admin.commons.head') 
    </head>

<body class=" login"> 

 <!-- BEGIN LOGO -->
 <div class="logo">
<a href="/admin/">
 <img src="{{ URL::asset('images/logo-big.png') }}" alt="" /> </a>
 </div>
<!-- END LOGO -->

<div class="content">

@yield('content')

</div>
	
@include('admin.commons.scriptFooter')   
          
</body>
</html>
