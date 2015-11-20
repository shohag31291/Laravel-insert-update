<html>
<head>
	<title>Upload Image</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
</head>
<body>
 	<div class="container">
 		<div class="col-md-7 col-md-offset-2">
 		<h4>Upload Image</h4>
 		<form action="{{ URL::to('upload') }}" method="post" enctype="multipart/form-data">
 			
 			<label>Select image to upload:</label>
 			<input type="file" name="file" id="file">
 			<input type="submit" name="submit" value="Upload">
 			<input type="hidden" value="{{ csrf_token() }}" name="_token">
 		</form>
 	</div>
 </div>
 </body>
 </html>