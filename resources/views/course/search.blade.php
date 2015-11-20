<html>
<head>
	<title>All Course</title>
  <!-- {!! Html::script('data/media/js/jquery.js') !!} -->
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
  <!-- {!! Html::style('data/media/css/jquery.dataTable.css') !!} -->
  <!-- DataTables CSS -->
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.10/css/jquery.dataTables.css">
  
<!-- jQuery -->
<script type="text/javascript" charset="utf8" src="//code.jquery.com/jquery-1.10.2.min.js"></script>
  
<!-- DataTables -->
<script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.10/js/jquery.dataTables.js"></script>

   

</head>
<body>
	<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
		<div class="span5">
           
                
                  <table id="course-list" cellpadding="3" class="table table-hover table-brdered">
                    <thead>
          <!--<form id="newsearch" method="get">
            <input type="text" class="tftextinput" name="q" size="21" maxlength="120"><input type="submit" value="search" class="tfbutton">
             </form>-->
                   
                   <!-- {!! Form::open(['route'=>'course.index','method'=>'GET','class'=>'Class_name']) !!}

                    {!! Form::text('course_code') !!}
                    {!! Form::text('course_title') !!}

                    {!! Form::submit('Submit') !!}

                    {!! Form::close() !!}-->
                  <tr>
                      <th>Course Code</th>
                      <th>Course Title</th>
                      <th>Credite</th>
                      <th>Action</th> 
                  </tr>
              </thead>   
              <tbody>
              	@foreach($alldata as $data)
                <tr>
                    <td>{{$data->course_code}} </td>
                    <td>{{$data->course_title}}</td>
                    <td>{{$data->course_credite}}</td>
                    <td>
                    	<a href="{{route('course.edit',$data->id)}}" class="btn btn-info">Edit</a>
                      {!!Form::open(array('route' =>['course.destroy',$data->id],'class'=>'form-horizontal','method'=>'delete'))!!}

                      {!!Form::hidden('id',$data->id)!!}
                      {!!Form::submit('Delete',['class'=>'btn btn-danger'])!!}
                      {!!Form::close()!!}
                    </td>     
                </tr>
                  @endforeach                 
              </tbody>
            </table>
            </div>
            {!! $alldata->render(); !!}
         </div>  
	</div>
</div>

<!-- {!! Html::script('data/media/js/jquery.dataTable.min.js') !!} -->

<script type="text/javascript">
    $(document).ready(function(){
        $('#course-list').DataTable();
    });
</script>

</body>
</html>