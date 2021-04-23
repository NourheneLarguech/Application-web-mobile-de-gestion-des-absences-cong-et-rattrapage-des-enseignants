
<!DOCTYPE html>
<html>
<head>
<title>Demander rattrapage</title>
	
	<link rel="icon" type="image/png" href="images/icons/isigk1.ico"/>  
	<?php include('include/head.php'); ?>
	<link rel="stylesheet" type="text/css" href="src/plugins/datatables/media/css/jquery.dataTables.css">
	<link rel="stylesheet" type="text/css" href="src/plugins/datatables/media/css/dataTables.bootstrap4.css">
	<link rel="stylesheet" type="text/css" href="src/plugins/datatables/media/css/responsive.dataTables.css">
	<script src="jquery.min.js" type="text/javascript"></script>


    <style>
    select#filiere ,#niveau ,#groupe,#matiere,#mdate,#seance,#salle{
   -webkit-appearance: button;
   -webkit-border-radius: 2px;
   -webkit-box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.1);
   -webkit-padding-end: 20px;
   -webkit-padding-start: 2px;
   -webkit-user-select: none;
   background-image: url(http://i62.tinypic.com/15xvbd5.png), -webkit-linear-gradient(#FAFAFA, #F4F4F4 40%, #E5E5E5);
   background-position: 97% center;
   background-repeat: no-repeat;
   border: 1px solid #AAA;
   color: #555;
   font-size: inherit;
   margin: 20px;
   overflow: hidden;
   padding: 5px 10px;
   text-overflow: ellipsis;
   white-space: nowrap;
   width: 300px;
}
#mdate{
   -webkit-appearance: button;
   -webkit-border-radius: 2px;
   -webkit-box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.1);
   -webkit-padding-end: 20px;
   -webkit-padding-start: 2px;
   -webkit-user-select: none;
   background-image: url(http://i62.tinypic.com/15xvbd5.png), -webkit-linear-gradient(#FAFAFA, #F4F4F4 40%, #E5E5E5);
   background-position: 97% center;
   background-repeat: no-repeat;
   border: 1px solid #AAA;
   color: #555;
   font-size: inherit;
   margin: 20px;
   overflow: hidden;
   padding: 5px 10px;
   text-overflow: ellipsis;
   white-space: nowrap;
   width: 720px;
}
select#filiere, #niveau,#groupe,#matiere,#mdate,#seance,#salle {
   color: #000;
   background-image: url(http://i62.tinypic.com/15xvbd5.png), -webkit-linear-gradient(#d9f6fa, #d9f6fa 40%, #d9f6fa);
   background: linear-gradient(to right, #2c6dd5 0%, #2c6dd5 28%, #ff4b5a 91%, #ff4b5a 100%);
   -webkit-border-radius: 20px;
   -moz-border-radius: 20px;
   border-radius: 20px;
   padding-left: 15px;
   font-family: 'Lucida Sans Unicode', 'Lucida Grande', sans-serif;
}
button{
    min-width: 100px;
    height: 40px;
    padding: 0 15px;
    background: linear-gradient(to right, #2c6dd5 0%, #2c6dd5 28%, #ff4b5a 91%, #ff4b5a 100%);
    white-space: nowrap;
    border-radius: 20px;
    font-size: 14px;
    color: #fff;
    transition: all .2s ease-out, color .2s ease-out;
    border: 0;
    cursor: pointer;
    font-weight: 400;
    box-shadow: 0px 2px 5px 0px rgba(0, 0, 0, 0.15);
    z-index: 0;
    position: relative;
}
button:hover{   min-width: 100px;
    height: 40px;
    padding: 0 15px;
    background: linear-gradient(to left, #2c6dd5 0%, #2c6dd5 28%, #ff4b5a 91%, #ff4b5a 100%);
    white-space: nowrap;
    border-radius: 20px;
    font-size: 14px;
    color: #fff;
    transition: all .2s ease-out, color .2s ease-out;
    border: 0;
    cursor: pointer;
    font-weight: 400;
    box-shadow: 0px 2px 5px 0px rgba(0, 0, 0, 0.15);
    z-index: 0;
    position: relative;}
    #x{
        width:250px;
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
								<h1> <b>Demander rattrapage</b></h1>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="">Rattrapage</a></li>
									<li class="breadcrumb-item active" aria-current="page">Demander</li>
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

				<div style="background-color:white;padding:40px;width:80%;margin-left:10%;"  >
                <form method="post" action="demander_rattrapage_php.php" >
<?php

include 'conx.php';
$reponse1 = $connect->query('select * from niveau');
$reponse2 = $connect->query('select * from filiere');
$reponse3 = $connect->query('select * from groupe');
 //echo $reponse;
 echo "<span>Niveau : </span><select id='niveau' name='niveau'>";

// On boucle sur la table

while ( $row = mysqli_fetch_array( $reponse1)) {
    
    echo '<option  value="'.$row[0].'">'.$row[1].'</option>';}
	echo '</select>';
	

	echo'&nbsp;';
    echo'&nbsp;';
   
	
    echo '<span>Filiere: </span><select id="filiere" name="filiere" >';
   while ( $row = mysqli_fetch_array( $reponse2)){
    $code_niv = $row[0];
    $lib_niv = $row[1];
    echo '<option id="id" value="'.$row[0].'">'.$row[1].'</option>';}
	echo '</select>';
	
	echo'<br>';
	echo'<br>';
    echo '<span>Groupe: </span><select id="groupe" name="groupe">';
 
     echo '</select>';
     echo'&nbsp;';
     echo'&nbsp;';
    
	 echo '<span>Matiere: </span><select id="matiere" name="matiere">';
 
     echo '</select>';
     echo'<br>';
    echo'<br>';
    echo'&nbsp;';
    echo'&nbsp;';
    echo'&nbsp;';
    echo'&nbsp;';
     echo '<span>Date: </span><input type="date" id="mdate" name="mdate"  value="'.date('Y-m-d').'"  />';
     echo'<br>';
     echo'<br>';
	 echo '<span>seance: </span><select id="seance" name="seance">';
 
     echo '</select>';
     echo'&nbsp;';
    echo'&nbsp;';
    echo'&nbsp;';
    echo'&nbsp;';
    echo'&nbsp;';
    echo'&nbsp;';
     echo '<span>Salle: </span><select id="salle" name="salle">';
 
     echo '</select>';
	?><br><br>
	
							<button  type="submit"  name="aj" style="margin-left:76%;width:20%;">
								Envoyer
							</button>
					

    </form>	
           
         
         
         
         
         



			


	
	
   </div>
   <br><br>  
		   <?php include('include/script.php'); ?>


		   <script>
        $(document).ready(function () {
			get_groupe();
			get_matiere();
			get_date();
});

$('#niveau').on('change', function() {
	get_groupe() ;
	get_matiere();
	get_date();
});

$('#filiere').on('change', function() {
	get_groupe() ;
	get_date();
});

$('#groupe').on('change', function() {
	
	get_date();
});

$('#mdate').change(function() {
	get_date();
});


$('#seance').change(function() {
	get_salle();
});




function get_date(){
 

  var weekday = ["0","1","2","3","4","5","6"];

var a = new Date($("#mdate").val());
$jour = weekday[a.getDay()];

var formData = new FormData();
        formData.append('groupe', $("#groupe").val());
        formData.append('jour', $jour);
		console.log("groupe",$("#groupe").val());
		console.log("jour",$jour);
        
        $.ajax({
            url:'st_dt.php',
            data: formData,
            type: 'POST',
			dataType: "json",
            contentType: false, // NEEDED, DON'T OMIT THIS (requires jQuery 1.6+)
            processData: false,
            success: function (response) {
             console.log(response);  
			 $('#seance').find('option').remove();


			 var $dropdown = $("#seance");
             $.each(response, function() {
             $dropdown.append($("<option />").val(this.code_sea).text(this.lib_sea));
            });

            get_salle();


            },
            error: function (request, status, error) {
                console.log(request.responseText);
            }
        });




}

function get_groupe(){
	var formData = new FormData();
        formData.append('niveau', $("#niveau").val());
        formData.append('filiere', $("#filiere").val());
        
        $.ajax({
            url:'gr_fl_nv.php',
            data: formData,
            type: 'POST',
			dataType: "json",
            contentType: false, // NEEDED, DON'T OMIT THIS (requires jQuery 1.6+)
            processData: false,
            success: function (response) {
               
			 $('#groupe').find('option').remove();


			 var $dropdown = $("#groupe");
             $.each(response, function() {
             $dropdown.append($("<option />").val(this.code_gro).text(this.lib_gro));
            });




            },
            error: function (request, status, error) {
                console.log(request.responseText);
            }
        });



}
function get_matiere(){
	var formData = new FormData();
        formData.append('niveau', $("#niveau").val());
        
        
        $.ajax({
            url:'mt_nv.php',
            data: formData,
            type: 'POST',
			dataType: "json",
            contentType: false, // NEEDED, DON'T OMIT THIS (requires jQuery 1.6+)
            processData: false,
            success: function (response) {
             
			 $('#matiere').find('option').remove();


			 var $dropdown = $("#matiere");
             $.each(response, function() {
             $dropdown.append($("<option />").val(this.code_mat).text(this.lib_mat));
            });




            },
            error: function (request, status, error) {
                console.log(request.responseText);
            }
        });



}

function get_salle(){

    var weekday = ["0","1","2","3","4","5","6"];

var a = new Date($("#mdate").val());
$jour = weekday[a.getDay()];
	var formData = new FormData();
        formData.append('code_jou', $jour);
        formData.append('code_sea', $("#seance").val());
        
        $.ajax({
            url:'salle_libre.php',
            data: formData,
            type: 'POST',
			dataType: "json",
            contentType: false, // NEEDED, DON'T OMIT THIS (requires jQuery 1.6+)
            processData: false,
            success: function (response) {
               
			 $('#salle').find('option').remove();


			 var $dropdown = $("#salle");
             $.each(response, function() {
             $dropdown.append($("<option />").val(this.code_sal).text(this.lib_sal));
            });




            },
            error: function (request, status, error) {
                console.log(request.responseText);
            }
        });



}


		   </script>
	
	<?php include('include/footer.php'); ?> 
	


</body>
</html>

<?php
