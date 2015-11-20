@extends('influx.layouts')
@section('title')
Service
@endsection
@section('content')
<div class="color-border"> </div>
<section id="inner-page">
  <div class="container">
    <div class="center">
      <h2>Our Services</h2>
      <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin non odio sed eros tristique bibendum.<br>
        Morbi libero elit elementum quis faucibus ac, condimentum quis nibh.</p>
    </div>
    <div class="row">
      <div class="features">
        <div class="col-md-4 col-sm-6">
          <div class="feature-wrap"> <i class="fa fa-desktop"></i>
            <h2>Web Development</h2>
            <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin non odio sed eros tristique.</h3>
          </div>
        </div>
        <!--/.col-md-4-->
        
        <div class="col-md-4 col-sm-6">
          <div class="feature-wrap"> <i class="fa fa-cogs"></i>
            <h2>App Development</h2>
            <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin non odio sed eros tristique.</h3>
          </div>
        </div>
        <!--/.col-md-4-->
        
        <div class="col-md-4 col-sm-6">
          <div class="feature-wrap"> <i class="fa fa-rocket"></i>
            <h2>Brand & Identity</h2>
            <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin non odio sed eros tristique.</h3>
          </div>
        </div>
        <!--/.col-md-4-->
        
        <div class="col-md-4 col-sm-6">
          <div class="feature-wrap"> <i class="fa fa-picture-o"></i>
            <h2>Video & Photography</h2>
            <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin non odio sed eros tristique.</h3>
          </div>
        </div>
        <!--/.col-md-4-->
        
        <div class="col-md-4 col-sm-6">
          <div class="feature-wrap"> <i class="fa fa-bullhorn"></i>
            <h2>Online Advertising</h2>
            <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin non odio sed eros tristique.</h3>
          </div>
        </div>
        <!--/.col-md-4-->
        
        <div class="col-md-4 col-sm-6">
          <div class="feature-wrap"> <i class="fa fa-file-text-o"></i>
            <h2>Content Marketing</h2>
            <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin non odio sed eros tristique.</h3>
          </div>
        </div>
        <!--/.col-md-4--> 
      </div>
      <!--/.services--> 
    </div>
    <!--/.row--> 
  </div>
  <!--/.container--> 
</section>
<!--/#inner-page-->
<section id="get-started">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <h2>Want to discuss a project?</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eget nisl vel justo suscipit ullamcorper sed at lacus.<br>
          Aliquam euismod nunc id eros sollicitudin interdum.</p>
        <a href="{!! URL::to('/contact') !!}" class="btn btn-primary">Contact us</a> </div>
    </div>
  </div>
  <!--/.container--> 
</section>
@endsection