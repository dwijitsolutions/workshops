<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">

	<title>{{ $course->name }}</title>

	<meta name="description" content="{{ str_replace("\n", "", $course->description) }}">
	<meta name="author" content="{{ $course->author }}">
	
	<meta property="og:url"           content="" />
    <meta property="og:type"          content="website" />
    <meta property="og:title"         content="{{ $course->name }}" />
    <meta property="og:description"   content="{{ str_replace("\n", "", $course->description) }}" />
    <meta property="og:image"         content="" />

	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />

	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, minimal-ui">

	<!-- help : http://lab.hakim.se/reveal-js -->
	<link rel="stylesheet" href="{{ asset('reveal-assets/css/reveal.css') }}">
	<link rel="stylesheet" href="{{ asset('reveal-assets/css/theme/black.css') }}" id="theme">
	
	<link rel="stylesheet" href="{{ asset('reveal-assets/css/font-awesome.min.css') }}">

	<!-- Code syntax highlighting -->
	<link rel="stylesheet" href="{{ asset('reveal-assets/lib/css/zenburn.css') }}">

	<!-- Printing and PDF exports -->
	<script>
		var link = document.createElement( 'link' );
		link.rel = 'stylesheet';
		link.type = 'text/css';
		link.href = window.location.search.match( /print-pdf/gi ) ? 'css/print/pdf.css' : '{{ asset('reveal-assets/css/print/paper.css') }}';
		document.getElementsByTagName( 'head' )[0].appendChild( link );
	</script>

	<!--[if lt IE 9]>
	<script src="lib/js/html5shiv.js"></script>
	<![endif]-->
</head>

<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5&appId=1684314365174532";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

	<div class="reveal">

		<!-- Any section element inside of this container is displayed as a slide -->
		<div class="slides">
			@include('course-data/python-basics-1')
		</div>
	</div>

	<script src="{{ asset('reveal-assets/lib/js/head.min.js') }}"></script>
	<script src="{{ asset('reveal-assets/js/reveal.js') }}"></script>

	<script>
		// Full list of configuration options available at:
		// https://github.com/hakimel/reveal.js#configuration
		Reveal.initialize({
			slideNumber: 'c/t',
			controls: true,
			progress: true,
			history: true,
			center: true,

			transition: 'slide', // none/fade/slide/convex/concave/zoom

			// Optional reveal.js plugins
			dependencies: [
				{ src: '{{ asset('reveal-assets/lib/js/classList.js') }}', condition: function() { return !document.body.classList; } },
				{ src: '{{ asset('reveal-assets/plugin/markdown/marked.js') }}', condition: function() { return !!document.querySelector( '[data-markdown]' ); } },
				{ src: '{{ asset('reveal-assets/plugin/markdown/markdown.js') }}', condition: function() { return !!document.querySelector( '[data-markdown]' ); } },
				{ src: '{{ asset('reveal-assets/plugin/highlight/highlight.js') }}', async: true, condition: function() { return !!document.querySelector( 'pre code' ); }, callback: function() { hljs.initHighlightingOnLoad(); } },
				{ src: '{{ asset('reveal-assets/plugin/zoom-js/zoom.js') }}', async: true },
				{ src: '{{ asset('reveal-assets/plugin/notes/notes.js') }}', async: true }
			]
		});
	</script>
	
	<div class="share-reveal">
		<a target="_blank" class="share-reveal-editor" href="http://dwijitsolutions.com">Powered by Dwij IT Solutions</a>
		<a target="_blank" class="share-reveal-facebook" href="https://www.facebook.com/DwijItSolutions">
			<svg viewBox="-8 -8 48 48" width="20" height="20" version="1.1" xmlns="http://www.w3.org/2000/svg">
				<path fill="#666666" d="M25.613-4.557c0,0-3.707,0-6.166,0c-3.662,0-7.732,1.535-7.732,6.835c0.019,1.845,0,3.613,0,5.603H7.481 v6.728h4.366v19.37h8.021V14.48h5.295l0.479-6.618h-5.913c0,0,0.016-2.946,0-3.8c0-2.093,2.184-1.974,2.312-1.974 c1.042,0,3.059,0.003,3.578,0v-6.646H25.613z"/>
			</svg>
		</a>
		<a target="_blank" class="share-reveal-facebook" href="https://twitter.com/gdbhosale">
			<svg viewBox="0 0 2000 1625.36" width="20" height="20" version="1.1" xmlns="http://www.w3.org/2000/svg">
				<path fill="#666666" d="m 1999.9999,192.4 c -73.58,32.64 -152.67,54.69 -235.66,64.61 84.7,-50.78 149.77,-131.19 180.41,-227.01 -79.29,47.03 -167.1,81.17 -260.57,99.57 C 1609.3399,49.82 1502.6999,0 1384.6799,0 c -226.6,0 -410.328,183.71 -410.328,410.31 0,32.16 3.628,63.48 10.625,93.51 -341.016,-17.11 -643.368,-180.47 -845.739,-428.72 -35.324,60.6 -55.5583,131.09 -55.5583,206.29 0,142.36 72.4373,267.95 182.5433,341.53 -67.262,-2.13 -130.535,-20.59 -185.8519,-51.32 -0.039,1.71 -0.039,3.42 -0.039,5.16 0,198.803 141.441,364.635 329.145,402.342 -34.426,9.375 -70.676,14.395 -108.098,14.395 -26.441,0 -52.145,-2.578 -77.203,-7.364 52.215,163.008 203.75,281.649 383.304,284.946 -140.429,110.062 -317.351,175.66 -509.5972,175.66 -33.1211,0 -65.7851,-1.949 -97.8828,-5.738 181.586,116.4176 397.27,184.359 628.988,184.359 754.732,0 1167.462,-625.238 1167.462,-1167.47 0,-17.79 -0.41,-35.48 -1.2,-53.08 80.1799,-57.86 149.7399,-130.12 204.7499,-212.41"></path>
			</svg>
		</a>
	</div>
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