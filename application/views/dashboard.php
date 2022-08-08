            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid" id="dash">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h3 class="text-themecolor">Dashboard</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div>
                    <div class="col-md-7 align-self-center text-right d-none d-md-block">
                        <button type="button" class="btn btn-info"><i class="fa fa-plus-circle"></i> Create New</button>
                    </div>
                    <!-- <div class="">
                        <button class="right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>
                    </div> -->
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Info box -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex p-10 no-block">
                                    <div class="align-slef-center">
                                        <h2 class="m-b-0">Coordinate</h2>
                                        <h6 class="text-muted m-b-0">South</h6>
                                    </div>
                                    <div class="align-self-center display-6 ml-auto"><i class="text-success icon-Target-Market"></i></div>
                                </div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-success" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:100%; height:3px;"> <span class="sr-only">50% Complete</span></div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex p-10 no-block">
                                    <div class="align-slef-center">
                                        <h2 class="m-b-0">Coordinate</h2>
                                        <h6 class="text-muted m-b-0">East</h6>
                                    </div>
                                    <div class="align-self-center display-6 ml-auto"><i class="text-info icon-Dollar-Sign"></i></div>
                                </div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-info" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:100%; height:3px;"> <span class="sr-only">50% Complete</span></div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex p-10 no-block">
                                    <div class="align-slef-center">
                                        <h2 class="m-b-0">Waktu</h2>
                                        <h6 class="text-muted m-b-0">Time</h6>
                                    </div>
                                    <div class="align-self-center display-6 ml-auto"><i class="text-primary icon-Inbox-Forward"></i></div>
                                </div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:100%; height:3px;"> <span class="sr-only">50% Complete</span></div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex p-10 no-block">
                                    <div class="align-slef-center">
                                        <h2 class="m-b-0">Tanggal</h2>
                                        <h6 class="text-muted m-b-0">Date</h6>
                                    </div>
                                    <div class="align-self-center display-6 ml-auto"><i class="text-danger icon-Contrast"></i></div>
                                </div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:100%; height:3px;"> <span class="sr-only">50% Complete</span></div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                </div>
                <!-- ============================================================== -->
                <!-- End Info box -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Maps Panel -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body" id="scroll_focus">
                                <h4 class="card-title">Maps Marker Position</h4>
                                <div id="gmaps_simple" class="gmaps" style="position: relative; overflow: hidden;">
                                    <div class="mapouter">
                                        <div class="gmap_canvas" id="set_coor">
                                            <iframe width="100%" height="100%" id="gmap_canvas" src="https://maps.google.com/maps?q=-8.587552%20116.096348&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                                            <a href="https://www.embedgooglemap.org" hidden="true">embed google map php forum</a>
                                            <a href="https://www.embedgooglemap.net" hidden="true">embed google map php forum</a>
                                        </div>
                                        <style>
                                            .mapouter{position:relative;text-align:right;height:600px;width:100%;}
                                            .gmap_canvas {overflow:hidden;background:none!important;height:100%;width:100%;border-radius: 3px;}
                                        </style>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End of the Maps Panel -->
                <!-- ============================================================== -->                
                <!-- ============================================================== -->
                <!-- Projects of the Month -->
                <!-- ============================================================== -->

                <!-- ============================================================== -->
                <!-- End Projects of the Month -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Notification And Feeds -->
                <!-- ============================================================== -->

                <!-- ============================================================== -->
                <!-- End Notification And Feeds -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->