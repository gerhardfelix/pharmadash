<?php require "header.php"; ?>

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
                        <div class="col-xl-7">
                            <div class="row">
                                <div class="col-6">
                                    <div class="card text-center">
                                        <div class="card-body py-1">
                                            <div class="text-muted line-ellipsis">Order Fullfilment</div>
                                            <h4 class="mb-0">97.5 %</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="card text-center">
                                        <div class="card-body py-1">
                                            <div class="text-muted line-ellipsis">COGM / Unit</div>
                                            <h4 class="mb-0">113 %</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-3">
                                    <div class="card text-center">
                                        <div class="card-body py-1">
                                            <div class="text-muted line-ellipsis">RM Cost/Unit</div>
                                            <h4 class="mb-0">99.73 %</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="card text-center">
                                        <div class="card-body py-1">
                                            <div class="text-muted line-ellipsis">PM Cost/Unit</div>
                                            <h4 class="mb-0">98.34 %</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="card text-center">
                                        <div class="card-body py-1">
                                            <div class="text-muted line-ellipsis">DL/Unit</div>
                                            <h4 class="mb-0">80 %</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="card text-center">
                                        <div class="card-body py-1">
                                            <div class="text-muted line-ellipsis">FOH/Unit</div>
                                            <h4 class="mb-0">84 %</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-3">
                                    <div class="card text-center">
                                        <div class="card-body py-1">
                                            <div class="text-muted line-ellipsis">BRFT</div>
                                            <h4 class="mb-0">97.6 %</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="card text-center">
                                        <div class="card-body py-1">
                                            <div class="text-muted line-ellipsis">PCT Sterile</div>
                                            <h4 class="mb-0">16.95 D</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="card text-center">
                                        <div class="card-body py-1">
                                            <div class="text-muted line-ellipsis">PCT &ne; Sterile</div>
                                            <h4 class="mb-0">9.12 D</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="card text-center">
                                        <div class="card-body py-1">
                                            <div class="text-muted line-ellipsis">Deviation</div>
                                            <h4 class="mb-0">-17 %</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="card-body">
                                        <div id="multi-radial-chart"></div>
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
                                                    <h4 class="mb-0">100 %</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="card text-center">
                                                <div class="card-body py-1">
                                                    <div class="text-muted line-ellipsis">Cost Saving</div>
                                                    <h4 class="mb-0">13.04 B</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="card text-center">
                                                <div class="card-body py-1">
                                                    <div class="text-muted line-ellipsis">Rework</div>
                                                    <h4 class="mb-0">0.56 %</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="card text-center">
                                                <div class="card-body py-1">
                                                    <div class="text-muted line-ellipsis">LTA</div>
                                                    <h4 class="mb-0">0</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                                            <h4 class="card-title">Pharma Manufacturing Site</h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="leaflet-map" id="layer-control-map"></div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Layer Control ends -->
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