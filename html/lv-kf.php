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
    <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/extensions/sweetalert2.min.css">
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
    <nav class="header-navbar navbar-expand-lg navbar navbar-with-menu navbar-static-top bg-secondary navbar-brand-center navbar-bg-custom">
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
                            <h4 class="brand-text mb-0">Line View Dashboard</h4>
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
            <div class="content-body">
                <!-- Vertical Pills start -->
                <section id="stacked-pill">
                    <div class="row">
                        <div class="col-12">
                            <div class="card bg-transparent shadow-none">
                                <div class="card-body">
                                    <div class="row pills-stacked">
                                        <div class="col-1">
                                            <ul class="nav nav-pills flex-column text-center text-md-left">
                                                <li class="nav-item">
                                                    <a class="nav-link active" id="stacked-pill-1" data-toggle="pill" href="#vertical-pill-1" aria-expanded="true">
                                                        Minico 1
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="stacked-pill-2" data-toggle="pill" href="#vertical-pill-2" aria-expanded="false">
                                                        Minico 2
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="stacked-pill-3" data-toggle="pill" href="#vertical-pill-3" aria-expanded="false">
                                                        Minico 3
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="stacked-pill-4" data-toggle="pill" href="#vertical-pill-4" aria-expanded="false">
                                                        Minico 4
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="stacked-pill-5" data-toggle="pill" href="#vertical-pill-5" aria-expanded="false">
                                                        Minico 5
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-11">
                                            <div class="tab-content">
                                                <div role="tabpanel" class="tab-pane active" id="vertical-pill-1" aria-labelledby="stacked-pill-1" aria-expanded="true">
                                                    <!-- Nav Justified Starts -->
                                                    <section id="nav-justified">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="card">
                                                                    <div class="card-body">
                                                                        <ul class="nav nav-tabs nav-justified" id="myTab2" role="tablist">
                                                                            <li class="nav-item">
                                                                                <a class="nav-link active" id="line1-tab" data-toggle="tab" href="#line1-just" role="tab" aria-controls="line1-just" aria-selected="true">
                                                                                    Line 1
                                                                                </a>
                                                                            </li>
                                                                            <li class="nav-item">
                                                                                <a class="nav-link" id="line11-tab" data-toggle="tab" href="#line11-just" role="tab" aria-controls="line11-just" aria-selected="false">
                                                                                    Line 11
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                        <!-- Tab panes -->
                                                                        <div class="tab-content pt-1">
                                                                            <div class="tab-pane active" id="line1-just" role="tabpanel" aria-labelledby="line1-tab">
                                                                                <!-- Background variants section start -->
                                                                                <section id="bg-variants">
                                                                                    <div class="row">
                                                                                        <div class="col">
                                                                                            <div class="card border-secondary text-center bg-transparent">
                                                                                                <div class="card-body">
                                                                                                    <div class="row">
                                                                                                        <div class="col-md-12 col-sm-12 d-flex justify-content-center flex-column">
                                                                                                            <p class="card-text">Granulation</p>
                                                                                                        </div>
                                                                                                        <div class="col-md-12 col-sm-12 mb-50 d-flex justify-content-center" style="height: 100px;">
                                                                                                            <img src="../app-assets/images/line_v/line1a.png" alt="element 04" width="150" class="float-left mt-1 img-fluid">
                                                                                                        </div>
                                                                                                        <div class="col-md-12 col-sm-12 d-flex justify-content-center flex-column">
                                                                                                            <p class="card-text">Diosna</p>
                                                                                                            <h4>
                                                                                                                <span class="badge badge-light-success">ON</span>
                                                                                                            </h4>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#exampleModal">Check</button>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col">
                                                                                            <div class="card border-secondary text-center bg-transparent">
                                                                                                <div class="card-body">
                                                                                                    <div class="row">
                                                                                                        <div class="col-md-12 col-sm-12 d-flex justify-content-center flex-column">
                                                                                                            <p class="card-text">Final Mixing</p>
                                                                                                        </div>
                                                                                                        <div class="col-md-12 col-sm-12 mb-50 d-flex justify-content-center" style="height: 100px;">
                                                                                                            <img src="../app-assets/images/line_v/line1b.png" alt="element 04" width="150" height="100" class="float-left mt-1 img-fluid">
                                                                                                        </div>
                                                                                                        <div class="col-md-12 col-sm-12 d-flex justify-content-center flex-column">
                                                                                                            <p class="card-text">Zanchetta</p>
                                                                                                            <h4>
                                                                                                                <span class="badge badge-light-success">ON</span>
                                                                                                            </h4>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <button type="button" class="btn btn-outline-primary" id="html-alert">HTML</button>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col">
                                                                                            <div class="card border-secondary text-center bg-transparent">
                                                                                                <div class="card-body">
                                                                                                    <div class="row">
                                                                                                        <div class="col-md-12 col-sm-12 d-flex justify-content-center flex-column">
                                                                                                            <p class="card-text">Compressing</p>
                                                                                                        </div>
                                                                                                        <div class="col-md-12 col-sm-12 mb-50 d-flex justify-content-center" style="height: 100px;">
                                                                                                            <img src="../app-assets/images/line_v/line1c.png" alt="element 04" width="150" class="float-left mt-1 img-fluid">
                                                                                                        </div>
                                                                                                        <div class="col-md-12 col-sm-12 d-flex justify-content-center flex-column">
                                                                                                            <p class="card-text">Fette 3200</p>
                                                                                                            <h4>
                                                                                                                <span class="badge badge-light-success">ON</span>
                                                                                                            </h4>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <button class="btn btn-primary">Check</button>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col">
                                                                                            <div class="card border-secondary text-center bg-transparent">
                                                                                                <div class="card-body">
                                                                                                    <div class="row">
                                                                                                        <div class="col-md-12 col-sm-12 d-flex justify-content-center flex-column">
                                                                                                            <p class="card-text">1<sup>st</sup> Packaging</p>
                                                                                                        </div>
                                                                                                        <div class="col-md-12 col-sm-12 mb-50 d-flex justify-content-center" style="height: 100px;">
                                                                                                            <img src="../app-assets/images/line_v/line1d.png" alt="element 04" width="150" class="float-left mt-1 img-fluid">
                                                                                                        </div>
                                                                                                        <div class="col-md-12 col-sm-12 d-flex justify-content-center flex-column">
                                                                                                            <p class="card-text">UPS 1070</p>
                                                                                                            <h4>
                                                                                                                <span class="badge badge-light-success">ON</span>
                                                                                                            </h4>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <button class="btn btn-primary">Check</button>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col">
                                                                                            <div class="card border-secondary text-center bg-transparent">
                                                                                                <div class="card-body">
                                                                                                    <div class="row">
                                                                                                        <div class="col-md-12 col-sm-12 d-flex justify-content-center flex-column">
                                                                                                            <p class="card-text">2<sup>nd</sup> Packaging</p>
                                                                                                        </div>
                                                                                                        <div class="col-md-12 col-sm-12 mb-50 d-flex justify-content-center" style="height: 100px;">
                                                                                                            <img src="../app-assets/images/line_v/line1e.png" alt="element 04" width="150" class="float-left mt-1 img-fluid">
                                                                                                        </div>
                                                                                                        <div class="col-md-12 col-sm-12 d-flex justify-content-center flex-column">
                                                                                                            <p class="card-text">C2404</p>
                                                                                                            <h4>
                                                                                                                <span class="badge badge-light-success">ON</span>
                                                                                                            </h4>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <button class="btn btn-primary">Check</button>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </section>
                                                                                <!-- Background variants section end -->
                                                                            </div>
                                                                            <div class="tab-pane" id="line11-just" role="tabpanel" aria-labelledby="line11-tab">
                                                                                <!-- Background variants section start -->
                                                                                <section id="bg-variants">
                                                                                    <div class="row">
                                                                                        <div class="col">
                                                                                            <div class="card border-secondary text-center bg-transparent">
                                                                                                <div class="card-body">
                                                                                                    <div class="row">
                                                                                                        <div class="col-md-12 col-sm-12 d-flex justify-content-center flex-column">
                                                                                                            <p class="card-text">Granulation</p>
                                                                                                        </div>
                                                                                                        <div class="col-md-12 col-sm-12 mb-50 d-flex justify-content-center" style="height: 100px;">
                                                                                                            <img src="../app-assets/images/line_v/line1a.png" alt="element 04" width="150" class="float-left mt-1 img-fluid">
                                                                                                        </div>
                                                                                                        <div class="col-md-12 col-sm-12 d-flex justify-content-center flex-column">
                                                                                                            <p class="card-text">Diosna</p>
                                                                                                            <h4>
                                                                                                                <span class="badge badge-light-success">ON</span>
                                                                                                            </h4>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <button class="btn btn-primary">Check</button>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col">
                                                                                            <div class="card border-secondary text-center bg-transparent">
                                                                                                <div class="card-body">
                                                                                                    <div class="row">
                                                                                                        <div class="col-md-12 col-sm-12 d-flex justify-content-center flex-column">
                                                                                                            <p class="card-text">Final Mixing</p>
                                                                                                        </div>
                                                                                                        <div class="col-md-12 col-sm-12 mb-50 d-flex justify-content-center" style="height: 100px;">
                                                                                                            <img src="../app-assets/images/line_v/line1b.png" alt="element 04" width="150" height="100" class="float-left mt-1 img-fluid">
                                                                                                        </div>
                                                                                                        <div class="col-md-12 col-sm-12 d-flex justify-content-center flex-column">
                                                                                                            <p class="card-text">Zanchetta</p>
                                                                                                            <h4>
                                                                                                                <span class="badge badge-light-success">ON</span>
                                                                                                            </h4>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <button class="btn btn-primary">Check</button>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col">
                                                                                            <div class="card border-secondary text-center bg-transparent">
                                                                                                <div class="card-body">
                                                                                                    <div class="row">
                                                                                                        <div class="col-md-12 col-sm-12 d-flex justify-content-center flex-column">
                                                                                                            <p class="card-text">Compressing</p>
                                                                                                        </div>
                                                                                                        <div class="col-md-12 col-sm-12 mb-50 d-flex justify-content-center" style="height: 100px;">
                                                                                                            <img src="../app-assets/images/line_v/line1c.png" alt="element 04" width="150" class="float-left mt-1 img-fluid">
                                                                                                        </div>
                                                                                                        <div class="col-md-12 col-sm-12 d-flex justify-content-center flex-column">
                                                                                                            <p class="card-text">Fette 3200</p>
                                                                                                            <h4>
                                                                                                                <span class="badge badge-light-success">ON</span>
                                                                                                            </h4>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <button class="btn btn-primary">Check</button>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col">
                                                                                            <div class="card border-secondary text-center bg-transparent">
                                                                                                <div class="card-body">
                                                                                                    <div class="row">
                                                                                                        <div class="col-md-12 col-sm-12 d-flex justify-content-center flex-column">
                                                                                                            <p class="card-text">1<sup>st</sup> Packaging</p>
                                                                                                        </div>
                                                                                                        <div class="col-md-12 col-sm-12 mb-50 d-flex justify-content-center" style="height: 100px;">
                                                                                                            <img src="../app-assets/images/line_v/line1d.png" alt="element 04" width="150" class="float-left mt-1 img-fluid">
                                                                                                        </div>
                                                                                                        <div class="col-md-12 col-sm-12 d-flex justify-content-center flex-column">
                                                                                                            <p class="card-text">UPS 1070</p>
                                                                                                            <h4>
                                                                                                                <span class="badge badge-light-success">ON</span>
                                                                                                            </h4>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <button class="btn btn-primary">Check</button>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col">
                                                                                            <div class="card border-secondary text-center bg-transparent">
                                                                                                <div class="card-body">
                                                                                                    <div class="row">
                                                                                                        <div class="col-md-12 col-sm-12 d-flex justify-content-center flex-column">
                                                                                                            <p class="card-text">2<sup>nd</sup> Packaging</p>
                                                                                                        </div>
                                                                                                        <div class="col-md-12 col-sm-12 mb-50 d-flex justify-content-center" style="height: 100px;">
                                                                                                            <img src="../app-assets/images/line_v/line1e.png" alt="element 04" width="150" class="float-left mt-1 img-fluid">
                                                                                                        </div>
                                                                                                        <div class="col-md-12 col-sm-12 d-flex justify-content-center flex-column">
                                                                                                            <p class="card-text">C2404</p>
                                                                                                            <h4>
                                                                                                                <span class="badge badge-light-success">ON</span>
                                                                                                            </h4>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <button class="btn btn-primary">Check</button>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </section>
                                                                                <!-- Background variants section end -->
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </section>
                                                    <!-- Nav Justified Ends -->
                                                </div>
                                                <div class="tab-pane" id="vertical-pill-2" role="tabpanel" aria-labelledby="stacked-pill-2" aria-expanded="false">
                                                    <!-- Nav Justified Starts -->
                                                    <section id="nav-justified">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="card">
                                                                    <div class="card-body">
                                                                        <ul class="nav nav-tabs nav-justified" id="myTab2" role="tablist">
                                                                            <li class="nav-item">
                                                                                <a class="nav-link active" id="line2-tab" data-toggle="tab" href="#line2-just" role="tab" aria-controls="line2-just" aria-selected="true">
                                                                                    Line 2
                                                                                </a>
                                                                            </li>
                                                                            <li class="nav-item">
                                                                                <a class="nav-link" id="line3-tab" data-toggle="tab" href="#line3-just" role="tab" aria-controls="line3-just" aria-selected="false">
                                                                                    Line 3
                                                                                </a>
                                                                            </li>
                                                                            <li class="nav-item">
                                                                                <a class="nav-link" id="line4-tab" data-toggle="tab" href="#line4-just" role="tab" aria-controls="line4-just" aria-selected="false">
                                                                                    Line 4
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                        <!-- Tab panes -->
                                                                        <div class="tab-content pt-1">
                                                                            <div class="tab-pane active" id="line2-just" role="tabpanel" aria-labelledby="line2-tab">
                                                                                <p>
                                                                                    minico 2 line 2
                                                                                </p>
                                                                            </div>
                                                                            <div class="tab-pane" id="line3-just" role="tabpanel" aria-labelledby="line3-tab">
                                                                                <p>
                                                                                    minico 2 line 3
                                                                                </p>
                                                                            </div>
                                                                            <div class="tab-pane" id="line4-just" role="tabpanel" aria-labelledby="line4-tab">
                                                                                <p>
                                                                                    minico 2 line 4
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </section>
                                                    <!-- Nav Justified Ends -->
                                                </div>
                                                <div class="tab-pane" id="vertical-pill-3" role="tabpanel" aria-labelledby="stacked-pill-3" aria-expanded="false">
                                                    <!-- Nav Justified Starts -->
                                                    <section id="nav-justified">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="card">
                                                                    <div class="card-body">
                                                                        <ul class="nav nav-tabs nav-justified" id="myTab2" role="tablist">
                                                                            <li class="nav-item">
                                                                                <a class="nav-link active" id="line5-tab" data-toggle="tab" href="#line5-just" role="tab" aria-controls="line5-just" aria-selected="true">
                                                                                    Line 5
                                                                                </a>
                                                                            </li>
                                                                            <li class="nav-item">
                                                                                <a class="nav-link" id="line6-tab" data-toggle="tab" href="#line6-just" role="tab" aria-controls="line6-just" aria-selected="false">
                                                                                    Line 6
                                                                                </a>
                                                                            </li>
                                                                            <li class="nav-item">
                                                                                <a class="nav-link" id="line12-tab" data-toggle="tab" href="#line12-just" role="tab" aria-controls="line12-just" aria-selected="false">
                                                                                    Line 12
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                        <!-- Tab panes -->
                                                                        <div class="tab-content pt-1">
                                                                            <div class="tab-pane active" id="line5-just" role="tabpanel" aria-labelledby="line5-tab">
                                                                                <p>
                                                                                    minico 3 line 5
                                                                                </p>
                                                                            </div>
                                                                            <div class="tab-pane" id="line6-just" role="tabpanel" aria-labelledby="line6-tab">
                                                                                <p>
                                                                                    minico 3 line 6
                                                                                </p>
                                                                            </div>
                                                                            <div class="tab-pane" id="line12-just" role="tabpanel" aria-labelledby="line12-tab">
                                                                                <p>
                                                                                    minico 3 line 12
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </section>
                                                    <!-- Nav Justified Ends -->
                                                </div>
                                                <div class="tab-pane" id="vertical-pill-4" role="tabpanel" aria-labelledby="stacked-pill-4" aria-expanded="false">
                                                    <!-- Nav Justified Starts -->
                                                    <section id="nav-justified">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="card">
                                                                    <div class="card-body">
                                                                        <ul class="nav nav-tabs nav-justified" id="myTab2" role="tablist">
                                                                            <li class="nav-item">
                                                                                <a class="nav-link active" id="line7-tab" data-toggle="tab" href="#line7-just" role="tab" aria-controls="line7-just" aria-selected="true">
                                                                                    Line 7
                                                                                </a>
                                                                            </li>
                                                                            <li class="nav-item">
                                                                                <a class="nav-link" id="line13-tab" data-toggle="tab" href="#line13-just" role="tab" aria-controls="line13-just" aria-selected="false">
                                                                                    Line 13
                                                                                </a>
                                                                            </li>
                                                                            <li class="nav-item">
                                                                                <a class="nav-link" id="line14-tab" data-toggle="tab" href="#line14-just" role="tab" aria-controls="line14-just" aria-selected="false">
                                                                                    Line 14
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                        <!-- Tab panes -->
                                                                        <div class="tab-content pt-1">
                                                                            <div class="tab-pane active" id="line7-just" role="tabpanel" aria-labelledby="line7-tab">
                                                                                <p>
                                                                                    minico 4 line 7
                                                                                </p>
                                                                            </div>
                                                                            <div class="tab-pane" id="line13-just" role="tabpanel" aria-labelledby="line13-tab">
                                                                                <p>
                                                                                    minico 4 line 13
                                                                                </p>
                                                                            </div>
                                                                            <div class="tab-pane" id="line14-just" role="tabpanel" aria-labelledby="line14-tab">
                                                                                <p>
                                                                                    minico 4 line 14
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </section>
                                                    <!-- Nav Justified Ends -->
                                                </div>
                                                <div class="tab-pane" id="vertical-pill-5" role="tabpanel" aria-labelledby="stacked-pill-5" aria-expanded="false">
                                                    <!-- Nav Justified Starts -->
                                                    <section id="nav-justified">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="card">
                                                                    <div class="card-body">
                                                                        <ul class="nav nav-tabs nav-justified" id="myTab2" role="tablist">
                                                                            <li class="nav-item">
                                                                                <a class="nav-link active" id="line8a-tab" data-toggle="tab" href="#line8a-just" role="tab" aria-controls="line8a-just" aria-selected="true">
                                                                                    Line 8A
                                                                                </a>
                                                                            </li>
                                                                            <li class="nav-item">
                                                                                <a class="nav-link" id="line8b-tab" data-toggle="tab" href="#line8b-just" role="tab" aria-controls="line8b-just" aria-selected="false">
                                                                                    Line 8B
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                        <!-- Tab panes -->
                                                                        <div class="tab-content pt-1">
                                                                            <div class="tab-pane active" id="line8a-just" role="tabpanel" aria-labelledby="line8a-tab">
                                                                                <p>
                                                                                    minico 5 line 8a
                                                                                </p>
                                                                            </div>
                                                                            <div class="tab-pane" id="line8b-just" role="tabpanel" aria-labelledby="line8b-tab">
                                                                                <p>
                                                                                    minico 5 line 8b
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </section>
                                                    <!-- Nav Justified Ends -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Vertical Pills end -->

            </div>
        </div>
    </div>
    <!-- END: Content-->

    <!-- Modal 1 -->
    <!-- please always use unique ID while declarated new modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            ...
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div>


<?php require "footer.php"; ?>