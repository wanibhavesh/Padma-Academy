<!DOCTYPE html>
<html lang="en">
<!-- Head -->


    <head>
	<meta charset="utf-8">
	<meta name="keywords" content="About PadmaAcademy">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Padma Academy About us</title>
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
    @media only screen and (max-width: 600px) {
  .phoneimg {
    height:6rem;
  }
}
</style>
<div class="container">
    <div class="row" style="margin:10px;">
        <div class="card" style="margin-top:50px;">
            <!--<div class="col-md-12 text-center">-->
            <div class="card-header" style="padding:0px;">
                <img class="img-fluid phoneimg" src="{{asset('PA/img/aboutus.png')}}">
            </div>
            <div class="card-body">
                Welcome, To Padma Academy<br>
                Padma Academy is an online education company. Which gives FREE access to the educational video.<br>
                The company focuses on making education easier and fun. In future, we are going to create video right from Android Developing, IOT, AI, Web development, to  "Everything under the sun including the sun"<br>

                Our Mission Is to provide World-Class, Good quality of Education for 
                Anyone, Anywhere  Absolutely FREE.<br>
            </div>
            <div class="card-footer">
            Founder : Mr. Bhavesh Wani <br>
            For Business inquiries: wanibhavesh767@gmail.com <br>
            Started at 11/2/2017    <br>
            Developers : Mr.Bhavesh Wani & Mr.Shreyas Fegade
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