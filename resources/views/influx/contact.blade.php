@extends('influx.layouts')
@section('titel')
Contact
@endsection
@section('content')
<div class="color-border"> </div>
<section id="inner-page">
  <div class="container">
    <div class="center">
      <h2>Contact Us</h2>
      <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin non odio sed eros tristique bibendum.</p>
    </div>
    <div class="row contact_top">
      <div class="col-md-4 contact_details"> <i class="fa fa-map-marker fa-2x"></i>
        <p>321 Awesome Street,<br>
          New York, NY 17022</p>
      </div>
      <div class="col-md-4 contact_details"> <i class="fa fa-envelope-o fa-2x"></i>
        <p>info@companyname.com</p>
      </div>
      <div class="col-md-4 contact_details"> <i class="fa fa-phone fa-2x"></i>
        <p>+1 800 123 1234<br>
          +1 322 123 8795</p>
      </div>
    </div>
    <!--/.row-->
    <div class="center">
      <h3>Send us a message</h3>
      <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
    </div>
    <div class="row">
       {!! Form::open(array('route' => 'course.store','class'=>'contact-form')) !!}
        <div class="col-sm-6 col-sm-offset-3">
         
          <div class="form-group">
            {!! Form::label('User_Name', 'User Name', array('class' => 'control-label')); !!}
            
             {!! Form::text('username', $value = null, $attributes = array('class'=>'form-control','id'=>'User_Name','required')); !!}
          </div>
          <div class="form-group">
            {!! Form::label('User_Password', 'Password', array('class' => 'control-label')); !!}
            
             {!! Form::text('password', $value = null, $attributes = array('class'=>'form-control','id'=>'User_Password','required')); !!}
          </div>
          <div class="form-group">
            {!! Form::label('Name_Title', 'Name', array('class'=>'control-label'));!!}
            {!! Form::text('name', $value = null, $attributes = array('class'=>'form-control','id'=>'Name_Title','required')); !!}
          </div>
          <div class="form-group">
            {!! Form::label('Email_Title', 'Email', array('class'=>'control-label')); !!}
            {!! Form::text('email', $value = null, $attributes = array('class'=>'form-control','id'=>'Email_Title','required')); !!}
          </div>
          <div class="form-group">
            {!! Form::label('Phone', 'Phone', array('class'=>'control-label'));!!}
            {!! Form::text('phone', $value = null, $attributes = array('class'=>'form-control','id'=>'Phone','required')); !!}
          </div>
          <div class="form-group">
             {!! Form::label('Companyname', 'Companyname', array('class'=>'control-label'));!!}
            {!! Form::text('companyname', $value = null, $attributes = array('class'=>'form-control','id'=>'Companyname','required')); !!}
          </div>
         <div class="form-group">
            {!! Form::label('Subject', 'Subject', array('class'=>'control-label'));!!}
            {!! Form::text('subject', $value = null, $attributes = array('class'=>'form-control','id'=>'Subject','required')); !!}
          </div>
         <!-- <div class="form-group">
            <label>Message *</label>
            <textarea name="message" id="message" required class="form-control" rows="8"></textarea>
          </div> -->
          <div class="form-group">
            {!! Form::submit('Submit', $attributes = array('class'=>'btn btn-info pull-right')); !!}
           <!-- <button type="submit" name="submit" class="btn btn-primary btn-lg" required="required">Submit</button>-->
          </div>


        </div>
      
      {!! Form::close() !!}
    </div>
    <!--/.row--> 
  </div>
  <!--/.container--> 
  <br>
  <br>
</section>
<!--/#inner-page-->

<div class="color-border"> </div>
@endsection