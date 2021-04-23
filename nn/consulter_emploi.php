<!DOCTYPE html>
<html>
<head>
<title> Consulter Emploi du temps</title>
	<?php include('include/head.php'); ?>
	<link rel="stylesheet" type="text/css" href="src/plugins/datatables/media/css/jquery.dataTables.css">
	<link rel="stylesheet" type="text/css" href="src/plugins/datatables/media/css/dataTables.bootstrap4.css">
	<link rel="stylesheet" type="text/css" href="src/plugins/datatables/media/css/responsive.dataTables.css">
	<style>
	h1{
  font-family: "Comic Sans MS", cursive, sans-serif	
;
}</style>
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
								<h1>Consulter emploi du temps</h1>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.php">Emploi du temps</a></li>
									<li class="breadcrumb-item active" aria-current="page">Consulter</li>
								</ol>
							</nav>
						</div>
					
					</div>
				</div>
			
				<!-- multiple select row Datatable End -->
				<!-- Export Datatable start -->
				<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
					<div class="clearfix mb-20">
						<div class="pull-left">
							<h5 class="text-blue"></h5>
						</div>
					</div>
					<?php
					include 'conx.php';
			

                  $x=$_SESSION['id'];

					$req1="SELECT * FROM emploi e,matiere m ,salle s ,groupe g,niveau n,filiere f
					 where e.code_jou='1' and e.code_sea='1'  and e.code_mat=m.code_mat and e.cin_ens='$x'and
					  s.code_sal=e.code_sal and g.code_gro=e.code_gro and g.code_niv=n.code_niv and g.code_fil=f.code_fil;";
					  $res1=mysqli_query($connect,$req1);

					  $req2="SELECT * FROM emploi e,matiere m ,salle s ,groupe g,niveau n,filiere f
					  where e.code_jou='1' and e.code_sea='2'  and e.code_mat=m.code_mat and e.cin_ens='$x'and
					   s.code_sal=e.code_sal and g.code_gro=e.code_gro and g.code_niv=n.code_niv and g.code_fil=f.code_fil;";
					   $res2=mysqli_query($connect,$req2);

					
					   $req3="SELECT * FROM emploi e,matiere m ,salle s ,groupe g,niveau n,filiere f
					   where e.code_jou='1' and e.code_sea='3'  and e.code_mat=m.code_mat and e.cin_ens='$x'and
						s.code_sal=e.code_sal and g.code_gro=e.code_gro and g.code_niv=n.code_niv and g.code_fil=f.code_fil;";
						$res3=mysqli_query($connect,$req3);

						$req4="SELECT * FROM emploi e,matiere m ,salle s ,groupe g,niveau n,filiere f
						where e.code_jou='1' and e.code_sea='4'  and e.code_mat=m.code_mat and e.cin_ens='$x'and
						 s.code_sal=e.code_sal and g.code_gro=e.code_gro and g.code_niv=n.code_niv and g.code_fil=f.code_fil;";
						 $res4=mysqli_query($connect,$req4);

						 $req5="SELECT * FROM emploi e,matiere m ,salle s ,groupe g,niveau n,filiere f
						 where e.code_jou='1' and e.code_sea='5'  and e.code_mat=m.code_mat and e.cin_ens='$x'and
						  s.code_sal=e.code_sal and g.code_gro=e.code_gro and g.code_niv=n.code_niv and g.code_fil=f.code_fil;";
						  $res5=mysqli_query($connect,$req5);
						
						  $req6="SELECT * FROM emploi e,matiere m ,salle s ,groupe g,niveau n,filiere f
						  where e.code_jou='1' and e.code_sea='6'  and e.code_mat=m.code_mat and e.cin_ens='$x'and
						   s.code_sal=e.code_sal and g.code_gro=e.code_gro and g.code_niv=n.code_niv and g.code_fil=f.code_fil;";
						   $res6=mysqli_query($connect,$req6);


						   $req7="SELECT * FROM emploi e,matiere m ,salle s ,groupe g,niveau n,filiere f
						   where e.code_jou='2' and e.code_sea='1'  and e.code_mat=m.code_mat and e.cin_ens='$x'and
							s.code_sal=e.code_sal and g.code_gro=e.code_gro and g.code_niv=n.code_niv and g.code_fil=f.code_fil;";
							$res7=mysqli_query($connect,$req7);
					  

							$req8="SELECT * FROM emploi e,matiere m ,salle s ,groupe g,niveau n,filiere f
							where e.code_jou='2' and e.code_sea='2'  and e.code_mat=m.code_mat and e.cin_ens='$x'and
							 s.code_sal=e.code_sal and g.code_gro=e.code_gro and g.code_niv=n.code_niv and g.code_fil=f.code_fil;";
							 $res8=mysqli_query($connect,$req8);

							 $req9="SELECT * FROM emploi e,matiere m ,salle s ,groupe g,niveau n,filiere f
							 where e.code_jou='2' and e.code_sea='3'  and e.code_mat=m.code_mat and e.cin_ens='$x'and
							  s.code_sal=e.code_sal and g.code_gro=e.code_gro and g.code_niv=n.code_niv and g.code_fil=f.code_fil;";
							  $res9=mysqli_query($connect,$req9);

							  $req10="SELECT * FROM emploi e,matiere m ,salle s ,groupe g,niveau n,filiere f
							  where e.code_jou='2' and e.code_sea='4'  and e.code_mat=m.code_mat and e.cin_ens='$x'and
							   s.code_sal=e.code_sal and g.code_gro=e.code_gro and g.code_niv=n.code_niv and g.code_fil=f.code_fil;";
							   $res10=mysqli_query($connect,$req10);
					   

							   $req11="SELECT * FROM emploi e,matiere m ,salle s ,groupe g,niveau n,filiere f
							   where e.code_jou='2' and e.code_sea='5'  and e.code_mat=m.code_mat and e.cin_ens='$x'and
								s.code_sal=e.code_sal and g.code_gro=e.code_gro and g.code_niv=n.code_niv and g.code_fil=f.code_fil;";
								$res11=mysqli_query($connect,$req11);
						
								$req12="SELECT * FROM emploi e,matiere m ,salle s ,groupe g,niveau n,filiere f
								where e.code_jou='2' and e.code_sea='6'  and e.code_mat=m.code_mat and e.cin_ens='$x'and
								 s.code_sal=e.code_sal and g.code_gro=e.code_gro and g.code_niv=n.code_niv and g.code_fil=f.code_fil;";
								 $res12=mysqli_query($connect,$req12);


								 $req13="SELECT * FROM emploi e,matiere m ,salle s ,groupe g,niveau n,filiere f
								 where e.code_jou='3' and e.code_sea='1'  and e.code_mat=m.code_mat and e.cin_ens='$x'and
								  s.code_sal=e.code_sal and g.code_gro=e.code_gro and g.code_niv=n.code_niv and g.code_fil=f.code_fil;";
								  $res13=mysqli_query($connect,$req13);
							
	  
								  $req14="SELECT * FROM emploi e,matiere m ,salle s ,groupe g,niveau n,filiere f
								  where e.code_jou='3' and e.code_sea='2'  and e.code_mat=m.code_mat and e.cin_ens='$x'and
								   s.code_sal=e.code_sal and g.code_gro=e.code_gro and g.code_niv=n.code_niv and g.code_fil=f.code_fil;";
								   $res14=mysqli_query($connect,$req14);
	  
								   $req15="SELECT * FROM emploi e,matiere m ,salle s ,groupe g,niveau n,filiere f
								   where e.code_jou='3' and e.code_sea='3'  and e.code_mat=m.code_mat and e.cin_ens='$x'and
									s.code_sal=e.code_sal and g.code_gro=e.code_gro and g.code_niv=n.code_niv and g.code_fil=f.code_fil;";
									$res15=mysqli_query($connect,$req15);
	  
									$req16="SELECT * FROM emploi e,matiere m ,salle s ,groupe g,niveau n,filiere f
									where e.code_jou='3' and e.code_sea='4'  and e.code_mat=m.code_mat and e.cin_ens='$x'and
									 s.code_sal=e.code_sal and g.code_gro=e.code_gro and g.code_niv=n.code_niv and g.code_fil=f.code_fil;";
									 $res16=mysqli_query($connect,$req16);
							 
	  
									 $req17="SELECT * FROM emploi e,matiere m ,salle s ,groupe g,niveau n,filiere f
									 where e.code_jou='3' and e.code_sea='5'  and e.code_mat=m.code_mat and e.cin_ens='$x'and
									  s.code_sal=e.code_sal and g.code_gro=e.code_gro and g.code_niv=n.code_niv and g.code_fil=f.code_fil;";
									  $res17=mysqli_query($connect,$req17);
							  
									  $req18="SELECT * FROM emploi e,matiere m ,salle s ,groupe g,niveau n,filiere f
									  where e.code_jou='3' and e.code_sea='6'  and e.code_mat=m.code_mat and e.cin_ens='$x'and
									   s.code_sal=e.code_sal and g.code_gro=e.code_gro and g.code_niv=n.code_niv and g.code_fil=f.code_fil;";
									   $res18=mysqli_query($connect,$req18);


									   
								 $req19="SELECT * FROM emploi e,matiere m ,salle s ,groupe g,niveau n,filiere f
								 where e.code_jou='4' and e.code_sea='1'  and e.code_mat=m.code_mat and e.cin_ens='$x'and
								  s.code_sal=e.code_sal and g.code_gro=e.code_gro and g.code_niv=n.code_niv and g.code_fil=f.code_fil;";
								  $res19=mysqli_query($connect,$req19);
							
	  
								  $req20="SELECT * FROM emploi e,matiere m ,salle s ,groupe g,niveau n,filiere f
								  where e.code_jou='4' and e.code_sea='2'  and e.code_mat=m.code_mat and e.cin_ens='$x'and
								   s.code_sal=e.code_sal and g.code_gro=e.code_gro and g.code_niv=n.code_niv and g.code_fil=f.code_fil;";
								   $res20=mysqli_query($connect,$req20);
	  
								   $req21="SELECT * FROM emploi e,matiere m ,salle s ,groupe g,niveau n,filiere f
								   where e.code_jou='4' and e.code_sea='3'  and e.code_mat=m.code_mat and e.cin_ens='$x'and
									s.code_sal=e.code_sal and g.code_gro=e.code_gro and g.code_niv=n.code_niv and g.code_fil=f.code_fil;";
									$res21=mysqli_query($connect,$req21);
	  
									$req22="SELECT * FROM emploi e,matiere m ,salle s ,groupe g,niveau n,filiere f
									where e.code_jou='4' and e.code_sea='4'  and e.code_mat=m.code_mat and e.cin_ens='$x'and
									 s.code_sal=e.code_sal and g.code_gro=e.code_gro and g.code_niv=n.code_niv and g.code_fil=f.code_fil;";
									 $res22=mysqli_query($connect,$req22);
							 
	  
									 $req23="SELECT * FROM emploi e,matiere m ,salle s ,groupe g,niveau n,filiere f
									 where e.code_jou='4' and e.code_sea='5'  and e.code_mat=m.code_mat and e.cin_ens='$x'and
									  s.code_sal=e.code_sal and g.code_gro=e.code_gro and g.code_niv=n.code_niv and g.code_fil=f.code_fil;";
									  $res23=mysqli_query($connect,$req23);
							  
									  $req24="SELECT * FROM emploi e,matiere m ,salle s ,groupe g,niveau n,filiere f
									  where e.code_jou='4' and e.code_sea='6'  and e.code_mat=m.code_mat and e.cin_ens='$x'and
									   s.code_sal=e.code_sal and g.code_gro=e.code_gro and g.code_niv=n.code_niv and g.code_fil=f.code_fil;";
									   $res24=mysqli_query($connect,$req24);



									   	   
								 $req25="SELECT * FROM emploi e,matiere m ,salle s ,groupe g,niveau n,filiere f
								 where e.code_jou='5' and e.code_sea='1'  and e.code_mat=m.code_mat and e.cin_ens='$x'and
								  s.code_sal=e.code_sal and g.code_gro=e.code_gro and g.code_niv=n.code_niv and g.code_fil=f.code_fil;";
								  $res25=mysqli_query($connect,$req25);
							
	  
								  $req26="SELECT * FROM emploi e,matiere m ,salle s ,groupe g,niveau n,filiere f
								  where e.code_jou='5' and e.code_sea='2'  and e.code_mat=m.code_mat and e.cin_ens='$x'and
								   s.code_sal=e.code_sal and g.code_gro=e.code_gro and g.code_niv=n.code_niv and g.code_fil=f.code_fil;";
								   $res26=mysqli_query($connect,$req26);
	  
								   $req27="SELECT * FROM emploi e,matiere m ,salle s ,groupe g,niveau n,filiere f
								   where e.code_jou='5' and e.code_sea='3'  and e.code_mat=m.code_mat and e.cin_ens='$x'and
									s.code_sal=e.code_sal and g.code_gro=e.code_gro and g.code_niv=n.code_niv and g.code_fil=f.code_fil;";
									$res27=mysqli_query($connect,$req27);
	  
									$req28="SELECT * FROM emploi e,matiere m ,salle s ,groupe g,niveau n,filiere f
									where e.code_jou='5' and e.code_sea='4'  and e.code_mat=m.code_mat and e.cin_ens='$x'and
									 s.code_sal=e.code_sal and g.code_gro=e.code_gro and g.code_niv=n.code_niv and g.code_fil=f.code_fil;";
									 $res28=mysqli_query($connect,$req28);
							 
	  
									 $req29="SELECT * FROM emploi e,matiere m ,salle s ,groupe g,niveau n,filiere f
									 where e.code_jou='5' and e.code_sea='5'  and e.code_mat=m.code_mat and e.cin_ens='$x'and
									  s.code_sal=e.code_sal and g.code_gro=e.code_gro and g.code_niv=n.code_niv and g.code_fil=f.code_fil;";
									  $res29=mysqli_query($connect,$req29);
							  
									  $req30="SELECT * FROM emploi e,matiere m ,salle s ,groupe g,niveau n,filiere f
									  where e.code_jou='5' and e.code_sea='6'  and e.code_mat=m.code_mat and e.cin_ens='$x'and
									   s.code_sal=e.code_sal and g.code_gro=e.code_gro and g.code_niv=n.code_niv and g.code_fil=f.code_fil;";
									   $res30=mysqli_query($connect,$req30);



									   $req31="SELECT * FROM emploi e,matiere m ,salle s ,groupe g,niveau n,filiere f
									   where e.code_jou='6' and e.code_sea='1'  and e.code_mat=m.code_mat and e.cin_ens='$x'and
										s.code_sal=e.code_sal and g.code_gro=e.code_gro and g.code_niv=n.code_niv and g.code_fil=f.code_fil;";
										$res31=mysqli_query($connect,$req31);
								  
			
										$req32="SELECT * FROM emploi e,matiere m ,salle s ,groupe g,niveau n,filiere f
										where e.code_jou='6' and e.code_sea='2'  and e.code_mat=m.code_mat and e.cin_ens='$x'and
										 s.code_sal=e.code_sal and g.code_gro=e.code_gro and g.code_niv=n.code_niv and g.code_fil=f.code_fil;";
										 $res32=mysqli_query($connect,$req32);
			
										 $req33="SELECT * FROM emploi e,matiere m ,salle s ,groupe g,niveau n,filiere f
										 where e.code_jou='6' and e.code_sea='3'  and e.code_mat=m.code_mat and e.cin_ens='$x'and
										  s.code_sal=e.code_sal and g.code_gro=e.code_gro and g.code_niv=n.code_niv and g.code_fil=f.code_fil;";
										  $res33=mysqli_query($connect,$req33);
			
										  $req34="SELECT * FROM emploi e,matiere m ,salle s ,groupe g,niveau n,filiere f
										  where e.code_jou='6' and e.code_sea='4'  and e.code_mat=m.code_mat and e.cin_ens='$x'and
										   s.code_sal=e.code_sal and g.code_gro=e.code_gro and g.code_niv=n.code_niv and g.code_fil=f.code_fil;";
										   $res34=mysqli_query($connect,$req34);
								   
			
										   $req35="SELECT * FROM emploi e,matiere m ,salle s ,groupe g,niveau n,filiere f
										   where e.code_jou='6' and e.code_sea='5'  and e.code_mat=m.code_mat and e.cin_ens='$x'and
											s.code_sal=e.code_sal and g.code_gro=e.code_gro and g.code_niv=n.code_niv and g.code_fil=f.code_fil;";
											$res35=mysqli_query($connect,$req35);
									
											$req36="SELECT * FROM emploi e,matiere m ,salle s ,groupe g,niveau n,filiere f
											where e.code_jou='6' and e.code_sea='6'  and e.code_mat=m.code_mat and e.cin_ens='$x'and
											 s.code_sal=e.code_sal and g.code_gro=e.code_gro and g.code_niv=n.code_niv and g.code_fil=f.code_fil;";
											 $res36=mysqli_query($connect,$req36);


					?>
					<div class="row">
						<table class="stripe hover multiple-select-row data-table-export nowrap">
							<thead>
								<tr>
									<th class="table-plus datatable-nosort"></th>
									<th>Jour / Séance</th>
									<th>Séance 1</th>
									<th>Séance 2</th>
                                    <th>Séance 3</th>
									<th>Séance 4</th>
									<th>Séance 5</th>
									<th>Séance 6</th>
                                    
								</tr>
							</thead>
							<tbody>
                           
								<tr>
								<td></td>
									<td class="table-plus">Lundi</td>
									<?php
										if(mysqli_num_rows($res1)==0)
										{echo '<td>  </td>';}
										else{ while($row=mysqli_fetch_array($res1)){
					  echo"<td class='table-plus' >".$row['lib_niv'].'<br>'.$row['lib_fil'].'<br>'.$row['lib_gro'].'<br>'.$row['lib_mat'].'<br>'.$row['lib_sal']."</td>";
      } }?> 
                  
				  <?php 
				if(mysqli_num_rows($res2)==0)
				{echo '<td>  </td>';}
				else{
				 while($row=mysqli_fetch_array($res2)){
				
						
					
					  echo"<td class='table-plus' >".$row['lib_niv'].'<br>'.$row['lib_fil'].'<br>'.$row['lib_gro'].'<br>'.$row['lib_mat'].'<br>'.$row['lib_sal']."</td>";
					} }?>
							  <?php 
				if(mysqli_num_rows($res3)==0)
				{echo '<td>  </td>';}
				else{
				 while($row=mysqli_fetch_array($res3)){
				
						
					
					  echo"<td class='table-plus' >".$row['lib_niv'].'<br>'.$row['lib_fil'].'<br>'.$row['lib_gro'].'<br>'.$row['lib_mat'].'<br>'.$row['lib_sal']."</td>";
					} }?>



<?php 
				if(mysqli_num_rows($res4)==0)
				{echo '<td>  </td>';}
				else{
				 while($row=mysqli_fetch_array($res4)){
				
						
					
					  echo"<td class='table-plus' >".$row['lib_niv'].'<br>'.$row['lib_fil'].'<br>'.$row['lib_gro'].'<br>'.$row['lib_mat'].'<br>'.$row['lib_sal']."</td>";
					} }?>
					
<?php 
				if(mysqli_num_rows($res5)==0)
				{echo '<td>  </td>';}
				else{
				 while($row=mysqli_fetch_array($res5)){
				
						
					
					  echo"<td class='table-plus' >".$row['lib_niv'].'<br>'.$row['lib_fil'].'<br>'.$row['lib_gro'].'<br>'.$row['lib_mat'].'<br>'.$row['lib_sal']."</td>";
					} }?>


        
					                             <?php 
				if(mysqli_num_rows($res6)==0)
				{echo '<td>  </td>';}
				else{
				 while($row=mysqli_fetch_array($res6)){
				
						
					
					  echo"<td class='table-plus' >".$row['lib_niv'].'<br>'.$row['lib_fil'].'<br>'.$row['lib_gro'].'<br>'.$row['lib_mat'].'<br>'.$row['lib_sal']."</td>";
					} }?>

					

								</tr>
                                
								<tr>
								<td></td>
									<td class="table-plus">Mardi</td>
									
									<?php 
				if(mysqli_num_rows($res7)==0)
				{echo '<td>  </td>';}
				else{
				 while($row=mysqli_fetch_array($res7)){
				
						
					
					  echo"<td class='table-plus' >".$row['lib_niv'].'<br>'.$row['lib_fil'].'<br>'.$row['lib_gro'].'<br>'.$row['lib_mat'].'<br>'.$row['lib_sal']."</td>";
					} }?>
												<?php 
				if(mysqli_num_rows($res8)==0)
				{echo '<td>  </td>';}
				else{
				 while($row=mysqli_fetch_array($res8)){
				
						
					
					  echo"<td class='table-plus' >".$row['lib_niv'].'<br>'.$row['lib_fil'].'<br>'.$row['lib_gro'].'<br>'.$row['lib_mat'].'<br>'.$row['lib_sal']."</td>";
					} }?>
																<?php 
				if(mysqli_num_rows($res9)==0)
				{echo '<td>  </td>';}
				else{
				 while($row=mysqli_fetch_array($res9)){
				
						
					
					  echo"<td class='table-plus' >".$row['lib_niv'].'<br>'.$row['lib_fil'].'<br>'.$row['lib_gro'].'<br>'.$row['lib_mat'].'<br>'.$row['lib_sal']."</td>";
					} }?>
																						<?php 
				if(mysqli_num_rows($res10)==0)
				{echo '<td>  </td>';}
				else{
				 while($row=mysqli_fetch_array($res10)){
				
						
					
					  echo"<td class='table-plus' >".$row['lib_niv'].'<br>'.$row['lib_fil'].'<br>'.$row['lib_gro'].'<br>'.$row['lib_mat'].'<br>'.$row['lib_sal']."</td>";
					} }?>
									
									<?php 
				if(mysqli_num_rows($res11)==0)
				{echo '<td>  </td>';}
				else{
				 while($row=mysqli_fetch_array($res11)){
				
						
					
					  echo"<td class='table-plus' >".$row['lib_niv'].'<br>'.$row['lib_fil'].'<br>'.$row['lib_gro'].'<br>'.$row['lib_mat'].'<br>'.$row['lib_sal']."</td>";
					} }?>
                                						<?php 
				if(mysqli_num_rows($res12)==0)
				{echo '<td>  </td>';}
				else{
				 while($row=mysqli_fetch_array($res12)){
				
						
					
					  echo"<td class='table-plus' >".$row['lib_niv'].'<br>'.$row['lib_fil'].'<br>'.$row['lib_gro'].'<br>'.$row['lib_mat'].'<br>'.$row['lib_sal']."</td>";
					} }?>
								</tr>
                                
								<tr>
								<td></td>
									<td class="table-plus">Mercredi</td>
									<?php 
				if(mysqli_num_rows($res13)==0)
				{echo '<td>  </td>';}
				else{
				 while($row=mysqli_fetch_array($res13)){
				
						
					
					  echo"<td class='table-plus' >".$row['lib_niv'].'<br>'.$row['lib_fil'].'<br>'.$row['lib_gro'].'<br>'.$row['lib_mat'].'<br>'.$row['lib_sal']."</td>";
					} }?>
												<?php 
				if(mysqli_num_rows($res14)==0)
				{echo '<td>  </td>';}
				else{
				 while($row=mysqli_fetch_array($res14)){
				
						
					
					  echo"<td class='table-plus' >".$row['lib_niv'].'<br>'.$row['lib_fil'].'<br>'.$row['lib_gro'].'<br>'.$row['lib_mat'].'<br>'.$row['lib_sal']."</td>";
					} }?>
																<?php 
				if(mysqli_num_rows($res15)==0)
				{echo '<td>  </td>';}
				else{
				 while($row=mysqli_fetch_array($res15)){
				
						
					
					  echo"<td class='table-plus' >".$row['lib_niv'].'<br>'.$row['lib_fil'].'<br>'.$row['lib_gro'].'<br>'.$row['lib_mat'].'<br>'.$row['lib_sal']."</td>";
					} }?>
																						<?php 
				if(mysqli_num_rows($res16)==0)
				{echo '<td>  </td>';}
				else{
				 while($row=mysqli_fetch_array($res16)){
				
						
					
					  echo"<td class='table-plus' >".$row['lib_niv'].'<br>'.$row['lib_fil'].'<br>'.$row['lib_gro'].'<br>'.$row['lib_mat'].'<br>'.$row['lib_sal']."</td>";
					} }?>
									
									<?php 
				if(mysqli_num_rows($res17)==0)
				{echo '<td>  </td>';}
				else{
				 while($row=mysqli_fetch_array($res17)){
				
						
					
					  echo"<td class='table-plus' >".$row['lib_niv'].'<br>'.$row['lib_fil'].'<br>'.$row['lib_gro'].'<br>'.$row['lib_mat'].'<br>'.$row['lib_sal']."</td>";
					} }?>
                                						<?php 
				if(mysqli_num_rows($res18)==0)
				{echo '<td>  </td>';}
				else{
				 while($row=mysqli_fetch_array($res18)){
				
						
					
					  echo"<td class='table-plus' >".$row['lib_niv'].'<br>'.$row['lib_fil'].'<br>'.$row['lib_gro'].'<br>'.$row['lib_mat'].'<br>'.$row['lib_sal']."</td>";
					} }?>
								</tr>
                                
								<tr>
								<td></td>
									<td class="table-plus">Jeudi</td>
									<?php 
				if(mysqli_num_rows($res19)==0)
				{echo '<td>  </td>';}
				else{
				 while($row=mysqli_fetch_array($res19)){
				
						
					
					  echo"<td class='table-plus' >".$row['lib_niv'].'<br>'.$row['lib_fil'].'<br>'.$row['lib_gro'].'<br>'.$row['lib_mat'].'<br>'.$row['lib_sal']."</td>";
					} }?>
												<?php 
				if(mysqli_num_rows($res20)==0)
				{echo '<td>  </td>';}
				else{
				 while($row=mysqli_fetch_array($res20)){
				
						
					
					  echo"<td class='table-plus' >".$row['lib_niv'].'<br>'.$row['lib_fil'].'<br>'.$row['lib_gro'].'<br>'.$row['lib_mat'].'<br>'.$row['lib_sal']."</td>";
					} }?>
																<?php 
				if(mysqli_num_rows($res21)==0)
				{echo '<td>  </td>';}
				else{
				 while($row=mysqli_fetch_array($res21)){
				
						
					
					  echo"<td class='table-plus' >".$row['lib_niv'].'<br>'.$row['lib_fil'].'<br>'.$row['lib_gro'].'<br>'.$row['lib_mat'].'<br>'.$row['lib_sal']."</td>";
					} }?>
																						<?php 
				if(mysqli_num_rows($res22)==0)
				{echo '<td>  </td>';}
				else{
				 while($row=mysqli_fetch_array($res22)){
				
						
					
					  echo"<td class='table-plus' >".$row['lib_niv'].'<br>'.$row['lib_fil'].'<br>'.$row['lib_gro'].'<br>'.$row['lib_mat'].'<br>'.$row['lib_sal']."</td>";
					} }?>
									
									<?php 
				if(mysqli_num_rows($res23)==0)
				{echo '<td>  </td>';}
				else{
				 while($row=mysqli_fetch_array($res23)){
				
						
					
					  echo"<td class='table-plus' >".$row['lib_niv'].'<br>'.$row['lib_fil'].'<br>'.$row['lib_gro'].'<br>'.$row['lib_mat'].'<br>'.$row['lib_sal']."</td>";
					} }?>
                                						<?php 
				if(mysqli_num_rows($res24)==0)
				{echo '<td>  </td>';}
				else{
				 while($row=mysqli_fetch_array($res24)){
				
						
					
					  echo"<td class='table-plus' >".$row['lib_niv'].'<br>'.$row['lib_fil'].'<br>'.$row['lib_gro'].'<br>'.$row['lib_mat'].'<br>'.$row['lib_sal']."</td>";
					} }?>
								</tr>
                                
								<tr>
								<td></td>
									<td class="table-plus">Vendredi</td>
									<?php 
				if(mysqli_num_rows($res25)==0)
				{echo '<td>  </td>';}
				else{
				 while($row=mysqli_fetch_array($res25)){
				
						
					
					  echo"<td class='table-plus' >".$row['lib_niv'].'<br>'.$row['lib_fil'].'<br>'.$row['lib_gro'].'<br>'.$row['lib_mat'].'<br>'.$row['lib_sal']."</td>";
					} }?>
												<?php 
				if(mysqli_num_rows($res26)==0)
				{echo '<td>  </td>';}
				else{
				 while($row=mysqli_fetch_array($res26)){
				
						
					
					  echo"<td class='table-plus' >".$row['lib_niv'].'<br>'.$row['lib_fil'].'<br>'.$row['lib_gro'].'<br>'.$row['lib_mat'].'<br>'.$row['lib_sal']."</td>";
					} }?>
																<?php 
				if(mysqli_num_rows($res27)==0)
				{echo '<td>  </td>';}
				else{
				 while($row=mysqli_fetch_array($res27)){
				
						
					
					  echo"<td class='table-plus' >".$row['lib_niv'].'<br>'.$row['lib_fil'].'<br>'.$row['lib_gro'].'<br>'.$row['lib_mat'].'<br>'.$row['lib_sal']."</td>";
					} }?>
																						<?php 
				if(mysqli_num_rows($res28)==0)
				{echo '<td>  </td>';}
				else{
				 while($row=mysqli_fetch_array($res28)){
				
						
					
					  echo"<td class='table-plus' >".$row['lib_niv'].'<br>'.$row['lib_fil'].'<br>'.$row['lib_gro'].'<br>'.$row['lib_mat'].'<br>'.$row['lib_sal']."</td>";
					} }?>
									
									<?php 
				if(mysqli_num_rows($res29)==0)
				{echo '<td>  </td>';}
				else{
				 while($row=mysqli_fetch_array($res29)){
				
						
					
					  echo"<td class='table-plus' >".$row['lib_niv'].'<br>'.$row['lib_fil'].'<br>'.$row['lib_gro'].'<br>'.$row['lib_mat'].'<br>'.$row['lib_sal']."</td>";
					} }?>
                                						<?php 
				if(mysqli_num_rows($res30)==0)
				{echo '<td>  </td>';}
				else{
				 while($row=mysqli_fetch_array($res30)){
				
						
					
					  echo"<td class='table-plus' >".$row['lib_niv'].'<br>'.$row['lib_fil'].'<br>'.$row['lib_gro'].'<br>'.$row['lib_mat'].'<br>'.$row['lib_sal']."</td>";
					} }?>
								</tr>
                                
								<tr>
								<td></td>
									<td class="table-plus">Samedi</td>
									<?php 
				if(mysqli_num_rows($res31)==0)
				{echo '<td>  </td>';}
				else{
				 while($row=mysqli_fetch_array($res31)){
				
						
					
					  echo"<td class='table-plus' >".$row['lib_niv'].'<br>'.$row['lib_fil'].'<br>'.$row['lib_gro'].'<br>'.$row['lib_mat'].'<br>'.$row['lib_sal']."</td>";
					} }?>
												<?php 
				if(mysqli_num_rows($res32)==0)
				{echo '<td>  </td>';}
				else{
				 while($row=mysqli_fetch_array($res32)){
				
						
					
					  echo"<td class='table-plus' >".$row['lib_niv'].'<br>'.$row['lib_fil'].'<br>'.$row['lib_gro'].'<br>'.$row['lib_mat'].'<br>'.$row['lib_sal']."</td>";
					} }?>
																<?php 
				if(mysqli_num_rows($res33)==0)
				{echo '<td>  </td>';}
				else{
				 while($row=mysqli_fetch_array($res33)){
				
						
					
					  echo"<td class='table-plus' >".$row['lib_niv'].'<br>'.$row['lib_fil'].'<br>'.$row['lib_gro'].'<br>'.$row['lib_mat'].'<br>'.$row['lib_sal']."</td>";
					} }?>
																						<?php 
				if(mysqli_num_rows($res34)==0)
				{echo '<td>  </td>';}
				else{
				 while($row=mysqli_fetch_array($res34)){
				
						
					
					  echo"<td class='table-plus' >".$row['lib_niv'].'<br>'.$row['lib_fil'].'<br>'.$row['lib_gro'].'<br>'.$row['lib_mat'].'<br>'.$row['lib_sal']."</td>";
					} }?>
									
									<?php 
				if(mysqli_num_rows($res35)==0)
				{echo '<td>  </td>';}
				else{
				 while($row=mysqli_fetch_array($res35)){
				
						
					
					  echo"<td class='table-plus' >".$row['lib_niv'].'<br>'.$row['lib_fil'].'<br>'.$row['lib_gro'].'<br>'.$row['lib_mat'].'<br>'.$row['lib_sal']."</td>";
					} }?>
                                						<?php 
				if(mysqli_num_rows($res36)==0)
				{echo '<td>  </td>';}
				else{
				 while($row=mysqli_fetch_array($res36)){
				
						
					
					  echo"<td class='table-plus' >".$row['lib_niv'].'<br>'.$row['lib_fil'].'<br>'.$row['lib_gro'].'<br>'.$row['lib_mat'].'<br>'.$row['lib_sal']."</td>";
					} }?>
								</tr>
								
							</tbody>
						</table>
					</div>
				</div>
				<!-- Export Datatable End -->
			</div>
			<?php include('include/footer.php'); ?>
		</div>
	</div>
	<?php include('include/script.php'); ?>
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