<!DOCTYPE html>
<html>
<head>
<title>AmirHossein Parseh</title>
<link rel="icon" type="png" href="assets/img/IMG_20221109_192257_362.jpg">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="font-awesome.min.css">
<link rel="stylesheet" href="assets/css/index_1.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" 
integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" 
crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="custom_bac_color">

<!-- Icon Bar (Sidebar - hidden on small screens) -->
<nav class="asied_bar">
  <!-- Avatar image in top left corner -->
  <!--  <img src="IMG_20221109_192257_362.jpg" style="width:100%"> -->
  <a href="admin.php"><img src="assets/img/IMG_20221109_192257_362.jpg" alt="Armin" class="w3-center w3-circle " style="width:100px"></a>
  <div class="buttons">
  <a href="#" class="w3-button">
    <div class="center">
    <i class="fa fa-home w3-xxlarge"></i>
    <p>HOME</p>
    </div>
  </a>
  <a href="#about" class="w3-button">
  <div class="center">
    <i class="fa fa-user w3-xxlarge"></i>
    <p>ABOUT</p>
    </div>
  </a>
  <a href="#photos" class="w3-button">
  <div class="center">
      <i class="fa fa-eye w3-xxlarge"></i>
      <p>PHOTOS</p>
    </div>
  </a>
  <a href="#contact" class="w3-button">
  <div class="center">
      <i class="fa fa-envelope w3-xxlarge"></i>
      <p>CONTACT</p>
    </div>
    </a>
  </div>
</nav>
<!-- navbar section start -->
<div class="dis_black">
<nav class="nav_bar">
  <!-- Avatar image in top left corner -->
  <!--  <img src="IMG_20221109_192257_362.jpg" style="width:100%"> -->
  <img src="assets/img/IMG_20221109_192257_362.jpg" alt="Armin" class="w3-center w3-circle ">
  <div class="buttons_nav">
  <a href="#" class="w3-button">
    <div class="center">
    <i class="fa fa-home w3-xxlarge"></i>
    <p>HOME</p>
    </div>
  </a>
  <a href="#about" class="w3-button dis_none_2">
  <div class="center">
    <i class="fa fa-user w3-xxlarge"></i>
    <p>ABOUT</p>
    </div>
  </a>
  <a href="#photos" class="w3-button dis_none">
  <div class="center">
      <i class="fa fa-eye w3-xxlarge" ></i>
      <p>PHOTOS</p>
    </div>
  </a>
  <a href="#contact" class="w3-button dis_none">
  <div class="center">
      <i class="fa fa-envelope w3-xxlarge"></i>
      <p>CONTACT</p>
    </div>
    </a>
  </div>
</nav>
</div>
<!-- navbar section end -->


<!-- Page Content -->
<div class="inline_disp mar_0 mar_t_25" >
  <!-- Header/Home -->
  <header class="head" id="home">
    <div class="shadow_animat"></div>
    <img src="assets/img/20221025_184940.jpg" alt="boy" class="img_res" width="992" height="1108">
  </header>

  <!-- About Section -->
  <div class="w3-content w3-justify w3-text-grey w3-padding-64" id="about">
    <h2 class="w3-text-light-grey" id="my_name">About Me</h2>
      <!-- aboute me text -->
      <p>
        <?= $textAbouteMe->text ; ?>
      </p>
      <!-- // aboute me text -->
    <h3 class="w3-padding-16 w3-text-light-grey" id="my_skills">My Skills</h3>

    <?php foreach($mySkills as $key => $value): ?>  
      <p class="w3-wide"><?= $value['name'] ?></p>
      <div class="ref_color border_rad">
        <div class="ref_color_2 border_rad_2" style="height:28px;width:<?= $value['number']?>%"></div>
      </div>
    <?php endforeach ; ?>
    
    <div class="count_bar">
    <div class="counter" id="cout_1">
      <div class="count_text">
        <span class="ct_1">11+</span>
         <span class="ct_2">Partners</span>
      </div>
    </div>
    <div class="counter" id="cout_2">  
      <div class="count_text">
        <span class="ct_1">55+</span>
         <span class="ct_2">Projects Done</span>
      </div>
    </div>
    <div class="counter" id="cout_3">   
    <div class="count_text">
        <span class="ct_1">89+</span>
         <span class="ct_2">Happy Clients</span>
      </div>
    </div>
    <div class="counter" id="cout_4">  
      <div class="count_text">
        <span class="ct_1">150+</span>
         <span class="ct_2">Meetings</span>
      </div>
    </div>  
  </div>
    
    <!-- Testimonials -->
    <h3 class="w3-padding-24 w3-text-light-grey" id="per_text">My Reputation</h3>  
    <div class="person_sec">

    <?php foreach($getMyReputation as $key => $value): ?>
      <div class="person_box" id="person_1">
        <img src="https://picsum.photos/2560/2560?random=<?= rand(1,100) ;?>" alt="Hadi" class="w3-left w3-circle w3-margin-right" style="width:80px">
        <div class="text_1">
          <span class="t_1"><?= $value['name'] ?></span>
          <span class="t_2"><?= $value['text'] ?></span>
        </div>
      </div>
    <?php endforeach ?>
    
  </div>
  <!-- End About Section -->
  </div>
  
  <!-- Portfolio Section -->
  <div class="w3-content" id="photos">
    <div class="port_sec">
    <h2 class="w3-text-light-grey" id="my_photos">My certificates</h2>
    </div>
    <!-- Grid for photos -->
     <div class="photo_grid">
      <div class="pics">
        <img src="assets/img/PHP-Course.jpg" class="pics mart_1" >
      </div>
      <div class="pics">
        <img src="assets/img/AOSC-AutoCertificate.jpg" class="pics mart_1" >
        </div>
        <div class="pics">
        <img src="assets/img/1-certificate.jpg" class="pics mart_1"> 
      </div>
      <div class="pics">
        <img src="assets/img/certificate.jpg" class="pics mart_1" >
      </div>
       <!-- End photo grid  -->
   
  <!-- End Portfolio Section -->
  </div>

  <!-- Contact Section -->
  <div class="marg" id="contact">
    <div class="contact">
    <h2 class="w3-text-light-grey" id="contact_me">Contact Me</h2>
    </div>

    <div class="w3-section loct">
      <div class="locat_dis">
      <div class="contact_icon">
      <i class="fa fa-map-marker icon_size"></i>  
      </div>
      <div class="contact_text">
      <p id="location_1"><?= $contactMe->location ?></p>
      </div>
      </div>
      <div class="locat_dis">
      <div class="contact_icon">
      <i class="fa fa-phone icon_size"></i>
      </div>
      <div class="contact_text">
      <p>Phone: +98 <?= $contactMe->phone ?></p>
      </div>
      </div>
      <div class="locat_dis">
      <div class="contact_icon">
      <i class="fa fa-envelope icon_size"></i>
      </div>
      <div class="contact_text">
      <p>Email: <?= $contactMe->email ?></p>
      </div>
      </div>
    </div>

    <!-- <form action="/action_page.php" target="_blank">
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Name" required name="Name"></p>
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Email" required name="Email"></p>
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Subject" required name="Subject"></p>
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Message" required name="Message"></p>
      <p>
        <button class="w3-button w3-light-grey w3-padding-large" type="submit">
          <i class="fa fa-paper-plane"></i> SEND MESSAGE
        </button>
      </p>
    </form> -->
  <!-- End Contact Section -->
  </div>
 
    <!-- Footer -->


<!-- END PAGE CONTENT -->
</div>


<script src="assets/js/script.js"></script>
</body>
</html>
