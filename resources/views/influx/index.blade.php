@extends('influx.layouts')
@section('title')
Home
@endsection

@section('content')
<section id="main-slider" class="no-margin">
  <div class="carousel slide">
    <ol class="carousel-indicators">
      <li data-target="#main-slider" data-slide-to="0" class="active"></li>
      <li data-target="#main-slider" data-slide-to="1"></li>
      <li data-target="#main-slider" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="item active" style="background-image: url(influx/images/slider/bg1.jpg)">
        <div class="container">
          <div class="row slide-margin">
            <div class="col-sm-12">
              <div class="carousel-content">
                <h1>Welcome to <span class="logo"><i class="fa fa-bolt"></i> Influx</span></h1>
                <h2>Lorem ipsum dolor sit amet, consectetuer adipiscing elit sed diam nonummy nibh euismod tincidunt laoreet</h2>
                <a class="btn-slide" href="about-us.html">Read More</a> </div>
            </div>
          </div>
        </div>
      </div>
      <!--/.item-->
      
      <div class="item" style="background-image: url(influx/images/slider/bg2.jpg)">
        <div class="container">
          <div class="row slide-margin">
            <div class="col-sm-12">
              <div class="carousel-content">
                <h1>Typi non habent claritatem insitam</h1>
                <h2>Lorem ipsum dolor sit amet, consectetuer adipiscing elit sed diam nonummy nibh euismod tincidunt laoreet</h2>
                <a class="btn-slide" href="about-us.html">Read More</a> </div>
            </div>
          </div>
        </div>
      </div>
      <!--/.item-->
      
      <div class="item" style="background-image: url(influx/images/slider/bg3.jpg)">
        <div class="container">
          <div class="row slide-margin">
            <div class="col-sm-12">
              <div class="carousel-content">
                <h1>Mirum est notare quam littera gothica</h1>
                <h2>Lorem ipsum dolor sit amet, consectetuer adipiscing elit sed diam nonummy nibh euismod tincidunt laoreet</h2>
                <a class="btn-slide" href="about-us.html">Read More</a> </div>
            </div>
          </div>
        </div>
      </div>
      <!--/.item--> 
    </div>
    <!--/.carousel-inner--> 
  </div>
  <!--/.carousel--> 
  <a class="prev hidden-xs" href="#main-slider" data-slide="prev"> <i class="fa fa-chevron-left"></i> </a> <a class="next hidden-xs" href="#main-slider" data-slide="next"> <i class="fa fa-chevron-right"></i> </a> </section>
<!--/#main-slider-->
<div class="color-border"> </div>
<section id="feature" >
  <div class="container">
    <div class="center">
      <h2>Featured Services</h2>
      <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin non odio sed eros tristique bibendum. Nunc quis semper sem.<br>
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
      </div>
      <!--/.services--> 
    </div>
    <!--/.row--> 
  </div>
  <!--/.container--> 
</section>
<!--/#feature-->

<section id="recent-works">
  <div class="container">
    <div class="center">
      <h2>Recent Works</h2>
      <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin non odio sed eros tristique bibendum. Nunc quis semper sem.<br>
        Morbi libero elit elementum quis faucibus ac, condimentum quis nibh.</p>
    </div>
    <div class="row">
      <div class="col-xs-12 col-sm-4 col-md-4">
        <div class="recent-work-wrap">{!!Html::image('influx/images/portfolio/recent/item1.jpg','alt text',array('class'=>'img-responsive'))!!}
          <div class="overlay">
            <div class="recent-work-inner">
              <h3><a href="#">Lorem Ipsum</a> </h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin non odio sed eros tristique bibendum.</p>
              <a class="preview" href="{!! URL::to('/influx/images/portfolio/full/item1.jpg')!!}" rel="prettyPhoto" title=""><i class="fa fa-search"></i> View</a> </div>
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-sm-4 col-md-4">
        <div class="recent-work-wrap">
{!!Html::image('influx/images/portfolio/recent/item2.jpg','alt text',array('class'=>'img-responsive'))!!}
          <div class="overlay">
            <div class="recent-work-inner">
              <h3><a href="#">Lorem Ipsum</a></h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin non odio sed eros tristique bibendum.</p>
              <a class="preview" href="{!! URL::to('/influx/images/portfolio/full/item2.jpg')!!}" rel="prettyPhoto"><i class="fa fa-search"></i> View</a> </div>
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-sm-4 col-md-4">
        <div class="recent-work-wrap">
{!!Html::image('influx/images/portfolio/recent/item3.jpg','alt text',array('class'=>'img-responsive'))!!}
        
          <div class="overlay">
            <div class="recent-work-inner">
              <h3><a href="#">Lorem Ipsum</a></h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin non odio sed eros tristique bibendum.</p>
              <a class="preview" href="{!! URL::to('/influx/images/portfolio/full/item3.jpg')!!}" rel="prettyPhoto"><i class="fa fa-search"></i> View</a> </div>
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-sm-4 col-md-4">
        <div class="recent-work-wrap">
{!!Html::image('influx/images/portfolio/recent/item4.jpg','alt text',array('class'=>'img-responsive'))!!}
          <div class="overlay">
            <div class="recent-work-inner">
              <h3><a href="#">Lorem Ipsum</a></h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin non odio sed eros tristique bibendum.</p>
              <a class="preview" href="{!! URL::to('/influx/images/portfolio/full/item4.jpg')!!}" rel="prettyPhoto"><i class="fa fa-search"></i> View</a> </div>
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-sm-4 col-md-4">
        <div class="recent-work-wrap">
{!!Html::image('influx/images/portfolio/recent/item5.jpg','alt text',array('class'=>'img-responsive'))!!}
          <div class="overlay">
            <div class="recent-work-inner">
              <h3><a href="#">Lorem Ipsum</a></h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin non odio sed eros tristique bibendum.</p>
              <a class="preview" href="{!! URL::to('/influx/images/portfolio/full/item5.jpg')!!}" rel="prettyPhoto"><i class="fa fa-search"></i> View</a> </div>
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-sm-4 col-md-4">
        <div class="recent-work-wrap">
{!!Html::image('influx/images/portfolio/recent/item6.jpg','alt text',array('class'=>'img-responsive'))!!}
          <div class="overlay">
            <div class="recent-work-inner">
              <h3><a href="#">Lorem Ipsum</a></h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin non odio sed eros tristique bibendum.</p>
              <a class="preview" href="{!! URL::to('/influx/images/portfolio/full/item6.jpg')!!}" rel="prettyPhoto"><i class="fa fa-search"></i> View</a> </div>
          </div>
        </div>
      </div>
    </div>
    <!--/.row--> 
  </div>
  <!--/.container--> 
</section>
<!--/#recent-works-->

<section id="testimonials" class="service-item">
  <div class="container">
    <div class="center">
      <h2>What Our Clients Says</h2>
      <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin non odio sed eros tristique bibendum. Nunc quis semper sem.<br>
        Morbi libero elit elementum quis faucibus ac, condimentum quis nibh.</p>
    </div>
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
        <div class="row testimonials">
          <div class="col-sm-4">
            <blockquote>
              <p class="clients-words">Morbi eget enim nisi. In venenatis porta est ut molestie nulla facilisi. Aliquam vehicula efficitur lorem eget eleifend.</p>
              <span class="clients-name">- John Doe, Company</span>
{!!Html::image('influx/images/testimonials/man1.jpg','alt text',array('class'=>'img-circle img-thumbnail'))!!} </blockquote>
          </div>
          <div class="col-sm-4">
            <blockquote>
              <p class="clients-words">Maecenas tincidunt venenatis tempus. Nulla tristique euismod urna at ullamcorper.</p>
              <span class="clients-name">- Jane Doe, Company</span>
              {!!Html::image('influx/images/testimonials/woman1.jpg','alt text',array('class'=>'img-circle img-thumbnail'))!!}</blockquote>
          </div>
          <div class="col-sm-4">
            <blockquote>
              <p  class="clients-words">Aliquam euismod nunc id eros sollicitudin interdum. Integer eget sem nec nulla dictum dictum.</p>
              <span class="clients-name">- Brian Smith, Company</span> 
              {!!Html::image('influx/images/testimonials/man1.jpg','alt text',array('class'=>'img-circle img-thumbnail'))!!} </blockquote>
          </div>
        </div>
        <!--/.row--> 
      </div>
      <!--/.col--> 
    </div>
    <!--/.row--> 
  </div>
  <!--/.container--> 
</section>
<!--/#testimonials-->

<section id="middle">
  <div class="container">
    <div class="row">
      <div class="col-sm-6">
        <h3>Some Facts About Us</h3>
        <br>
        <div class="media"> <i class="fa fa-smile-o pull-left fa-3x"></i>
          <div class="media-body">
            <h3 class="media-heading"> 120+ Happy Clients </h3>
            Etiam eget nisl vel justo suscipit ullamcorper sed at lacus.</div>
        </div>
        <br>
        <div class="media"> <i class="fa fa-check-square-o pull-left fa-3x"></i>
          <div class="media-body">
            <h3 class="media-heading"> 600+ Projects Completed </h3>
            Sed scelerisque nunc quis est efficitur dictum vivamus commodo.</div>
        </div>
        <br>
        <div class="media"> <i class="fa fa-trophy pull-left fa-3x"></i>
          <div class="media-body">
            <h3 class="media-heading"> 25 Awards Won </h3>
            Pellentesque hendrerit arcu luctus facilisis erat consectetur.</div>
        </div>
      </div>
      <!--/.col-sm-6-->
      
      <div class="col-sm-6">
        <div class="accordion">
          <h3>Questions & Answers</h3>
          <br>
          <div class="panel-group" id="accordion1">
            <div class="panel panel-default">
              <div class="panel-heading active">
                <h3 class="panel-title"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseOne1"> Vivamus commodo nisi risus? <i class="fa fa-angle-right pull-right"></i> </a> </h3>
              </div>
              <div id="collapseOne1" class="panel-collapse collapse in">
                <div class="panel-body">
                  <div class="media accordion-inner">
                    <div class="media-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eget nisl vel justo suscipit ullamcorper sed at lacus. Aliquam euismod nunc id eros sollicitudin interdum. Integer eget sem nec nulla dictum dictum. </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseTwo1"> Etiam eget vel justo suscipit ullamcorpe? <i class="fa fa-angle-right pull-right"></i> </a> </h3>
              </div>
              <div id="collapseTwo1" class="panel-collapse collapse">
                <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eget nisl vel justo suscipit ullamcorper sed at lacus. Aliquam euismod nunc id eros sollicitudin interdum. Integer eget sem nec nulla dictum dictum. </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseThree1"> Integer eget sem nec nulla dictum dictum? <i class="fa fa-angle-right pull-right"></i> </a> </h3>
              </div>
              <div id="collapseThree1" class="panel-collapse collapse">
                <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eget nisl vel justo suscipit ullamcorper sed at lacus. Aliquam euismod nunc id eros sollicitudin interdum. Integer eget sem nec nulla dictum dictum. </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseFour1"> Maecenas tincidunt venenatis tempus? <i class="fa fa-angle-right pull-right"></i> </a> </h3>
              </div>
              <div id="collapseFour1" class="panel-collapse collapse">
                <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eget nisl vel justo suscipit ullamcorper sed at lacus. Aliquam euismod nunc id eros sollicitudin interdum. Integer eget sem nec nulla dictum dictum. </div>
              </div>
            </div>
          </div>
          <!--/#accordion1--> 
        </div>
      </div>
    </div>
    <!--/.row--> 
  </div>
  <!--/.container--> 
</section>
<!--/#middle-->

<section id="partner">
  <div class="container">
    <div class="center">
      <h2>Our Awesome Clients</h2>
      <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin non odio sed eros tristique bibendum. Nunc quis semper sem.<br>
        Morbi libero elit elementum quis faucibus ac, condimentum quis nibh.</p>
    </div>
    <div class="partners">
      <ul>
        <li> <a href="#">{!!Html::image('influx/images/partners/partner1.png','alt text',array('class'=>'img-responsive'))!!}</a></li>
        <li> <a href="#">{!!Html::image('influx/images/partners/partner2.png','alt text',array('class'=>'img-responsive'))!!}</a></li>
        <li> <a href="#">{!!Html::image('influx/images/partners/partner3.png','alt text',array('class'=>'img-responsive'))!!}</a></li>
        <li> <a href="#">{!!Html::image('influx/images/partners/partner4.png','alt text',array('class'=>'img-responsive'))!!}</a></li>
        <li> <a href="#">{!!Html::image('influx/images/partners/partner5.png','alt text',array('class'=>'img-responsive'))!!}</a></li>
      </ul>
    </div>
  </div>
  <!--/.container--> 
</section>
<!--/#partner-->

<section id="get-started">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <h2>Want to discuss a project?</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eget nisl vel justo suscipit ullamcorper sed at lacus.<br>
          Aliquam euismod nunc id eros sollicitudin interdum.</p>
        <a href="contact-us.html" class="btn btn-primary">Contact us</a> </div>
    </div>
  </div>
  <!--/.container--> 
</section>
<!--/#get-started-->
@endsection