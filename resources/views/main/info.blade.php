<!DOCTYPE html>
<html lang="en">
<!-- Head -->


   <head>
	<meta charset="utf-8">

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Padma Academy||team-info</title>
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
<body>

<!-- Navigation -->
            @include("main.nav")

<!-- Navigation -->

<!-- About us -->
<style>
    .card{
        border-radius:10px;
        box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
        transition: 0.3s;
    }

    .card:hover {
    box-shadow: 0 12px 20px 0 rgba(0,0,0,0.2);
    }
    .phoneimg{
        height:256px;
        width:350px;
    }
    @media only screen and (max-width: 600px) {
  .phoneimg {
    height:10rem;
  }
}
</style>
<div class="container">
    <div class="row" style="margin:10px;">
        <div class="card" style="margin-top:50px;">
            <!--<div class="col-md-12 text-center">-->
            <div class="card-header" style="padding:0px;">
                <center>
                <img class="img-fluid phoneimg" src="{{$pic['photo']}}">
                </center>
            </div>
            <div class="card-body">
               Name: {{$pic['name']}}<br> {{$pic['task']}}
               <br>
            </div>
            <div class="card-footer">
            {!! htmlspecialchars_decode($pic['content']) !!}
            
            </div>
        </div>
    </div>
        
        
</div>
<!-- Footer -->
<hr>

    @include("main.footer")

<!-- Footer -->




</body>
</html>