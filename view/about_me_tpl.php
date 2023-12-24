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
    

<?php include 'tools/session_alert.php'; ?> 

<!-- sidebar adn header start -->
<?php include 'tools/side_bar.php'; ?>
<!-- sidebar and header end -->

<!-- input form start -->
    <form action="aboutMe.php" method="post">
        <div class="form_sec">
          <h3 class="form_text">Edite Aboute Me</h3>  
        <textarea name="newText" id="" cols="30" rows="10" class="inp_text"><?= $textAbouteMe->text ?></textarea>
        <label for="edit_btn" class="e_btn">Update
            <input type="submit" value="" id="edit_btn">
        </label>
        </div>
    </form>
<!-- input form end -->

    <script src="assets/js/script.js"></script>
</body>
</html>