
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="..css/assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/assets/libs/css/style.css">
    <link rel="stylesheet" href="..css/assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="..css/assets/vendor/charts/chartist-bundle/chartist.css">

    <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/assets/libs/css/style.css">
    <link rel="stylesheet" href="/css/assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="/css/assets/vendor/charts/chartist-bundle/chartist.css">
    <link rel="stylesheet" href="/css/assets/vendor/charts/morris-bundle/morris.css">
    <link rel="stylesheet" href="/css/assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="/css/assets/vendor/charts/c3charts/c3.css">
    <link rel="stylesheet" href="/css/assets/vendor/fonts/flag-icon-css/flag-icon.min.css">
    <link href="/css/dashboard3.css" rel="stylesheet">
    <link href="/css/dashboard3.2.css" rel="stylesheet">
    <link href="/css/chart.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js" charset="utf-8"></script>
    <title>HMS</title>


    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

</head>

<body>

     @extends('try')
    @section('content')

    @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
    @endif


    {{-- @extends('layouts.app')

@section('content') --}}







    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
                <a class="navbar-brand" href="index.html" >Hotel Management System</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top">
                        <li class="nav-item">
                            <div id="custom-search" class="top-search-bar">
                                <input class="form-control" type="text" placeholder="Search..">
                            </div>
                        </li>


                        <li class="nav-item dropdown connection">
                            <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fas fa-fw fa-th"></i> </a>
                            <ul class="dropdown-menu dropdown-menu-right connection-dropdown">
                                <li class="connection-list">
                                    <div class="row">
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                            <a href="#" class="connection-item"><img src="assets/images/github.png" alt="" > <span>Github</span></a>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                            <a href="#" class="connection-item"><img src="assets/images/dribbble.png" alt="" > <span>Dribbble</span></a>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                            <a href="#" class="connection-item"><img src="assets/images/dropbox.png" alt="" > <span>Dropbox</span></a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                            <a href="#" class="connection-item"><img src="assets/images/bitbucket.png" alt=""> <span>Bitbucket</span></a>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                            <a href="#" class="connection-item"><img src="assets/images/mail_chimp.png" alt="" ><span>Mail chimp</span></a>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                            <a href="#" class="connection-item"><img src="assets/images/slack.png" alt="" > <span>Slack</span></a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="conntection-footer"><a href="#">More</a></div>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown nav-user">

                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        <div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-divider">
                                Menu
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link active" href="dashboard" ><i class="fa fa-fw fa-user-circle"></i>Dashboard <span class="badge badge-success">6</span></a>

                            </li>
                             </li>
                            <li class="nav-item">
                                <a class="nav-link" href="customers" ><i class="fas fa-fw fa-user"></i>Users</a>

                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="bookings" ><i class="fab fa-fw fa-wpforms"></i>Bookings</a>

                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="hotels" ><i class="fas fa-fw fa-table"></i>Hotels</a>

                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="admins" ><i class="fas fa-fw fa-table"></i>Admins</a>

                            </li>
                            <li class="nav-divider">

                            </li>



                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    <!-- ============================================================== -->
                    <!-- pageheader  -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 class="pageheader-title">Dashboard </h2>
                                <p class="pageheader-text">Nulla euismod urna eros, sit amet scelerisque torton lectus vel mauris facilisis faucibus at enim quis massa lobortis rutrum.</p>
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>

                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end pageheader  -->
                    <!-- ============================================================== -->
                    <div class="ecommerce-widget">

                        <div class="row">
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="text-muted">Customers</h5>
                                        <div class="metric-value d-inline-block">
                                            <h1 class="mb-1">{{ $dat }}</h1>
                                        </div>
                                        <div class="metric-label d-inline-block float-right text-success font-weight-bold">
                                            <span><i class="fa fa-fw fa-arrow-up"></i></span><span>{{ $users }}</span>
                                        </div>
                                    </div>
                                    <div id="sparkline-revenue"></div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="text-muted">Total Sales</h5>
                                        <div class="metric-value d-inline-block">
                                            <h1 class="mb-1">{{ $sales }}</h1>
                                        </div>
                                        <div class="metric-label d-inline-block float-right text-success font-weight-bold">
                                            <span><i class="fa fa-fw fa-arrow-up"></i></span><span>{{ $todaysales }}</span>
                                        </div>
                                    </div>
                                    <div id="sparkline-revenue2"></div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="text-muted">Hotels</h5>
                                        <div class="metric-value d-inline-block">
                                            <h1 class="mb-1">{{ $hot }}</h1>
                                        </div>
                                        <div class="metric-label d-inline-block float-right text-primary font-weight-bold">
                                            <span><i class="fa fa-fw fa-arrow-up"></i></span><span>{{ $hotels }}</span>
                                        </div>
                                    </div>
                                    <div id="sparkline-revenue3"></div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">

                            </div>
                        </div>
                        <!-- ============================================================== -->

                            <!-- ============================================================== -->

                                          <!-- recent orders  -->
                            <!-- ============================================================== -->

                            <!-- ============================================================== -->
                            <!-- end recent orders  -->


                            <!-- ============================================================== -->
                            <!-- ============================================================== -->
                            <!-- customer acquistion  -->
                            <!-- ============================================================== -->

                            <!-- ============================================================== -->
                            <!-- end customer acquistion  -->
                            <!-- ============================================================== -->
                        </div>
                        <div id="container">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <h5 class="card-header">Sales by Hotels</h5>

                                        <canvas id="myChart" height="400px"></canvas>




                                    <div class="card-body">

                                        <div id="goodservice"></div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-xl-3 col-lg-12 col-md-6 col-sm-12 col-12">
                                <h4></h4>

                                <!-- ============================================================== -->
                                <!-- top perfomimg  -->
                                <!-- ============================================================== -->

                                <div class="card">
                                    <h5 class="card-header">Popular services</h5>
                                    <div>

                                    {!! $chart->container() !!}
                                </div>
                                </div>
                            </div>
                        </div>


                                    <div class="row">
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                            <div class="card">
                                                <h5 class="card-header">Sales this month</h5>

                                                <canvas id="linechart" height="400px"></canvas>



                                                <div class="card-body">

                                                    <div id="goodservice"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>






                                </div>
                            <!-- ============================================================== -->
              				                        <!-- product category  -->
                            <!-- ============================================================== -->

                            <!-- ============================================================== -->
                            <!-- end product category  -->
                                   <!-- product sales  -->
                            <!-- ============================================================== -->
                        </div>





                            <!-- ============================================================== -->
                            <!-- end product sales  -->
                            <!-- ============================================================== -->



                                <!-- ============================================================== -->
                                <!-- end top perfomimg  -->
                                <!-- ============================================================== -->
                            </div>
                        </div>


                            <!-- ============================================================== -->
                            <!-- sales  -->
                            <!-- ============================================================== -->




                            <!-- ============================================================== -->
                            <!-- end sales  -->
                            <!-- ============================================================== -->
                            <!-- ============================================================== -->
                            <!-- new customer  -->
                            <!-- ============================================================== -->



                            <!-- ============================================================== -->
                            <!-- end new customer  -->
                            <!-- ============================================================== -->
                            <!-- ============================================================== -->
                            <!-- visitor  -->
                            <!-- ============================================================== -->



                            <!-- ============================================================== -->
                            <!-- end visitor  -->
                            <!-- ============================================================== -->
                            <!-- ============================================================== -->
                            <!-- total orders  -->
                            <!-- ============================================================== -->



                            <!-- ============================================================== -->
                            <!-- end total orders  -->
                            <!-- ============================================================== -->


                            <!-- ============================================================== -->
                            <!-- total revenue  -->
                            <!-- ============================================================== -->


                            <!-- ============================================================== -->
                            <!-- ============================================================== -->
                            <!-- category revenue  -->
                            <!-- ============================================================== -->

                            <!-- ============================================================== -->
                            <!-- end category revenue  -->
                            <!-- ============================================================== -->



                                <!-- ============================================================== -->
                                <!-- social source  -->
                                <!-- ============================================================== -->



                                <!-- ============================================================== -->
                                <!-- end social source  -->
                                <!-- ============================================================== -->


                            <!-- ============================================================== -->
                            <!-- end sales traffice source  -->
                            <!-- ============================================================== -->
                            <!-- ============================================================== -->
                            <!-- sales traffic country source  -->
                            <!-- ============================================================== -->
                           <div class="col-xl-3 col-lg-12 col-md-6 col-sm-12 col-12">


                            </div>
                            <!-- ============================================================== -->
                            <!-- end sales traffice country source  -->
                            <!-- ============================================================== -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">

                <!-- ============================================================== -->
                <!-- end earnings before interest tax  -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- cost of goods  -->
                <!-- ============================================================== -->

                <!-- ============================================================== -->
                <!-- end cost of goods  -->
                <!-- ============================================================== -->
            </div>





            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <div class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                           <!--  Copyright © 2018 Concept. All rights reserved. Dashboard by <a href="https://colorlib.com/wp/">Colorlib</a>.-->
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="text-md-right footer-links d-none d-sm-block">
                                <a href="javascript: void(0);">About</a>
                                <a href="javascript: void(0);">Support</a>
                                <a href="javascript: void(0);">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- end wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <!-- jquery 3.3.1 -->
    <script src="css/assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <!-- bootstap bundle js -->
    <script src="css/assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <!-- slimscroll js -->
    <script src="css/assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <!-- main js -->
    <script src="css/assets/libs/js/main-js.js"></script>
    <!-- chart chartist js -->
    <script src="cssassets/vendor/charts/chartist-bundle/chartist.min.js"></script>
    <!-- sparkline js -->
    <script src="css/assets/vendor/charts/sparkline/jquery.sparkline.js"></script>
    <!-- morris js -->
    <script src="css/assets/vendor/charts/morris-bundle/raphael.min.js"></script>
    <script src="css/assets/vendor/charts/morris-bundle/morris.js"></script>
    <!-- chart c3 js -->
    <script src="css/assets/vendor/charts/c3charts/c3.min.js"></script>
    <script src="css/assets/vendor/charts/c3charts/d3-5.4.0.min.js"></script>
    <script src="css/assets/vendor/charts/c3charts/C3chartjs.js"></script>
    <script src="css/assets/libs/js/dashboard-ecommerce.js"></script>






    <script src="css/assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <!-- bootstap bundle js -->
    <script src="css/assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <!-- slimscroll js -->
    <script src="css/assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <!-- chart chartist js -->
    <script src="css/assets/vendor/charts/chartist-bundle/chartist.min.js"></script>
    <script src="css/assets/vendor/charts/chartist-bundle/Chartistjs.js"></script>
    <script src="css/assets/vendor/charts/chartist-bundle/chartist-plugin-threshold.js"></script>
    <!-- chart C3 js this is the one-->
    <script src="css/assets/vendor/charts/c3charts/c3.min.js"></script>
    <script src="css/assets/vendor/charts/c3charts/d3-5.4.0.min.js"></script>
    <!-- chartjs js -->
    <script src="css/assets/vendor/charts/charts-bundle/Chart.bundle.js"></script>
    <script src="css/assets/vendor/charts/charts-bundle/chartjs.js"></script>
    <!-- sparkline js -->
    <script src="css/assets/vendor/charts/sparkline/jquery.sparkline.js"></script>
    <!-- dashboard finance js -->
    <script src="css/assets/libs/js/dashboard-finance.js"></script>
    <!-- main js -->
    <script src="css/assets/libs/js/main-js.js"></script>
    <!-- gauge js -->
    <script src="css/assets/vendor/gauge/gauge.min.js"></script>
    <!-- morris js -->
    <script src="css/assets/vendor/charts/morris-bundle/raphael.min.js"></script>
    <script src="css/assets/vendor/charts/morris-bundle/morris.js"></script>
    <script src="css/assets/vendor/charts/morris-bundle/morrisjs.html"></script>
    <!-- daterangepicker js -->
    <script src="../../../../cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script src="../../../../cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <script>
    $(function() {
        $('input[name="daterange"]').daterangepicker({
            opens: 'left'
        }, function(start, end, label) {
            console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
        });
    });




</body>

<script type="text/javascript">










</script>
<script type="text/javascript">



var labels =  {{ Js::from($labels) }};
var users =  {{ Js::from($data) }};

const data = {
  labels: labels,
  datasets: [{
    label: 'Hotels',
    backgroundColor: 'rgb(255, 99, 132,1)',
    borderColor: 'rgb(255, 0, 0)',
    data: users,
  }]
};

const config = {
  type: 'bar',
  data: data,
  options: {}
};

const myChart = new Chart(
  document.getElementById('myChart'),
  config
);
options:{
  scales:{}
}

var paytime =  {{ Js::from($paytime) }};
var sum =  {{ Js::from($sum) }};




const data2 = {
  labels: paytime,
  datasets: [{
    label: 'sales by month',
    backgroundColor: 'rgb(255, 0, 100, 0.4)',
    borderColor: 'rgb(0, 0, 255, 1)',
    borderwidth: 0.4,

    data: sum,
  }]
};


const config2 = {
  type: 'line',
  data: data2,
  options: {
      elements: {
  line: {
      tension: 0.5
         }
      }
  }
};

const linechart = new Chart(
  document.getElementById('linechart'),
  config2
);
options: {
elements: {
  line: {
      tension: 0.5
         }
      }
}


</script>


{!! $chart->script() !!}


</html>
