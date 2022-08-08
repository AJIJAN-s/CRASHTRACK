            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid" id="prof">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h3 class="text-themecolor">Profile</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Profile</li>
                        </ol>
                    </div>
                    <!-- <div class="col-md-7 align-self-center text-right d-none d-md-block">
                        <button type="button" class="btn btn-info"><i class="fa fa-plus-circle"></i> Create New</button>
                    </div> -->
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- Row -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-4 col-xlg-3 col-md-5">
                        <div class="card">
                            <div class="card-body">
                                <center class="m-t-30"> <img src="<?php echo base_url()?>assets/images/users/IMG.jpg" class="img-circle" width="150" />
                                    <h4 class="card-title m-t-10">Azizan Syarofi</h4>
                                    <h6 class="card-subtitle">Parent User</h6>
                                    <div class="row text-center justify-content-md-center">
                                        <!--<div class="col-4"><a href="javascript:void(0)" class="link"><i class="icon-people"></i> <font class="font-medium">254</font></a></div>-->
                                        <!--<div class="col-4"><a href="javascript:void(0)" class="link"><i class="icon-picture"></i> <font class="font-medium">54</font></a></div>-->
                                    </div>
                                </center>
                            </div>
                            <div>
                                <hr> 
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-8 col-xlg-9 col-md-7">
                        <div class="card">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs profile-tab" role="tablist">
                                <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#settings" role="tab">Account</a> </li>
                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#home" role="tab">Users</a> </li>
                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#profile" role="tab">Device</a> </li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane active" id="settings" role="tabpanel">
                                    <div class="card-body">
                                        <form class="form-horizontal form-material" id="formacc" method="POST">
                                            <div class="form-group" hidden="">
                                                <label class="col-md-12">ID</label>
                                                <div class="col-md-12">
                                                    <input type="text" name="idacc" placeholder="ID Pengguna" class="form-control form-control-line">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Full Name</label>
                                                <div class="col-md-12">
                                                    <input type="text" name="nmacc" placeholder="Nama Pengguna" class="form-control form-control-line"><span style="position: absolute;" id="n_result"></span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Username</label>
                                                <div class="col-md-12">
                                                    <input type="text" name="useacc" placeholder="Username" class="form-control form-control-line"><span style="position: absolute;" id="u_result"></span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Password</label>
                                                <div class="col-md-12">
                                                    <input type="password" name="pasacc" placeholder="Password" class="form-control form-control-line"><span style="position: absolute;" id="p_result"></span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="example-email" class="col-md-12">Email</label>
                                                <div class="col-md-12">
                                                    <input type="email" name="emacc" placeholder="Email" class="form-control form-control-line"><span style="position: absolute;" id="e_result"></span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Telegram CID get it at <a href="https://t.me/collisioncrash_bot" target="_blank">t.me/collisioncrash_bot</a></label>
                                                <div class="col-md-12">
                                                    <input type="text" name="cidacc" placeholder="CID" class="form-control form-control-line"><span style="position: absolute;" id="c_result"></span>
                                                </div>
                                            </div>
                                        </form>
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <button class="btn btn-success" id="btnacc">Update Profile</button>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                                <!--second tab-->
                                <div class="tab-pane" id="home" role="tabpanel">
                                    <div class="card-body">
                                        <div class="profiletimeline" id="useacc">
                                            
                                        </div>
                                        <p class="m-t-30">*Jika terdapat informasi yang belum diisi (not set) silahkan untuk dilengkapi.</p>
                                    </div>
                                </div>
                                <div class="tab-pane" id="profile" role="tabpanel">
                                    <div class="card-body" id="devacc">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
                <!-- Row -->
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->