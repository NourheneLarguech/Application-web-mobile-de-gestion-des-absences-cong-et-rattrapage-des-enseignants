<?php

//$code_fil = $_GET["code_fil"];
//$code_niv = $_GET["code_niv"];

//echo $code_fil."<br>".$code_niv ;

?>
<!doctype html>
<html class="no-js" lang="">

<?php 
include 'include/head.php';
include 'include/header.php';
include 'include/menu.php';
include 'include/main.php';
include 'database.php';


?>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>

<body>
    
    <div class="data-table-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="data-table-list">
                    <div class="basic-tb-hd">
                            <h2>Liste des enseignants</h2>
                            
                        </div>
                        <div class="table-responsive">
                            <table id="data-table-basic" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>CIN</th>
                                        <th>Nom</th>
                                        <th>Pr&eacute;nom</th>
                                        <th> Genre </th>
                                        <th>Date de naissance</th>
                                        
                                        <th> Adresse </th>
                                        <th> Tel </th>
                                        <th> Mail </th>
                                        <th> Modifier </th>
                                        <th> Supprimer </th>
                                        <th> Informer </th>
                                    </tr>
                                </thead>
                             
                                <tbody>
                                <?php
                                   $req="select * from enseignant   ";
                                   $result=mysqli_query($connect,$req);
                                while($tab=mysqli_fetch_array($result)){
                                   echo " <tr> " ; 
                                      echo" <td> $tab[0] </td> " ;
                                
                                      echo "<td> $tab[1]</td> " ;
                                   
                                      echo "<td> $tab[2]</td> " ;
                                      echo "<td> $tab[3]</td> " ;
                                      echo "<td> $tab[4]</td> " ;
                                      
                                      echo "<td> $tab[6]</td> " ;
                                      echo "<td> $tab[7]</td> " ;
                                      echo "<td> $tab[8]</td> " ;
                                     
                                    
                                     echo "  <td> <button style='width:100px;' class='btn btn-info notika-btn-info waves-effect' onclick ='modif_ens(".$tab[0].");'> Modifier</button></td>  
                                     <td><button style='width:100px;' class='btn btn-danger notika-btn-danger waves-effect' onclick ='supp_ens(".$tab[0].");'> Supprimer</button></td> <td> <button style='width:100px;' class='btn btn-success notika-btn-success waves-effect' onclick='info_sms(".$tab[0].",".$tab[7].");'>Informer</button> </td> ";
                                     echo " </tr>" ;}
                                    ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>CIN</th>
                                        <th>Nom</th>
                                        <th>Pr&eacute;nom</th>
                                        <th> Genre </th>
                                        <th>Date de naissance</th>
                                        <th> Adresse </th>
                                        <th> Tel </th>
                                        <th> Mail </th>
                                        <th> Modifier </th>
                                        <th> Supprimer </th>
                                        <th> Informer </th>
                                      
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- jquery
		============================================ -->
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- wow JS
		============================================ -->
    <script src="js/wow.min.js"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="js/jquery-price-slider.js"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="js/meanmenu/jquery.meanmenu.js"></script>
    <!-- counterup JS
		============================================ -->
    <script src="js/counterup/jquery.counterup.min.js"></script>
    <script src="js/counterup/waypoints.min.js"></script>
    <script src="js/counterup/counterup-active.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- sparkline JS
		============================================ -->
    <script src="js/sparkline/jquery.sparkline.min.js"></script>
    <script src="js/sparkline/sparkline-active.js"></script>
    <!-- flot JS
		============================================ -->
    <script src="js/flot/jquery.flot.js"></script>
    <script src="js/flot/jquery.flot.resize.js"></script>
    <script src="js/flot/flot-active.js"></script>
    <!-- knob JS
		============================================ -->
    <script src="js/knob/jquery.knob.js"></script>
    <script src="js/knob/jquery.appear.js"></script>
    <script src="js/knob/knob-active.js"></script>
    <!--  Chat JS
		============================================ -->
    <script src="js/chat/jquery.chat.js"></script>
    <!--  todo JS
		============================================ -->
    <script src="js/todo/jquery.todo.js"></script>
	<!--  wave JS
		============================================ -->
    <script src="js/wave/waves.min.js"></script>
    <script src="js/wave/wave-active.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="js/plugins.js"></script>
    <!-- Data Table JS
		============================================ -->
    <script src="js/data-table/jquery.dataTables.min.js"></script>
    <script src="js/data-table/data-table-act.js"></script>
    <!-- main JS
		============================================ -->
    <script src="js/main.js"></script>
	<!-- tawk chat JS
		============================================ -->
    <script src="js/tawk-chat.js"></script>
    <script>
    function info_sms($cin_ens,$tel_ens){
      var formData = new FormData();
        formData.append('cin_ens', $cin_ens);
        formData.append('tel_ens',$tel_ens);
    
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
				window.location.href = "delete.php?cin_ens="+$cin_ens; 
        
			} else {     
				swal("Annuler", "Enseignant n'est pas supprimé :)", "error");   
			} 
		});

      
    }
    function modif_ens($cin_ens){
      window.location.href = "modifier_ens.php?cin_ens="+$cin_ens;
    }
    </script>
</body>

</html>