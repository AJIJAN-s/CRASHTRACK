            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid" id="devi">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h3 class="text-themecolor">Device & Vehicle</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Device & Vehicle</li>
                        </ol>
                    </div>
                    <div class="col-md-7 align-self-center text-right d-none d-md-block">
                        <button type="button" class="btn btn-info" id="devadd"><i class="fa fa-plus-circle"></i> Create New</button>
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
                                <h4 class="card-title">Device Vehicle List</h4>
                                <h6 class="card-subtitle">Just click edit button which you want to change, or click create new button for new data</h6>
                                <!-- Add Contact Popup Model -->
                                <div id="modal-device" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="myModalLabel">Add New User</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            </div>
                                            <div class="modal-body">
                                                <form id="form-device" class="form-horizontal form-material">
                                                    <!-- <div class="form-group"> -->
                                                        <div class="col-md-12 m-b-20">
                                                            <input type="text" class="form-control" id="d-id" name="d-id" placeholder="ID Alat"><span style="position: fixed;" id="did_result"></span>
                                                        </div>
                                                        <div class="col-md-12 m-b-20">
                                                            <input type="text" class="form-control" id="d-nmp" name="d-nmp" placeholder="Nama Pengendara"><span style="position: fixed;" id="nmp_result"></span>
                                                        </div>
                                                        <div class="col-md-12 m-b-20">
                                                            <input type="text" class="form-control" id="d-noplat" name="d-noplat" placeholder="No Plat"><span style="position: fixed;" id="noplat_result"></span>
                                                        </div>
                                                        <div class="col-md-12 m-b-20">
                                                            <input type="text" class="form-control" id="d-merk" name="d-merk" placeholder="Merk"><span style="position: fixed;" id="merk_result"></span>
                                                        </div>
                                                        <div class="col-md-12 m-b-20">
                                                            <input type="text" class="form-control" id="d-tipe" name="d-tipe" placeholder="Tipe"><span style="position: fixed;" id="tipe_result"></span>
                                                        </div>
                                                        <div class="text-center">
                                                            <span id="d_result" class="font-weight-bold"></span>
                                                        </div>
                                                    <!-- </div> -->
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-info waves-effect" id="devsave">Save</button>
                                                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Cancel</button>
                                            </div>
                                        </div>
                                        <!-- /.modal-content -->
                                    </div>
                                    <!-- /.modal-dialog -->
                                </div>
                                <div class="table-responsive">
                                    <table id="mainTable" class="table editable-table color-bordered-table success-bordered-table table-hover table-bordered m-b-0">
                                        <thead>
                                            <tr>
                                                <th>NO</th>
                                                <th>Nama Pengendara</th>
                                                <th>NO Plat</th>
                                                <th>Merk</th>
                                                <th>Tipe</th>
                                                <th class="text-center">ID Alat</th>
                                                <th class="text-center">EDIT</th>
                                            </tr>
                                        </thead>
                                        <tbody id="usedev">

                                        </tbody>
                                        <!-- <tfoot>
                                            <tr>
                                                <th><strong>TOTAL</strong></th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                            </tr>
                                        </tfoot> -->
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- Column -->
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->