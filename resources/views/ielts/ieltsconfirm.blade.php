<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>IELTS Confirm</title>
    <link href="{{asset('/images/favicon-32x32.png')}}" rel="shortcut icon" type="image/x-icon" />
  </head>
  <body style="background-color: #dbe5f5;">
        @if(!(Session::get('mail')))
            @php
                header("Location: " . URL::to('/'));
                exit();
            @endphp;
        @endif
    
<nav class="navbar navbar-expand-lg navbar-light bg-light">
      
        <img class="img-fluid navbar-nav mr-auto mt-2 mt-lg-0" src="https://www.padmaacademy.com/images/IELTSlogo.png"></img>
        
        <img class="img-fluid navbar-nav my-2 my-lg-0" src="https://www.padmaacademy.com/images/IELTSpartners.jpg"></img>
  </div>
</nav>

<div class="col-xl-4 mx-auto" style="margin-top:80px;">    
<img src="https://www.padmaacademy.com/images/userCheck.png" class="img-fluid"><b style="color:white;">Confirm your details</b>  </img>
<div class="card">
        <div class="row no-gutters">
            <div class="col-md-12">
                <div class="card-body">
                        <p class="card-text">Name : </p>
                        <p class="card-text">Date of birth : </p>
                        <p class="card-text">Candidate number : </p>
                        <p class="card-text">If your details are not correct, please inform the invigilator.</p>
                        <a href="#"><button class="justify-content-center" type="button" style="background-color: #dbe5f5;">My details are correct</button></a>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .card{
        background-color: #dbe5f5;
        border: 1px solid white;
    }
</style>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>