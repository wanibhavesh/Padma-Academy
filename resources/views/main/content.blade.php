<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{$title}}</title>
    <meta name="description" content="{{$description}}">
    <meta name="keywords" content="{{$keyword}}">
    <meta name="author" content="Bhavesh Wani">
    <meta property="article:published_time" content="{{$publishat}}">
    <meta property="article:modified_time" content="{{$updatedat}}">
    <meta property="og:site_name" content="Padma Academy">
    <link href="{{asset('/images/favicon-32x32.png')}}" rel="shortcut icon" type="image/x-icon" />
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="{{url('https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css')}}"  crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="{{asset('PA/css/contentstyle.css')}}">
    <link rel="stylesheet" href="{{asset('prism.css')}}">
    <!-- Font Awesome JS -->
    <script defer src="{{url('https://use.fontawesome.com/releases/v5.0.13/js/solid.js')}}"  crossorigin="anonymous"></script>
    <script defer src="{{url('https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js')}}"  crossorigin="anonymous"></script>
</head>
<body>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container-fluid">
                    <button id="sidebarCollapse" class="btn btn-dark">
                       <i class="fas fa-align-justify"></i>
                    </button>
                    <a href="https://www.padmaacademy.com/"><span style="font-size:24px;color:#61dafb;padding-left:5px;">Padma Academy</span></a>
                    <button style="width:50px;" class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <!--<li class="nav-item active">-->
                            <!--    <a class="nav-link" href="https://www.padmaacademy.com/">Home</a>-->
                            <!--</li>-->
                            <li class="nav-item active">
                                <a class="nav-link" href="{{url('https://www.padmaacademy.com/choose/'.$category_code)}}">{{$category_name}}</a>
                            </li>
                            
                            <li class="nav-item active">
                                <a class="nav-link" href="#list">List of all chapter</a>
                            </li>
                            
                            <li class="nav-item active">
                                <a class="nav-link" href="https://www.padmaacademy.com/#courses">ALL COURSES</a>
                            </li>
                            
                            <!--<li class="nav-item active">-->
                            <!--    <a class="nav-link" href="https://www.padmaacademy.com/team">Team</a>-->
                            <!--</li>-->
                            <!--<li class="nav-item active">-->
                            <!--    <a class="nav-link" href="https://www.padmaacademy.com/aboutus">About</a>-->
                            <!--</li>-->
                        </ul>
                    </div>
                </div>
            </nav>
    <div class="wrapper">
        <!-- Sidebar Holder -->
        <nav id="sidebar">
<!--             <div class="sidebar-header"></div>
 -->
            <ul class="list-unstyled components">
                <!--<p>Dummy Heading</p>-->
                
                @foreach($chap as $chapter)
                <li>
                    <a href="#{{$chapter->chapter_slug}}Submenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">{{$chapter->chapter_name}}</a>
                    <hr style="padding:0px;margin:0px;">
                    <ul class="collapse list-unstyled" id="{{$chapter->chapter_slug}}Submenu">
                        
                        @foreach($cont as $items)
                            @if($chapter->chapter_slug == $items->chapter_slug)
                            <li>
                                <a href="{{url('content/'.$items->class_slug.'/'.$items->chapter_slug.'/'.$items->subtopic_slug)}}"><i class="fa fa-arrow-circle-right" style="font-size:20px;padding-right:5px;padding-top:5px;"></i>{{$items->subtopic}}</a>
                                <hr style="padding:0px;margin:0px;">
                            </li>
                        @endif
                            
                        @endforeach
                    </ul>
                </li>
                @endforeach
            </ul>
        </nav>
<style>
.advertisebox {
  width: auto;
  padding: 0px;
  margin: 5px;
  /*overflow: auto;*/
}
.card{
    box-shadow: 0 2px 4px 0 rgba(0,0,0,0.2);
}
.Share-Button {
display:block;background:#25d366;max-width:180px;padding:8px 12px;color:#fff;font-weight:700;font-size:14px;text-align:center;text-transform:uppercase;letter-spacing:0.5px;margin:auto;border-radius:3px;transition:all .3s;
}
</style>
        <!-- Page Content Holder -->
        <div id="content">
            <div class="container-fluid">
                <div class="row" style="margin-left:-35px;margin-right:-35px;">
                    <div class="col-sm-10">

                        
                        <!--<div class="advertisebox">This text is the content of the adevrtisement box. We have added a 50px padding, 20px margin and a 15px green border. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>-->
                        <div class="d-flex justify-content-center">
                            <a type="button" href="#list" class="btn btn-info" style="margin-bottom:10px;">List of All Chapter</a>
                        </div>
                        <div class="d-flex">
                            <div class="p-2 mr-auto"><a class="btn btn btn-outline-dark" href="{{url('prev/'.$value.'/'.$chapter_slug.'/'.$subtopic_slug)}}"><< Prev</a></div>
                            <div class="p-2 mr-auto"><a class="Share-Button" href="{{url('whatsapp://send?text=https://www.padmaacademy.com/content/'.$value.'/'.$chapter_slug.'/'.$subtopic_slug)}}">Share On Whatsapp</i></a></div>
                            <div class="p-2"><a class="btn btn btn-outline-dark" href="{{url('next/'.$value.'/'.$chapter_slug.'/'.$subtopic_slug)}}">Next >></a></div>
                        </div>
                        
                        <div class="card" style="margin-top:10px;margin-bottom:10px;">
                            <div class="card-body">
                                {!! htmlspecialchars_decode($post) !!}
                            </div>
                        </div>
                        <div class="d-flex">
                            <div class="p-2 mr-auto"><a class="btn btn btn-outline-dark" href="{{url('prev/'.$value.'/'.$chapter_slug.'/'.$subtopic_slug)}}"><< Prev</a></div>
                            <div class="p-2 mr-auto"><a class="Share-Button" href="{{url('whatsapp://send?text=https://www.padmaacademy.com/content/'.$value.'/'.$chapter_slug.'/'.$subtopic_slug)}}">Share On Whatsapp</i></a></div>
                            <div class="p-2"><a class="btn btn btn-outline-dark" href="{{url('next/'.$value.'/'.$chapter_slug.'/'.$subtopic_slug)}}">Next >></a></div>
                        </div>
                        
                           <div class="card" id="list" style="margin-top:10px;margin-bottom:10px;">
                            <div class="card-body">
                                <h4 class="text-center"><u>List of All Related Post</u></h4>
                                @foreach($chap as $chapter)
                                    <a>{{$chapter->chapter_name}}</a><br>
                                    @foreach($cont as $items)
                                        @if($chapter->chapter_slug == $items->chapter_slug)
                                            <a style="color:RoyalBlue" href="{{url('content/'.$items->class_slug.'/'.$items->chapter_slug.'/'.$items->subtopic_slug)}}"><i class="fa fa-arrow-circle-right" style="font-size:20px;padding-right:5px;padding-top:5px;"></i>{{$items->subtopic}}</a><br>
                                        @endif
                                    @endforeach
                                    <hr style="padding:0px;margin:0px;">
                                @endforeach
                                
                            </div>
                        </div>
                    <div class="advertisebox"><script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- horizontal -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-4072734219665716"
     data-ad-slot="5273283491"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script></div>    
                    </div>
                    
                    <div class="col-sm-2">
                        <div class="advertisebox">
                            <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                                <!-- sidebar ads -->
                                <ins class="adsbygoogle"
                                    style="display:block"
                                    data-ad-client="ca-pub-4072734219665716"
                                    data-ad-slot="5192897601"
                                    data-ad-format="auto"
                                    data-full-width-responsive="true"></ins>
                                <script>
                                    (adsbygoogle = window.adsbygoogle || []).push({});
                                </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<div class="container-fluid" style="background-color:#343a40!important;">   
<div class="row d-flex align-items-center">
    <div class="col-md-12 center">
        <p class="text-center pfooter" style="color:white;">Design and Developed by
          <a style="color:#4287f5;" href="{{ url('http://padmasoft.padmaacademy.com/')}}">
            <strong>PadmaSoft</strong>
          </a>
        </p>
    </div>
</div>
</div>
<style>
    .pfooter {
    margin-top: 7px;
    margin-bottom: 7px;
}
</style>
    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="{{asset('prism.js')}}"></script>
    <script src="{{('https://code.jquery.com/jquery-3.3.1.slim.min.js')}}"  crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="{{('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js')}}"  crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="{{('https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js')}}"  crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
                $(this).toggleClass('active');
            });
        });
    </script>
</body>

</html>