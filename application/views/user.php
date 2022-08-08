            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid" id="user">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-themecolor">Users</h3>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Users</li>
                    </ol>
                </div>
                    <div class="col-md-7 align-self-center text-right d-none d-md-block">
                        <button type="button" id="btnadd" class="btn btn-info" data-toggle="modal" data-target="#add-user"><i class="fa fa-plus-circle"></i> Create New</button>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row" id="root">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Other Users List</h4>
                                <h6 class="card-subtitle">Just click delete button which you want to remove, or click create new button for new data</h6>
                                <!-- Add Contact Popup Model -->
                                <div id="add-user" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="myModalLabel">Add New User</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            </div>
                                            <div class="modal-body">
                                                <form id="form-add" class="form-horizontal form-material">
                                                    <!-- <div class="form-group"> -->
                                                        <div class="col-md-12 m-b-20">
                                                            <input type="text" class="form-control" id="recipient-name" name="u-name" placeholder="Name"><span style="position: fixed;" id="name_result"></span>
                                                        </div>
                                                        <div class="col-md-12 m-b-20">
                                                            <input type="text" class="form-control" id="recipient-username" name="u-username" placeholder="Username"><span style="position: fixed;" id="username_result"></span>
                                                        </div>
                                                        <div class="col-md-12 m-b-20">
                                                            <input type="text" class="form-control" id="recipient-password" name="u-password" placeholder="Password"><span style="position: fixed;" id="password_result"></span>
                                                        </div>
                                                        <div class="col-md-12 m-b-20">
                                                            <input type="text" class="form-control" id="recipient-email" name="u-email" placeholder="Email"><span style="position: fixed;" id="email_result"></span>
                                                        </div>
                                                        <div class="col-md-12 m-b-20" id="u-id">
                                                            <!-- <div class="checkbox checkbox-success p-t-0">
                                                                <input id="checkbox-signup" type="checkbox" name="terms" class="filled-in chk-col-light-blue">
                                                                <label for="checkbox-signup"> ID </label>
                                                                <span id="terms_result"></span>
                                                            </div> -->
                                                        </div>
                                                        <div class="text-center">
                                                            <span id="result_result" class="font-weight-bold"></span>
                                                        </div>
                                                    <!-- </div> -->
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-info waves-effect" id="btnsave">Save</button>
                                                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Cancel</button>
                                            </div>
                                        </div>
                                        <!-- /.modal-content -->
                                    </div>
                                    <!-- /.modal-dialog -->
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover color-bordered-table danger-bordered-table">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Username</th>
                                                <th id="thpassword">Password</th>
                                                <th class="text-center">ID Alat</th>
                                                <th id="thdelete" class="text-center">Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody id="useuse">
                                            
                                        </tbody>
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