<html>
<head>
	<title>Add Course</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
</head>
<body>
 	<div class="container">
 		<div class="col-md-7 col-md-offset-2">
 		<h4>CV</h4>
 <!-- 	<form action="{{ URL::to('cv/save') }}" method="post" enctype="multipart/form-data"> -->
   {!! Form::open(array('route' => 'cv.store','class'=>'form-horizontal')) !!}  
 <div class="panel panel-default">
 	<div class="panel-body form-horizontal paymet-form">
     <div class="form-group">
            {!! Form::label('Image', 'Select image to upload:', array('class' => 'col-sm-3 control-label')); !!}
            <div class="col-sm-9">
            <input type="file" name="file" id="file">
               <input type="hidden" value="{{ csrf_token() }}" name="_token">
            </div>
        </div>
        <div class="form-group">
            {!! Form::label('Caption', 'Caption', array('class' => 'col-sm-3 control-label')); !!}
            <div class="col-sm-9">
                {!! Form::text('caption', $value = null, $attributes = array('class'=>'form-control','id'=>'Caption','required')); !!}
            </div>
        </div>
         <div class="form-group">
         	{!! Form::label('Description', 'Description', array('class' => 'col-sm-3 control-label')); !!}
          
            <div class="col-sm-9">
              
                {!! Form::text('description', $value = null, $attributes = array('class'=>'form-control','id'=>'Description','required')); !!}
            </div>
        </div> 
        
    {!! Form::submit('Submit', $attributes = array('class'=>'btn btn-info pull-right')); !!}
</div>
</div>
    <!--   </form> -->
       {!! Form::close() !!}
      </div>
 	</div>
</body>
</html>