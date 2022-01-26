<!DOCTYPE html>
<html lang="en">
<!-- Head -->


<head>
	<meta charset="utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <title>{{$seo->name}}</title>
    
    <meta name="description" content="{{$seo->description}}">
    
    <meta name="keywords" content="{{$seo->keywords}}">
    
    <meta name="author" content="Padma Academy">

    
 



	<title>{{$question->slug}}</title>
	<link rel="stylesheet" href="{{asset('PA/css/bootstrap.min.css')}}">
	<script src="{{url('https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js')}}"></script>
	<script src="{{url('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js')}}"></script>
	<script src="{{asset('PA/js/bootstrap.min.js')}}"></script>
	<script src="{{url('https://use.fontawesome.com/releases/v5.0.8/js/all.js')}}"></script>
	<link href="{{ asset('PA/style.css')}}" rel="stylesheet">
   <link rel="stylesheet" href="{{asset('PA/cards/css/style.css')}}">
  <link href="{{asset('/images/favicon-32x32.png')}}" rel="shortcut icon" type="image/x-icon" />
</head>


<!-- /Head -->
<body style="background-color: #F5F7FA;">
     @include('main/nav')
 
<section class="about-area section-gap">
    <div class="container-fluid padding" id="courses">
            <div class="text-center" style="color:orange;font-size:24px; margin-bottom:20px;"><b>{{$seo->name}}</b></div>
    </div>
   <div class="col-xl-10 col-md-12 mx-auto">
    <div class="card">
        <div class="text-center" style="color:blue;font-size:20px;"> 
        
            Sample Answer Provided By Book    
        
        </div>
        <div class="text-center" style="color:violet;font-size:20px;">Task 1</div>
        <div style="color:red;font-size:20px;">{!! htmlspecialchars_decode($question->que1) !!}</div>
        <div class="text-center" style="color:violet;font-size:20px;">Task 1 Solution</div>
        <div style="color:black;font-size:20px;"> <hr> </div>
        
        <div class="text-center" style="color:violet;font-size:20px;">Task 2</div>
        <div style="color:red;font-size:20px;">{!! htmlspecialchars_decode($question->que2) !!}</div>
        <div class="text-center" style="color:violet;font-size:20px;">Task 2 Solution</div>
        <div style="color:black;font-size:20px;"> <hr> </div>
    
    </div>




    @foreach($readpost as $row)
    <div class="card">
        <div class="text-center" style="color:blue;font-size:20px;">By: 
        
            @foreach($user as $name)
                @if($name['email'] == $row['user'])
                    {{$name['name']}}
                @endif
            @endforeach    
        
        </div>
        <div class="text-center" style="color:violet;font-size:20px;">Task 1</div>
        <div style="color:red;font-size:20px;">{!! htmlspecialchars_decode($question->que1) !!}</div>
        <div class="text-center" style="color:violet;font-size:20px;">Task 1 Solution</div>
        <div style="color:black;font-size:20px;">{!! htmlspecialchars_decode($row['ans1']) !!} <hr> </div>
        
        <div class="text-center" style="color:violet;font-size:20px;">Task 2</div>
        <div style="color:red;font-size:20px;">{!! htmlspecialchars_decode($question->que2) !!}</div>
        <div class="text-center" style="color:violet;font-size:20px;">Task 2 Solution</div>
        <div style="color:black;font-size:20px;">{!! htmlspecialchars_decode($row['ans2']) !!} <hr> </div>
    
    </div>
    @endforeach

    </div>
    <br>
</section>
   


<style>
    .card{
        padding:1.23rem;
    }
</style>

@include('main/footer')
</body>
</html>