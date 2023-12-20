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
    

    <header>
        <div class="head_name">
            <h1>
                Admin Panel
            </h1>
        </div>
    </header>
    
    <aside>
        <div class="side_bar">
            <div class="boutton_side">
                <a href="#" class="button"> 
                    <i class="fa-solid fa-user-gear"></i>
                    <p class="botton_text">profile</p>
                </a>
                <a href="#" class="button">
                    <i class="fa-regular fa-image"></i>
                    <p class="botton_text">image</p>
                </a>
                <a href="#" class="button">
                    <i class="fa-regular fa-lightbulb"></i>
                    <p class="botton_text">skills</p>
                </a>
                <a href="#" class="button">
                    <i class="fa-solid fa-pencil"></i>
                    <p class="botton_text">about me</p>
                </a>
                <a href="#" class="button">
                    <i class="fa-solid fa-certificate"></i>
                    <p class="botton_text">Certificate</p>
                </a>
                <a href="#" class="button">
                    <i class="fa-solid fa-paper-plane"></i>
                    <p class="botton_text">contact me</p>
                </a>
            </div>
        </div>
    </aside>
    <form action="proccess/proccess.php" method="post" enctype="multipart/form-data">
        <div class="drag-area">
            <div class="icon"><i class="fas fa-cloud-upload-alt"></i></div>
            <label for="file" class="button">browse File
            <input type="file" name="file" id="file" class="dis_none">
            </label>
            <!-- <button>Browse File</button> -->
        </div>
    </form>
 

    <script src="assets/js/script.js"></script>
</body>
</html>