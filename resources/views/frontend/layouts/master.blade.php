<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
    @include('frontend.commons.head') 
    </head>

<body  class="index" id="page-top" >    
@include('frontend.commons.navbar') 

@yield('content')

@include('frontend.commons.footer')   
          
</body>
</html>
