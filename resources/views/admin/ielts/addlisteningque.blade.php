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
                                    <form method="post" action="{{route('ieltslisteninganswer.store')}}">
                                        {{csrf_field()}}
                                        
                                        <div class="form-group">
                                            <input type="text" name="slug" class="form-control input-default" value="cambridge-15-test-1-listening" required>
                                            
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="que1" class="form-control input-default" placeholder="que1" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="que2" class="form-control input-default" placeholder="que2" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="que3" class="form-control input-default" placeholder="que3" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="que4" class="form-control input-default" placeholder="que4" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="que5" class="form-control input-default" placeholder="que5" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="que6" class="form-control input-default" placeholder="que6" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="que7" class="form-control input-default" placeholder="que7" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="que8" class="form-control input-default" placeholder="que8" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="que9" class="form-control input-default" placeholder="que9" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="que10" class="form-control input-default" placeholder="que10" required>
                                        </div>
                                        
                                        
                                        <div class="form-group">
                                            <input type="text" name="que11" class="form-control input-default" placeholder="que11" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="que12" class="form-control input-default" placeholder="que12" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="que13" class="form-control input-default" placeholder="que13" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="que14" class="form-control input-default" placeholder="que14" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="que15" class="form-control input-default" placeholder="que15" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="que16" class="form-control input-default" placeholder="que16" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="que17" class="form-control input-default" placeholder="que17" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="que18" class="form-control input-default" placeholder="que18" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="que19" class="form-control input-default" placeholder="que19" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="que20" class="form-control input-default" placeholder="que20" required>
                                        </div>
                                        
                                        
                                        <div class="form-group">
                                            <input type="text" name="que21" class="form-control input-default" placeholder="que21" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="que22" class="form-control input-default" placeholder="que22" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="que23" class="form-control input-default" placeholder="que23" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="que24" class="form-control input-default" placeholder="que24" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="que25" class="form-control input-default" placeholder="que25" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="que26" class="form-control input-default" placeholder="que26" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="que27" class="form-control input-default" placeholder="que27" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="que28" class="form-control input-default" placeholder="que28" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="que29" class="form-control input-default" placeholder="que29" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="que30" class="form-control input-default" placeholder="que30" required>
                                        </div>
                                        
                                        
                                        <div class="form-group">
                                            <input type="text" name="que31" class="form-control input-default" placeholder="que31" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="que32" class="form-control input-default" placeholder="que32" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="que33" class="form-control input-default" placeholder="que33" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="que34" class="form-control input-default" placeholder="que34" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="que35" class="form-control input-default" placeholder="que35" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="que36" class="form-control input-default" placeholder="que36" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="que37" class="form-control input-default" placeholder="que37" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="que38" class="form-control input-default" placeholder="que38" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="que39" class="form-control input-default" placeholder="que39" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="que40" class="form-control input-default" placeholder="que40" required>
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
                    
                
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Category Table</h4>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered zero-configuration">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Name</th>
                                                <th>que1</th>
                                                <th>que2</th>
                                                <th>que3</th>
                                                <th>que4</th>
                                                <th>que5</th>
                                                <th>que6</th>
                                                <th>que7</th>
                                                <th>que8</th>
                                                <th>que9</th>
                                                <th>que10</th>
                                                <th>que11</th>
                                                <th>que12</th>
                                                <th>que13</th>
                                                <th>que14</th>
                                                <th>que15</th>
                                                <th>que16</th>
                                                <th>que17</th>
                                                <th>que18</th>
                                                <th>que19</th>
                                                <th>que20</th>
                                                <th>que21</th>
                                                <th>que22</th>
                                                <th>que23</th>
                                                <th>que24</th>
                                                <th>que25</th>
                                                <th>que26</th>
                                                <th>que27</th>
                                                <th>que28</th>
                                                <th>que29</th>
                                                <th>que30</th>     
                                                <th>que31</th>
                                                <th>que32</th>
                                                <th>que33</th>
                                                <th>que34</th>
                                                <th>que35</th>
                                                <th>que36</th>
                                                <th>que37</th>
                                                <th>que38</th>
                                                <th>que39</th>
                                                <th>que40</th>    
                                                <th>Edit</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           
                                            @foreach($fetch as $row)
                     
                                            <tr>
                                                <td>{{ $row['id']}}</td>
                                                <td>{{ $row['slug']}}</td>
                                                <td>{{ $row['que1']}}</td>
                                                <td>{{ $row['que2']}}</td>
                                                <td>{{ $row['que3']}}</td>
                                                <td>{{ $row['que4']}}</td>
                                                <td>{{ $row['que5']}}</td>
                                                <td>{{ $row['que6']}}</td>
                                                <td>{{ $row['que7']}}</td>
                                                <td>{{ $row['que8']}}</td>
                                                <td>{{ $row['que9']}}</td>
                                                <td>{{ $row['que10']}}</td>
                                                <td>{{ $row['que11']}}</td>
                                                <td>{{ $row['que12']}}</td>
                                                <td>{{ $row['que13']}}</td>
                                                <td>{{ $row['que14']}}</td>
                                                <td>{{ $row['que15']}}</td>
                                                <td>{{ $row['que16']}}</td>
                                                <td>{{ $row['que17']}}</td>
                                                <td>{{ $row['que18']}}</td>
                                                <td>{{ $row['que19']}}</td>
                                                <td>{{ $row['que20']}}</td>
                                                <td>{{ $row['que21']}}</td>
                                                <td>{{ $row['que22']}}</td>
                                                <td>{{ $row['que23']}}</td>
                                                <td>{{ $row['que24']}}</td>
                                                <td>{{ $row['que25']}}</td>
                                                <td>{{ $row['que26']}}</td>
                                                <td>{{ $row['que27']}}</td>
                                                <td>{{ $row['que28']}}</td>
                                                <td>{{ $row['que29']}}</td>
                                                <td>{{ $row['que30']}}</td>
                                                <td>{{ $row['que31']}}</td>
                                                <td>{{ $row['que32']}}</td>
                                                <td>{{ $row['que33']}}</td>
                                                <td>{{ $row['que34']}}</td>
                                                <td>{{ $row['que35']}}</td>
                                                <td>{{ $row['que36']}}</td>
                                                <td>{{ $row['que37']}}</td>
                                                <td>{{ $row['que38']}}</td>
                                                <td>{{ $row['que39']}}</td>
                                                <td>{{ $row['que40']}}</td>
                                                 <td>
                                                    <a href="{{url('admin/updateieltslisteningans',$row['id'])}}" onclick=""><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                </td>
    
                                                <td>
                                                <form id="delete-form-{{ $row['id']}}" method="post" action="{{ route('ieltslisteninganswer.destroy',$row['id'])}}" style="display:none">
                                                    {{csrf_field()}}
                                                    {{method_field('DELETE')}}
                                                </form>
                                                <a href="" onclick="
                                                if(confirm('Are you sure you want to delete?'))
                                                {
                                                    event.preventDefault();
                                                    document.getElementById('delete-form-{{$row['id']}}').submit();
                                                }
                                                else{
                                                event.preventDefault();
                                                }"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                                </td>
                                                
                                            
                                            </tr>
                                            
                                            @endforeach
                                        </tbody>
                                        <tfoot>
                                             <tr>
                                                <th>Id</th>
                                                <th>Name</th>
                                                <th>que1</th>
                                                <th>que2</th>
                                                <th>que3</th>
                                                <th>que4</th>
                                                <th>que5</th>
                                                <th>que6</th>
                                                <th>que7</th>
                                                <th>que8</th>
                                                <th>que9</th>
                                                <th>que10</th>
                                                <th>que11</th>
                                                <th>que12</th>
                                                <th>que13</th>
                                                <th>que14</th>
                                                <th>que15</th>
                                                <th>que16</th>
                                                <th>que17</th>
                                                <th>que18</th>
                                                <th>que19</th>
                                                <th>que20</th>
                                                <th>que21</th>
                                                <th>que22</th>
                                                <th>que23</th>
                                                <th>que24</th>
                                                <th>que25</th>
                                                <th>que26</th>
                                                <th>que27</th>
                                                <th>que28</th>
                                                <th>que29</th>
                                                <th>que30</th>     
                                                <th>que31</th>
                                                <th>que32</th>
                                                <th>que33</th>
                                                <th>que34</th>
                                                <th>que35</th>
                                                <th>que36</th>
                                                <th>que37</th>
                                                <th>que38</th>
                                                <th>que39</th>
                                                <th>que40</th>    
                                                <th>Edit</th>
                                                <th>Delete</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
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