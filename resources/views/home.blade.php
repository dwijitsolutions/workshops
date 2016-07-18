<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="{{ config('laraadmin.sitename') }} - {{ config('laraadmin.sitedesc') }}">
    <meta name="author" content="Dwij IT Solutions">

    <meta property="og:title" content="{{ config('laraadmin.sitename') }}" />
    <meta property="og:type" content="website" />
    <meta property="og:description" content="{{ config('laraadmin.sitename') }} - {{ config('laraadmin.sitedesc') }}" />
    
    <!--
    <meta property="og:url" content="http://demo.adminlte.acacha.org/" />
    <meta property="og:image" content="http://demo.adminlte.acacha.org/img/AcachaAdminLTE.png" />
    <meta property="og:image" content="http://demo.adminlte.acacha.org/img/AcachaAdminLTE600x600.png" />
    <meta property="og:image" content="http://demo.adminlte.acacha.org/img/AcachaAdminLTE600x314.png" />
    <meta property="og:sitename" content="demo.adminlte.acacha.org" />
    <meta property="og:url" content="http://demo.adminlte.acacha.org" />
    -->
    
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@dwijitsolutions" />
    <meta name="twitter:creator" content="@dwijitsolutions" />
    
    <title>{{ config('laraadmin.sitename') }}</title>
    
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('/la-assets/css/bootstrap.css') }}" rel="stylesheet">
    
    <!-- Custom styles for this template -->
    <link href="{{ asset('/la-assets/css/main.css') }}" rel="stylesheet">

    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>

    <script src="{{ asset('/la-assets/plugins/jQuery/jQuery-2.1.4.min.js') }}"></script>
    <script src="{{ asset('/la-assets/js/smoothscroll.js') }}"></script>


</head>

<body data-spy="scroll" data-offset="0" data-target="#navigation">

<!-- Fixed navbar -->
<div id="navigation" class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><b>{{ config('laraadmin.sitename') }}</b></a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#home" class="smoothScroll">Home</a></li>
                <li><a href="#desc" class="smoothScroll">Description</a></li>
                <li><a href="#contact" class="smoothScroll">Contact</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                @if (Auth::guest())
                    <li><a href="{{ url('/login') }}">Login</a></li>
                    <li><a href="{{ url('/register') }}">Register</a></li>
                @else
                    <li><a href="{{ url(config('laraadmin.adminRoute')) }}">{{ Auth::user()->name }}</a></li>
                @endif
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</div>


<section id="home" name="home"></section>
<div id="headerwrap">
    <div class="container">
        <div class="row centered">
            <div class="col-lg-12">
                <h1>{{ config('laraadmin.sitename2')[0] }} <b><a>{{ config('laraadmin.sitename2')[1] }}</a></b></h1>
                <h3>{{ config('laraadmin.sitedesc') }}</h3>
                <h3><a href="{{ url('/login') }}" class="btn btn-lg btn-success">Get Started!</a></h3><br>
                <br><br>
            </div>
        </div>
    </div> <!--/ .container -->
</div><!--/ #headerwrap -->


<section id="desc" name="desc"></section>
<!-- INTRO WRAP -->
<div id="intro">
    <div class="container">
        <div class="row centered">
            <h1>To empower the youth for Technology</h1>
            <br>
            <br>
            <div class="col-lg-4">
                <img src="{{ asset('/la-assets/img/intro01.png') }}" alt="">
                <h3>Workshops</h3>
                <p>For Engineering Students</p>
            </div>
            <div class="col-lg-4">
                <img src="{{ asset('/la-assets/img/intro03.png') }}" alt="">
                <h3>Training</h3>
                <p>Industry &amp; Technology Specific Trainings</p>
            </div>
            <div class="col-lg-4">
                <img src="{{ asset('/la-assets/img/intro02.png') }}" alt="">
                <h3>Limited Workshops</h3>
                <p>Few workshops with High quality</p>
            </div>
        </div>
        <br>
    </div> <!--/ .container -->
</div><!--/ #introwrap -->

<section id="contact" name="contact"></section>
<div id="footerwrap">
    <div class="container">
        <div class="col-lg-5">
            <h3>Contact Us</h3>
            <b>Office:</b>
            <p>
                B4, Patang Plaza Phase 5,<br/>
                Opp. PICT College,<br/>
                Katraj, Pune<br/>
                India - 411046.
            </p>
            <div><b style="width:55px;display:inline-block;">Phone: </b>  &nbsp;<a href="tel:+917350558900">+91 7350558900</a></div>
            <div style="margin-top:10px;"><b style="width:55px;display:inline-block;">Email: </b>  &nbsp;<a href="mailto:ganesh@dwij.in">ganesh@dwij.in</a></div>
        </div>

        <div class="col-lg-7">
            <h3>Drop Us A Line</h3>
            <br>
            <form role="form" action="#" method="post" enctype="plain">
                <div class="form-group">
                    <label for="name1">Your Name</label>
                    <input type="name" name="Name" class="form-control" id="name1" placeholder="Your Name">
                </div>
                <div class="form-group">
                    <label for="email1">Email address</label>
                    <input type="email" name="Mail" class="form-control" id="email1" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label>Your Text</label>
                    <textarea class="form-control" name="Message" rows="3"></textarea>
                </div>
                <br>
                <button type="submit" class="btn btn-large btn-success">SUBMIT</button>
            </form>
        </div>
    </div>
</div>
<div id="c">
    <div class="container">
        <p>
            <strong>Copyright &copy; 2016. Powered by <a href="https://dwijitsolutions.com"><b>Dwij IT Solutions</b></a>
        </p>
    </div>
</div>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="{{ asset('/la-assets/js/bootstrap.min.js') }}" type="text/javascript"></script>
<script>
    $('.carousel').carousel({
        interval: 3500
    })
</script>
</body>
</html>
