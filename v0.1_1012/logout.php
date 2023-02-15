<?php

session_start();


// var_dump( $_SESSION );


// if($_SESSION['service_name'] != ""){
//     //$service_name = "_".$service_name;
//     $service_name = "customer";
// }
//$script = "<script type='text/javascript'>window.location.replace('login".$service_name.".php')</script>";
//$script = "<script type='text/javascript'>window.location.replace('https://".$host_name.$service_name."/')</script>";
// $script = "<script type='text/javascript'>window.location.replace('/".$service_name."')</script>";

session_destroy();


echo("<script type='text/javascript'>window.location.replace('/login.php');</script>");

// echo($script);


?>

