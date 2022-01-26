<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>IELTS Dashboard</title>
    <link href="{{asset('/images/favicon-32x32.png')}}" rel="shortcut icon" type="image/x-icon" />
    
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-4072734219665716"
     crossorigin="anonymous"></script>
    
  </head>
  <body>
       @if(!(Session::get('mail')))
            @php
                header("Location: " . URL::to('/'));
                exit();
            @endphp;
        @endif
        
     
 <nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
    <div class="container-fluid">
        <a class="navbar-brand" style="font-weight:700; color:rgba(0, 12, 173, 0.9);" href="https://www.padmaacademy.com">PADMA ACADEMY</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse"
        data-target="#navbarResponsive">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('ieltslogout') }}">Logout</a>
                </li>
               
            </ul>
        </div>
    </div>
</nav>

<div class="container" style="margin-top: 20px;">
    <div class="row">
        <div class="col-lg-12">
            <div class="row">
               <div class="col-lg-3">
                    <div class="card border-primary mb-3" style="max-width: 18rem;">
                        <div class="card-header">Listening test taken</div>
                        <div class="card-body text-primary">
                          <h4 class="card-title text-center">{{$no_listening}}</h4>
                          
                        </div>
                    </div>
                </div>
               <div class="col-lg-3">
                    <div class="card border-success mb-3" style="max-width: 18rem;">
                        <div class="card-header">Reading test taken</div>
                        <div class="card-body text-success">
                          <h4 class="card-title text-center">0</h4>
                        </div>
                    </div>
                </div>                
               <div class="col-lg-3">
                    <div class="card border-danger mb-3" style="max-width: 18rem;">
                        <div class="card-header">Writing test taken</div>
                        <div class="card-body text-danger">
                          <h4 class="card-title text-center">{{$noessay}}</h4>
                        </div>
                    </div>
                </div>
               <div class="col-lg-3">
                    <div class="card border-dark mb-3" style="max-width: 18rem;">
                        <div class="card-header">Speaking test taken</div>
                        <div class="card-body text-dark">
                          <h4 class="card-title text-center">0</h4>
                        </div>
                    </div>
                </div>                                              
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
<div class="d-flex justify-content-center">

<div class="col-md-8">
    
    <div class="card" style="margin-top: 20px;">
      <div class="card-body">
        <h5 class="card-title" style="color:red;">We will upload content soon regarding Listening, Reading and Speaking. Until then Enjoy writing tests with the similar interface you will get in actual test.</h5>
    </div>
    </div>
    
    
    <div class="card" style="margin-top: 20px;">
      <div class="card-body">
        <h5 class="card-title">IELTS Cambridge Book 15 Test 1</h5>
        <a href="https://www.padmaacademy.com/ieltslistening/cambridge-15-test-1-listening" class="btn btn-primary" style="margin: 5px;">Listening Test</a>
        <!--<a href="https://www.padmaacademy.com/ieltsreading/cambridge-15-test-1-reading" class="btn btn-success" style="margin: 5px;" >Reading Test</a>-->
        <a href="https://www.padmaacademy.com/ieltswriting/cambridge-15-test-1-writing" class="btn btn-danger" style="margin: 5px;" >Writing Test</a>
        <!--<a href="https://www.padmaacademy.com/ieltsspeaking/cambridge-15-test-1-speaking" class="btn btn-dark" style="margin: 5px;" >Speaking Test</a>-->
        <!--<a href="https://www.padmaacademy.com/ieltsresult/cambridge-15-test-1-result" class="btn btn-info" style="margin: 5px;" >Result</a>-->
        <!--<a href="https://www.padmaacademy.com/ieltsmodel/cambridge-15-test-1-model" class="btn btn-secondary" style="margin: 5px;" >Model Answer</a>-->
      </div>
    </div>
 
    <div class="card" style="margin-top: 20px;">
      <div class="card-body">
        <h5 class="card-title">IELTS Cambridge Book 15 Test 2</h5>
        <!--<a href="https://www.padmaacademy.com/ieltslistening/cambridge-15-test-2-listening" class="btn btn-primary" style="margin: 5px;">Listening Test</a>-->
        <!--<a href="https://www.padmaacademy.com/ieltsreading/cambridge-15-test-2-reading" class="btn btn-success" style="margin: 5px;" >Reading Test</a>-->
        <a href="https://www.padmaacademy.com/ieltswriting/cambridge-15-test-2-writing" class="btn btn-danger" style="margin: 5px;" >Writing Test</a>
        <!--<a href="https://www.padmaacademy.com/ieltsspeaking/cambridge-15-test-2-speaking" class="btn btn-dark" style="margin: 5px;" >Speaking Test</a>-->
        <!--<a href="https://www.padmaacademy.com/ieltsresult/cambridge-15-test-2-result" class="btn btn-info" style="margin: 5px;" >Result</a>-->
        <!--<a href="https://www.padmaacademy.com/ieltsmodel/cambridge-15-test-2-model" class="btn btn-secondary" style="margin: 5px;" >Model Answer</a>-->
      </div>
    </div>
    
    <div class="card" style="margin-top: 20px;">
      <div class="card-body">
        <h5 class="card-title">IELTS Cambridge Book 15 Test 3</h5>
        <!--<a href="https://www.padmaacademy.com/ieltslistening/cambridge-15-test-3-listening" class="btn btn-primary" style="margin: 5px;">Listening Test</a>-->
        <!--<a href="https://www.padmaacademy.com/ieltsreading/cambridge-15-test-3-reading" class="btn btn-success" style="margin: 5px;" >Reading Test</a>-->
        <a href="https://www.padmaacademy.com/ieltswriting/cambridge-15-test-3-writing" class="btn btn-danger" style="margin: 5px;" >Writing Test</a>
        <!--<a href="https://www.padmaacademy.com/ieltsspeaking/cambridge-15-test-3-speaking" class="btn btn-dark" style="margin: 5px;" >Speaking Test</a>-->
        <!--<a href="https://www.padmaacademy.com/ieltsresult/cambridge-15-test-3-result" class="btn btn-info" style="margin: 5px;" >Result</a>-->
        <!--<a href="https://www.padmaacademy.com/ieltsmodel/cambridge-15-test-3-model" class="btn btn-secondary" style="margin: 5px;" >Model Answer</a>-->
      </div>
    </div>
    
    <div class="card" style="margin-top: 20px;">
      <div class="card-body">
        <h5 class="card-title">IELTS Cambridge Book 15 Test 4</h5>
        <!--<a href="https://www.padmaacademy.com/ieltslistening/cambridge-15-test-4-listening" class="btn btn-primary" style="margin: 5px;">Listening Test</a>-->
        <!--<a href="https://www.padmaacademy.com/ieltsreading/cambridge-15-test-4-reading" class="btn btn-success" style="margin: 5px;" >Reading Test</a>-->
        <a href="https://www.padmaacademy.com/ieltswriting/cambridge-15-test-4-writing" class="btn btn-danger" style="margin: 5px;" >Writing Test</a>
        <!--<a href="https://www.padmaacademy.com/ieltsspeaking/cambridge-15-test-4-speaking" class="btn btn-dark" style="margin: 5px;" >Speaking Test</a>-->
        <!--<a href="https://www.padmaacademy.com/ieltsresult/cambridge-15-test-4-result" class="btn btn-info" style="margin: 5px;" >Result</a>-->
        <!--<a href="https://www.padmaacademy.com/ieltsmodel/cambridge-15-test-4-model" class="btn btn-secondary" style="margin: 5px;" >Model Answer</a>-->
      </div>
    </div>
    
    <div class="card" style="margin-top: 20px;">
      <div class="card-body">
        <h5 class="card-title">IELTS Cambridge Book 14 Test 1</h5>
        <!--<a href="https://www.padmaacademy.com/ieltslistening/cambridge-14-test-1-listening" class="btn btn-primary" style="margin: 5px;">Listening Test</a>-->
        <!--<a href="https://www.padmaacademy.com/ieltsreading/cambridge-14-test-1-reading" class="btn btn-success" style="margin: 5px;" >Reading Test</a>-->
        <a href="https://www.padmaacademy.com/ieltswriting/cambridge-14-test-1-writing" class="btn btn-danger" style="margin: 5px;" >Writing Test</a>
        <!--<a href="https://www.padmaacademy.com/ieltsspeaking/cambridge-14-test-1-speaking" class="btn btn-dark" style="margin: 5px;" >Speaking Test</a>-->
        <!--<a href="https://www.padmaacademy.com/ieltsresult/cambridge-14-test-1-result" class="btn btn-info" style="margin: 5px;" >Result</a>-->
        <!--<a href="https://www.padmaacademy.com/ieltsmodel/cambridge-14-test-1-model" class="btn btn-secondary" style="margin: 5px;" >Model Answer</a>-->
      </div>
    </div>
    
    <div class="card" style="margin-top: 20px;">
      <div class="card-body">
        <h5 class="card-title">IELTS Cambridge Book 14 Test 2</h5>
        <!--<a href="https://www.padmaacademy.com/ieltslistening/cambridge-14-test-2-listening" class="btn btn-primary" style="margin: 5px;">Listening Test</a>-->
        <!--<a href="https://www.padmaacademy.com/ieltsreading/cambridge-14-test-2-reading" class="btn btn-success" style="margin: 5px;" >Reading Test</a>-->
        <a href="https://www.padmaacademy.com/ieltswriting/cambridge-14-test-2-writing" class="btn btn-danger" style="margin: 5px;" >Writing Test</a>
        <!--<a href="https://www.padmaacademy.com/ieltsspeaking/cambridge-14-test-2-speaking" class="btn btn-dark" style="margin: 5px;" >Speaking Test</a>-->
        <!--<a href="https://www.padmaacademy.com/ieltsresult/cambridge-14-test-2-result" class="btn btn-info" style="margin: 5px;" >Result</a>-->
        <!--<a href="https://www.padmaacademy.com/ieltsmodel/cambridge-14-test-2-model" class="btn btn-secondary" style="margin: 5px;" >Model Answer</a>-->
      </div>
    </div>
    
    <div class="card" style="margin-top: 20px;">
      <div class="card-body">
        <h5 class="card-title">IELTS Cambridge Book 14 Test 3</h5>
        <!--<a href="https://www.padmaacademy.com/ieltslistening/cambridge-14-test-3-listening" class="btn btn-primary" style="margin: 5px;">Listening Test</a>-->
        <!--<a href="https://www.padmaacademy.com/ieltsreading/cambridge-14-test-3-reading" class="btn btn-success" style="margin: 5px;" >Reading Test</a>-->
        <a href="https://www.padmaacademy.com/ieltswriting/cambridge-14-test-3-writing" class="btn btn-danger" style="margin: 5px;" >Writing Test</a>
        <!--<a href="https://www.padmaacademy.com/ieltsspeaking/cambridge-14-test-3-speaking" class="btn btn-dark" style="margin: 5px;" >Speaking Test</a>-->
        <!--<a href="https://www.padmaacademy.com/ieltsresult/cambridge-14-test-3-result" class="btn btn-info" style="margin: 5px;" >Result</a>-->
        <!--<a href="https://www.padmaacademy.com/ieltsmodel/cambridge-14-test-3-model" class="btn btn-secondary" style="margin: 5px;" >Model Answer</a>-->
      </div>
    </div>
    
    <div class="card" style="margin-top: 20px;">
      <div class="card-body">
        <h5 class="card-title">IELTS Cambridge Book 14 Test 4</h5>
        <!--<a href="https://www.padmaacademy.com/ieltslistening/cambridge-14-test-4-listening" class="btn btn-primary" style="margin: 5px;">Listening Test</a>-->
        <!--<a href="https://www.padmaacademy.com/ieltsreading/cambridge-14-test-4-reading" class="btn btn-success" style="margin: 5px;" >Reading Test</a>-->
        <a href="https://www.padmaacademy.com/ieltswriting/cambridge-14-test-4-writing" class="btn btn-danger" style="margin: 5px;" >Writing Test</a>
        <!--<a href="https://www.padmaacademy.com/ieltsspeaking/cambridge-14-test-4-speaking" class="btn btn-dark" style="margin: 5px;" >Speaking Test</a>-->
        <!--<a href="https://www.padmaacademy.com/ieltsresult/cambridge-14-test-4-result" class="btn btn-info" style="margin: 5px;" >Result</a>-->
        <!--<a href="https://www.padmaacademy.com/ieltsmodel/cambridge-14-test-4-model" class="btn btn-secondary" style="margin: 5px;" >Model Answer</a>-->
      </div>
    </div>
 
 
 
 
    

 </div>
</div>


<div class="d-flex justify-content-center" style="margin-top: 20px;">
<div class="col-md-8">
    <div class="table-responsive">
<table class="table">
  <thead>
    <tr>
      <th scope="col">Writing Test Name</th>
      <th scope="col">Score</th>
    </tr>
  </thead>
  <tbody>
    @foreach($test as $row)  
    <tr>
      <th scope="row">{{$row->slug}}</th>
      <td>{{$row->band}}</td>
    </tr>
    @endforeach
    
  </tbody>
</table>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Listening Test Name</th>
      <th scope="col">Score</th>
    </tr>
  </thead>
  <tbody>
    @foreach($ltest as $lrow)  
    <tr>
      <th scope="row">{{$lrow->slug}}</th>
      <td>{{$lrow->band}}</td>
    </tr>
    @endforeach
    
  </tbody>
</table>

</div>

</div>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
        
</html>