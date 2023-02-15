<?php
   require_once('m.dbcon.php');
   session_start();
   // $host = '211.254.212.182:13306';
   // $user = 'root';
   // $pw = '1howtobiz';
   // $db_name = 'studylab';

   //    $mysqli = new mysqli($host, $user, $pw, $db_name); //db 연결
   //    $mysqli->set_charset("utf8");
      
   //login.php에서 입력받은 id, password
   $loginId = $_POST['loginId'];
   $password = $_POST['password'];
   

    


   $q = "SELECT * FROM user WHERE BINARY(loginId) = BINARY'$loginId' AND password = '$password'";
   error_log('query: '.$q);


   $result = sql_query($q);
   $row = $result->fetch_array();
   
   //결과가 존재하면 세션 생성
   if ($row != null) {
      error_log('세션 생성');
      $_SESSION['loginid'] = $row['loginid'];
      $_SESSION['realName'] = $row['real_name'];
      $_SESSION['id'] = $row['id'];
      $_SESSION['roleid']= $row['role_id'];
      $_SESSION['brand_id']= $row['brand_id'];
      $_SESSION['target_user_id']= $row['target_user_id'];
      
      ////
      if($_SESSION['roleid']==2){
         $_SESSION['roleId']=2;
         $_SESSION['brandId'] = $row['brand_id'];
         
      }else if($_SESSION['roleid']==3){
         $_SESSION['roleId']=3;
         $_SESSION['brandId'] = $row['brand_id'];
         $_SESSION['ownerId'] = $row['id'];
         $_SESSION['branchId'] = $row['branch_id'];
      }else if($_SESSION['roleid']==4){
         $_SESSION['roleId']=4;
         $_SESSION['brandId'] = $row['brand_id'];
         $_SESSION['targetUserId']= $row['target_user_id'];
         $_SESSION['managerId'] = $row['id'];
         $_SESSION['branchId'] = $row['branch_id'];
      }else if($_SESSION['roleid']==1){
         $_SESSION['roleId']=1;
      }else if($_SESSION['roleid']==5){
         echo "<script>alert('아이디 또는 비밀번호가 일치하지 않습니다.')</script>";
         echo "<script>location.replace('login.php');</script>";
      }



      


      ////
      
      // echo "<script>location.replace('index.php');</script>";







      echo ("<meta http-equiv='refresh' content='0;url=main.php'>");
      
   }
   
   //결과가 존재하지 않으면 로그인 실패
   else{
      echo "<script>alert('아이디 또는 비밀번호가 일치하지 않습니다.')</script>";
      echo "<script>location.replace('login.php');</script>";
      exit;
   }
?>
