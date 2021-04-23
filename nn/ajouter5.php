<!DOCTYPE html>
<html lang="en">
<head>

	<title>Ajouter personnel d'absence</title>
	<?php include('include/head.php'); ?>

	
	<link rel="stylesheet" type="text/css" href="src/plugins/datatables/media/css/jquery.dataTables.css">
	<link rel="stylesheet" type="text/css" href="src/plugins/datatables/media/css/dataTables.bootstrap4.css">
	<link rel="stylesheet" type="text/css" href="src/plugins/datatables/media/css/responsive.dataTables.css">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/noui/nouislider.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
<style>
#x{
background-color:#d9f6fa;

}
#p2{
	font-size:15px;
}</style>
</head>
<body>
<?php include('include/header.php'); ?>
	<?php include('include/sidebar.php'); ?>
	<div class="col-md-6 col-sm-12">
							
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="">Personnel RCA</a></li>
									<li class="breadcrumb-item active" aria-current="page">Ajouter</li>
								</ol>
							</nav>
						</div>

	<div id="x" class="container-contact100">
	<div class="col-md-6 col-sm-12">
	<div class="row">

							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href=""><div id="p2"><b>Personnel d'absence<b></div></a><li> &nbsp;
    <i class="icon-copy fa fa-arrow-circle-right" aria-hidden="true"></i> &nbsp;
									  <li >Ajouter</li>
								</ol>
							</nav>
						</div>
						</div>
		<div class="wrap-contact100">
			<form class="contact100-form validate-form" method="post" action="aaaa.php">
				<span class="contact100-form-title">
				Personnel d'absence
				</span>

				<div class="wrap-input100 validate-input bg1" data-validate="s'il vous plaît Entrer le numéro carte d'identité nationale">
					<span class="label-input100" id="p2"> CIN *</span>
					<input class="input100" type="text" name="c" placeholder="Entrer le numéro carte d'identité nationale">
				</div>

				<div class="wrap-input100 validate-input bg1 rs1-wrap-input100" data-validate = "s'il vous plaît Entrer Nom">
					<span class="label-input100" id="p2">Nom *</span>
					<input class="input100" type="text" name="n" placeholder="Entrer Nom ">
				</div>

				<div class="wrap-input100 validate-input bg1 rs1-wrap-input100" data-validate = "s'il vous plaît Entrer Prénom">
					<span class="label-input100" id="p2"> Prénom *</span>
					<input class="input100" type="text" name="p" placeholder="Entrer Prénom">
				</div>

				<div class="wrap-input100 validate-input bg1" data-validate="s'il vous plaît Entrer Pseudo">
					<span class="label-input100" id="p2"> Pseudo * </span>
					<input class="input100" type="text" name="ps" placeholder="Entrer Pseudo">
				</div>
				<div class="wrap-input100 validate-input bg1" data-validate="s'il vous plaît Entrer Mot De Passe ">
					<span class="label-input100" id="p2">Mot De Passe * </span>
					<input class="input100" type="password" name="m" placeholder="Entrer Mot De Passe ">
				</div>
				<div class="wrap-input100 validate-input bg1 rs1-wrap-input100" data-validate = "s'il vous plaît Entrer Email">
					<span class="label-input100" id="p2">Email *</span>
					<input class="input100" type="email" name="e" placeholder="exemple@gmail.com ">
				</div>

				<div class="wrap-input100 validate-input bg1 rs1-wrap-input100" data-validate = "s'il vous plaît Entrer Numéro De Téléphone ">
					<span class="label-input100" id="p2"> Numéro De Téléphone *</span>
					<input class="input100" type="text" name="s" placeholder="Entrer Numéro De Téléphone ">
				</div>
				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn" type="submit" name="aj">
						<span>
						<i class="icon-copy fa fa-user-plus" aria-hidden="true" id='p2'>Ajouter</i>

							<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
						</span>
					</button>
				</div>
   
			</form>
		</div>
	</div>



<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".js-select2").each(function(){
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});


			$(".js-select2").each(function(){
				$(this).on('select2:close', function (e){
					if($(this).val() == "Please chooses") {
						$('.js-show-service').slideUp();
					}
					else {
						$('.js-show-service').slideUp();
						$('.js-show-service').slideDown();
					}
				});
			});
		})
	</script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="vendor/noui/nouislider.min.js"></script>
	<script>
	    var filterBar = document.getElementById('filter-bar');

	    noUiSlider.create(filterBar, {
	        start: [ 1500, 3900 ],
	        connect: true,
	        range: {
	            'min': 1500,
	            'max': 7500
	        }
	    });

	    var skipValues = [
	    document.getElementById('value-lower'),
	    document.getElementById('value-upper')
	    ];

	    filterBar.noUiSlider.on('update', function( values, handle ) {
	        skipValues[handle].innerHTML = Math.round(values[handle]);
	        $('.contact100-form-range-value input[name="from-value"]').val($('#value-lower').html());
	        $('.contact100-form-range-value input[name="to-value"]').val($('#value-upper').html());
	    });
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
<?php include('include/script.php'); ?>
	
	<?php include('include/footer.php'); ?>
</body>
</html>
