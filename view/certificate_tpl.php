<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin page</title>
    <link rel="stylesheet" href="assets/css/fontawesome-free-6.5.1-web/fontawesome-free-6.5.1-web/css/all.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome-free-6.5.1-web/fontawesome-free-6.5.1-web/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="assets/css/admin_style/index_2.css">
</head>
<body>
 <!-- sidebar adn header start -->
<?php include 'tools/session_alert.php'; ?>
<!-- sidebar and header end -->   
<!-- sidebar adn header start -->
<?php include 'tools/side_bar.php'; ?>
<!-- sidebar and header end -->

<!-- add skill start -->    

    <form action="certificate.php" method="post" enctype="multipart/form-data">
        <div class="up_img">
        <h3 class="skill_name_sec center">Add Your Certificate</h3>
            <div class="drag-area">
                <div class="icon"><i class="fas fa-cloud-upload-alt"></i></div>
                    <label for="file-upload" class="button">browse File
                        <input type="file" name="uploadFile" id="file-upload" class="dis_none">
                    </label>
                <!-- <div class="send_btn"> -->
                    <label for="send" class="send_btn">SEND    
                        <input type="submit" name="uploadBtn" value="upload" id="send">
                    </label>
                <!-- </div> -->
            </div>
        </div>
    </form>


        <table class="list_skill cert_marg">
            <thead>
                <tr>
                    <th id="name_table">Your Certificate</th>
                </tr>
                <tr>
                    <th>Certificate name</th>
                   
                    <th>
                     Delete
                    </th>

                </tr>
            </thead>
            <tbody>
                
                <?php foreach($certificates as $key => $value): ?>
                <tr>
                    <th>
                        <img src="assets/img/certificate/<?= $value['url'] ?>" alt="" class="edit_cert">
                    </th>   
                    <th>
                        <label for="delete_btn" class="dlt_btn">
                            <a href="?delete_cert=<?= $value['id'] ?>" onclick="return confirm('are you sure to delete certificate ?');"><input type="submit" value="" id="delete_btn">Delete</a>
                        </label>
                    </th>
                </tr>   
                <?php endforeach ?>                  
            </tbody>
        </table>


        <!-- user skill end --> 
        
        
        
        


<!-- add skill end --> 



    <!-- <script src="assets/js/script_2.js"></script> -->
</body>
</html>