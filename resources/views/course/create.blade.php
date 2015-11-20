<html>
<head>
	<title>Add Course</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
</head>
<body>
 	<div class="container">
 		<div class="col-md-7 col-md-offset-2">
 		<h4>Add Course</h4>
 		{!! Form::open(array('route' => 'course.store','class'=>'form-horizontal')) !!}
 <div class="panel panel-default">
 	<div class="panel-body form-horizontal paymet-form">
        <div class="form-group">
            {!! Form::label('Couse_Title', 'Course Title', array('class' => 'col-sm-3 control-label')); !!}
            <div class="col-sm-9">
                {!! Form::text('course_title', $value = null, $attributes = array('class'=>'form-control','id'=>'Couse_Title','required')); !!}
            </div>
        </div>
         <div class="form-group">
         	{!! Form::label('Couse_Code', 'Course Code', array('class' => 'col-sm-3 control-label')); !!}
          
            <div class="col-sm-9">
              
                {!! Form::text('course_code', $value = null, $attributes = array('class'=>'form-control','id'=>'Couse_Code','required')); !!}
            </div>
        </div> 
        <div class="form-group">
        	{!! Form::label('Couse_Credite', 'Course Credite', array('class' => 'col-sm-3 control-label')); !!}
            <div class="col-sm-9">
                {!! Form::text('course_credite', $value = null, $attributes = array('class'=>'form-control','id'=>'Couse_Credite','required')); !!}
            </div>
        </div>
    
    {!! Form::submit('Submit', $attributes = array('class'=>'btn btn-info pull-right')); !!}
</div>
</div>
        {!! Form::close() !!}
      </div>
 	</div>
</body>
</html>