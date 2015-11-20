<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>@yield('title')</title>
<meta name="description" content="">

<!-- core CSS -->
{!!Html::style('influx/css/bootstrap.min.css')!!}
{!!Html::style('influx/css/font-awesome.min.css')!!}
{!!Html::style('influx/css/prettyPhoto.css')!!}
{!!Html::style('influx/css/main.css')!!}
{!!Html::style('influx/css/responsive.css')!!}


<!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>
<!--/head-->
<body>
<header id="header">
  <nav class="navbar navbar-inverse" role="banner">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        <a class="navbar-brand" href="{!! URL::to('/')!!}"><i class="fa fa-bolt"></i> Influx</a></a> </div>
      <div class="collapse navbar-collapse navbar-right">
        <ul class="nav navbar-nav">
          <li>{!!HTML::link('/', 'Home')!!}</li>
          <li class="active">{!!HTML::link('about-us', 'About')!!}</li>
          <li>{!!Html::link('service', 'Services')!!}</li>
          <li><a href="portfolio.html">Portfolio</a></li>
          <li><a href="pricing.html">Pricing</a></li>
          <li>{!!Html::link('contact', 'Contact')!!}</li>
          <li>{!!Html::link('create', 'Registation')!!}</li>
        </ul>
      </div>
    </div>
    <!--/.container--> 
  </nav>
  <!--/nav--> 
  
</header>

@yield('content')

<footer id="footer">
  <div class="container">
    <div class="row">
      <div class="col-sm-6">Copyright &copy; 2015 Company Name. Design by <a href="http://www.templategarden.com" rel="nofollow">TemplateGarden</a></div>
      <div class="col-sm-6">
        <div class="follow-us"> <a class="fa fa-facebook social-icon" href="#"></a> <a class="fa fa-twitter social-icon" href="#"></a> <a class="fa fa-linkedin social-icon" href="#"></a> <a class="fa fa-google-plus social-icon" href="#"></a> </div>
      </div>
    </div>
  </div>
</footer>
<!--/#footer--> 

{!!HTML::script('influx/js/jquery.js')!!}
{!!HTML::script('influx/js/bootstrap.min.js')!!}
{!!HTML::script('influx/js/jquery.prettyPhoto.js')!!}
{!!HTML::script('influx/js/jquery.isotope.min.js')!!}
{!!HTML::script('influx/js/main.js')!!}

</body>
</html>