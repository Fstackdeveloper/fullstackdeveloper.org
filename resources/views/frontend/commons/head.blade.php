    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $settings['website_title'] }} - @yield('title')</title>
    <meta name="_token" content="{{ csrf_token() }}">
    <meta name="description" content="{{ $settings['website_desc'] }}">
   @include('frontend.commons.css')         
    <link rel="canonical" href="{{ Request::url() }}">
    <link rel="alternate" type="application/rss+xml" title="Full Stack Developer" href="/feed.xml">
   
	<meta property="og:title" content="{{ $settings['website_title'] }} - @yield('title')" />
	<meta property="og:type" content="profile" />
	<meta property="og:url" content="{{ Request::url() }}" />
	<meta property="og:image" content="@if (@isset($settings['seo_image'])){{ Storage::url($settings['seo_image'],'public') }}@endif" />
	<meta property="og:profile:first_name" content="{{ $settings['your_name'] }}" />

     
   @include('frontend.commons.scriptHead')         
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-67823871-12', 'auto');
  ga('send', 'pageview');

</script>