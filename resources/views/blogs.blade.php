<!DOCTYPE html>
<html lang="en">
<!-- Head -->
<head>
	<meta charset="utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <title>{{$blog->title}}</title>
    
    <meta name="description" content="{{$blog->description}}">
    
    <meta name="keywords" content="{{$blog->keywords}}">
    
    <meta name="author" content="Padma Academy">

	<link rel="stylesheet" href="{{asset('PA/css/bootstrap.min.css')}}">
	<script src="{{url('https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js')}}"></script>
	<script src="{{url('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js')}}"></script>
	<script src="{{asset('PA/js/bootstrap.min.js')}}"></script>
	<script src="{{url('https://use.fontawesome.com/releases/v5.0.8/js/all.js')}}"></script>
	<link href="{{ asset('PA/style.css')}}" rel="stylesheet">
   <link rel="stylesheet" href="{{asset('PA/cards/css/style.css')}}">
  <link href="{{asset('/images/favicon-32x32.png')}}" rel="shortcut icon" type="image/x-icon" />
  <link rel="stylesheet" href="{{asset('prism.css')}}">
  <style>
      .Share-Button {
display:block;background:#25d366;max-width:180px;padding:8px 12px;color:#fff;font-weight:700;font-size:14px;text-align:center;text-transform:uppercase;letter-spacing:0.5px;margin:auto;border-radius:3px;transition:all .3s;
}
  </style>
</head>

<!-- /Head -->
<body style="background-color: #F5F7FA;">
     @include('main/nav')
 
<section class="about-area section-gap">
    <a class="Share-Button" href="whatsapp://send?text=https://www.padmaacademy.com/blogs/{{$blog->category_slug}}/{{$blog->slug}}">Share On Whatsapp</i></a><br>
    <div class="container-fluid padding" id="courses">
            <div class="text-center" style="color:black;font-size:24px; margin-bottom:20px;"><b>{{$blog->title}}</b></div>
    </div>
   <div class="col-xl-8 col-md-8 mx-auto">
    <div class="card" style="margin-top:20px;">
       <div>{!! htmlspecialchars_decode($blog->content) !!}</div>
        
    </div>
    </div>
    
    <a class="Share-Button" href="whatsapp://send?text=https://www.padmaacademy.com/blogs/{{$blog->category_slug}}/{{$blog->slug}}">Share On Whatsapp</i></a><br>
    
    <div class="col-xl-8 col-md-8 mx-auto">
    <div class="card" style="margin-top:20px;">
       <div class="card-body"><h4 class="text-center"><u>List of All Related Post</u></h4>
       @foreach($related as $row)
       <a style="color:RoyalBlue" href="https://www.padmaacademy.com/blogs/{{$blog->category_slug}}/{{$row['slug']}}"><i class="fa fa-arrow-circle-right" style="font-size:20px;padding-right:5px;padding-top:5px;"></i>{{$row['title']}}</a><br>
        @endforeach    
    </div>
    </div>
</section>
   


<style>
    .card{
        padding:1.23rem;
    }
</style>
<script src="{{asset('prism.js')}}"></script>
@include('main/footer')
</body>
</html>