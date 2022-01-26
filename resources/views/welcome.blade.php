<!DOCTYPE html>
<html lang="en">
<!-- Head -->
<head>
	<meta charset="utf-8">
	<title>Padma Academy</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Padma Academy is an online education company. Which gives free access to the educational content.">
    <meta name="keywords" content="CBSE,study online,educational website">
	<link rel="stylesheet" href="{{asset('PA/css/bootstrap.min.css')}}">
	<script src="{{url('https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js')}}"></script>
	<script src="{{url('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js')}}"></script>
	<script src="{{asset('PA/js/bootstrap.min.js')}}"></script>
	<script src="{{url('https://use.fontawesome.com/releases/v5.0.8/js/all.js')}}"></script>
	<link href="{{ asset('PA/style.css')}}" rel="stylesheet">
	<link href="{{asset('/images/favicon-32x32.png')}}" rel="shortcut icon" type="image/x-icon" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="{{asset('PA/cards/css/style.css')}}">
   
    
</head>
<!-- /Head -->
<body>
<!-- Navigation -->
            @include('main/nav')
<!-- Navigation -->
<!--- Image Slider -->
<style>
    @media only screen and (max-width: 600px) {
  .phoneimg {
    height:15rem;
  }
</style>
<div id="slides" class="carousel slide" data-ride="carousel">
    <ul class="carousel-indicators">
        <li data-target="#slides" data-slide-to="0" class="active"></li>
        <li data-target="#slides" data-slide-to="1"></li>
        <!--<li data-target="#slides" data-slide-to="2"></li>-->
        <!--<li data-target="#slides" data-slide-to="3"></li>-->
    </ul>
    <div class="carousel-inner">
        <div class="carousel-item  active">
            <a href="https://www.padmaacademy.com/ieltslogin">
            <img class="phoneimg" src="{{asset('images/w2.png')}}" style="width:100%; "></a>
        </div>
      <!--  <div class="carousel-item">-->
      <!--      <img class="phoneimg" src="{{asset('images/w1.png')}}" style="width:100%;">-->
      <!--      <div class="carousel-caption">-->
      <!--  <a type="button" style="background-color:red;color:white;" href="https://www.padmaacademy.com/ieltslogin" class="btn btn-danger">Start Now</a>-->
      <!--</div>   -->
      <!--  </div>-->
        <div class="carousel-item">
            <img class="phoneimg" src="{{asset('PA/img/wallpaper.png')}}" style="width:100%;" alt="Carousel Image">
        </div>
        <!--<div class="carousel-item">-->
        <!--    <img class="phoneimg" src="{{asset('PA/img/2.png')}}" style="width:100%;" alt="Carousel Image">-->
        <!--</div>-->
 </div></div>
<!-- Marquee --> 
<div class='marq'>
    @foreach($marq as $row)
            <marquee>{{ $row['news']}}</marquee>
    @endforeach
</div>
<!--- Welcome Section -->
<div class="container-fluid padding" id="courses">
    <div class="row welcome text-center">
        <div class="col-12">
            <br>
            <br>
            <h1 class="display-6" style="font-weight:600;">COURSES</h1>
        </div>
    </div>
</div>
<hr style="width:20%;border: none; 
            height: 2px; 
            background: black;">
<!-- Courses -->
<style>
    /* #Mobile (Landscape) - Note: Design for a width of 480px */
@media only screen and (min-width: 480px) and (max-width: 767px) {
    .choosecategory{
        margin-left:60px;
    }
}
/* #Tablet (Portrait) */
@media only screen and (min-width: 768px) and (max-width: 959px) {
	.choosecategory{
        margin-left:120px;
    }
}
    .card1{
        border-color:#F5F7FA;
        border-radius:5px;
        box-shadow: 0 2px 4px 0 rgba(0,0,0,0.2);
        transition: 0.2s;
        background-image: linear-gradient(230deg,#ffffff,#d6d6d6);
    }

    .card1:hover {
        animation-duration: 5s;
        background-image: linear-gradient(130deg,#ffffff,#c4d3ff);
        border-color:#e8e8e8;
        box-shadow: 0 18px 26px 0 rgba(0,0,0,0.2);
    }
    .btn1{
        background-image: linear-gradient(130deg,#ffffff,#d9d9d9);
        border-color:black;
        /*border-width:0.8px;*/
    }
    .btn1:hover{
        /*background-image: linear-gradient(230deg,#ffffff,#c978ff);*/
        /*border-width:0.1px;*/
        background-image:none;
        background-color:#c978ff;
        border-color:#c978ff;
        box-shadow: 0 10px 16px 0 rgba(0,0,0,0.2);
    }
  
</style>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                    <div class="row">
                        @foreach($cat as $row)
                       <div class="col-lg-4">
                            <div class="card mb-3 card1 choosecategory" style="max-width: 22rem;">
                                <!--<div class="card-header">Category</div>-->
                                    <div class="card-body text-dark text-center" style="min-height:5.5rem;padding:2.5rem;">
                                        <h2 class="card-title">{{$row['category_name']}}</h2>
                                        <!--<p class="card-text"></p>-->
                                    </div>
                                     <hr style="padding:0px;margin:0px;">
                                    <div class="card-footer text-center bg-transparent" style="border-top:none;"><a class="btn btn-primary btn1" href="{{url('choose',$row['category_code'])}}" style="border-radius:5px;color:black;">Click here to view >></a></div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
<!--</script>-->
    <script src="{{asset('PA/cards/js/isotope.min.js')}}"></script>
    <script src="{{asset('PA/cards/js/script.js')}}"></script>
    
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
<!-- Courses --> 
<!--<hr class="my-6">-->
<style type="text/css">
.btn {
  font-family: var(--button-font-family);
  font-size: var(--button-font-size);
  font-weight: var(--button-font-weight);
  text-decoration: none;
  cursor: pointer;
  display: inline-block;
  line-height: var(--button-line-height);
  padding: var(--button-padding-y) var(--button-padding-x);
  margin: 4px;
  height: auto;
  border: var(2) solid transparent;
  border-radius: 50px;
  vertical-align: middle;
  -webkit-appearance: none;
  color: inherit;
  background-color: transparent;
  width: auto;
  padding: 10px;
}
.btn:hover {
  text-decoration: none;
}
.btn:focus {
  outline: none;
  border-color: var(--darken-2);
  box-shadow: 0 0 0 3px var(--darken-3);
}
::-moz-focus-inner {
  border: 0;
  padding: 0;
}
/*.card{
  width:500px;
  border-radius: 15px 15px 15px 15px;
  box-shadow: 6px 6px 6px grey;
  border-padding :10px;
}*/
</style>
<section class="about-area section-gap" id="ielts" style="margin-top:20px;background-color: #F5F7FA;">
		<div class="col-lg-12 col-md-12">
		    <br>
		    <br>
		<div class="row align-items-center justify-content-center">
			<h1></h1>
		</div>
		</div>	
		<div class="container">
			<div class="row align-items-center justify-content-center">
				<div class="col-lg-5 col-md-6 about-left">
				    <img class="img-fluid" src="{{asset('images/ielts-logo-png-9.png')}}" alt="Study Abroad ">	
					
				</div>
					<div class="offset-lg-1 col-lg-6">
					<div class="courses-right">
											
						<div class="row" style="margin-left:5px;margin-right:5px;margin-top:10px;">
							
								<div class="card" style="width:500px;border-radius: 15px 15px 15px 15px;box-shadow: 6px 6px 6px grey;border-padding :10px;">
    								<div class="card-body">
      									<h4 class="card-title">IELTS MOCK TEST</h4>
      									<p class="card-text">Mock tests with the similar interface you will get in actual test.</p>
      									<a href="https://www.padmaacademy.com/ieltslogin" class="btn btn-info">Start Now</a>
   									 </div>
  								</div>
  						</div>
  						
  						<div class="row" style="margin-left:5px;margin-right:5px;">
							<div class="card" style="width:500px;border-radius: 15px 15px 15px 15px;box-shadow: 6px 6px 6px grey;border-padding :10px;">
    							<div class="card-body">
      								<h4 class="card-title">Read Writing Answers</h4>
      								<a href="https://www.padmaacademy.com/allieltswritingtest" class="btn btn-primary">Read Now</a>
   								</div>
  							</div>
						</div>
						
  						<div class="row" style="margin-left:5px;margin-right:5px;">
							<div class="card" style="width:500px;border-radius: 15px 15px 15px 15px;box-shadow: 6px 6px 6px grey;border-padding :10px;">
    							<div class="card-body">
      								<h4 class="card-title">IELTS Training</h4>
      								<a href="https://www.padmaacademy.com/choose/ielts" class="btn btn-primary">Start Now</a>
   								</div>
  							</div>
						</div>
					</div>
			</div>
		</div>
		</div>
	</section>
 <!--Category Blogs -->
<div class="container-fluid padding" id="blogs">
    <div class="row text-center">
        <div class="col-12">
            <br>
            <br>
            <h1 class="display-10" style="font-weight:600;">BLOGS</h1>
        </div>
    </div>
</div>
<hr style="width:20%;border: none; 
            height: 2px; 
            background: black;">
    <div class="container" style="margin-bottom:20px;">
        <div class="row">
            <div class="col-lg-12">
                    <div class="row">
                        @foreach($blog as $row)
                       <div class="col-lg-4">
                            <div class="card mb-3 card1 choosecategory" style="max-width: 22rem;">
                                <a style="text-decoration:none;" href="{{url('allblogs',$row['slug'])}}">
                                    <div class="card-body text-dark text-center" style="min-height:5.5rem;padding:2.5rem;">
                                        <h2 class="card-title">{{$row['name']}}</h2>
                                        <p class="card-text"></p>
                                    </div>
                                </a>     
                                    
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        
<!--    <div class="container">    -->
<!--        <div class="row">-->
<!--    <div class="col-sm-6 col-md-3">-->
<!--      <div class="card  mb-3">-->
                
<!--        <img class="card-img-top img-fluid" src="https://dummyimage.com/400x200/563d7c/ffffff&text=.card-img-topfff&text=.card-img-top" alt="Card image cap" width="400">-->
<!--        <div class="card-body">-->
<!--          <h4 class="card-title">.card-title</h4>-->
<!--          <p class="card-text">.card-text</p>-->
<!--        </div>-->
<!--      </div>-->
       
<!--    </div>-->
     
<!--    <div class="col-sm-6 col-md-3">-->
<!--      <div class="card mb-3 rounded">-->
         
<!--        <img class="card-img-top img-fluid" src="https://dummyimage.com/600x400/563d7c/ffffff&text=.card-img-topfff&text=.card-img-top" alt="Card image cap" width="400">-->
<!--        <div class="card-body">-->
<!--          <h4 class="card-title">.card-title</h4>-->
<!--          <p class="card-text">.card-text</p>-->
<!--        </div>-->
<!--      </div>-->
      
<!--    </div>-->
     
<!--    <div class="col-sm-6 col-md-3">-->
<!--      <div class="card mb-3 rounded">-->
         
<!--        <img class="card-img-top img-fluid" src="https://dummyimage.com/600x400/563d7c/ffffff&text=.card-img-topfff&text=.card-img-top" alt="Card image cap" width="400">-->
<!--        <div class="card-body">-->
<!--          <h4 class="card-title">.card-title</h4>-->
         
<!--        </div>-->
<!--      </div>-->
       
<!--    </div>-->
<!--    <div class="col-sm-6 col-md-3">-->
<!--      <div class="card mb-3 rounded">-->
           
<!--        <img class="card-img-top img-fluid" src="https://dummyimage.com/600x400/563d7c/ffffff&text=.card-img-topfff&text=.card-img-top" alt="Card image cap" width="400">-->
<!--        <div class="card-body">-->
<!--          <h4 class="card-title">Android App Development</h4>-->
         
<!--        </div>-->
<!--      </div>-->
      

<!--    </div>-->
    


<!--  </div>-->
  


<!--</div>-->
<!-- /.container -->


<section class="about-area section-gap" id="studyabroad" style="background-color: #F5F7FA;">
		<div class="col-lg-12 col-md-12">
		    <br>
		    <br>
		<div class="row align-items-center justify-content-center">
			<h1></h1>
		</div>
		</div>	
		<div class="container">
			<div class="row align-items-center justify-content-center">
				<div class="col-lg-5 col-md-6 about-left">
					<img class="img-fluid" src="{{asset('images/section2.png')}}" alt="Study Abroad ">
				</div>
					<div class="offset-lg-1 col-lg-6">
					<div class="courses-right">
						<div class="row" style="margin-left:5px;margin-right:5px;margin-top:10px;">
							
								<div class="card" style="width:500px;border-radius: 15px 15px 15px 15px;box-shadow: 6px 6px 6px grey;border-padding :10px;">
    								<div class="card-body">
      									<h4 class="card-title">Book Your Slot</h4>
      									<p class="card-text">If you want one on one counselling. (German University)</p>
      									<a href="https://www.padmaacademy.com/studyabroad" class="btn btn-info">Book Now</a>
   									 </div>
  								</div>
  						</div>
  						
  						<div class="row" style="margin-left:5px;margin-right:5px;">
							<div class="card" style="width:500px;border-radius: 15px 15px 15px 15px;box-shadow: 6px 6px 6px grey;border-padding :10px;">
    							<div class="card-body">
      								<h4 class="card-title">Posts</h4>
      								<p class="card-text">Read study abroad related stuff.</p>
      								<a href="https://www.padmaacademy.com/studyabroadblogs" class="btn btn-primary">Read Now</a>
   								</div>
  							</div>
						</div>
					</div>
			</div>
		</div>
		</div>
	</section>


<section class="about-area section-gap" style="background-color: #F5F7FA;">
		<div class="col-lg-12 col-md-12">
		    <br>
		    <br>
		<div class="row align-items-center justify-content-center">
			<h1></h1>
		</div>
		</div>	
		<div class="container">
			<div class="row align-items-center justify-content-center">
				<div class="col-lg-5 col-md-6 about-left text-center">
					<img class="img-fluid" src="{{asset('images/video-recording.png')}}" alt="Screen Recorder">
				</div>
					<div class="offset-lg-1 col-lg-6">
					<div class="courses-right">
						<div class="row" style="margin-left:5px;margin-right:5px;">
							
								<div class="card" style="width:500px;border-radius: 15px 15px 15px 15px;box-shadow: 6px 6px 6px grey;border-padding :10px;">
    								<div class="card-body">
      									<h4 class="card-title">PC Screen Recorder</h4>
      									<a href="https://www.padmaacademy.com/screen-recorder" class="btn btn-primary">Click here</a>
   									 </div>
  								</div>
  						
  						</div>
					</div>
			</div>
		</div>
		</div>
	</section>


	<!-- End About Area -->
<!--video carousel-->

<!--video carousel end-->




<!-- Parallax effect code -->
<style>
.parallax {
  /* The image used */
  background-image: url("images/parallax1.jpg");
  opacity: 0.5;
  /* Set a specific height */
  min-height: 400px; 

  /* Create the parallax scrolling effect */
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  margin: 0;
}

.container1 {
  position: absolute;
  
  margin: 20px;
  max-width: 100%;
  padding-left: 60px;
  padding-top: 20px;
  padding-right: 60px;
  padding-bottom: 20px;
 
}
.tet
{
   height:500px;font-size:36px;text-align:center; 
}

@media only screen and (max-width: 600px) {
  .tet{
      font-size:26px;
  }
}

</style>

<script src="{{asset('PA/js/typetext.js')}}"></script>
<div class="container1">
    <div class="tet">
        <a href="" class="typewrite" data-period="2000" data-type='[ "Kaak Cheshta, Bako Dhyanam, SwanNindra Tathaiwa Cha Alpahari, Grihtyaagi, Vidyarthi Panch Lakshnam" ]'>
    <span class="wrap"></span>
  </a>

<!--Scroll Up and Down this page to see the parallax scrolling effect.-->

</div>
</div>
    

<div class="parallax"></div>



	

<!--End parallax -->

<section class="about-area section-gap" style="background-color: #F5F7FA;">
		<div class="col-lg-12 col-md-12">
		    <br>
		    <br>
		<div class="row align-items-center justify-content-center">
			<h1></h1>
		</div>
		</div>	
		<div class="container">
			<div class="row align-items-center justify-content-center">
				<div class="col-lg-5 col-md-6 about-left">
					<img class="img-fluid" src="{{asset('images/contentwriting.png')}}" alt="Submit Content">
				</div>
					<div class="offset-lg-1 col-lg-6">
					<div class="courses-right">
						<div class="row" style="margin-left:5px;margin-right:5px;">
							
								<div class="card" style="width:500px;border-radius: 15px 15px 15px 15px;box-shadow: 6px 6px 6px grey;border-padding :10px;">
    								<div class="card-body">
      									<h4 class="card-title">Post your Ideas</h4>
      									<p class="card-text">If you want to submit your course ,contact us at below email</p>
      									<a class="btn btn-info">content@padmaacademy.com</a>
   									 </div>
  								</div>
  						</div>
  						
  				<!--		<div class="row" style="margin-left:5px;margin-right:5px;">-->
						<!--	<div class="card" style="width:500px;border-radius: 15px 15px 15px 15px;box-shadow: 6px 6px 6px grey;border-padding :10px;">-->
    		<!--					<div class="card-body">-->
      <!--								<h4 class="card-title">QnA</h4>-->
      <!--								<p class="card-text">3 Lakh Questions answered by the student community within 48 hours each</p>-->
      <!--								<a href="#" class="btn btn-primary">Ask now >></a>-->
   			<!--					</div>-->
  				<!--			</div>-->
						<!--</div>-->
					</div>
			</div>
		</div>
		</div>
	</section>
<!--- FOOTER -->
<!--<hr class="my-4">-->
        @include('main/footer')
<!-- Footer -->
</body>
</html>