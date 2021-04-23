<!DOCTYPE html>
<html>
<head>
<title>Liste des Enseignants</title>
    <?php include('include/head.php'); 
    include 'sss/include/head.php';?>
    

	<link rel="stylesheet" type="text/css" href="src/plugins/datatables/media/css/jquery.dataTables.css">
	<link rel="stylesheet" type="text/css" href="src/plugins/datatables/media/css/dataTables.bootstrap4.css">
	<link rel="stylesheet" type="text/css" href="src/plugins/datatables/media/css/responsive.dataTables.css">
<style>

h1{
  font-family: "Comic Sans MS", cursive, sans-serif	
;
}
</style>
</head>

	
<body>
<?php include('include/header_administateur.php'); ?>
	<?php include('include/sidebar_administrateur.php'); ?>
	<div class="main-container">
		<div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h1><b>Liste des Enseignants</b></h1>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="">Enseignant</a></li>
									<li class="breadcrumb-item active" aria-current="page">Consulter</li>
								</ol>
							</nav>
						</div>
						<div class="col-md-6 col-sm-12 text-right">
							<div class="dropdown">
								
								<div class="dropdown-menu dropdown-menu-right">
									<a class="dropdown-item" href="#">Export List</a>
									<a class="dropdown-item" href="#">Policies</a>
									<a class="dropdown-item" href="#">View Assets</a>
								</div>
							</div>
						</div>
					</div>


				</div>

<?php

include 'conx.php';


$req="select * from enseignant  " ;
$res=mysqli_query($connect,$req);


?> 






				
			
			
				<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
					
					<div class="row">
						<table class="stripe hover multiple-select-row data-table-export nowrap">
							<thead>
								<tr>
									<th class="table-plus datatable-nosort">CIN</th>
									<th class="table-plus datatable-nosort">Nom</th>
									<th>Prénom</th>
									<th>Pseudo</th>
									<th>Mot de passe</th>
                                    <th>Email</th>
                                    <th>Numéro de telephone</th>

                                    
                                    <th>Mettre A jour</th>
									<th> Supprimer</th>
									<th> Informer</th>
                                  
								</tr>
							</thead>
						
							<tbody>
                     <?php
             while($row=mysqli_fetch_array($res)){
                 echo"<tr class='table-plus' ".$row[0].">";
                 echo"<td class='table-plus' >".$row[0]."</td>";
                 echo"<td  class='table-plus'>".$row[1]."</td>";
                 echo"<td  class='table-plus' >".$row[2]."</td>";
                 echo"<td  class='table-plus'>".$row[3]."</td>";
                 echo"<td   class='table-plus'>".$row[4]."</td>";
                 echo"<td   class='table-plus'>".$row[5]."</td>";
				 echo"<td  class='table-plus'>".$row[6]."</td>";
				 
echo'<td class="table-plus"><a class="btn" data-bgcolor="#1da1f2" data-color="#ffffff" href="modifier_enseignant.php?id=' . $row['cin_ens'] . '"><i class="icon-copy fi-page-edit"></i>  Mettre A jour</a></td>';
echo'<td class="table-plus"><button onclick ="supp_ens('.$row[0].')"> Supprimer </button></td>
<td> <button onclick="info_sms('.$row[0].','.$row[4].','.$row[6].')"> Informer </button> </td></tr>';
             }
             
             ?>
         
         
         
         

							</tbody>
						</table>


			
		
	</div>

	
	<script>
		$('document').ready(function(){
			$('.data-table').DataTable({
				scrollCollapse: true,
				autoWidth: false,
				responsive: true,
				columnDefs: [{
					targets: "datatable-nosort",
					orderable: false,
				}],
				"lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
				"language": {
					"info": "_START_-_END_ of _TOTAL_ entries",
					searchPlaceholder: "Search"
				},
			});
			$('.data-table-export').DataTable({
				scrollCollapse: true,
				autoWidth: false,
				responsive: true,
				columnDefs: [{
					targets: "datatable-nosort",
					orderable: false,
				}],
				"lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
				"language": {
					"info": "_START_-_END_ of _TOTAL_ entries",
					searchPlaceholder: "Search"
				},
				dom: 'Bfrtip',
				buttons: [
				'copy', 'csv', 'pdf', 'print'
				]
			});
			var table = $('.select-row').DataTable();
			$('.select-row tbody').on('click', 'tr', function () {
				if ($(this).hasClass('selected')) {
					$(this).removeClass('selected');
				}
				else {
					table.$('tr.selected').removeClass('selected');
					$(this).addClass('selected');
				}
			});
			var multipletable = $('.multiple-select-row').DataTable();
			$('.multiple-select-row tbody').on('click', 'tr', function () {
				$(this).toggleClass('selected');
			});
		});
</script>
 
 <script src="sss/js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="sss/js/bootstrap.min.js"></script>
    <!-- wow JS
		============================================ -->
    <script src="sss/js/wow.min.js"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="sss/js/jquery-price-slider.js"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="sss/js/owl.carousel.min.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="sss/js/jquery.scrollUp.min.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="sss/js/meanmenu/jquery.meanmenu.js"></script>
    <!-- counterup JS
		============================================ -->
    <script src="sss/js/counterup/jquery.counterup.min.js"></script>
    <script src="sss/js/counterup/waypoints.min.js"></script>
    <script src="sss/js/counterup/counterup-active.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="sss/js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- sparkline JS
		============================================ -->
    <script src="sss/js/sparkline/jquery.sparkline.min.js"></script>
    <script src="sss/js/sparkline/sparkline-active.js"></script>
    <!-- flot JS
		============================================ -->
    <script src="sss/js/flot/jquery.flot.js"></script>
    <script src="sss/js/flot/jquery.flot.resize.js"></script>
    <script src="sss/js/flot/flot-active.js"></script>
    <!-- knob JS
		============================================ -->
    <script src="sss/js/knob/jquery.knob.js"></script>
    <script src="sss/js/knob/jquery.appear.js"></script>
    <script src="sss/js/knob/knob-active.js"></script>
    <!--  Chat JS
		============================================ -->
    <script src="sss/js/chat/jquery.chat.js"></script>
    <!--  todo JS
		============================================ -->
    <script src="sss/js/todo/jquery.todo.js"></script>
	<!--  wave JS
		============================================ -->
    <script src="sss/js/wave/waves.min.js"></script>
    <script src="sss/js/wave/wave-active.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="sss/js/plugins.js"></script>
    <!-- Data Table JS
		============================================ -->
    <script src="sss/js/data-table/jquery.dataTables.min.js"></script>
    <script src="sss/js/data-table/data-table-act.js"></script>
    <!-- main JS
		============================================ -->
    <script src="sss/js/main.js"></script>
	<!-- tawk chat JS
		============================================ -->
    <script src="sss/js/tawk-chat.js"></script>

 <script>
    function info_sms($cin_ens,$mot_ens,$Telephone){
      var formData = new FormData();
        formData.append('cin_ens', $cin_ens);
        formData.append('mot_ens',$mot_ens);
				formData.append('Telephone',$Telephone);
    
        $.ajax({
            url:'not_ens_sms.php',
            data: formData,
            dataType: "json",
            type: 'POST',
            contentType: false, // NEEDED, DON'T OMIT THIS (requires jQuery 1.6+)
            processData: false,
            success: function (response) {
               console.log(response);
               
               swal("SMS envoyé","Votre SMS a été bien envoyé !");
            



            },
            error: function (request, status, error) {
                console.log(request.responseText);
            }
        });


    }
		function supp_ens($cin_ens){
      swal({   
      title: "Vous êtes sûr ?",   
      text: "Enseignant sera supprimé d'une façon permanente !",   
      type: "warning",   
      showCancelButton: true,   
      confirmButtonText: "Oui, Supprimer !",
      cancelButtonText: "Non, annuler !",   
    }).then(function(isConfirm){
      if (isConfirm) {     
        window.location.href = "supprimer_enseignant.php?cin_ens="+$cin_ens; 
        
      } else {     
        swal("Annuler", "Enseignant n'est pas supprimé :)", "error");   
      } 
    });

      
    }
		</script>
</body>
</html>