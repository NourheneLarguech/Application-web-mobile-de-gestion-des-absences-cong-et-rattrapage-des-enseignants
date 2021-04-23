<!DOCTYPE html>
<html>
<head>
<title>Profil Administrateur</title>

	<?php include('include/head.php'); ?>
	<link rel="stylesheet" type="text/css" href="src/plugins/cropperjs/dist/cropper.css">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
<link rel="icon" type="image/png" href="images/icons/isigk1.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="profile/Login_v8/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="profile/Login_v8/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="profile/Login_v8/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="profile/Login_v8/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="profile/Login_v8/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="profile/Login_v8/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="profile/Login_v8/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="profile/Login_v8/css/util.css">
	<link rel="stylesheet" type="text/css" href="profile/Login_v8/css/main.css">
	<style>
	.login100-form-title {
    font-family: JosefinSans-Bold;
    font-size: 30px;
    color: #fff;
    line-height: 1.2;
    text-align: center;
    display: block;
    position: absolute;
    width: 100%;
    top: 0;
    left: 0;
    background-color: #46a2b8;
    padding-top: 50px;
    padding-bottom: 39px;
}
body{
background-color:#d9f6fa;
}

.breadcrumb {
    padding: .75rem 1rem;
    margin-bottom: 1rem;
    list-style: none;
    background-color: #d9f6fa;
    border-radius: .25rem;
}
#p2{
	font-size:15px;
}
.login100-form-btn {
    display: -webkit-box;
    display: -webkit-flex;
    display: -moz-box;
    display: -ms-flexbox;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 0 20px;
    width: 100%;
    height: 50px;
    background-color: #46a2b8;
    border-radius: 25px;
    font-family: Ubuntu-Bold;
    font-size: 15px;
    color: #fff;
    line-height: 1.2;
    text-transform: uppercase;
    -webkit-transition: all 0.4s;
    -o-transition: all 0.4s;
    -moz-transition: all 0.4s;
    transition: all 0.4s;
}
#p2{
	font-size:15px;
	color:black;
	
}
	</style>
</head>
<body>
<?php include ('include/header_administateur.php'); ?>
	<?php  include ('include/sidebar_administrateur.php'); ?>

	<div class="main-container" >
		<div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<div class="title">
								<h4>Profile Administrateur</h4>
							</div>
							
							<?php
						
							$x=$_SESSION['id'];
							 $req="select * from administrateur where id = $x";
$res=mysqli_query($connect,$req);
$row=mysqli_fetch_array($res);?>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href=""><div id="p2"><b>Administrateur</b></div></a><li> &nbsp;
    <i class="icon-copy fa fa-arrow-circle-right" aria-hidden="true"></i> &nbsp;
									  <li ><b>Profile</b></li>
								</ol>
							</nav>
						</div>
					</div>
				</div>
				<div class="limiter">
	
			<div class="wrap-login100" style='margin-left:400px'>
				<form class="login100-form validate-form p-l-55 p-r-55 p-t-178" method="post" action="modifier_administrateur.php">
					<span class="login100-form-title">
					<img src="profil_admin.png" alt="" class="avatar-photo" style='width:150px;padding-bottom:-40px;'>
					<h5 class="text-center"><?php echo( $row['nom_adm']);echo( ' '); echo( $row['prenom_adm']);?></h5>
							<p  id='p2'><b> <?php echo($_SESSION['type_compte']); ?><b></p>
					</span>
					<br><br><br><br><br><br>
					Nom :
					<div class="wrap-input100 validate-input m-b-16" data-validate="S'il vous play entrer votre nom">
						<input class="input100" type="text" name="nom" placeholder="Nom" value="<?php echo( $row['nom_adm']);?>">
						<span class="focus-input100"></span>
					</div>
					
					Prénom:
					<div class="wrap-input100 validate-input" data-validate = "S'il vous play entrer votre prenom"  >
						<input class="input100" type="text" name="prenom" placeholder="Prénom" value="<?php echo($row['prenom_adm']);?>">
						<span class="focus-input100"></span>
					</div>
					<br>
					Login:
					<div class="wrap-input100 validate-input" data-validate = "S'il vous play entrer votre login"  >
						<input class="input100" type="text" name="login" placeholder="Login" value="<?php echo($row['login_admin']);?>">
						<span class="focus-input100"></span>
					</div>
					<br>

					Mot de passe:
					<div class="wrap-input100 validate-input" data-validate = "S'il vous play entrer votre mot de passe"  >
						<input class="input100" type="text" name="mot" placeholder="Mot de passe" value="<?php echo( $row['password_admin']);?>">
						<span class="focus-input100"></span>
					</div>

					

					<div class="container-login100-form-btn" style='margin-top:30px'>
						<button class="login100-form-btn" type="submit" name="m">
							Modifier Mon Profil
						</button>
					</div>

					
					<br><br>
				</form>
			</div>
	
	</div>
			</div>
		</div>
	</div>


	
	
	<?php include('include/script.php'); ?>
	<script src="src/plugins/cropperjs/dist/cropper.js"></script>
	<script>
		window.addEventListener('DOMContentLoaded', function () {
			var image = document.getElementById('image');
			var cropBoxData;
			var canvasData;
			var cropper;

			$('#modal').on('shown.bs.modal', function () {
				cropper = new Cropper(image, {
					autoCropArea: 0.5,
					dragMode: 'move',
					aspectRatio: 3 / 3,
					restore: false,
					guides: false,
					center: false,
					highlight: false,
					cropBoxMovable: false,
					cropBoxResizable: false,
					toggleDragModeOnDblclick: false,
					ready: function () {
						cropper.setCropBoxData(cropBoxData).setCanvasData(canvasData);
					}
				});
			}).on('hidden.bs.modal', function () {
				cropBoxData = cropper.getCropBoxData();
				canvasData = cropper.getCanvasData();
				cropper.destroy();
			});
		});
	</script>
		
<!--===============================================================================================-->
	<script src="profile/Login_v8/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="profile/Login_v8/vendor/bootstrap/js/popper.js"></script>
	<script src="profile/Login_v8/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="profile/Login_v8/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="profile/Login_v8/vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="profile/Login_v8/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="profile/Login_v8/js/main.js"></script>
	<?php include ('include/footer.php'); ?>

</body>
</html>