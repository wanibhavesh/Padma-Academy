<!DOCTYPE html>
<html lang="en">
<!-- Head -->


<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>IELTS Mock test</title>
	<link rel="stylesheet" href="{{asset('PA/css/bootstrap.min.css')}}">
	<script src="{{url('https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js')}}"></script>
	<script src="{{url('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js')}}"></script>
	<script src="{{asset('PA/js/bootstrap.min.js')}}"></script>
	<script src="{{url('https://use.fontawesome.com/releases/v5.0.8/js/all.js')}}"></script>
	<link href="{{ asset('PA/style.css')}}" rel="stylesheet">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="{{asset('PA/cards/css/style.css')}}">
   <link href="{{asset('/images/favicon-32x32.png')}}" rel="shortcut icon" type="image/x-icon" />
  
</head>


<!-- /Head -->
<body style="background-color:#dbe5f5;">
    
<!-- Navigation -->
            @include("main.nav")


<style>
    .login-form {
		width: 340px;
    	margin: 40px auto;
	}
    .login-form form {
    	margin-bottom: 15px;
        background: #f7f7f7;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
    .login-form h2 {
        margin: 0 0 15px;
    }
    .form-control, .btn {
        min-height: 38px;
        border-radius: 2px;
    }
    .btn {
        font-size: 15px;
        font-weight: bold;
    }
</style>


     <div class="login-form">
         @if($error!="")
            <script>alert("{{ $error }}");</script>
        @endif 
    <form action="{{route('ieltslogin')}}" method="POST">
        {{csrf_field()}}
        <div class="form-group">
        <img class="img-fluid" src="https://www.padmaacademy.com/images/IELTS-Logo.jpg"></img></div>
        <h3 class="text-center">Login</h3>
        <div class="form-group">
            <input type="email" name="email" class="form-control" placeholder="Email" required="required">
        </div>
        <div class="form-group">
            <input type="password" name="password" class="form-control" placeholder="Password" required="required">
        </div>
        <div class="form-group">
            <button type="submit" name="submit" class="btn btn-primary btn-block">Log in</button>
        </div>
         <div class="form-group">
            <a href="{{url('https://www.padmaacademy.com/ieltsregister')}}" class="btn btn-success btn-block">Signup</a>
        </div>
    </form>
    </div>



<!-- Footer -->
<hr>

    @include("main.footer")

<!-- Footer -->




</body>
</html>