            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid" id="tabl">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h3 class="text-themecolor">Crash Data</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Datatable</li>
                        </ol>
                    </div>
                    <div class="col-md-7 align-self-center text-right d-none d-md-block">
                        <button type="button" class="btn btn-info"><i class="fa fa-plus-circle"></i> Create New</button>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Crash Data List</h4>
                                <h6 class="card-subtitle">Click on show entris to change count of data enties, or click search field to find specific data</h6>
                                <table class="table table-bordered color-table table-hover" style="border: 2px solid #20aee3;" id="myTable">
                                    <thead style="background-color: #20aee3; color: #ffffff;">
                                        <tr>
                                            <th>NO</th>
                                            <th>Pengendara</th>
                                            <th>ID Alat</th>
                                            <th>Koordinat</th>
                                            <th>Waktu</th>
                                            <th class="text-center">Hapus</th>
                                        </tr>
                                    </thead>
                                    <tbody id="crashlist">
                                        
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Nomor</th>
                                            <th>Driver</th>
                                            <th>ID Device</th>
                                            <th>Coordinate</th>
                                            <th>Time</th>
                                            <th class="text-center">Delete</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->