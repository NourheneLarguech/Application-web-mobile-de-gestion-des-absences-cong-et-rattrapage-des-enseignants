<!DOCTYPE html>
<html >

<head>
    <!-- Required meta tags-->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Demander congé</title>
    <link rel="icon" type="image/png" href="images/icons/isigk1.ico"/>
   
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colrolib Templates">
    <meta name="author" content="Colrolib">
    <meta name="keywords" content="Colrolib Templates">

    <!-- Title Page-->
    <title>Au Form Wizard</title>

    <!-- Icons font CSS-->
    <link href="conge/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="conge/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="conge/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="conge/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="conge/css/main.css" rel="stylesheet" media="all">
    <style>
    #x{
        padding-left:150px;
    }</style>
</head>

<body>


   
    <div class="page-wrapper bg-img-1 p-t-200 p-b-120">
        <div class="wrapper wrapper--w900">
            <div class="card card-4">
                <div class="card-body">
                   
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab1">
                            <form method="POST"  action="demander_conge_php.php">
                                <div class="input-group input-group-big">
                                    <label class="label">Raison:</label>
                                    <input class="input--style-1" type="text" name="ps" placeholder="Entrer la raison du votre congé " required="required">
                                    
                                </div>

                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group">
                                            <label class="label">Date Départ:</label>
                                            <input class="input--style-1" type="text" name="dd" placeholder="mm/dd/yyyy" id="input-start">
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group">
                                            <label class="label">Date Retour:</label>
                                            <input class="input--style-1" type="text" name="dr" placeholder="mm/dd/yyyy" id="input-end">
                                        </div>
                                    </div>
                                </div>
                                <div class="input-group input-group-big">
                                    <label class="label">Type:</label>
                                    <input class="input--style-1" type="text" name="p" placeholder="Entrer le type du votre congé " required="required">
                                    
                                </div>
                                <div class="row row-space">
                                    
                                    <div class="col-2">
                                        <button class="btn-submit" name="d" type="submit">Envoyer</button>
                                    </div>
                                    <div class="col-2">
                                        <a class="btn-submit" href="consulter_demande_conge.php" id="x">Annuler</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                      
                       
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="conge/vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="conge/vendor/select2/select2.min.js"></script>
    <script src="conge/vendor/jquery-validate/jquery.validate.min.js"></script>
    <script src="conge/vendor/bootstrap-wizard/bootstrap.min.js"></script>
    <script src="conge/vendor/bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>
    <script src="conge/vendor/datepicker/moment.min.js"></script>
    <script src="conge/vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="conge/js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
<?php include('include/script.php'); ?>
	
	<?php include('include/footer.php'); ?>
</html>
<!-- end document-->
