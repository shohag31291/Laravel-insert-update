<html>
<head>
    <title>All Course</title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

<form class="form-horizontal" method="POST" action="/auth/login">
    {!! csrf_field() !!}

    <div class="form-control">
        Email
        <input  type="email" name="email" value="{{ old('email') }}">
    </div>

    <div>
        Password
        <input type="password" name="password" id="password">
    </div>

    <div>
        <input type="checkbox" name="remember"> Remember Me
    </div>

    <div>
        <button type="submit">Login</button>
    </div>
</form>
  </div>  
    </div>
</div>
</body>
</html>