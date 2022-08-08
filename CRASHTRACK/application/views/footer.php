            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer">
                © 2020 Crash Detection and Tracking System by Azizan Syarofi
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <!-- DASHBOARD -->
    <!-- <script data-cfasync="false" src="https://www.wrappixel.com/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script> -->
    <script src="<?php echo base_url()?>assets/node_modules/jquery/jquery.min.js"></script>
    <!-- Bootstrap popper Core JavaScript -->
    <script src="<?php echo base_url()?>assets/node_modules/bootstrap/js/popper.min.js"></script>
    <script src="<?php echo base_url()?>assets/node_modules/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="<?php echo base_url()?>assets/node_modules/ps/perfect-scrollbar.jquery.min.js"></script>
    <!--Wave Effects -->
    <script src="<?php echo base_url()?>assets/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="<?php echo base_url()?>assets/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="<?php echo base_url()?>assets/js/custom.min.js"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <!--morris JavaScript -->
    <!-- <script src="<?php echo base_url()?>assets/node_modules/raphael/raphael.min.js"></script> -->
    <!-- <script src="<?php echo base_url()?>assets/node_modules/morrisjs/morris.min.js"></script> -->
    <!--c3 JavaScript -->
    <script src="<?php echo base_url()?>assets/node_modules/d3/d3.min.js"></script>
    <script src="<?php echo base_url()?>assets/node_modules/c3-master/c3.min.js"></script>
    <!-- Popup message jquery -->
    <script src="<?php echo base_url()?>assets/node_modules/toast-master/js/jquery.toast.js"></script>
    <!-- Chart JS -->
    <script src="<?php echo base_url()?>assets/js/dashboard1.js"></script>
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="<?php echo base_url()?>assets/node_modules/styleswitcher/jQuery.style.switcher.js"></script>
    <!-- TABLE -->
    <!--stickey kit -->
    <script src="<?php echo base_url()?>assets/node_modules/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <script src="<?php echo base_url()?>assets/node_modules/sparkline/jquery.sparkline.min.js"></script>
    <!-- This is data table -->
    <!-- <script src="<?php echo base_url()?>assets/node_modules/datatables.net/js/jquery.dataTables.min.js"></script> -->
    <script src="<?php echo base_url()?>assets/node_modules/jquery-datatables-editable/jquery.dataTables.js"></script>
    <script src="<?php echo base_url()?>assets/node_modules/datatables.net-bs4/js/dataTables.responsive.min.js"></script>
    <!-- Sweet-Alert  -->
    <script src="<?php echo base_url()?>assets/node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>
    <script src="<?php echo base_url()?>assets/node_modules/sweetalert2/sweet-alert.init.js"></script>
    <!-- Moment 2.1.0 -->
    <script src="<?php echo base_url()?>assets/js/moment.min.js"></script>
    <!-- Mqtt -->
    <script src="<?php base_url(); ?>assets/js/mqttws31.js" type="text/javascript"></script>
    <script type="text/javascript">var passedArray = <?php echo json_encode($device); ?>;</script>
    <script src="<?php base_url(); ?>assets/js/mqttweb.js" type="text/javascript"></script>
    <script type="text/javascript">
        (function(){
            var srch_c = document.getElementById('srch_c');
            srch_c.addEventListener('keypress', function(event) {
                if (event.keyCode == 13) {
                    event.preventDefault();
                    url = encodeURIComponent(srch_c.value);
                    $('#set_coor').empty();
                    $('#set_coor').append('<iframe width="100%" height="100%" id="gmap_canvas" src="https://maps.google.com/maps?q='+url+'&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>');
                }
            });
        }());
        // MQTT
        $(document).ready(function(){
            client.connect(options);
        });
    </script>
    <script>
        $(function () {
            showCrash();
            tableList();
            // <<< Crash Data tables >>>
            function tableList(){
                $('#myTable').DataTable({
                    "columnDefs": [
                        { "orderable": false, "targets": -1}
                    ]
                });
            }
            // <<< Crash List >>>
            function showCrash(){
                $.ajax({
                    type: 'POST',
                    url: baseURL+'Main/crash',
                    async: false,
                    dataType: 'json',
                    success: function(data){
                        var html = '';
                        var i;
                        var j;
                        for(i=0; i<data['list'].length; i++){
                            j=i+1;
                            html += '<tr id="'+j+'" class="gradeX">'+
                                        '<td>'+j+'</td>'+
                                        '<td>'+data['list'][i].Pengendara+'</td>'+
                                        '<td>'+data['list'][i].Id_Alat+'</td>'+
                                        '<td>'+data['list'][i].Koordinat+'</td>'+
                                        '<td>'+data['list'][i].Waktu+'</td>'+
                                        '<td class="text-center"><a href="javascript:void(0)" data-toggle="tooltip" data-original-title="Delete" class="x-del" data="'+data['list'][i].Id_Lacak+'"> <i class="fas fa-times text-danger"></i> </a></td>'+
                                    '</tr>';
                        }
                        $('#crashlist').html(html);
                        $('[data-toggle="tooltip"]').tooltip({ trigger: "hover" });
                    },
                    error: function(){
                        alert('Could not View Data Crash');
                    }
                });
            }
            $('#crashlist').on('click', '.x-del', function(){
                // var versionNo = $.fn.dataTable.version;
                // alert(versionNo);
                var id = $(this).attr('data');
                $('[data-toggle="tooltip"]').tooltip('hide');
                Swal.fire({
                    title: 'Data is being deleted!',
                    html: 'data will be deleted',
                    timer: 2000,
                    onBeforeOpen: () => {
                        Swal.showLoading()
                    }
                })
                $.ajax({
                    type: 'POST',
                    url: baseURL+'Main/DeleteCrash',
                    data: {id:id},
                    dataType: 'json',
                    success: function(response){
                        $('#myTable').DataTable().destroy();
                        showCrash();
                        tableList();
                    },
                    error: function(){
                        alert('Could not Delete data Crash');
                    }
                });
            });
            
            $(document).ready(function () {
                var table = $('#example').DataTable({
                    "columnDefs": [{
                        "visible": false,
                        "targets": 2
                    }],
                    "order": [
                        [2, 'asc']
                    ],
                    "displayLength": 25,
                    "drawCallback": function (settings) {
                        var api = this.api();
                        var rows = api.rows({
                            page: 'current'
                        }).nodes();
                        var last = null;
                        api.column(2, {
                            page: 'current'
                        }).data().each(function (group, i) {
                            if (last !== group) {
                                $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
                                last = group;
                            }
                        });
                    }
                });
                // Order by the grouping
                $('#example tbody').on('click', 'tr.group', function () {
                    var currentOrder = table.order()[0];
                    if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                        table.order([2, 'desc']).draw();
                    } else {
                        table.order([2, 'asc']).draw();
                    }
                });
            });
        });
        $('#example23').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
        $('.buttons-copy, .buttons-csv, .buttons-print, .buttons-pdf, .buttons-excel').addClass('btn btn-primary mr-1');
        $('#config-table').DataTable({
            responsive: true
        });
    </script>
    <!-- MAP -->
    <!-- google maps api deleted-->
    <!-- USER -->
    <!-- Footable -->
    <!-- <script src="<?php echo base_url()?>assets/node_modules/moment/moment.js" type="text/javascript"></script> -->
    <!-- <script src="<?php echo base_url()?>assets/node_modules/footable/js/footable.min.js"></script> -->
    <!--FooTable init-->
    <!-- <script src="<?php echo base_url()?>assets/js/footable-init.js"></script> -->
    <!-- DEVICE -->
    <!-- Editable -->
    <!-- <script src="<?php echo base_url()?>assets/node_modules/jquery-datatables-editable/jquery.dataTables.js"></script> -->
    <!-- <script src="<?php echo base_url()?>assets/node_modules/datatables/dataTables.bootstrap.html"></script> -->
    <!-- <script src="<?php echo base_url()?>assets/node_modules/tiny-editable/mindmup-editabletable.js"></script> -->
    <!-- <script src="<?php echo base_url()?>assets/node_modules/tiny-editable/numeric-input-example.js"></script> -->
    <!-- <script>
        $('#mainTable').editableTableWidget().numericInputExample().find('td:first').focus();
        $('#editable-datatable').editableTableWidget().numericInputExample().find('td:first').focus();
        $(function() {
            $('#editable-datatable').DataTable();
        });
    </script> -->
    <!-- CONNECTION -->
    <script src="<?php echo base_url()?>assets/js/jquery.PrintArea.js" type="text/JavaScript"></script>
    <script>
        $(function() {
            $("#print").on('click', function() {
                var mode = 'iframe'; //popup
                var close = mode == "popup";
                var options = {
                    mode: mode,
                    popClose: close
                };
                $("div.printableArea").printArea(options);
            });
        });
    </script>
    <script type='text/javascript'>var baseURL= "<?php echo base_url();?>";</script>
    <script src="<?php echo base_url()?>assets/js/jquery-content.js"></script>
    <script>
        $(function() {
            // document.querySelector('[alt="www.000webhost.com"]').parentNode.parentNode.remove();
            document.querySelector('[class="disclaimer"]').remove();
        });
    </script>
</body>

</html>