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
    
    
    <link rel="stylesheet" href="{{asset('prism.css')}}">
    <!-- Custom Stylesheet -->
    <link href="{{asset('admin/css/style.css')}}" rel="stylesheet">
    <!--<link href="{{asset('admin/plugins/summernote/dist/summernote.css')}}" rel="stylesheet">-->
    <!--<link href="{{asset('admin/plugins/tables/css/datatable/dataTables.bootstrap4.min.css')}}" rel="stylesheet">-->
    
    
    <link rel="stylesheet" href="{{asset('backup19-12/admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">
    <!--<link rel="stylesheet" href="{{asset('backup19-12/admin/bootstrap/css/bootstrap.min.css')}}">-->

    
    
    <!--<link rel="stylesheet" href="{{url('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css')}}" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">-->
 <!--<script src="{{url('https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js')}}"></script>-->
 <!--<script src="{{url('https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js')}}"></script>-->
    
    
    <script src="{{asset('editor/ckeditor/ckeditor.js')}}"></script>
    
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
                               
                                <h4 class="card-title">Post Content</h4>
                                
                                <div class="basic-form">
                                    <form method="post" action="{{url('admin/postupdatedieltsquewrite/'.$table->id)}}">
                                        {{csrf_field()}}
                               

                                        <div class="form-group">
                                            <label>Slug Name</label>
                                            <input type="text" name="slug" class="form-control input-default" value="{{ $table->slug }}" required>
                                            
                                        </div>
                                       
                                       
                                       <label>Writing 1</label>
                                        <div class="form-group">
                                            <textarea name="editor1" id="editor">{{ $table->que1 }}</textarea>
                                            <script>
                                                    CKEDITOR.replace( 'editor1',{
                                                    filebrowserUploadUrl: 'https://www.padmaacademy.com/editor/ckeditor/ck_upload.php',
                                                    filebrowserUploadMethod: 'form'
                                                });
                                            </script>
                                        </div>
                                        <label>Writing 2</label>
                                        <div class="form-group">
                                            <textarea name="editor2" id="editor">{{ $table->que2 }}</textarea>
                                            <script>
                                                    CKEDITOR.replace( 'editor2',{
                                                    filebrowserUploadUrl: 'https://www.padmaacademy.com/editor/ckeditor/ck_upload.php',
                                                    filebrowserUploadMethod: 'form'
                                                });
                                            </script>
                                        </div>
                                        
                                        
                                       
                             <div class="form-group">
                                            <div class="general-button">
                                            <input type="submit" name="submit" class="btn-flat btn-mb1 btn-primary">
                                        </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                      
                
                
                

            </div>
            <!-- #/ container -->
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
    <script>
        $(function(){
            CKEDITOR.replace('editor1');
            $(".textarea").wysihtml5();
        });
    </script>
    
    <script src="https://cdn.ckeditor.com/4.5.7/standard/ckeditor.js"></script>
    <script src="{{asset('admin/plugins/common/common.min.js')}}"></script>
    <script src="{{asset('admin/js/custom.min.js')}}"></script>
    <script src="{{asset('admin/js/settings.js')}}"></script>
    <script src="{{asset('admin/js/gleek.js')}}"></script>
    <script src="{{asset('admin/js/styleSwitcher.js')}}"></script>
    
    <script src="{{asset('prism.js')}}"></script>

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
    <script src="{{asset('backup19-12/admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>
    <!--<script src="{{asset('backup19-12/admin/bootstrap/js/bootstrap.min.js')}}"></script>-->
    <!--<script src="{{asset('admin/plugins/summernote/dist/summernote.min.js')}}"></script>-->
    <!--<script src="{{asset('admin/plugins/summernote/dist/summernote-init.js')}}"></script>-->
</body>

</html>