{{$name}}
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aftkad</title>

    <!-- Vendor CSS -->
    <link href="/css/fullcalendar.min.css" rel="stylesheet">
    <link href="/css/animate.min.css" rel="stylesheet">
    <link href="/css/sweet-alert.css" rel="stylesheet">
    <link href="/css/material-design-iconic-font.min.css" rel="stylesheet">
    <link href="/css/jquery.mCustomScrollbar.min.css" rel="stylesheet">

    <!-- CSS -->
    <link href="/css/app.min.1.css" rel="stylesheet">
    <link href="/css/app.min.2.css" rel="stylesheet">

</head>
<body>
<section id="main" data-layout="layout-1">
    <section id="content">
        <div class="container">
            <div class="row m-t-25 p-0 m-b-25">
                <div class="col-xs-3">
                    <div class="bgm-amber brd-2 p-15">
                        <div class="c-white m-b-5">User</div>
                        <h2 class="m-0 c-white f-300">Create User</h2>
                    </div>
                </div>

                <div class="col-xs-3">
                    <div class="bgm-blue brd-2 p-15">
                        <div class="c-white m-b-5">Event</div>
                        <h2 class="m-0 c-white f-300">Add Event</h2>
                    </div>
                </div>

                <div class="col-xs-3">
                    <div class="bgm-green brd-2 p-15">
                        <div class="c-white m-b-5">Report</div>
                        <h2 class="m-0 c-white f-300">Retrieve Report</h2>
                    </div>
                </div>
                <a href="/member">
                    <div class="col-xs-3">
                        <div class="bgm-red brd-2 p-15">
                            <div class="c-white m-b-5">Member</div>
                            <h2 class="m-0 c-white f-300">Add Member</h2>
                        </div>
                    </div>
                </a>
            </div>










            <div class="row">


                <div class="col-sm-12">
                    <!-- Calendar -->
                    <div id="calendar-widget"></div>

                    <!-- Recent Posts -->
                    <div class="card">
                        <div class="card-header ch-alt m-b-20">
                            <h2>Recent Posts <small>Phasellus condimentum ipsum id auctor imperdie</small></h2>
                            <ul class="actions">
                                <li>
                                    <a href="">
                                        <i class="zmdi zmdi-refresh-alt"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <i class="zmdi zmdi-download"></i>
                                    </a>
                                </li>
                                <li class="dropdown">
                                    <a href="" data-toggle="dropdown">
                                        <i class="zmdi zmdi-more-vert"></i>
                                    </a>

                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li>
                                            <a href="">Change Date Range</a>
                                        </li>
                                        <li>
                                            <a href="">Change Graph Type</a>
                                        </li>
                                        <li>
                                            <a href="">Other Settings</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>

                            <button class="btn bgm-cyan btn-float"><i class="zmdi zmdi-plus"></i></button>
                        </div>

                        <div class="card-body">
                            <div class="listview">
                                <a class="lv-item" href="">
                                    <div class="media">
                                        <div class="pull-left">
                                            <img class="lv-img-sm" src="images/1.jpg" alt="">
                                        </div>
                                        <div class="media-body">
                                            <div class="lv-title">David Belle</div>
                                            <small class="lv-small">Cum sociis natoque penatibus et magnis dis parturient montes</small>
                                        </div>
                                    </div>
                                </a>
                                <a class="lv-item" href="">
                                    <div class="media">
                                        <div class="pull-left">
                                            <img class="lv-img-sm" src="images/2.jpg" alt="">
                                        </div>
                                        <div class="media-body">
                                            <div class="lv-title">Jonathan Morris</div>
                                            <small class="lv-small">Nunc quis diam diamurabitur at dolor elementum, dictum turpis vel</small>
                                        </div>
                                    </div>
                                </a>
                                <a class="lv-item" href="">
                                    <div class="media">
                                        <div class="pull-left">
                                            <img class="lv-img-sm" src="images/3.jpg" alt="">
                                        </div>
                                        <div class="media-body">
                                            <div class="lv-title">Fredric Mitchell Jr.</div>
                                            <small class="lv-small">Phasellus a ante et est ornare accumsan at vel magnauis blandit turpis at augue ultricies</small>
                                        </div>
                                    </div>
                                </a>
                                <a class="lv-item" href="">
                                    <div class="media">
                                        <div class="pull-left">
                                            <img class="lv-img-sm" src="images/4.jpg" alt="">
                                        </div>
                                        <div class="media-body">
                                            <div class="lv-title">Glenn Jecobs</div>
                                            <small class="lv-small">Ut vitae lacus sem ellentesque maximus, nunc sit amet varius dignissim, dui est consectetur neque</small>
                                        </div>
                                    </div>
                                </a>
                                <a class="lv-item" href="">
                                    <div class="media">
                                        <div class="pull-left">
                                            <img class="lv-img-sm" src="images/4.jpg" alt="">
                                        </div>
                                        <div class="media-body">
                                            <div class="lv-title">Bill Phillips</div>
                                            <small class="lv-small">Proin laoreet commodo eros id faucibus. Donec ligula quam, imperdiet vel ante placerat</small>
                                        </div>
                                    </div>
                                </a>
                                <a class="lv-footer" href="">View All</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>

<footer id="footer">
    Copyright &copy; 2015 Aftkad

    <ul class="f-menu">
        <li><a href="">Home</a></li>
        <li><a href="">Dashboard</a></li>
        <li><a href="">Reports</a></li>
        <li><a href="">Support</a></li>
        <li><a href="">Contact</a></li>
    </ul>
</footer>

<!-- Page Loader -->
<div class="page-loader">
    <div class="preloader pls-blue">
        <svg class="pl-circular" viewBox="25 25 50 50">
            <circle class="plc-path" cx="50" cy="50" r="20" />
        </svg>

        <p>Please wait...</p>
    </div>
</div>

<!-- Javascript Libraries -->
<script src="/js/jquery.min.js"></script>
<script src="/js/bootstrap.min.js"></script>

<script src="/js/jquery.flot.js"></script>
<script src="/js/jquery.flot.resize.js"></script>
<script src="/js/curvedLines.js"></script>
<script src="/js/jquery.sparkline.min.js"></script>
<script src="/js/jquery.easypiechart.min.js"></script>

<script src="/js/moment.min.js"></script>
<script src="/js/fullcalendar.min.js "></script>
<script src="/js/jquery.simpleWeather.min.js"></script>
<script src="/js/waves.min.js"></script>
<script src="/js/bootstrap-growl.min.js"></script>
<script src="/js/sweet-alert.min.js"></script>
<script src="/js/jquery.mCustomScrollbar.concat.min.js"></script>

<script src="/js/curved-line-chart.js"></script>
<script src="/js/line-chart.js"></script>
<script src="/js/charts.js"></script>

<script src="/js/charts.js"></script>
<script src="/js/functions.js"></script>
<script src="/js/demo.js"></script>


</body>