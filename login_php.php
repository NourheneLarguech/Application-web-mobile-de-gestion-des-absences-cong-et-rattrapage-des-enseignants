<html>
<head>
<link rel="icon" type="image/png" href="images/icons/isigk1.ico"/>
<title>Login</title>

</head>
<body>
<?php
include ('conx.php');

if(isset($_POST['con']))
{
 
$identifiant=$_POST["log"];
$password=$_POST["pas"];



 include('include/script.php'); ?>
		<script src="src/plugins/sweetalert2/sweetalert2.all.js"></script>
	<link rel="stylesheet" type="text/css" href="src/plugins/sweetalert2/sweetalert2.css">
	<script src="src/plugins/sweetalert2/sweet-alert.init.js"></script>
    <script src="external/jquery/jquery.js"></script>
<script src="jquery-ui.js"></script>
<?php
////////// test admin login
  $sql ="select * from administrateur where login_admin='$identifiant' ";
  $result=mysqli_query($connect,$sql);
  $row_cnt = mysqli_num_rows($result);
  if ($row_cnt >0) {

    /* Récupère un tableau associatif */
    while ($row = mysqli_fetch_assoc($result)) {
       if($password == $row["password_admin"]){
       session_start();
       $_SESSION['id']=$row['id'];
       $_SESSION['nom']=$row['nom_adm'];
       $_SESSION['prenom']=$row['prenom_adm'];
       $_SESSION['login_admin']=$row['login_admin'];
       $_SESSION['password_admin']=$row['password_admin'];
       $_SESSION['type_compte']='Administrateur';

       header ('location:index_administrateur.php');
       }else{
        include ('include/script.php');

        echo '
      	<script>

        swal("Erreur","Mot de passe  d\'administrateur inccorrecte !","error").then(function() {
          window.location = "login.php";
      });


</script>
        ';

       }
    }

}else{

///////// test personnel  login

$sqlx ="select * from personnel where cin_per='$identifiant' ";
$resultx=mysqli_query($connect,$sqlx);
$row_cntx = mysqli_num_rows($resultx);

if ($row_cntx >0) {

  /* Récupère un tableau associatif */
  while ($rowx = mysqli_fetch_assoc($resultx)) {
     if($password == $rowx["mot_per"]){
      session_start();
      $_SESSION['id']=$rowx['cin_per'];
      $_SESSION['nom']=$rowx['nom_per'];
      $_SESSION['prenom']=$rowx['pre_per'];
      $_SESSION['type_compte']='Personnel';
      header ('location:index_pc.php');
     }else{

      echo '
      <script>

      swal("Erreur","Mot de passe  d\'un personnel du congé inccorrecte !","error").then(function() {
        window.location = "login.php";
    });


</script>
      ';

     }
  }

}
else{

   


  //////////// test enseignant

  $sqlz ="select * from enseignant where cin_ens='$identifiant' ";
  $resultz=mysqli_query($connect,$sqlz);
  $row_cntz = mysqli_num_rows($resultz);
  if ($row_cntz >0) {

    /* Récupère un tableau associatif */
    while ($rowz = mysqli_fetch_assoc($resultz)) {
       if($password == $rowz["mot_ens"]){
        session_start();
        $_SESSION['id']=$rowz['cin_ens'];
        $_SESSION['nom']=$rowz['nom'];
        $_SESSION['prenom']=$rowz['pre'];
        $_SESSION['type_compte']='Enseignant';
        header ('location:index_enseignant.php');
       }else{

        echo '
        <script>
  
        swal("Erreur","Mot de passe  d\'un enseignant inccorrecte !","error").then(function() {
          window.location = "login.php";
      });
  
  
  </script>
        ';

       }
    }

}else{

  echo '
  <script>

  swal("Erreur","Votre login inccorrecte !","error").then(function() {
    window.location = "login.php";
});


</script>
  ';




}





}

/////////////




}

////////////////


} 


?>
</body>
</html>