<!DOCTYPE html>
<html>
<head>
<title>Liste des pesonnels d'absences
</title>
	<?php include('include/head.php'); ?>
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
<?php include('include/header.php'); ?>
	<?php include('include/sidebar.php'); ?>
	<div class="main-container">
		<div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h1><b>Liste des pesonnels d'absences</b></h1>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="">Personnel d'absence</a></li>
									<li class="breadcrumb-item active" aria-current="page">Consulter</li>
								</ol>
							</nav>
						</div>
						
					</div>


				</div>

<?php
include 'conx.php';


$req="select * from personnela ";
$res=mysqli_query($connect,$req);


?> 






				
			
			
				<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
					
					<div class="row">
						<table class="stripe hover multiple-select-row data-table-export nowrap">
							<thead>
								<tr>
									<th class="table-plus datatable-nosort">CIN</th>
									<th>Nom</th>
									<th>Prénom</th>
									<th>Pseudo</th>
									<th>Mot de passe</th>
                                    <th>Email</th>
                                    <th>Numéro de telephone</th>
                                    
                                    <th>Mettre A jour</th>
									<th> Supprimer</th>

                                  
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
				 
echo'<td class="table-plus"><a class="upd" href="update1.php?id=' . $row['cin_per'] . '"><i class="icon-copy fi-page-edit"></i>  Mettre A jour</a></td>';
echo'<td class="table-plus"><a class="del" href="delete3.php?id=' . $row['cin_per'] . ' "> <i class="icon-copy fa fa-user-times" aria-hidden="true"></i>  Supprimer    </a></td>';
             }
             
             ?>
         
         
         
         

							</tbody>
						</table>


			
		
	</div>

	<?php include('include/script.php'); ?>
	<?php include('include/footer.php'); ?>

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

</body>
</html>