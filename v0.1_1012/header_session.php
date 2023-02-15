<?php
require_once('m.dbcon.php');

error_log("header_session file");
$roleid = $_SERVER["role_id"];

if(session_id() == "" || !isset($_SESSION)){
    error_log("세션 없음");
    session_start();
    
}

// 2번 부분
// user_idx
$host_name = explode(":",$_SERVER["HTTP_HOST"])[0];
error_log("host name: ".$host_name);

if(!isset($_SESSION["id"]) && !isset($_SESSION["password"])){
    header("location: login.php");
    // echo ("<meta http-equiv='refresh' content='0;url=user_study_login.php'>");
    error_log("hn:$host_name");
}


?>
