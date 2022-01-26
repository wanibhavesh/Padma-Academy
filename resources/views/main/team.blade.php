<!DOCTYPE html>
<html lang="en">
<!-- Head -->


    <head>
	<meta charset="utf-8">
	<meta name="description" content="Our team Padma Academy">
    <meta name="keywords" content="Our Team, Padma Academy,team">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Padma Academy|| Team</title>
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

<!-- Team -->
<h1 class="text-center">OUR TEAM</h1>
<hr>
<style>
    .propic{
        height:250px;
        width:360px;
    }
</style>
    


<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="projects">
                <div class="row">
                    @foreach($pic as $item)
                   <div class="col-lg-4">
                       
                        <div class="card">
                            <div class="card-head">
                                <img src="{{$item['photo']}}" alt="" class="propic img-fluid card-img">
                            </div>
                            <div class="card-body text-center">
                                <h4 class="title">{{$item['name']}}</h4>
                                <h3 class="title">{{$item['task']}}</h3>
                                <hr>
                                <a href="{{url('team-info',$item['id'])}}" class="btn btn-outline-dark" >See more</a>
                            </div>
                        </div>
                        
                    </div>
                    @endforeach
                </div>
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