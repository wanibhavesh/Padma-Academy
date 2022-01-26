<!DOCTYPE html>
<html lang="en">
<!-- Head -->


<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Padma Academy Study Abroad</title>
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
        
     
            <img src="{{asset('images/images.jpg')}}" class="img-fluid" width="100%" height="40%" alt="Responsive image">

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
   <!--Section: Contact v.2-->
<section class="mb-4">

    <!--Section heading-->
    <h2 class="h1-responsive font-weight-bold text-center my-4">Study Abroad Queries Book Slot</h2>
    <!--Section description-->
    <p class="text-center w-responsive mx-auto mb-5">Do you have any questions related study abroad? Please do not hesitate to book time slot. Our experts will come back to you within
        a matter of hours to help you. Further communication will be done by email provided</p>

   

        <!--Grid column-->
        <div class="col-md-12 mb-md-0 mb-5">
            <form action="{{route('studyabroad')}}" method="POST">
                {{csrf_field()}}
                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <input type="text" id="name" name="name" placeholder="Your name" class="form-control">
                            <br>
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <input type="email" id="email" name="email" placeholder="Your email"  class="form-control">
                           <br> </div>
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

                
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-12">

                        <div class="md-form">
                            <textarea type="text" id="questions" name="questions" rows="3" placeholder="Questions"  class="form-control md-textarea"></textarea>
                            <br>
                        </div>

                    </div>
                </div>
                <!--Grid row-->
              <div class="form-group">
                                            <div class="general-button">
                                            <input type="submit" name="submit" class="btn-flat btn-mb1 btn-primary">
                                        </div>
                                        </div>
            </form>

            
            <div class="status"></div>
        </div>
        <!--Grid column-->

      
    </div>

</section>
<!--Section: Contact v.2-->
   
        
        
</div>
<!-- Footer -->
<hr>

    @include("main.footer")

<!-- Footer -->




</body>
</html>