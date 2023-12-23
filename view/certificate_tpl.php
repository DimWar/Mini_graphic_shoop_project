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
    
<!-- head name start -->
    <header>
        <div class="head_name">
            <h1>
                Admin Panel
            </h1>
        </div>
    </header>
<!-- head name end -->

<!-- sidebar name start -->    
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
                <a href="view/about_me_tpl.php" class="button">
                    <i class="fa-solid fa-pencil"></i>
                    <p class="botton_text">about me</p>
                </a>
                <a href="#" class="button">
                    <i class="fa-solid fa-certificate"></i>
                    <p class="botton_text">Certificate</p>
                </a>
                <a href="view/contact_me_tpl.php" class="button">
                    <i class="fa-solid fa-paper-plane"></i>
                    <p class="botton_text">contact me</p>
                </a>
            </div>
        </div>
    </aside>
<!-- sidebar name end -->

<!-- add skill start -->    
<form action="" method="" enctype="">
    <div class="up_img">
           <h3 class="skill_name_sec center">Add Your Certificate</h3>
            <div class="drag-area cert_editon">
                <div class="icon"><i class="fas fa-cloud-upload-alt" id="cloude"></i></div>
                <label for="file" class="button">browse File
                <input type="file" name="file-image" id="file" class="dis_none">
                </label>
                <label for="number" class="Range">inter Certificate Range :
                <input type="number" name="" id="">
                </label>
                <!-- <div class="send_btn"> -->
                    <label for="send" class="send_btn cert_send">SEND    
                        <input type="submit" value="" id="send">
                    </label>
                <!-- </div> -->
            </div>
        </div>
        <!-- user skill start --> 

        <table class="list_skill cert_marg">
            <thead>
                <tr>
                    <th id="name_table">Your Certificate</th>
                </tr>
                <tr>
                    <th>Certificate name</th>
                    <th>Range</th>
                    <th>
                        Edit / Delete
                    </th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>
                        <img src="assets/img/Accredited-Test-Centre-2017-2018.jpg" alt="" class="edit_cert">
                    </th>
                    <th>+40</th>
                    <th>
                        <label for="edit_btn" class="edt_btn">
                            Edit
                            <input type="submit" value="" id="edit_btn">
                        </label>
                        <label for="delete_btn" class="dlt_btn">
                            Delete
                            <input type="submit" value="" id="delete_btn">
                        </label>
                    </th>
                    
                </tr>  
            </tbody>
        </table>


        <!-- user skill end --> 
        
        
        
        

    </form>
<!-- add skill end --> 



    <script src="assets/js/script_2.js"></script>
</body>
</html>