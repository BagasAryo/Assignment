<?php
    function upload_foto($ft,$data){
        if($data == "user"){
            $target_dir = "imgUser/";
        }else if($data == "member"){
            $target_dir = "imgMember/";
        }else{
            $target_dir = "img/";
        }
        $target_file = $target_dir . basename($ft["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        //check if file already exists.
        if(file_exists($target_file)){
            echo "Sorry, file already exits";
            $uploadOk = 0;
        }
        //check file size
        else if($ft["size"] > 500000){
            echo "Sorry your file is too large.";
            $uploadOk = 0;
        }
        //allow certain file formats
        else if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif"){
            echo "Sorry, only JPG, JPEG, PNG, & GIF files are allowed,";
            $uploadOk = 0;
        }
        //check if $uploadok is set to 0 by an error
        else if($uploadOk == 0){
            echo "Sorry, your file was not uploaded";
            //if everything is ok, try to upload file
        }else{
            if(move_uploaded_file($ft["tmp_name"],$target_file)){
                //echo "", htmlspecialchars(basename($_FILES["foto"])). "has been uploaded.";
                return true;
            }else{
                //echo "Sorry, there was an error uploading your file.";
                return false;
            }
        }
    }
?>  