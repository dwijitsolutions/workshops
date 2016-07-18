<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<title>Free Online Technology Tutorials by Dwij IT Solutions</title>
	<meta name="description" content="{{ config('laraadmin.sitename') }} - {{ config('laraadmin.sitedesc') }}">
	<meta name="keywords" content="Free, Tutorials, Python, Raspberry Pi, OpenCV" />
	<meta name="author" content="Dwij IT Solutions" />

	<meta property="og:title" content="{{ config('laraadmin.sitename') }}" />
    <meta property="og:type" content="website" />
    <meta property="og:description" content="{{ config('laraadmin.sitename') }} - {{ config('laraadmin.sitedesc') }}" />

	<link rel="shortcut icon" href="{{ asset('courses-assets/img/dwij-it-solutions-favcon.png') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('courses-assets/css/normalize.css') }}" />
	<link rel="stylesheet" type="text/css" href="{{ asset('courses-assets/css/demo.css') }}" />
	<link rel="stylesheet" type="text/css" href="{{ asset('courses-assets/css/component.css') }}" />
</head>
<body>
	<div class="container">
		<header>
			<h1>Dwij IT Solutions <span>{{ config('laraadmin.sitedesc') }}</span></h1>  
		</header>
		<div class="wrapper">
			<ul class="stage clearfix">
				@foreach ($courses as $course)
					<li class="scene">
						<div class="movie" onclick="return true">
							<div class="poster" style="background-image: url({{ App\Upload::find($course->front_image)->path() }});"></div>
							<div class="info">
								<header style="background-image: url({{ App\Upload::find($course->background)->path() }});">
									<h1>{{ $course->name }}</h1>
									<span class="rating">{{ $course->for }}</span>
									<span class="duration">{{ $course->hours }} Hours</span>
								</header>
								<p>
									{{ $course->description }}
								</p>
								<center><a class="toslides" href="http://dwij.net/tuts/python-basic">{{ $course->name_short }}</a></center>
							</div>
						</div>
					</li>
				@endforeach
			</ul>
			<br>
			<br>
			<div class="footer-menu">
				<a href="">{{ Auth::user()->name }}</a> - <a href="{{ url('/logout') }}">Logout</a>
			</div>
		</div><!-- /wrapper -->
	</div><!-- /container -->
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
ga('create', 'UA-31231580-28', 'auto');
ga('send', 'pageview');
</script>
</body>
</html>