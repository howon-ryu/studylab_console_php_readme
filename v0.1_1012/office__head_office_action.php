<?php
    require_once('m.dbcon.php');
    $logo_file = $_FILES['logo_img'];
    $favicon_file = $_FILES['favicon_img'];

    $brand_id = isset($_POST['brand_id'])?($_POST['brand_id']): "0";
    $domain = isset($_POST['domain'])?($_POST['domain']): "0";
    $brand_name  = $_POST['brand_name'];
    $mode  = $_POST['mode'];
    error_log("action_start");
    error_log("domain : $domain");
    error_log("mode : $mode");
    error_log("brand_id : $brand_id");

    if($mode == "add"){
        $q_query = "SELECT id FROM brand WHERE service_domain = '".$domain."'";
        error_log("q:$q_query");
        $id_query=sql_query($q_query);
        
        error_log(print_r($id_query,true));
        $result_id=$id_query->fetch_assoc();
        
        error_log(print_r($result_id,true));
        $brand_id = $result_id['id'];



   
    }


    if($logo_file!=null){
        error_log(print_r($logo_file,true));   
        if(empty($logo_file["name"])){
            error_log("empty");
        }else{
            checkDirectoryExist("./media/saveImg/".$brand_id);
            // 이전의 logo_img 파일이 있으나 확장자 혹은 글자 하나 차이로 새로운 logo_img 파일이 들어올경우를 위해 dir 안에 있는 모든 logo_img 파일 제거
            $tt = './media/saveImg/'.$brand_id;
            $handle  = opendir($tt);  
            
            if(is_dir($tt)) {
                
                if($dh = opendir($tt)) {
                    
                    while(($file = readdir($dh)) !== false) {
                        if ($file == "." || $file == "..") {
                            continue;
                        }
                        $fname = $tt.$file;
                        error_log("$file");
                        $tempname = explode('.', $file)[0];
                        if($tempname == "logo_img"){
                            unlink('./media/saveImg/'.$brand_id .'/'.$file);
                        }
                        
                    }
                    closedir($dh);
                }
            }
            checkDirectoryExist("../../../student/v0.2.2.1_student/media/saveImg/".$brand_id);
            // 이전의 logo_img 파일이 있으나 확장자 혹은 글자 하나 차이로 새로운 logo_img 파일이 들어올경우를 위해 dir 안에 있는 모든 logo_img 파일 제거
            $ta = "../../../student/v0.2.2.1_student/media/saveImg/".$brand_id;
            
            
            if(is_dir($ta)) {
                
                if($da = opendir($ta)) {
                    
                    while(($file2 = readdir($da)) !== false) {
                        if ($file2 == "." || $file2 == "..") {
                            continue;
                        }
                        $fname2 = $ta.$file2;
                        error_log("$file");
                        $tempname2 = explode('.', $file2)[0];
                        if($tempname2 == "logo_img"){
                            unlink('../../../student/v0.2.2.1_student/media/saveImg/'.$brand_id .'/'.$file2);
                        }
                        
                    }
                    closedir($da);
                }
            }


            
            $extension = end(explode('.', $logo_file['name']));
            
            // checkDirectoryExist("./media/saveImg/".$brand_id);
            // checkDirectoryExist("../../../student/v0.2.2.1_student/media/saveImg/".$brand_id);

            // $dir = "../../../student/v0.2.2.1_student/media/saveImg/".$brand_id;
            // $kk = is_dir($dir);
            // error_log("kk:$kk");
            $filepath_stu = "../../../student/v0.2.2.1_student/media/saveImg/".$brand_id."/logo_img.".$extension;
            $filepath = "./media/saveImg/".$brand_id."/logo_img.".$extension;
            // move_uploaded_file($logo_file['tmp_name'], $filepath_stu);
            move_uploaded_file($logo_file['tmp_name'], $filepath);
            copy($filepath,$filepath_stu);
            
        }
        
    }else{
        error_log(print_r("logo_null",true));
    }




    if($favicon_file!=null){
        
        error_log(print_r($favicon_file,true));   
        if(empty($favicon_file["name"])){
            error_log("empty");
        }else{
            checkDirectoryExist("./media/saveImg/".$brand_id);
            checkDirectoryExist("../../../student/v0.2.2.1_student/media/saveImg/".$brand_id);
            // 이전의 favicon_img 파일이 있으나 확장자 혹은 글자 하나 차이로 새로운 favicon_img 파일이 들어올경우를 위해 dir 안에 있는 모든 favicon_img 파일 제거
            $tt = './media/saveImg/'.$brand_id;
            $handle  = opendir($tt);   // 핸들러 
            
            if(is_dir($tt)) { // 디랙토리 존재?
                
                if($dh = opendir($tt)) { // 디랙토리 열기
                    
                    while(($file = readdir($dh)) !== false) { 
                        if ($file == "." || $file == "..") { // 디랙토리에 있는 파일들을 순회 하면서 '.' 이나 '..' 인 경우는 거름
                            continue;
                        }
                        //
                        error_log("$file"); // 파일명(확장자 포함)
                        $tempname = explode('.', $file)[0]; //  파일명(확장자 x)
                        if($tempname == "favicon_img"){
                            unlink('./media/saveImg/'.$brand_id .'/'.$file); // favicon_img 가 있다면 어떤 확장자던 다 지우기
                        }
                        
                    }
                    closedir($dh);
                }
            }
            
            // 이전의 logo_img 파일이 있으나 확장자 혹은 글자 하나 차이로 새로운 logo_img 파일이 들어올경우를 위해 dir 안에 있는 모든 logo_img 파일 제거
            $ta = "../../../student/v0.2.2.1_student/media/saveImg/".$brand_id;
            
            
            if(is_dir($ta)) {
                
                if($da = opendir($ta)) {
                    
                    while(($file2 = readdir($da)) !== false) {
                        if ($file2 == "." || $file2 == "..") {
                            continue;
                        }
                        $fname2 = $ta.$file2;
                        error_log("$file");
                        $tempname2 = explode('.', $file2)[0];
                        if($tempname2 == "favicon_img"){
                            unlink('../../../student/v0.2.2.1_student/media/saveImg/'.$brand_id .'/'.$file2);
                        }
                        
                    }
                    closedir($da);
                }
            }
            $extension = end(explode('.', $favicon_file['name']));
            $filepath_stu = "../../../student/v0.2.2.1_student/media/saveImg/".$brand_id."/favicon_img.".$extension;
            $filepath = "./media/saveImg/".$brand_id."/favicon_img.".$extension;
            move_uploaded_file($favicon_file['tmp_name'], $filepath);
            copy($filepath,$filepath_stu);
        }
    }else{
        error_log(print_r("favi_null",true));
    }

    
    




    error_log("action_end");
    function checkDirectoryExist($path) {
        $oldumask = umask(0);
        if(!is_dir($path)) {
            error_log("path:$path");
            mkdir($path, 0777, true);
            umask($oldumask);
            return false;
        } else {
            umask($oldumask);
            return true;
        }
    }




    
?>

