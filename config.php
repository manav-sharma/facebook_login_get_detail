<?php
include_once("inc/facebook.php"); //include facebook SDK
######### Facebook API Configuration ##########
$appId = '253256488390996'; //Facebook App ID
$appSecret = 'b3653f519ab782d81521b1364249b5c6'; // Facebook App Secret
$homeurl = 'http://localhost/facebook/';  //return to home
$fbPermissions = 'email';  //Required facebook permissions

//Call Facebook API
$facebook = new Facebook(array(
  'appId'  => $appId,
  'secret' => $appSecret

));
$fbuser = $facebook->getUser();
?>