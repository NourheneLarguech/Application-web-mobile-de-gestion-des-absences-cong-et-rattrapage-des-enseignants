

<?php
//on demarre la session
session_start();
//on detruit les variables de notre session
session_unset(); 
unset($_SESSION['login']);
//on detruit notre session
session_destroy();
//on rederige le visiteur vers la page de connexion
header("Location: login.php");
   ?>

   <!DOCTYPE html>
   <html>
   <head>
   	<title></title>
   
   	  <script type="text/javascript">
   function preback(){ window.history.forward();}
   setTimeout("preback()",0);
   window.onunload=function()(null);
   </script>
   </head>
   <body>
  
   </body>
   </html>