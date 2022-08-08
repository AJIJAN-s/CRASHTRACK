    function forceAll() {
        document.getElementById("dash").style.display = "";
        document.getElementById("dash_click").classList.remove('active');
        document.getElementById("tabl").style.display = "none";
        document.getElementById("tabl_click").classList.remove('active');
        document.getElementById("maps").style.display = "none";
        document.getElementById("maps_click").classList.remove('active');
        document.getElementById("prodat_click").classList.remove('active');
        document.getElementById("prof").style.display = "none";
        document.getElementById("prof_click").classList.remove('active');
        document.getElementById("prof_click").children[0].classList.remove("active");
        document.getElementById("devi").style.display = "none";
        document.getElementById("devi_click").classList.remove('active');
        document.getElementById("devi_click").children[0].classList.remove("active");
        document.getElementById("user").style.display = "none";
        document.getElementById("user_click").classList.remove('active');
        document.getElementById("user_click").children[0].classList.remove("active");
        document.getElementById("conn").style.display = "none";
        document.getElementById("conn_click").classList.remove('active');
        document.getElementById("scroll_focus").scrollIntoView(false);
    }
    
    function forceAll2() {
        document.getElementById("dash").style.display = "none";
        document.getElementById("dash_click").classList.remove('active');
        document.getElementById("tabl").style.display = "none";
        document.getElementById("tabl_click").classList.remove('active');
        document.getElementById("maps").style.display = "";
        document.getElementById("maps_click").classList.remove('active');
        document.getElementById("prodat_click").classList.remove('active');
        document.getElementById("prof").style.display = "none";
        document.getElementById("prof_click").classList.remove('active');
        document.getElementById("prof_click").children[0].classList.remove("active");
        document.getElementById("devi").style.display = "none";
        document.getElementById("devi_click").classList.remove('active');
        document.getElementById("devi_click").children[0].classList.remove("active");
        document.getElementById("user").style.display = "none";
        document.getElementById("user_click").classList.remove('active');
        document.getElementById("user_click").children[0].classList.remove("active");
        document.getElementById("conn").style.display = "none";
        document.getElementById("conn_click").classList.remove('active');
        document.getElementById("scroll_focus2").scrollIntoView(false);
    }
    
    function refTable() {
        $('#myTable').DataTable().destroy();
        $.ajax({
            type: 'POST',
            url: 'https://crashtrack.tk/Main/crash',
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
        $('#myTable').DataTable({
            "columnDefs": [
                { "orderable": false, "targets": -1}
            ]
        });
    }
    
    function randomString(length) {
        var text = "";
        var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
        for (var i = 0; i < length; i++)
            text += possible.charAt(Math.floor(Math.random() * possible.length));
        return text;
    }
    
    function nmeagps(gprmcdata){
        var gps = gprmcdata;
        var gprmc = gps.split(',');
        var x = 0;
        var a = 0;
        var z = 0;
        while(a != 99) {
        	if (gprmc[x].includes('GPRMC')){
                a = 99;
                z = x;
            }
          x++;
        }
        var deg = gprmc[z+3].substring(0, 2);
        var min = gprmc[z+3].substring(2, 8);
        var deg2 = gprmc[z+5].substring(0, 3);
        var min2 = gprmc[z+5].substring(3, 8);
        var data1 = parseInt(deg)+((min*60)/3600);
        var data2 = parseInt(deg2)+((min2*60)/3600);
        var latitude= gprmc[z+4];
        var longitude= gprmc[z+6];
        var datamaps = '';
        var coordinate = '';
        if (latitude == 'S' && longitude == 'W'){
            datamaps = 'https://maps.google.com/maps?q=-'+data1+',-'+data2;
            coordinate = '-'+data1+',-'+data2;
        }
        else if (latitude == 'S'){
            datamaps = 'https://maps.google.com/maps?q=-'+data1+','+data2;
            coordinate = '-'+data1+','+data2;
        }
        else if (longitude == 'W'){
            datamaps = 'https://maps.google.com/maps?q='+data1+',-'+data2;
            coordinate = data1+',-'+data2;
        }
        else {
            datamaps = 'https://maps.google.com/maps?q='+data1+','+data2;
            coordinate = data1+','+data2;
        }
        return coordinate;
    }
    
    function telnof(){
        const Http = new XMLHttpRequest();
        const url='https://crashtrack.tk/Main/GetData?coor=-8.635690,116.098963&id=1';
        Http.open("GET", url);
        Http.send();
        
        Http.onreadystatechange = (e) => {
          console.log(Http.responseText)
        }
    }

    var koordinat;
    var posisi;
    var req=0;
    var reqid='';
    var n=0;
    var warna = ['danger', 'success', 'info', 'primary'];
    //Using the HiveMQ public Broker, with a random client Id
    var client = new Messaging.Client("mqtt.flespi.io", 443, "crashtrack-" + randomString(10));

     //Gets  called if the websocket/mqtt connection gets disconnected for any reason
     client.onConnectionLost = function (responseObject) {
         //Depending on your scenario you could implement a reconnect logic here
         $('#status_mqtt').empty();
         $('#status_mqtt').append('<i class="icon-Circular-Point"></i><span class="hide-menu">Disconnected</span>');
         $('#sts').html('<button type="button" class="btn btn-danger"><i class="fa fa-times-circle"></i> DISCONNECTED</button>');
         client.connect(options);
     };

     //Gets called whenever you receive a message for your subscriptions
     client.onMessageArrived = function (message) {
         //Do something with the push message you received
         $('#messages').empty();
         $('#messages').append('&nbsp;<b class="text-danger">'+message.destinationName+'</b>');
         if(message.destinationName.includes('GpsTrack/koordinat/')){
            refTable();
            // koordinat = nmeagps(message.payloadString); //Gunakan jika pesan berbentuk nmea (GPRMC)
            koordinat = message.payloadString;
            url = encodeURIComponent(koordinat);
            $('#gps_coor').empty();
            $('#gps_coor').append(koordinat);
            $('#set_coor').empty();
            $('#set_coor').append('<iframe width="100%" height="100%" id="gmap_canvas" src="https://maps.google.com/maps?q='+url+'&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>');
            Swal.fire("Crash Detected!", "Pesan diterima dari alat, koordinat "+koordinat+" terdeteksi pada GPS. Silahkan melihat peta dengan marker merah sebagai posisi saat alat melakukan pengiriman pesan, tekan OK untuk melanjutkan.", "warning").then((result) => { if (result.value) { forceAll(); } });
            $('#not').html('<span class="heartbit"></span> <span class="point"></span>');
            var randW = warna[Math.floor(Math.random()*warna.length)];
            $('#con').prepend('<a href="javascript:void(0)"><div class="btn btn-'+randW+' btn-circle"><i class="fa fa-map-marker-alt"></i></div><div class="mail-contnet"><h5>Crash Detected</h5> <span class="mail-desc">'+koordinat+'</span> <span class="time">'+moment().format("YYYY-MM-DD HH:mm:ss")+'</span> </div></a>');
            n=n+1;
            $('#mdate').html('<b>Message Date :</b> <i class="fa fa-calendar"></i> '+moment().format("YYYY-MM-DD"));
            $('#mtime').html('<b>Message Time :</b> <i class="fa fa-clock-o"></i> '+moment().format("HH:mm:ss"));
            $('#mlog').prepend('<tr><td class="text-center">'+n+'</td><td>'+message.destinationName+'</td><td class="text-right">'+koordinat+'</td><td class="text-right">'+moment().format("YYYY-MM-DD HH:mm:ss")+'</td></tr>');
            telnof();
         }
         if(message.destinationName.includes('GpsTrack/posisi/')){
             if(req==1 && reqid==message.destinationName.substr(message.destinationName.length - 1)){
                //  posisi = nmeagps(message.payloadString); //Gunakan jika pesan berbentuk nmea (GPRMC)
                 posisi = message.payloadString;
                 urlp = encodeURIComponent(posisi);
                 $('#gps_coor').empty();
                 $('#gps_coor').append(posisi);
                 $('#set_coor_2').empty();
                 $('#set_coor_2').append('<iframe width="100%" height="100%" id="gmap_canvas" src="https://maps.google.com/maps?q='+urlp+'&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>');
                 Swal.fire("Location Found!", "Pesan koordinat GPS diterima dari alat. Silahkan melihat peta dengan marker merah sebagai posisi saat alat melakukan pengiriman pesan, tekan OK untuk melanjutkan.", "success").then((result) => { if (result.value) { forceAll2(); } });
                 $('#not2').html('<span class="heartbit"></span> <span class="point"></span>');
                 var randW = warna[Math.floor(Math.random()*warna.length)];
                 $('#con2').prepend('<a href="javascript:void(0)"><div class="btn btn-'+randW+' btn-circle"><i class="fa fa-map-marker-alt"></i></div><div class="mail-contnet"><h5>Position Detected</h5> <span class="mail-desc">'+posisi+'</span> <span class="time">'+moment().format("YYYY-MM-DD HH:mm:ss")+'</span> </div></a>');
                 req=0;
                 n=n+1;
                 $('#mdate').html('<b>Message Date :</b> <i class="fa fa-calendar"></i> '+moment().format("YYYY-MM-DD"));
                 $('#mtime').html('<b>Message Time :</b> <i class="fa fa-clock-o"></i> '+moment().format("HH:mm:ss"));
                 $('#mlog').prepend('<tr><td class="text-center">'+n+'</td><td>'+message.destinationName+'</td><td class="text-right">'+posisi+'</td><td class="text-right">'+moment().format("YYYY-MM-DD HH:mm:ss")+'</td></tr>');
             }
         }
         // else if(message.destinationName == 'AdaptiveClassroom/relay' || message.destinationName == 'AdaptiveClassroom/state/relay'){
         //    if(message.payloadString == '0'){
         //        $('#status_lampu').empty();
         //        $('#state_lamp').empty();
         //        $('#state_lamp').append('OFF');
         //        $('#status_lampu').append('<img src="assets/images/off.png" style="height: 200px">');
         //        getData();
         //    }else if(message.payloadString == '1'){
         //        $('#status_lampu').empty();
         //        $('#state_lamp').empty();
         //        $('#state_lamp').append('ON');
         //        $('#status_lampu').append('<img src="assets/images/on.png" style="height: 200px">');
         //        getData();
         //    }
         // }else if(message.destinationName == 'AdaptiveClassroom/pir' || message.destinationName == 'AdaptiveClassroom/state/pir'){
         //    if(message.payloadString == '0'){
         //        $('#status_gerakan').empty();
         //        $('#state_pir').empty();
         //        $('#state_pir').append('Tidak Ada');
         //        $('#status_gerakan').append('<img src="assets/images/no_motion.png" style="height: 200px">');
         //    }else if(message.payloadString == '1'){
         //        $('#status_gerakan').empty();
         //        $('#state_pir').empty();
         //        $('#state_pir').append('Ada');
         //        $('#status_gerakan').append('<img src="assets/images/motion.png" style="height: 200px">');
         //    }
         // }
     };

     //Connect Options
     var options = {
         timeout: 3,
         useSSL: true,
         userName: "FlespiToken IEsIKAsN7LDYvodFgnduEYmWPcEDwrP2T7ytyR6tqyfJMifStiaX6lJLndcHtSxc",
         //Gets Called if the connection has sucessfully been established
         onSuccess: function () {
            console.log("connected"); 
            // var passedArray = '<?php echo json_encode($device->result_array()); ?>';
            for(var i = 0; i < passedArray.length; i++){ 
                client.subscribe('GpsTrack/koordinat/'+passedArray[i]["id_Alat"], {qos: 2});
                client.subscribe('GpsTrack/posisi/'+passedArray[i]["id_Alat"], {qos: 2});
                // alert(passedArray[i]['id_Alat']);
                // console.log(passedArray[i]['id_Alat']);
            }
            // client.subscribe('GpsTrack/koordinat', {qos: 2});
            // client.subscribe('AdaptiveClassroom/pir', {qos: 2});
            // client.subscribe('AdaptiveClassroom/relay', {qos: 2});
            // client.subscribe('AdaptiveClassroom/state/relay', {qos: 2});
            // client.subscribe('AdaptiveClassroom/state/pir', {qos: 2});
            // publish('R', 'AdaptiveClassroom/wemos', 2);
            publish('1', 'GpsTrack/lacak', 2);
             $('#status_mqtt').empty();
             $('#status_mqtt').append('<i class="icon-Yes text-success"></i><span class="hide-menu">Connected</span>');
             $('#sts').html('<button type="button" class="btn btn-success"><i class="fa fa-check-circle"></i> CONNECTED</button>');
         },
         //Gets Called if the connection could not be established
         onFailure: function (message) {
             console.log("Not Connected")
             $('#status_mqtt').empty();
             $('#status_mqtt').append('<i class="icon-Close text-danger"></i><span class="hide-menu">Not Connected</span>');
             $('#sts').html('<button type="button" class="btn btn-secondary"><i class="fa fa-circle-o-notch"></i> RECONNECTING</button>');
             client.connect(options);
         }
     };

     //Creates a new Messaging.Message Object and sends it to the HiveMQ MQTT Broker
     var publish = function (payload, topic, qos) {
         //Send your message (also possible to serialize it as JSON or protobuf or just use a string, no limitations)
         var message = new Messaging.Message(payload);
         message.destinationName = topic;
         message.qos = qos;
         client.send(message);
     }
     
     $('#divTrack').on('click', '.item-track-device', function(){
         req=1;
         var id = $(this).attr('data');
         publish('1', 'GpsTrack/lacak/'+id, 2);
         reqid=id;
         Swal.fire({
             title: 'Tracking GPS!',
             html: 'Waiting for coordinate message from device',
             onBeforeOpen: () => {
                 Swal.showLoading()
             }
         })
     });
     
     $("#cob").on('click', function(){
         $('#not').html('');
     });
     
     $("#cob2").on('click', function(){
         $('#not2').html('');
     });