$(function() {
    // document.getElementById("dash").style.display = "none";
    document.getElementById("tabl").style.display = "none";
    document.getElementById("maps").style.display = "none";
    document.getElementById("prof").style.display = "none";
    document.getElementById("devi").style.display = "none";
    document.getElementById("user").style.display = "none";
    document.getElementById("conn").style.display = "none";
});
$(function(){
    // navigasi-sidebar
    $("#dash_click").on('click', function(){
        document.documentElement.scrollTop = 0;
        document.getElementById("dash").style.display = "";
        document.getElementById("tabl").style.display = "none";
        document.getElementById("maps").style.display = "none";
        document.getElementById("prof").style.display = "none";
        document.getElementById("devi").style.display = "none";
        document.getElementById("user").style.display = "none";
        document.getElementById("conn").style.display = "none";
        document.getElementById("prof_click").classList.remove("active");
        document.getElementById("prof_click").children[0].classList.remove("active");
        document.getElementById("user_click").classList.remove("active");
        document.getElementById("user_click").children[0].classList.remove("active");
        document.getElementById("devi_click").classList.remove("active");
        document.getElementById("devi_click").children[0].classList.remove("active");
    });
    $("#tabl_click").on('click', function(){
        document.documentElement.scrollTop = 0;
        document.getElementById("dash").style.display = "none";
        document.getElementById("tabl").style.display = "";
        document.getElementById("maps").style.display = "none";
        document.getElementById("prof").style.display = "none";
        document.getElementById("devi").style.display = "none";
        document.getElementById("user").style.display = "none";
        document.getElementById("conn").style.display = "none";
        document.getElementById("prof_click").classList.remove("active");
        document.getElementById("prof_click").children[0].classList.remove("active");
        document.getElementById("user_click").classList.remove("active");
        document.getElementById("user_click").children[0].classList.remove("active");
        document.getElementById("devi_click").classList.remove("active");
        document.getElementById("devi_click").children[0].classList.remove("active");
    });
    $("#maps_click").on('click', function(){
        document.documentElement.scrollTop = 0;
        document.getElementById("dash").style.display = "none";
        document.getElementById("tabl").style.display = "none";
        document.getElementById("maps").style.display = "";
        document.getElementById("prof").style.display = "none";
        document.getElementById("devi").style.display = "none";
        document.getElementById("user").style.display = "none";
        document.getElementById("conn").style.display = "none";
        document.getElementById("prof_click").classList.remove("active");
        document.getElementById("prof_click").children[0].classList.remove("active");
        document.getElementById("user_click").classList.remove("active");
        document.getElementById("user_click").children[0].classList.remove("active");
        document.getElementById("devi_click").classList.remove("active");
        document.getElementById("devi_click").children[0].classList.remove("active");
    });
    $("#prof_click").on('click', function(){
        $('#n_result').html('');
        $('#u_result').html('');
        $('#p_result').html('');
        $('#e_result').html('');
        $('#c_result').html('');
        showAccount();
        document.documentElement.scrollTop = 0;
        document.getElementById("prof_click").classList.add("active");
        document.getElementById("prof_click").children[0].classList.add("active");
        document.getElementById("user_click").classList.remove("active");
        document.getElementById("user_click").children[0].classList.remove("active");
        document.getElementById("devi_click").classList.remove("active");
        document.getElementById("devi_click").children[0].classList.remove("active");
        document.getElementById("dash").style.display = "none";
        document.getElementById("tabl").style.display = "none";
        document.getElementById("maps").style.display = "none";
        document.getElementById("prof").style.display = "";
        document.getElementById("devi").style.display = "none";
        document.getElementById("user").style.display = "none";
        document.getElementById("conn").style.display = "none";
    });
    $("#devi_click").on('click', function(){
        // useranddevice();
        document.documentElement.scrollTop = 0;
        document.getElementById("prof_click").classList.remove("active");
        document.getElementById("prof_click").children[0].classList.remove("active");
        document.getElementById("user_click").classList.remove("active");
        document.getElementById("user_click").children[0].classList.remove("active");
        document.getElementById("devi_click").classList.add("active");
        document.getElementById("devi_click").children[0].classList.add("active");
        document.getElementById("dash").style.display = "none";
        document.getElementById("tabl").style.display = "none";
        document.getElementById("maps").style.display = "none";
        document.getElementById("prof").style.display = "none";
        document.getElementById("devi").style.display = "";
        document.getElementById("user").style.display = "none";
        document.getElementById("conn").style.display = "none";
    });
    $("#user_click").on('click', function(){
        // useranddevice();
        document.documentElement.scrollTop = 0;
        document.getElementById("prof_click").classList.remove("active");
        document.getElementById("prof_click").children[0].classList.remove("active");
        document.getElementById("user_click").classList.add("active");
        document.getElementById("user_click").children[0].classList.add("active");
        document.getElementById("devi_click").classList.remove("active");
        document.getElementById("devi_click").children[0].classList.remove("active");
        document.getElementById("dash").style.display = "none";
        document.getElementById("tabl").style.display = "none";
        document.getElementById("maps").style.display = "none";
        document.getElementById("prof").style.display = "none";
        document.getElementById("devi").style.display = "none";
        document.getElementById("user").style.display = "";
        document.getElementById("conn").style.display = "none";
    });
    $("#conn_click").on('click', function(){
        document.documentElement.scrollTop = 0;
        document.getElementById("dash").style.display = "none";
        document.getElementById("tabl").style.display = "none";
        document.getElementById("maps").style.display = "none";
        document.getElementById("prof").style.display = "none";
        document.getElementById("devi").style.display = "none";
        document.getElementById("user").style.display = "none";
        document.getElementById("conn").style.display = "";
        document.getElementById("prof_click").classList.remove("active");
        document.getElementById("prof_click").children[0].classList.remove("active");
        document.getElementById("user_click").classList.remove("active");
        document.getElementById("user_click").children[0].classList.remove("active");
        document.getElementById("devi_click").classList.remove("active");
        document.getElementById("devi_click").children[0].classList.remove("active");
    });
    
    // <<< Maps Track >>>
    showTrack();
    function showTrack(){
        $.ajax({
            type: 'POST',
            url: baseURL+'Main/profile',
            dataType: 'json',
            success: function(data){
                var html = '';
                var i;
                var j;
                for(i=0; i<data['device'].length; i++){
                    j=i+1;
                    html += '<div class="col-lg-2 col-md-4">'+
                                '<button type="button" class="btn waves-effect waves-light btn-block btn-danger item-track-device" data="'+data['device'][i].id_Alat+'">ID Alat '+data['device'][i].id_Alat+
                                '</button>'+
                            '</div>';
                }
                $('#divTrack').html(html);
            },
            error: function(){
                alert('Could not View Data');
            }
        });
    }
    
    // <<< profile-account >>>
    showAccount();
    //check-account-form
    $('input[name=nmacc]').on('input', function(evt){
        var name = $('input[name=nmacc]').val();  
        if(name != ''){
            $('#n_result').html('<label class="text-success"><i class="fa fa-check" data-toggle="tooltip" title="Make Sure Name is Correct"></i></label>');
            $('[data-toggle="tooltip"]').tooltip();
        }
        else{
            $('#n_result').html('');
        }
    });
    $('input[name=useacc]').on('input', function(evt){
        var username = $('input[name=useacc]').val();
        if(username != ''){
            $.ajax({
                url:baseURL+'Register/check_username_availability_me',
                method:'POST',
                data:{username:username},
                success:function(data){
                    $('#u_result').html(data);
                    $('[data-toggle="tooltip"]').tooltip();
                }
            });
        }
        else{
            $('#u_result').html('');
        }
    });
    $('input[name=pasacc]').on('input', function(evt){
        var name = $('input[name=pasacc]').val();  
        if(name != ''){
            $('#p_result').html('<label class="text-success"><i class="fa fa-check" data-toggle="tooltip" title="Make Sure Name is Correct"></i></label>');
            $('[data-toggle="tooltip"]').tooltip();
        }
        else{
            $('#p_result').html('');
        }
    });
    $('input[name=emacc]').on('input', function(evt){  
        var email = $('input[name=emacc]').val();  
        if(email != ''){
            $.ajax({
                url:baseURL+'Register/check_email_availability_me',  
                method:'POST',
                data:{email:email},  
                success:function(data){  
                    $('#e_result').html(data);
                    $('[data-toggle="tooltip"]').tooltip();
                }
            });
        }
        else{
            $('#e_result').html('');
        }
    });
    $('input[name=cidacc]').on('input', function(evt){
        var name = $('input[name=cidacc]').val();  
        if(name != ''){
            $('#c_result').html('<label class="text-success"><i class="fa fa-check" data-toggle="tooltip" title="Make Sure Name is Correct"></i></label>');
            $('[data-toggle="tooltip"]').tooltip();
        }
        else{
            $('#c_result').html('');
        }
    });
    //edit-account
    $('#btnacc').click(function(){
        var cek='';
        if ($('input[name=idacc]').val()=='') {
            alert('no id');
        }else{cek += '1';}
        if ($('input[name=nmacc]').val()=='') {
            $('#n_result').html('<label class="text-danger"><i class="fa fa-times" data-toggle="tooltip" title="Please Fill All Fields"></i></label>');
            $('[data-toggle="tooltip"]').tooltip();
        }else{cek += '2';}
        if ($('input[name=useacc]').val()=='') {
            $('#u_result').html('<label class="text-danger"><i class="fa fa-times" data-toggle="tooltip" title="Please Fill All Fields"></i></label>');
            $('[data-toggle="tooltip"]').tooltip();
        }else{cek += '3';}
        if ($('input[name=pasacc]').val()=='') {
            $('#p_result').html('<label class="text-danger"><i class="fa fa-times" data-toggle="tooltip" title="Please Fill All Fields"></i></label>');
            $('[data-toggle="tooltip"]').tooltip();
        }else{cek += '4';}
        if ($('input[name=emacc]').val()=='') {
            $('#e_result').html('<label class="text-danger"><i class="fa fa-times" data-toggle="tooltip" title="Please Fill All Fields"></i></label>');
            $('[data-toggle="tooltip"]').tooltip();
        }else{cek += '5';}
        if ($('input[name=cidacc]').val()=='') {
            $('#c_result').html('<label class="text-danger"><i class="fa fa-times" data-toggle="tooltip" title="Please Fill All Fields"></i></label>');
            $('[data-toggle="tooltip"]').tooltip();
        }else{cek += '6';}
        if (cek=='123456') {
            var data = $('#formacc').serialize();
            $.ajax({
                type: 'POST',
                url: baseURL+'Main/UpdateProfile',
                data: data,
                dataType: 'json',
                success: function(response){
                    if (response=="Berhasil") {
                        showAccount();
                        Swal.fire({
                            position: 'top-end',
                            type: 'success',
                            title: 'Succeed, Data Updated',
                            showConfirmButton: false,
                            timer: 2000
                        });
                        $('#n_result').html('');
                        $('#u_result').html('');
                        $('#p_result').html('');
                        $('#e_result').html('');
                        $('#c_result').html('');
                    }else{
                        Swal.fire({
                            position: 'top-end',
                            type: 'error',
                            title: 'Failed, Check Fields',
                            showConfirmButton: false,
                            timer: 2000
                        });
                    }
                },
                error: function(){
                    alert('Could not Update data');
                }
            });
        }
    });

    function showAccount(){
        $.ajax({
            type: 'POST',
            url: baseURL+'Main/profile',
            dataType: 'json',
            success: function(data){
                // alert(data['account'][0].id_Pengguna);
                // alert(data['device'][0].id_Alat);
                // $('input[name=nmacc]').val("ayok");
                $('input[name=idacc]').val(data['account'][0].id_Pengguna);
                $('input[name=nmacc]').val(data['account'][0].nm_Pengguna);
                $('input[name=useacc]').val(data['account'][0].username);
                $('input[name=pasacc]').val(data['account'][0].password);
                $('input[name=emacc]').val(data['account'][0].email);
                $('input[name=cidacc]').val(data['account'][0].cid);
                var html = '';
                var html2 = '';
                var i;
                var j;
                for(i=0; i<data['userall'].length; i++){
                    j=i+1;
                    html += '<div class="sl-item">'+
                                '<div class="sl-left"> <img src="'+baseURL+'assets/images/users/'+j+'.jpg" alt="user" class="img-circle" /> </div>'+
                                '<div class="sl-right">'+
                                    '<div id="useacc"><a href="javascript:void(0)" class="link">'+data['userall'][i].nm_Pengguna+'</a> <span class="sl-date">5 minutes ago</span>'+
                                        '<p>assign a new task Design weblayout</p>'+
                                    '</div>'+
                                '</div>'+
                            '</div>'+
                            '<hr>';
                }
                $('#useacc').html(html);
                for(i=0; i<data['device'].length; i++){
                    html2 +='<div class="row">'+
                                '<div class="col-md-2 col-xs-6 b-r"> <strong>ID Alat</strong>'+
                                    '<br>'+
                                    '<p class="text-muted">'+data['device'][i].id_Alat+'</p>'+
                                '</div>'+
                                '<div class="col-md-2 col-xs-6 b-r"> <strong>NO Plat</strong>'+
                                    '<br>'+
                                    '<p class="text-muted">'+data['device'][i].no_Plat+'</p>'+
                                '</div>'+
                                '<div class="col-md-3 col-xs-6 b-r"> <strong>Pengendara</strong>'+
                                    '<br>'+
                                    '<p class="text-muted">'+data['device'][i].nm_Pengendara+'</p>'+
                                '</div>'+
                                '<div class="col-md-2 col-xs-6 b-r"> <strong>Merk</strong>'+
                                    '<br>'+
                                    '<p class="text-muted">'+data['device'][i].merk+'</p>'+
                                '</div>'+
                                '<div class="col-md-3 col-xs-6"> <strong>Tipe</strong>'+
                                    '<br>'+
                                    '<p class="text-muted">'+data['device'][i].tipe+'</p>'+
                                '</div>'+
                            '</div>'+
                            '<hr>';
                }
                html2 += '<p class="m-t-30">Jika terdapat informasi yang belum diisi (not set) silahkan untuk dilengkapi.</p>'
                $('#devacc').html(html2);
                // document.getElementById("useacc").innerHTML=html;
                // document.getElementById("useacc").innerHTML=data['device'][0].id_Alat;
            },
            error: function(){
                alert('Could not View Data');
            }
        });
    }

    // <<< profile-user >>>
    useranddevice();
    // get-parent-user
    function useranddevice(){
        var parentd=null;
        $.ajax({
            type: 'POST',
            url: baseURL+'Main/ParentUser',
            async: false,
            dataType: 'json',
            success: function(response){
                // console.log(response['parent'][0].parent);
                parentd=response['parent'][0].parent;
            },
            error: function(){
                alert('Could not Get data');
            }
        });
        if (parentd=='yes') {
            // alert("parent");
            showUsers();
            showDevice();
            $('#u-id').empty();
            $.ajax({
                type: 'POST',
                url: baseURL+'Main/profile',
                dataType: 'json',
                success: function(data){
                    for (var i=0; i<data['idalatku'].length; i++) {                    
                        // $('#u-id').html('<input type="text" class="form-control" name="u-id[]" value="'+data['idalatku'][i].id_Alat+'" hidden>');
                        // $('#u-id').after('<div id="idalatku"><input type="text" class="form-control" name="u-id[]" value="'+data['idalatku'][i].id_Alat+'" hidden></div>');
                        $('#u-id').append('<div class="checkbox checkbox-success p-t-0">'+
                            '<input id="checkbox-signup'+i+'" type="checkbox" name="idalatnya[]" value="'+data['idalatku'][i].id_Alat+'" class="filled-in chk-col-light-blue">'+
                            '<label for="checkbox-signup'+i+'"> ID Device <strong>'+data['idalatku'][i].id_Alat+'</strong> </label>'+
                        '</div>');
                    }
                },
                error: function(){
                    alert('Could not Apppend form Data idalatku');
                }
            });
        }
        if (parentd=='no') {
            // alert("not parent");
            $("#btnadd").remove();
            $("#thpassword").remove();
            $("#thdelete").remove();
            $("#devadd").remove();
            showOtherUsers();
            showDevice();
        }        
    }

    //show-user-for-parent-yes
    function showUsers(){
        $.ajax({
            type: 'POST',
            url: baseURL+'Main/profile',
            dataType: 'json',
            success: function(data){
                var html = '';
                var i;
                var j;
                for(i=0; i<data['user'].length; i++){
                    var idalt = '';
                    var id = data['user'][i].id_Pengguna;
                    $.ajax({
                        type: 'POST',
                        url: baseURL+'main/profile',
                        data: {id: id},
                        async: false,
                        dataType: 'json',
                        success: function(data){
                            for (var i = 0; i < data['idalt'].length; i++) {
                                idalt += '<span class="label label-inverse">'+data['idalt'][i].id_Alat+'</span>';
                            }
                        }
                    });
                    j=i+1;
                    html += '<tr>'+
                                '<td>'+j+'</td>'+
                                '<td><a href="javascript:void(0)"><img src="'+baseURL+'assets/images/users/'+j+'.jpg" alt="user" width="40" class="img-circle" /> '+data['user'][i].nm_Pengguna+'</a></td>'+
                                '<td><a href="javascript:void(0)">'+data['user'][i].email+'</a></td>'+
                                '<td>'+data['user'][i].username+'</td>'+
                                '<td>'+data['user'][i].password+'</td>'+
                                '<td class="text-center">'+idalt;
                                // for(i=0; i<data['idalat'].length; i++){
                                //     html += '<span class="label label-inverse">'+data['idalat'][i].id_Alat+'</span>';
                                // }
                        html += '</td>'+
                                '<td class="text-center"><button class="btn btn-danger item-delete" data="'+data['user'][i].id_Pengguna+'"><i class="ti-trash"></i></button></td>'+
                            '</tr>';
                }
                $('#useuse').html(html);
            },
            error: function(){
                alert('Could not View Data');
            }
        });
    }

    // show-user-for-parent-no
    function showOtherUsers(){
        $.ajax({
            type: 'POST',
            url: baseURL+'Main/profile',
            dataType: 'json',
            success: function(data){
                var html = '';
                var i;
                var j;
                for(i=0; i<data['user'].length; i++){
                    var idalt = '';
                    var id = data['user'][i].id_Pengguna;
                    $.ajax({
                        type: 'POST',
                        url: baseURL+'main/profile',
                        data: {id: id},
                        async: false,
                        dataType: 'json',
                        success: function(data){
                            for (var i = 0; i < data['idalt'].length; i++) {
                                idalt += '<span class="label label-inverse">'+data['idalt'][i].id_Alat+'</span>';
                            }
                        }
                    });
                    j=i+1;
                    html += '<tr>'+
                                '<td>'+j+'</td>'+
                                '<td><a href="javascript:void(0)"><img src="'+baseURL+'assets/images/users/'+j+'.jpg" alt="user" width="40" class="img-circle" /> '+data['user'][i].nm_Pengguna+'</a></td>'+
                                '<td><a href="javascript:void(0)">'+data['user'][i].email+'</a></td>'+
                                '<td>'+data['user'][i].username+'</td>'+
                                '<td>'+idalt;
                                // for(i=0; i<data['idalat'].length; i++){
                                //     html += '<span class="label label-inverse">'+data['idalat'][i].id_Alat+'</span>';
                                // }
                        html += '</td>'+
                            '</tr>';
                }
                $('#useuse').html(html);
            },
            error: function(){
                alert('Could not View Data');
            }
        });
    }

    //add-user
    // $('#btnadd').click(function(){
    //     $.ajax({
    //         type: 'POST',
    //         url: baseURL+'Main/profile',
    //         dataType: 'json',
    //         success: function(data){
    //             for (var i=0; i<data['idalatku'].length; i++) {                    
    //                 // $('#u-id').html('<input type="text" class="form-control" name="u-id[]" value="'+data['idalatku'][i].id_Alat+'" hidden>');
    //                 // $('#u-id').after('<div id="idalatku"><input type="text" class="form-control" name="u-id[]" value="'+data['idalatku'][i].id_Alat+'" hidden></div>');
    //                 $('#u-id').append('<div class="checkbox checkbox-success p-t-0">'+
    //                     '<input id="checkbox-signup" type="checkbox" data="'+data['idalatku'][i].id_Alat+'" class="filled-in chk-col-light-blue item-add">'+
    //                     '<label for="checkbox-signup">'+data['idalatku'][i].id_Alat+'</label>'+
    //                     '<span id="terms_result"></span>'+
    //                 '</div>');
    //             }
    //         },
    //         error: function(){
    //             alert('Could not View Data');
    //         }
    //     });
    // });

    // $('#checkbox-signup').change(function(){  
    //     if($('#checkbox-signup').prop("checked")){
    //         $('#terms_result').html('<label class="text-success"><i class="fa fa-check" data-toggle="tooltip" title="Terms Accepted"></i></label>');
    //         $('[data-toggle="tooltip"]').tooltip();
    //     }
    //     else{
    //         $('#terms_result').html('');
    //     }
    // });

    // $('#u-id').on('click', '.item-add', function(){
    //     var idalatku = $(this).attr('data');
    //     if($(this).prop("checked")){
    //         $('#u-id').before('<div id="idalatku"><input type="text" class="form-control" name="u-idalatku[]" value="'+idalatku+'" hidden></div>');
    //     }
    //     else{
            
    //     }
    // });

    // $('#add-user').on('hidden.bs.modal', function (e) {
    //     $("#idalatku").remove();
    // })

    //delete-user
    $('#useuse').on('click', '.item-delete', function(){
        var id = $(this).attr('data');
        Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#DD6B55',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.value) {
                    $.ajax({
                        type: 'POST',
                        url: baseURL+'Main/DeleteUser',
                        data: {id:id},
                        dataType: 'json',
                        success: function(response){
                            Swal.fire({
                                position: 'top-end',
                                type: 'success',
                                title: 'Your work has been saved',
                                showConfirmButton: false,
                                timer: 1500
                            })
                            showUsers();
                        },
                        error: function(){
                            alert('Could not Update data');
                        }
                    });
                }
            })
    });

    //edit-user
    $('#useuse').on('click', '.item-edit', function(){
        var id = $(this).attr('data');
        Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#DD6B55',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.value) {
                    $.ajax({
                        type: 'POST',
                        url: baseURL+'Main/DeleteUser',
                        data: {id:id},
                        dataType: 'json',
                        success: function(response){
                            Swal.fire({
                                position: 'top-end',
                                type: 'success',
                                title: 'Your work has been saved',
                                showConfirmButton: false,
                                timer: 1500
                            })
                            showUsers();
                        },
                        error: function(){
                            alert('Could not Update data');
                        }
                    });
                }
            })
    });

    // form-check-for-add-new-user
    $('#recipient-name').on('input', function(evt){
        var name = $('#recipient-name').val();  
        if(name != ''){
            $('#name_result').html('<label class="text-success"><i class="fa fa-check" data-toggle="tooltip" title="Make Sure Name is Correct"></i></label>');
            $('[data-toggle="tooltip"]').tooltip();
        }
        else{
            $('#name_result').html('');
        }
    });
    $('#recipient-username').on('input', function(evt){
        var username = $('#recipient-username').val();
        if(username != ''){
            $.ajax({
                url:baseURL+'Register/check_username_availability',
                method:'POST',
                data:{username:username},
                success:function(data){
                    $('#username_result').html(data);
                    $('[data-toggle="tooltip"]').tooltip();
                }
            });
        }
        else{
            $('#username_result').html('');
        }
    });
    $('#recipient-password').on('input', function(evt){
        var password = $('#recipient-password').val();  
        if(password != ''){
            $('#password_result').html('<label class="text-success"><i class="fa fa-check" data-toggle="tooltip" title="Make Sure Password is Strong"></i></label>');
            $('[data-toggle="tooltip"]').tooltip();
        }
        else{
            $('#password_result').html('');
        }
    });
    $('#recipient-email').on('input', function(evt){  
        var email = $('#recipient-email').val();  
        if(email != ''){
            $.ajax({
                url:baseURL+'Register/check_email_availability',  
                method:'POST',
                data:{email:email},  
                success:function(data){  
                    $('#email_result').html(data);
                    $('[data-toggle="tooltip"]').tooltip();
                }
            });
        }
        else{
            $('#email_result').html('');
        }
    });

    // button-form-modal-add-new-user
    $('#btnsave').click(function(){
        var cek='';
        if ($('input[name=u-name]').val()=='') {
            $('#name_result').html('<label class="text-danger"><i class="fa fa-times" data-toggle="tooltip" title="Please Fill All Fields"></i></label>');
            $('[data-toggle="tooltip"]').tooltip();
        }else{cek += '1';}
        if ($('input[name=u-username]').val()=='') {
            $('#username_result').html('<label class="text-danger"><i class="fa fa-times" data-toggle="tooltip" title="Please Fill All Fields"></i></label>');
            $('[data-toggle="tooltip"]').tooltip();
        }else{cek += '2';}
        if ($('input[name=u-password]').val()=='') {
            $('#password_result').html('<label class="text-danger"><i class="fa fa-times" data-toggle="tooltip" title="Please Fill All Fields"></i></label>');
            $('[data-toggle="tooltip"]').tooltip();
        }else{cek += '3';}
        if ($('input[name=u-email]').val()=='') {
            $('#email_result').html('<label class="text-danger"><i class="fa fa-times" data-toggle="tooltip" title="Please Fill All Fields"></i></label>');
            $('[data-toggle="tooltip"]').tooltip();
        }else{cek += '4';}
        // if ($('#checkbox-signup').prop('checked') == false) {
        //     $('#terms_result').html('<label class="text-danger"><i class="fa fa-times" data-toggle="tooltip" title="Please Select Min One"></i></label>');
        //     $('[data-toggle="tooltip"]').tooltip();
        // }else{cek += '5';}
        if($("input[name='idalatnya[]']").serializeArray().length === 0) {
            $('#result_result').html('<label class="text-danger" data-toggle="tooltip" title="Please select checkbox atleast one checked"><strong>No Device ID Selected</strong></label>');
            $('[data-toggle="tooltip"]').tooltip();
        }else{$('#result_result').html(''); cek += '5';}
        if (cek=='12345') {
            if ($('#email_succses').hasClass("text-success") && $('#username_succses').hasClass("text-success")) {
                $('#add-user').modal('hide');
                // $('input[name=u-name]').val('');
                // $('input[name=u-username]').val('');
                // $('input[name=u-password]').val('');
                // $('input[name=u-email]').val('');
                var data = $('#form-add').serialize();
                // alert(data);
                $.ajax({
                    type: 'POST',
                    url: baseURL+'Main/AddUser',
                    data: data,
                    dataType: 'json',
                    success: function(response){
                        // alert(response);
                        if (response=='Berhasil') {
                            Swal.fire({
                                    position: 'top-end',
                                    type: 'success',
                                    title: 'New user has been saved',
                                    showConfirmButton: false,
                                    timer: 2000
                                });
                            showUsers();
                            $('#form-add')[0].reset();
                            $('#name_result').html('');
                            $('#username_result').html('');
                            $('#password_result').html('');
                            $('#email_result').html('');
                            $('#result_result').html('');
                        }else{
                            Swal.fire({
                                    position: 'top-end',
                                    type: 'error',
                                    title: 'New user failed to save',
                                    showConfirmButton: false,
                                    timer: 2000
                                });
                        }
                    },
                    error: function(){
                        alert('Could not Add data');
                    }
                });
            }
            else{
                $('#result_result').html('<label class="text-danger" data-toggle="tooltip" title="Make sure all of form are correct"><strong>Something is not correct</strong></label>');
                $('[data-toggle="tooltip"]').tooltip();
            }
            // $('#name_result').html('<label class="text-danger"><i class="fa fa-times" data-toggle="tooltip" title="Please Fill All Fields"></i></label>');
            // $('[data-toggle="tooltip"]').tooltip();
            // $('#username_result').html('<label class="text-danger"><i class="fa fa-times" data-toggle="tooltip" title="Please Fill All Fields"></i></label>');
            // $('[data-toggle="tooltip"]').tooltip();
            // $('#password_result').html('<label class="text-danger"><i class="fa fa-times" data-toggle="tooltip" title="Please Fill All Fields"></i></label>');
            // $('[data-toggle="tooltip"]').tooltip();
            // $('#email_result').html('<label class="text-danger"><i class="fa fa-times" data-toggle="tooltip" title="Please Fill All Fields"></i></label>');
            // $('[data-toggle="tooltip"]').tooltip();
            // $('#terms_result').html('<label class="text-danger"><i class="fa fa-times" data-toggle="tooltip" title="Please Accept Terms"></i></label>');
            // $('[data-toggle="tooltip"]').tooltip();
        }
    });

    // <<< Profile-Device >>>
    function showDevice(){
        $.ajax({
            type: 'POST',
            url: baseURL+'Main/profile',
            dataType: 'json',
            success: function(data){
                var html = '';
                var i;
                var j;
                for(i=0; i<data['device'].length; i++){
                    j=i+1;
                    html += '<tr>'+
                                '<td>'+j+'</td>'+
                                '<td>'+data['device'][i].nm_Pengendara+'</td>'+
                                '<td>'+data['device'][i].no_Plat+'</td>'+
                                '<td>'+data['device'][i].merk+'</td>'+
                                '<td>'+data['device'][i].tipe+'</td>'+
                                '<td class="text-center"><span class="label label-inverse">'+data['device'][i].id_Alat+'</span></td>'+
                                '<td class="text-center"><button class="btn btn-success item-edit-device" data="'+data['device'][i].id_Alat+'"><i class="ti-pencil"></i></button></td>'+
                            '</tr>';
                }
                $('#usedev').html(html);
            },
            error: function(){
                alert('Could not View Data');
            }
        });
    }

    // device-add
    $('#devadd').click(function(){
        $('#d-id').attr('type', 'text');
        $('#d-id').removeAttr('value');
        $('#did_result').html('');
        $('#nmp_result').html('');
        $('#noplat_result').html('');
        $('#merk_result').html('');
        $('#tipe_result').html('');
        $('#d_result').html('');
        $('#form-device')[0].reset();
        $('#form-device').attr('action', baseURL+'Main/AddDevice');
        $('#modal-device').find('.modal-title').text('Add New Device');
        $('#modal-device').modal('show');
    });

    //device-edit
    $('#usedev').on('click', '.item-edit-device', function(){
        var id = $(this).attr('data');
        $('#d-id').attr('type', 'hidden');
        $('#d_result').html('');
        $('#form-device').attr('action', baseURL+'Main/EditDevice');
        $('#modal-device').find('.modal-title').text('Edit Device');
        $('#modal-device').modal('show');
        $.ajax({
            type: 'POST',
            url: baseURL+'Main/UpdateDevice',
            data: {id: id},
            dataType: 'json',
            success: function(data){
                $('input[name=d-id]').val(data.id_Alat);
                $('input[name=d-noplat]').val(data.no_Plat);
                $('input[name=d-nmp]').val(data.nm_Pengendara);
                $('input[name=d-merk]').val(data.merk);
                $('input[name=d-tipe]').val(data.tipe);
                $('#did_result').html('<label class="text-success" id="device_succses"></label>');
                $('[data-toggle="tooltip"]').tooltip();
                $('#noplat_result').html('<label class="text-success"><i class="fa fa-check" data-toggle="tooltip" title="Correct"></i></label>');
                $('[data-toggle="tooltip"]').tooltip();
                $('#nmp_result').html('<label class="text-success"><i class="fa fa-check" data-toggle="tooltip" title="Correct"></i></label>');
                $('[data-toggle="tooltip"]').tooltip();
                $('#merk_result').html('<label class="text-success"><i class="fa fa-check" data-toggle="tooltip" title="Correct"></i></label>');
                $('[data-toggle="tooltip"]').tooltip();
                $('#tipe_result').html('<label class="text-success"><i class="fa fa-check" data-toggle="tooltip" title="Correct"></i></label>');
                $('[data-toggle="tooltip"]').tooltip();
            },
            error: function(){
                alert('Could not View Data');
            }
        });
    });

    //Button-Add-or-Edit
    $('#devsave').click(function(){
        var url = $('#form-device').attr('action');
        var data = $('#form-device').serialize();
        var cek='';
        if ($('input[name=d-id]').val()=='') {
            $('#did_result').html('<label class="text-danger"><i class="fa fa-times" data-toggle="tooltip" title="Please Fill All Fields"></i></label>');
            $('[data-toggle="tooltip"]').tooltip();
        }else{cek += '1';}
        if ($('input[name=d-noplat]').val()=='') {
            $('#noplat_result').html('<label class="text-danger"><i class="fa fa-times" data-toggle="tooltip" title="Please Fill All Fields"></i></label>');
            $('[data-toggle="tooltip"]').tooltip();
        }else{cek += '2';}
        if ($('input[name=d-nmp]').val()=='') {
            $('#nmp_result').html('<label class="text-danger"><i class="fa fa-times" data-toggle="tooltip" title="Please Fill All Fields"></i></label>');
            $('[data-toggle="tooltip"]').tooltip();
        }else{cek += '3';}
        if ($('input[name=d-merk]').val()=='') {
            $('#merk_result').html('<label class="text-danger"><i class="fa fa-times" data-toggle="tooltip" title="Please Fill All Fields"></i></label>');
            $('[data-toggle="tooltip"]').tooltip();
        }else{cek += '4';}
        if ($('input[name=d-tipe]').val()=='') {
            $('#tipe_result').html('<label class="text-danger"><i class="fa fa-times" data-toggle="tooltip" title="Please Fill All Fields"></i></label>');
            $('[data-toggle="tooltip"]').tooltip();
        }else{cek += '5';}
        if (cek=='12345') {
            if ($('#device_succses').hasClass("text-success")) {
                $.ajax({
                    type: 'POST',
                    url: url,
                    data: data,
                    dataType: 'json',
                    success: function(data){
                        if (data=="Berhasil") {
                            $('#modal-device').modal('hide');
                            Swal.fire({
                                position: 'top-end',
                                type: 'success',
                                title: 'New device has been saved',
                                showConfirmButton: false,
                                timer: 2000
                            });
                            showDevice();
                            $('#did_result').html('');
                            $('#noplat_result').html('');
                            $('#nmp_result').html('');
                            $('#merk_result').html('');
                            $('#tipe_result').html('');        
                        }else{
                            alert("not");
                        }
                    },
                    error: function(){
                        alert('Could not Execute Data');
                    }
                });   
            }else{
                $('#d_result').html('<label class="text-danger" data-toggle="tooltip" title="Make sure all of form are correct"><strong>Something is not correct</strong></label>');
                $('[data-toggle="tooltip"]').tooltip();
            }
        }
    });

    //check
    $('#d-id').on('input', function(evt){
        var device = $('#d-id').val();  
        if(device != ''){
            $.ajax({
                url: baseURL+'Register/check_device_availability',  
                method:'POST',
                data:{device:device},
                success:function(data){
                    $('#did_result').html(data);
                    $('[data-toggle="tooltip"]').tooltip();
                }
            });
        }
        else{
            $('#did_result').html('');
        }
    });
    $('#d-noplat').on('input', function(evt){
        var noplat = $('#d-noplat').val();  
        if(noplat != ''){
            $('#noplat_result').html('<label class="text-success"><i class="fa fa-check" data-toggle="tooltip" title="Correct"></i></label>');
            $('[data-toggle="tooltip"]').tooltip();
        }
        else{
            $('#noplat_result').html('');
        }
    });
    $('#d-nmp').on('input', function(evt){
        var nmp = $('#d-nmp').val();  
        if(nmp != ''){
            $('#nmp_result').html('<label class="text-success"><i class="fa fa-check" data-toggle="tooltip" title="Correct"></i></label>');
            $('[data-toggle="tooltip"]').tooltip();
        }
        else{
            $('#nmp_result').html('');
        }
    });
    $('#d-merk').on('input', function(evt){
        var merk = $('#d-merk').val();  
        if(merk != ''){
            $('#merk_result').html('<label class="text-success"><i class="fa fa-check" data-toggle="tooltip" title="Correct"></i></label>');
            $('[data-toggle="tooltip"]').tooltip();
        }
        else{
            $('#merk_result').html('');
        }
    });
    $('#d-tipe').on('input', function(evt){
        var tipe = $('#d-tipe').val();  
        if(tipe != ''){
            $('#tipe_result').html('<label class="text-success"><i class="fa fa-check" data-toggle="tooltip" title="Correct"></i></label>');
            $('[data-toggle="tooltip"]').tooltip();
        }
        else{
            $('#tipe_result').html('');
        }
    });

});