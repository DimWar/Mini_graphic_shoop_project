<?php
include 'bootstrap/init.php' ;

// add certificate
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
            $newFileName =  'cert' . '_' . md5($fileName . time()) . '.' . $fileExtention ;

            // move file to folder and server
            if(in_array($fileExtention , $allowedFileExtention)){
                $uploadFileDirectory = 'assets/img/certificate/' ;
                $destPath = $uploadFileDirectory . $newFileName ;
                
                // check size upload file and uoload
                $allowedFileSize = 100 * 1024 * 1024 ;
                if ($fileSize < $allowedFileSize) {
                    if (move_uploaded_file($fileTmpName , $destPath)) {
                        addAddressCertificateToDb($newFileName) ? setMessageAndRedirect('Uploaded File Is Successfully' , 'certificate.php') : setMessageAndRedirect('Uploaded File Is Failed' , 'certificate.php') ;
                    }else{
                        setMessageAndRedirect('Uploaded To File Filed !!' , 'certificate.php') ;
                    }
                }else{
                    setMessageAndRedirect('File Size Invalid!!', 'certificate.php') ;
                }

            }else{
                setMessageAndRedirect('Invalid File Format !!' , 'certificate.php') ;
            }
        }else{
            setMessageAndRedirect('uploaded Filed !!' , 'certificate.php') ;
        }
    }
}


// delete certificate
if (isset($_GET['delete_cert']) and is_numeric($_GET['delete_cert'])) {
    $certId = $_GET['delete_cert'] ;
    dleteCertificate($certId) ? setMessageAndRedirect('Delete Is Successfully' , 'certificate.php') : setMessageAndRedirect('Delete Is Failde' , 'certificate.php') ;
}

$certificates = getAllCertAddress() ;

require 'view/certificate_tpl.php' ;