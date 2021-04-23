<!DOCTYPE html>
<html>
<head>
<title>Consulter Rattrapage</title>
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
<?php include('include/header_enseignant.php'); ?>
	<?php include('include/sidebar_enseignant.php'); ?>
	<div class="main-container">
		<div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h1><b>Liste des Rattrapages</b></h1>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="">Rattrapage</a></li>
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

$x=$_SESSION['id'];
$req="select * from rattrapage r ,enseignant e,matiere m,groupe g,seance s,salle sl,niveau n,filiere f where e.cin_ens=$x and r.cin_ens=e.cin_ens and r.code_mat=m.code_mat and r.code_gro=g.code_gro and r.code_sea=s.code_sea and r.code_sal=sl.code_sal and g.code_niv=n.code_niv and g.code_fil=f.code_fil ORDER BY `s`.`code_sea` ASC
" ;
$res=mysqli_query($connect,$req);


?> 






				
			
			
				<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
					
					<div class="row">
						<table class="stripe hover multiple-select-row data-table-export nowrap">
							<thead>
								<tr>
									<th class="table-plus datatable-nosort">Matière</th>
									<th class="table-plus datatable-nosort">Niveau</th>
									<th>Filiére</th>
									<th>Groupe</th>
									<th>Date</th>
                                    <th>Seance</th>
                                    <th>Salle</th>

                                    
									<th> Supprimer</th>

                                  
								</tr>
							</thead>
						
							<tbody>
                     <?php
             while($row=mysqli_fetch_array($res)){
                 echo"<tr class='table-plus' ".$row['lib_mat'].">";
                 echo"<td class='table-plus' >".$row['lib_mat']."</td>";
                 echo"<td  class='table-plus'>".$row['lib_niv']."</td>";
                 echo"<td  class='table-plus' >".$row['lib_fil']."</td>";
                 echo"<td  class='table-plus'>".$row['lib_gro']."</td>";
                 echo"<td   class='table-plus'>".$row['mdate']."</td>";
                 echo"<td   class='table-plus'>".$row['lib_sea']."</td>";
				 echo"<td  class='table-plus'>".$row['lib_sal']."</td>";
				 
				 echo'<td class="table-plus"><button class="btn btn-danger" onclick ="supp_ens(&#39;'.$row['id_rattrapage'].'&#39;)">
				 <i class="icon-copy fa fa-user-times" aria-hidden="true"></i> Supprimer </button></td></tr>';             }
             
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
     icon: "warning",
      buttons: true,
      dangerMode: true,
      })
.then((willDelete) => {
  if (willDelete) {
		window.location.href = "supprimer_rattrapage.php?id_rattrapage="+$cin_ens; 
  } else {
    swal("Suppression Annulée");
  }
});

      
    }
		</script>
			<?php include ('include/footer.php'); ?>

</body>
</html>