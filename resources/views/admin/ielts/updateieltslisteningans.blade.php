<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Padma Admin</title>
    <!-- Favicon icon -->
    <link href="https://www.padmaacademy.com/images/favicon-32x32.png" rel="shortcut icon" type="image/x-icon" />
    <!-- Pignose Calender -->
    <link href="{{asset('admin/plugins/pg-calendar/css/pignose.calendar.min.css')}}" rel="stylesheet">
    <!-- Chartist -->
    <link rel="stylesheet" href="{{asset('admin/plugins/chartist/css/chartist.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css')}}">
    <!-- Custom Stylesheet -->
    <link href="{{asset('admin/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('admin/plugins/tables/css/datatable/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
</head>

<body>

    @if(!isset(Auth::user()->email))
        <script>window.location="/";  </script>
    @endif
    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    
    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        @include('admin/main/nav')
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
            @include('admin/main/side')
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        
        <div class="content-body">

            <div class="container-fluid mt-3">
                
                <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                               
                                <h4 class="card-title">Category</h4>
                                
                                <div class="basic-form">
                                    <form method="post" action="{{route('ieltslisteninganswer.update')}}">
                                        {{csrf_field()}}
                                        
                                        
                                        <input type="text" name="id" value="{{$listen->id}}" readonly >
                                        <div class="form-group">
                                            <input type="text" name="slug" class="form-control input-default" value="{{$listen->slug}}" required>
                                            
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="que1" class="form-control input-default" value="{{$listen->que1}}" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="que2" class="form-control input-default" value="{{$listen->que2}}" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="que3" class="form-control input-default" value="{{$listen->que3}}" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="que4" class="form-control input-default" value="{{$listen->que4}}" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="que5" class="form-control input-default" value="{{$listen->que5}}" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="que6" class="form-control input-default" value="{{$listen->que6}}" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="que7" class="form-control input-default" value="{{$listen->que7}}" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="que8" class="form-control input-default" value="{{$listen->que8}}" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="que9" class="form-control input-default" value="{{$listen->que9}}" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="que10" class="form-control input-default" value="{{$listen->que10}}"  required>
                                        </div>
                                        
                                        
                                        <div class="form-group">
                                            <input type="text" name="que11" class="form-control input-default" value="{{$listen->que11}}" placeholder="que11" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="que12" class="form-control input-default" value="{{$listen->que12}}" placeholder="que12" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="que13" class="form-control input-default" value="{{$listen->que13}}" placeholder="que13" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="que14" class="form-control input-default" value="{{$listen->que14}}" placeholder="que14" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="que15" class="form-control input-default" value="{{$listen->que15}}" placeholder="que15" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="que16" class="form-control input-default" value="{{$listen->que16}}" placeholder="que16" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="que17" class="form-control input-default" value="{{$listen->que17}}" placeholder="que17" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="que18" class="form-control input-default" value="{{$listen->que18}}" placeholder="que18" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="que19" class="form-control input-default" value="{{$listen->que19}}" placeholder="que19" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="que20" class="form-control input-default" value="{{$listen->que20}}" placeholder="que20" required>
                                        </div>
                                        
                                        
                                        <div class="form-group">
                                            <input type="text" name="que21" class="form-control input-default" value="{{$listen->que21}}" placeholder="que21" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="que22" class="form-control input-default" value="{{$listen->que22}}" placeholder="que22" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="que23" class="form-control input-default" value="{{$listen->que23}}" placeholder="que23" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="que24" class="form-control input-default" value="{{$listen->que24}}" placeholder="que24" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="que25" class="form-control input-default" value="{{$listen->que25}}" placeholder="que25" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="que26" class="form-control input-default" value="{{$listen->que26}}" placeholder="que26" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="que27" class="form-control input-default" value="{{$listen->que27}}" placeholder="que27" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="que28" class="form-control input-default" value="{{$listen->que28}}" placeholder="que28" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="que29" class="form-control input-default" value="{{$listen->que29}}" placeholder="que29" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="que30" class="form-control input-default" value="{{$listen->que30}}" placeholder="que30" required>
                                        </div>
                                        
                                        
                                        <div class="form-group">
                                            <input type="text" name="que31" class="form-control input-default" value="{{$listen->que31}}" placeholder="que31" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="que32" class="form-control input-default" value="{{$listen->que32}}" placeholder="que32" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="que33" class="form-control input-default" value="{{$listen->que33}}" placeholder="que33" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="que34" class="form-control input-default" value="{{$listen->que34}}" placeholder="que34" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="que35" class="form-control input-default" value="{{$listen->que35}}" placeholder="que35" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="que36" class="form-control input-default" value="{{$listen->que36}}" placeholder="que36" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="que37" class="form-control input-default" value="{{$listen->que37}}" placeholder="que37" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="que38" class="form-control input-default" value="{{$listen->que38}}" placeholder="que38" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="que39" class="form-control input-default" value="{{$listen->que39}}" placeholder="que39" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="que40" class="form-control input-default" value="{{$listen->que40}}" placeholder="que40" required>
                                        </div>
                                        
                                        
                                        <div class="form-group">
                                            <div class="general-button">
                                            <input type="submit" name="submit" class="btn-flat btn-mb1 btn-primary" required>
                                        </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    
              
        </div>
        <!--**********************************
            Content body end
        ***********************************-->
        
        
        <!--**********************************
            Footer start
        ***********************************-->
        @include('admin/main/footer')
        <!--**********************************
            Footer end
        ***********************************-->
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <script src="{{asset('admin/plugins/common/common.min.js')}}"></script>
    <script src="{{asset('admin/js/custom.min.js')}}"></script>
    <script src="{{asset('admin/js/settings.js')}}"></script>
    <script src="{{asset('admin/js/gleek.js')}}"></script>
    <script src="{{asset('admin/js/styleSwitcher.js')}}"></script>

    <!-- Chartjs -->
    <script src="{{asset('admin/plugins/chart.js/Chart.bundle.min.js')}}"></script>
    <!-- Circle progress -->
    <script src="{{asset('admin/plugins/circle-progress/circle-progress.min.js')}}"></script>
    <!-- Datamap -->
    <script src="{{asset('admin/plugins/d3v3/index.js')}}"></script>
    <script src="{{asset('admin/plugins/topojson/topojson.min.js')}}"></script>
    <script src="{{asset('admin/plugins/datamaps/datamaps.world.min.js')}}"></script>
    <!-- Morrisjs -->
    <script src="{{asset('admin/plugins/raphael/raphael.min.js')}}"></script>
    <script src="{{asset('admin/plugins/morris/morris.min.js')}}"></script>
    <!-- Pignose Calender -->
    <script src="{{asset('admin/plugins/moment/moment.min.js')}}"></script>
    <script src="{{asset('admin/plugins/pg-calendar/js/pignose.calendar.min.js')}}"></script>
    <!-- ChartistJS -->
    <script src="{{asset('admin/plugins/chartist/js/chartist.min.js')}}"></script>
    <script src="{{asset('admin/plugins/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js')}}"></script>



    <script src="{{asset('admin/js/dashboard/dashboard-1.js')}}"></script>
    <script src="{{asset('admin/plugins/tables/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('admin/plugins/tables/js/datatable/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('admin/plugins/tables/js/datatable-init/datatable-basic.min.js')}}"></script>
</body>

</html>