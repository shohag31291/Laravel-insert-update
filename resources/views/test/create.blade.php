<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
	<div class="col-md-7 col-md-offset-2">
	{!!Form::open(array('route' => 'test.index', 'class'=>'form-horizontal'))!!}
		<div class="panel panel-defult">
		<div class="panel-body form-horizontal paymet-form">
		<div class="form-group">
		{!!Form::label('Name', 'Name:', array('class'=>'col-md-3 control-label'));!!}
		<div class="col-md-9">
		{!! Form::text('name', $value = null, $attributes = array('class'=>'form-control','id'=>'Name','required')); !!}
		</div>
		</div>
		<div class="form-group">
			{!!Form::label('Adderss', 'Address:', array('class'=>'col-md-3 control-label')); !!}
			<div class="col-md-9">
				{!! Form::text('address', $value = null, $attributes = array('class'=>'form-control', 'id'=>'Address','required'));!!}
			</div>
		</div>
		<div class="form-group">
		{!!Form::label('Phone', 'Phone:', array('class'=>'col-md-3 control-label'));!!}
		<div class="col-md-9">
		{!!Form::text('phone', $value = null, $attributes = array('class'=>'form-control', 'id'=>'Phone', 'required'));!!}
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