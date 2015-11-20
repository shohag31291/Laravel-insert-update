<html>
<head>
	<title>All Course</title>
  <!-- {!! Html::script('data/media/js/jquery.js') !!} -->
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
 
</head>
<body>
	<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
		<div class="span5">
           
                
                  <table id="course-list" cellpadding="3" class="table table-hover table-brdered">
                    <thead>
                   
                  <tr>
                      <th>Caption</th>
                      <th>Description</th>
                      <th>Photo</th>
                      <th>Action</th> 
                  </tr>
              </thead>   
              <tbody>
              	@foreach($alldata as $data)
                <tr>
                    <td>{{$data->caption}} </td>
                    <td>{{$data->description}}</td>
                    <td> <img src="{{ asset($data->file) }}" height="150"  width="150" /></td>
                    <!-- <td>
                    	<a href="{{route('course.edit',$data->id)}}" class="btn btn-info">Edit</a>
                      {!!Form::open(array('route' =>['course.destroy',$data->id],'class'=>'form-horizontal','method'=>'delete'))!!}

                      {!!Form::hidden('id',$data->id)!!}
                      {!!Form::submit('Delete',['class'=>'btn btn-danger'])!!}
                      {!!Form::close()!!}
                    </td>     --> 
                </tr>
                  @endforeach                 
              </tbody>
            </table>
            </div>
            {!! $alldata->render(); !!}
         </div>  
	</div>
</div>



</body>
</html>