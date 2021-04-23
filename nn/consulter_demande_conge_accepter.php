<!DOCTYPE html>
<html>
<head>
<title>Consulter la liste les demandes des congés Acceptées</title>
	<?php include('include/head.php'); ?>
	<link rel="stylesheet" type="text/css" href="src/plugins/datatables/media/css/jquery.dataTables.css">
	<link rel="stylesheet" type="text/css" href="src/plugins/datatables/media/css/dataTables.bootstrap4.css">
	<link rel="stylesheet" type="text/css" href="src/plugins/datatables/media/css/responsive.dataTables.css">
<style>

h1{
  font-family: "Comic Sans MS", cursive, sans-serif	
;
}
.btn-success {
    color: #fff;
    background-color: #c32361;
    border-color: #c32361;
}
.btn-success:hover{    background-color: #820736;
	border-color: #820736;

}
.btn-success:hover{    background-color: #820736;
	border-color: #820736;

}

</style>
</head>

	
<body>
<?php include('include/header_pc.php'); ?>
	<?php include('include/sidebar_pc.php'); ?>
	<div class="main-container">
		<div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h1><b>Liste les demandes des congés Acceptées</b></h1>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="">Congé </a></li>
									<li class="breadcrumb-item active" aria-current="page">Consulter les demandes Accepter</li>
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

$x=$_SESSION['id'];
$req="select * from conge c ,enseignant e ,enseignantr en where  c.cin_ens=e.cin_ens and c.cin_ensr=en.cin_ensr; ";
$res=mysqli_query($connect,$req);


?> 






				
			
			
				<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
					
					<div class="row">
						<table class="stripe hover multiple-select-row data-table-export nowrap">
							<thead>
								<tr>
                                <th class="table-plus datatable-nosort">CIN</th>
									<th >Nom</th>
									<th>Prénom</th>
									<th >Dare départ</th>
									<th >Date retour</th>
									<th>Raison</th>
									<th>Type</th>
									<th> Enseignat Remplaçant</th>

                                    
                                    <th>Ajouter Remplacant</th>
									

                                  
								</tr>
							</thead>
						
							<tbody>
                     <?php
             while($row=mysqli_fetch_array($res)){
                if($row['etat']=="Accepter"){

                 echo"<tr class='table-plus' ".$row['cin_ens'].">";
                 echo"<td class='table-plus' >".$row['cin_ens']."</td>";
                 echo"<td  class='table-plus'>".$row[9]."</td>";
                 echo"<td  class='table-plus'>".$row[10]."</td>";
                 echo"<td class='table-plus' >".$row['dd']."</td>";
                 echo"<td  class='table-plus'>".$row['dr']."</td>";
                 echo"<td  class='table-plus' >".$row['r']."</td>";
								 echo"<td  class='table-plus'>".$row['t']."</td>";

				 

  
								 echo'<td class="table-plus"><a class="btn btn-warning" href="formation_remplaçant.php?id=' . $row['cin_ensr'] . ' "> <i class="icon-copy fa fa-exchange" aria-hidden="true"></i>  Enseignant remplaçant    </a></td>';


echo'<td class="table-plus"><a class="btn btn-info" href="ajouter_remplacant.php?id=' . $row['code_con'] . ' "> <i class="icon-copy fa fa-user-plus" aria-hidden="true" >  Ajouter remplacant    </a></td>';
}  }
             
             ?>
         
         
         
         

							</tbody>
						</table>


			
		
	</div>

	<?php include 'include/script.php'; ?>
	<script src="src/plugins/highcharts-6.0.7/code/highcharts.js"></script>
	<script src="src/plugins/highcharts-6.0.7/code/highcharts-more.js"></script>
	
	
	<script src="src/plugins/datatables/media/js/jquery.dataTables.min.js"></script>
	<script src="src/plugins/datatables/media/js/dataTables.bootstrap4.js"></script>
	<script src="src/plugins/datatables/media/js/dataTables.responsive.js"></script>
	<script src="src/plugins/datatables/media/js/responsive.bootstrap4.js"></script>
	<!-- buttons for Export datatable -->
	<script src="src/plugins/datatables/media/js/button/dataTables.buttons.js"></script>
	<script src="src/plugins/datatables/media/js/button/buttons.bootstrap4.js"></script>
	<script src="src/plugins/datatables/media/js/button/buttons.print.js"></script>
	<script src="src/plugins/datatables/media/js/button/buttons.html5.js"></script>
	<script src="src/plugins/datatables/media/js/button/buttons.flash.js"></script>
	<script src="src/plugins/datatables/media/js/button/pdfmake.min.js"></script>
	<script src="src/plugins/datatables/media/js/button/vfs_fonts.js"></script>
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
 


		<script src="src1/plugins/sweetalert2/sweetalert2.all.js"></script>
	<link rel="stylesheet" type="text/css" href="src1/plugins/sweetalert2/sweetalert2.css">
	<script src="src1/plugins/sweetalert2/sweet-alert.init.js"></script>
 <script>

		function for_ens($cin_ens){

	
		window.location.href = "formation_remplaçant.php?cin_ensr="+$cin_ens; 
 
      
		}
		</script>
			<?php include ('include/footer.php'); ?>

</body>
</html>