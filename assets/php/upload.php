 <!-- <?php 

if(isset($_FILES['file'])){
    $arr_file_types = ['image/png''image/jpg','image/jpeg','image/gif'];

    if(!(in_array($_FILES['file']['type'] , $arr_file_types))) {
        echo "false";
        return;
    }

    if(!file_exists('uploads')){
        mkdir('uploads' , 0777);
    }

    $filename = time().'_'.$_FILES['file']['name'];

    move_uploaded_file($_FILES['file']['tmp_name'], 'uploads/'.$filename);

    echo 'uploads/'.$filename;
    die;

}

?> -->