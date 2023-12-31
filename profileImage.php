<?php
include 'bootstrap/init.php' ;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['uploadBtn']) and $_POST['uploadBtn'] == 'upload') {
        if (isset($_FILES['uploadFile']) and !empty($_FILES['uploadFile']) and $_FILES['uploadFile']['size'] != 0) {
            
            // $_files members
            $fileName = $_FILES['uploadFile']['name'] ;
            $fileSize = $_FILES['uploadFile']['size'] ;
            $fileType = $_FILES['uploadFile']['type'] ;
            $fileTmpName = $_FILES['uploadFile']['tmp_name'] ;
            
            // name file uploaded
            $fileNameSeprate = explode('.' , $fileName) ;
            $fileExtention = strtolower(end($fileNameSeprate)) ;
            
            // access file uploaded
            $allowedFileExtention = ['jpg' , 'png' , 'jpeg' , 'gif'] ;
            
            // new name file unique
            $newFileName =  'profile' . '_' . md5($fileName . time()) . '.' . $fileExtention ;

            // move file to folder and server
            if(in_array($fileExtention , $allowedFileExtention)){
                $uploadFileDirectory = 'assets/img/profile/' ;
                $destPath = $uploadFileDirectory . $newFileName ;

                // check size upload file and uoload
                $allowedFileSize = 5 * 1024 * 1024 ;
                if ($fileSize < $allowedFileSize) {
                    if (move_uploaded_file($fileTmpName , $destPath)) {
                        addAddressImageToDb($newFileName) ? setMessageAndRedirect('Uploaded File Is Successfully' , 'profileImage.php') : setMessageAndRedirect('Uploaded File Is Failed !!' , 'profileImage.php') ;
                    }else{
                        setMessageAndRedirect('Uploaded To File Filed !!' , 'profileImage.php') ;
                    }
                }else{
                    setMessageAndRedirect('File Size Invalid!!', 'profileImage.php') ;
                }

            }else{
                setMessageAndRedirect('Invalid File Format !!' , 'profileImage.php') ;
            }
            
            // setMessageAndRedirect('successfully uploaded' , 'profileImage.php') ;
        }else{
            setMessageAndRedirect('uploaded Filed !!' , 'profileImage.php') ;
        }
    }
}


require 'view/profile_image_tpl.php' ;