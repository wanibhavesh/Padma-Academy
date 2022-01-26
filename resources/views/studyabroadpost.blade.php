<!DOCTYPE html>
<html lang="en">
<!-- Head -->


<head>
	<meta charset="utf-8">
	<meta name="description" content="{{$content['description']}}">
    <meta name="keywords" content="{{$content['keyword']}}">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>{{$content['title']}}</title>
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
            <h1>{{$content['topic']}}</h1>
            
        </div>
        <hr style="width:20%;border: none; 
            height: 2px; 
            background: black;">
    </div>
    </div>
    
    
    <div class="col-xl-10 col-md-12 mx-auto">
        
    <div class="card">
        {!! htmlspecialchars_decode($content['content']) !!}
    </div>
  
    
    
    
    </div>
    <br>
    

    
</section>
        <div class="col-xl-10 col-md-12 mx-auto">
            <div class="card" style="margin-top:10px;margin-bottom:10px;">
                <div class="card-body">
                    <h4 class="text-center"><u>List of All Related Post</u></h4>
                        @foreach($post as $row)
                            <a href="/studyabroadpost/{{$row['topic_slug']}}"><i class="fa fa-arrow-circle-right" style="font-size:20px;padding-right:5px;padding-top:5px;"></i>{{$row->topic}}</a><br>
                            <hr style="padding:0px;margin:0px;">
                        @endforeach
                </div>
            </div>
        </div>    


<style>
    .card{
        padding:1.23rem;
    }
</style>

@include('main/footer')
</body>
</html>