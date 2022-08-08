$(document).ready(function(){
    // $.ajax({
    //    url: 'http://localhost/CDNGPSTS/Main/dashboard',
    //    success: function(html) {
    //       $("#kontenku").append(html);
    //    }
    // });

	//inisial
	$('#kontenku').load(baseURL+'Main/dashboard/616a696a616e');

	//handle menu click content
	$('#dash').click(function(){
		var page = $(this).attr('href');
		$('#kontenku').load(baseURL+'Main/'+page+'/616a696a616e');
		return false;
	});
	$('#prof').click(function(){
		var page = $(this).attr('href');
		$('#kontenku').load(baseURL+'Main/'+page+'/616a696a616e');
		return false;
	});
	$('#tabel').click(function(){
		var page = $(this).attr('href');
		$('#kontenku').load(baseURL+'Main/'+page+'/616a696a616e');
		return false;
	});
	$('#peta').click(function(){
		var page = $(this).attr('href');
		$('#kontenku').load(baseURL+'Main/'+page+'/616a696a616e');
		return false;
	});			

//     $.ajax({
//        url: 'http://localhost/CDNGPSTS/application/views/dashboard.php',
//        success: function(html) {
//           $("#kontenku").append(html);
//        }
//     });

});


// $(document).ready(function(){
//         $(".loader").click(function(){

//       $.ajax({
//                 url:"dashboard.php",
//                 dataType:"html",
//                 type:'POST', 

//                 beforeSend: function(){
//                 },
//                 success:function(result){
//                       $(".kontenku").append(result);
//                  },

//         });
//     });
// });