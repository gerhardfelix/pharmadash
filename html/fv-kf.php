<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="Frest admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Frest admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>BO Pharma Dashboard</title>
    <link rel="apple-touch-icon" href="../app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="../app-assets/images/ico/logokalbe.ico">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,600%7CIBM+Plex+Sans:300,400,500,600,700" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/pickers/daterange/daterangepicker.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/charts/apexcharts.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/extensions/dragula.min.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/maps/leaflet.min.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/extensions/swiper.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="../app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/css/components.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/css/themes/semi-dark-layout.css">
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="../app-assets/css/core/menu/menu-types/horizontal-menu.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/css/pages/widgets.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/css/pages/dashboard-analytics.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/css/plugins/maps/maps-leaflet.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/css/pages/dashboard-ecommerce.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="horizontal-layout horizontal-menu navbar-static 2-columns footer-static" data-open="hover" data-menu="horizontal-menu" data-col="2-columns">
    

    <!-- BEGIN: Header-->
    <nav class="header-navbar navbar-expand-lg navbar navbar-with-menu navbar-static-top bg-primary navbar-brand-center navbar-bg-custom">
        <div class="navbar-header d-xl-block d-none">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item"><a class="navbar-brand" href="../html/index.php">
                        <div class="brand-logo"><img class="logo" src="../app-assets/images/logo/logo2.png"></div>
                    </a></li>
            </ul>
        </div>
        <div class="navbar-wrapper">
            <div class="navbar-container content">
                <div class="navbar-collapse" id="navbar-mobile">
                    <div class="mr-auto float-left bookmark-wrapper d-flex align-items-center">
                        <ul class="nav navbar-nav">
                            <h4 class="brand-text mb-0">Factory View Dashboard</h4>
                        </ul>
                    </div>
                    <ul class="nav navbar-nav float-right d-flex align-items-center">
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- END: Header-->

    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <!-- Dashboard Analytics Start -->
                <section id="dashboard-analytics">
                    <div class="row">
                        <!-- Website Analytics Starts-->
                        <div class="col-xl-5">
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <select class="select2 form-control">
                                            <option value="jan">January</option>
                                            <option value="feb">February</option>
                                            <option value="mar">March</option>
                                            <option value="apr">April</option>
                                            <option value="may">May</option>
                                            <option value="jun">June</option>
                                            <option value="jul">July</option>
                                            <option value="aug">August</option>
                                            <option value="sep">September</option>
                                            <option value="oct">October</option>
                                            <option value="nov">November</option>
                                            <option value="dec">December</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <select class="select2 form-control">
                                            <option value="1">2022</option>
                                            <option value="2">2021</option>
                                            <option value="3">2020</option>
                                            <option value="4">2019</option>
                                            <option value="5">2018</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <!-- Layer Control starts -->
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4 class="card-title">PT Kalbe Farma, Tbk</h4>
                                        </div>
                                        <div class="card-body">
                                            <iframe src="https://www.google.com/maps/embed?pb=!4v1649397353014!6m8!1m7!1slcw9wCm_I0icfclRfHJrCg!2m2!1d-6.321331283610048!2d107.1164844463302!3f12.036896081413607!4f0.9251989334437241!5f0.7820865974627469" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                        </div>
                                    </div>
                                </div>
                                <!-- Layer Control ends -->
                            </div>
                            <div class="row">
                                <div class="col-lg-12 mb-1 mb-lg-0">
                                    <a href="lv-kf.php"><button type="button" class="btn btn-primary btn-lg btn-block">Line View </button></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-7">
                            <div class="row">
                                <div class="col-6">
                                    <div class="card text-center">
                                        <div class="card-body py-1">
                                            <div class="text-muted line-ellipsis">Order Fullfilment</div>
                                            <h3 class="mb-0">99.04 %</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="card text-center">
                                        <div class="card-body py-1">
                                            <div class="text-muted line-ellipsis">COGM / Unit</div>
                                            <h3 class="mb-0">126 %</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-3">
                                    <div class="card text-center">
                                        <div class="card-body py-1">
                                            <div class="text-muted line-ellipsis">RM Cost/Unit</div>
                                            <h3 class="mb-0">1.23 %</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="card text-center">
                                        <div class="card-body py-1">
                                            <div class="text-muted line-ellipsis">PM Cost/Unit</div>
                                            <h3 class="mb-0">2.34 %</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="card text-center">
                                        <div class="card-body py-1">
                                            <div class="text-muted line-ellipsis">DL/Unit</div>
                                            <h3 class="mb-0">84.5 %</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="card text-center">
                                        <div class="card-body py-1">
                                            <div class="text-muted line-ellipsis">FOH/Unit</div>
                                            <h3 class="mb-0">92.7 %</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-3">
                                    <div class="card text-center">
                                        <div class="card-body py-1">
                                            <div class="text-muted line-ellipsis">BRFT</div>
                                            <h3 class="mb-0">98.28 %</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="card text-center">
                                        <div class="card-body py-1">
                                            <div class="text-muted line-ellipsis">PCT Sterile</div>
                                            <h3 class="mb-0">15.6 %</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="card text-center">
                                        <div class="card-body py-1">
                                            <div class="text-muted line-ellipsis">PCT &notin; Sterile</div>
                                            <h3 class="mb-0">6.32 %</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="card text-center">
                                        <div class="card-body py-1">
                                            <div class="text-muted line-ellipsis">Deviation</div>
                                            <h3 class="mb-0">110 %</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="card-body">
                                        <div id="multi-radial-chart2"></div>
                                        <ul class="list-inline text-center mt-1 mb-0">
                                            <li class="mr-2"><span class="bullet bullet-xs bullet-primary mr-50"></span>AR</li>
                                            <li class="mr-2"><span class="bullet bullet-xs bullet-danger mr-50"></span>PR</li>
                                            <li><span class="bullet bullet-xs bullet-warning mr-50"></span>QR</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="card text-center">
                                                <div class="card-body py-1">
                                                    <div class="text-muted line-ellipsis">Yield</div>
                                                    <h3 class="mb-0">100.69 %</h3>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="card text-center">
                                                <div class="card-body py-1">
                                                    <div class="text-muted line-ellipsis">Cost Saving</div>
                                                    <h3 class="mb-0">6.35</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="card text-center">
                                                <div class="card-body py-1">
                                                    <div class="text-muted line-ellipsis">Rework</div>
                                                    <h3 class="mb-0">0.8 %</h3>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="card text-center">
                                                <div class="card-body py-1">
                                                    <div class="text-muted line-ellipsis">LTA</div>
                                                    <h3 class="mb-0">0</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Dashboard Analytics end -->
            </div>
        </div>
    </div>
    <!-- END: Content-->

<?php require "footer.php"; ?>