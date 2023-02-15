<?php
    require_once('m.dbcon.php');
    $hostname=$_SERVER["HTTP_HOST"];
    $exploded_hostname=explode('.',$hostname);
    $service_domain=$exploded_hostname[0];
  
  
    error_log("service_domain: ".$service_domain);
    $brand_query="SELECT * FROM
    brand
    WHERE
    service_domain='$service_domain'
    LIMIT 1";
  
    error_log("brand_query: ".$brand_query);
  
    $query_result=sql_query($brand_query);
    if ($query_result == true) {
        $row = $query_result->fetch_array();
        $brand_id=$row['id'];
    }
  
  
    error_log("brand_id: ".$brand_id);
  
    $logo_img="assets/media/images/logo.png";
    $favicon_img2="assets/media/logos/favicon.ico";

    $dir = "./media/saveImg/".$brand_id;
    $kk = is_dir($dir);
      if($dh = opendir($dir)) {
            
        while(($file = readdir($dh)) !== false) {
            
            if ($file == "." || $file == "..") {
                continue;
            }
            $fname = $dir.$file;
            error_log("$file");
            $tempname = explode('.', $file)[0];
            if($tempname == "logo_img"){
              $logo_img = "./media/saveImg/".$brand_id."/".$file;
            
            }
            if($tempname == "favicon_img"){
              $favicon_img = "./media/saveImg/".$brand_id."/".$file;
            
            }
            
            
        }
    
        closedir($dh);
        error_log("logo img: ".$logo_img);
        error_log("favicon img: ".$favicon_img);
        error_log("favicon img: ".$favicon_img2);
        
  }

?>