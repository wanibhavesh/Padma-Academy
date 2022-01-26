<!DOCTYPE html>
<html lang="en">
<!-- Head -->


<head>
	<meta charset="utf-8">
	<meta name="description" content="Padma Academy is an online education company. Which gives free access to the educational content.">
    <meta name="keywords" content="CBSE,study online,educational website">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Padma Academy</title>
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
<body style="background-color: #F5F7FA;">
     @include('main/nav')
     
     
     
     
   



<section class="about-area section-gap">
    
    
    
    
    <div class="container-fluid padding" id="courses">
    <div class="row welcome text-center">
        <div class="col-12">
            <br>
            <h1>ALL CONTENT</h1>
            
        </div>
        <hr style="width:20%;border: none; 
            height: 2px; 
            background: black;">
    </div>
    </div>
    
    
    <div class="col-xl-8 col-md-12 mx-auto">
  
  
     @foreach($sap as $row)
     <a href="/studyabroadpost/{{$row['topic_slug']}}">
     <div class="card">
        <div class="row no-gutters">
            <div class="col-md-4">
                <img src="{{$row['image']}}" class="card-img" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h4 class="card-title">{{$row['topic']}}</h4>
                    <p class="card-text">{{$row['description']}}</p>
                    <!--<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>-->
                </div>
            </div>
        </div>
    </div>
    </a>
    @endforeach
    
    
    </div>
    <br>
    
</section>
@include('main/footer')
</body>
</html>