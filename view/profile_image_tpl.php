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
<?php include 'tools/side_bar.php'; ?>
<!-- sidebar and header end -->

<!-- uploader name start -->    
    <form action="proccess/proccess.php" method="post" enctype="multipart/form-data">
        <div class="up_img">
            <div class="drag-area">
                <div class="icon"><i class="fas fa-cloud-upload-alt"></i></div>
                <label for="file" class="button">browse File
                <input type="file" name="file-image" id="file" class="dis_none">
                </label>
                <!-- <div class="send_btn"> -->
                    <label for="send" class="send_btn">SEND    
                        <input type="submit" value="" id="send">
                    </label>
                <!-- </div> -->
            </div>
        </div>
    </form>
<!-- uploader name end --> 

    <script src="assets/js/script.js"></script>
</body>
</html>