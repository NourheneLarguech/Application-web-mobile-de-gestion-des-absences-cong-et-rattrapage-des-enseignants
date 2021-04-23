<?php
define('BASEPATH', "foobar");
include 'SMS.php';

$tel=$_POST["tel_per"];
$texte = "votre login  est :  ".$_POST["cin_per"]." et votre mot de passe est : ".$_POST["mot_per"];

$config = array(
    'clientId' => 'HJehF3dZb5pGJsccw1wunub9H3GMV6uv',
    'clientSecret' => 'a8upEYH2IhJi1hP0'
    );  
     $sms = new Sms($config);
     $sms->setVerifyPeerSSL(false);
     $response = $sms->getTokenFromConsumerKey();
     if (!empty($response['access_token'])) {
     $senderAddress = 'tel:+21654635309';

     $receiverAddress = 'tel:+216'.$tel;
     $message = $texte;
     $senderName = 'isig pfe';
     $responsex = $sms->sendSMS($senderAddress, $receiverAddress, $message, $senderName);
     echo json_encode($responsex) ;
     }




?>