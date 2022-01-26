<!DOCTYPE html>
<html lang="en">
<!-- Head -->
    <head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Padma Academy {{$name}} Course</title>
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
<h1 class="text-center">{{$name}} COURSES</h1>
<hr>
 <div class="container">
        <div class="row">
            <div class="col-lg-12">
                    <div class="row">
                        @foreach($div as $row)
                       <div class="col-lg-4">
                            <div class="card">
                                <div class="card-head">
                                    <img src="https://www.padmaacademy.com/{{$row['class_image']}}" alt="" class="img-fluid card-img">
                                    <div class="card-overlay text-center"><h2>{{$row['class_name']}}</h2></div>
                                    <div class="card-hover">
                                        <p>{{$row['hover']}}</p>
                                    </div>
                                </div>
                                <div class="card-body text-center">
                                    <h4 class="title">{{$row['class_name']}}</h4>
                                    <a href="{{url('fetch',$row['class_slug'])}}" class="btn btn-lg card-btn">See More</a>
                               </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
<div class="text-center">        
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <!-- blog -->
    <ins class="adsbygoogle"
         style="display:block"
         data-ad-client="ca-pub-4072734219665716"
         data-ad-slot="2609053916"
         data-ad-format="auto"
         data-full-width-responsive="true"></ins>
    <script>
         (adsbygoogle = window.adsbygoogle || []).push({});
    </script>
</div>
<!-- Footer -->
<hr>
    @include("main.footer")
<!-- Footer -->
</body>
</html>