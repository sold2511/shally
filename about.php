
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>About Us</title>
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
      integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
      crossorigin="anonymous"
    />

    <!--fontawesome-->
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
      integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
      crossorigin="anonymous"
    />

    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="navbar.css" />
    <link rel="stylesheet" href="about.css" />
    <link
      href="https://fonts.googleapis.com/css2?family=Tiro+Bangla&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link
      href="https://fonts.googleapis.com/css2?family=Tiro+Bangla&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  </head>

  <body>
    <? php

    include 'dbconfig.php';
    session_start();
    $user_id = $_SESSION['user_id'];
  
    if (!isset($user_id)) {
      header('location:userlogin.php');
    };
  
    if (isset($_GET['logout'])) {
      unset($user_id);
      session_destroy();
      header('location:userlogin.php');
    }
  
  
    ?>
    <?php include('./header.php'); ?>
    <h1 class="title">ABOUT &nbsp; DEVELOPER</h1>
    <div class="about">
      Hello Everyone we are developer of Student Ocean.This website only for BCA students,If you want to give us any suggestion regarding this site, then you can contact us.
     
    </div>
    <div class="content">
      <div class="dev" id="dev1" data-aos="fade-up"
      data-aos-duration="1000">
        <div class="profile">
          <img class="circular--square" src="./profileimg/1.jpg" alt="profile" />
          <p class="devname">SHALLY GOYAL</p>
          <div class="social-container">
            <ul class="social-icons">
              <li><a href="#" ><i class="fa fa-instagram"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
            </ul>
        </div>
         
        </div>
        <div class="info">
            <p class="info-title">Hii I Am  Web Developer</p>
            <div class="personal-details">
                <i class="fa fa-envelope fa-2x"></i>
                <p>Gmail</p>
                <p>shallygoyal@gmail.com</p>
                <i class="fa fa-phone fa-2x"></i>
                <p>Phone no</p>
                <p>7234512345</p>
                <i class="fa fa-map-marker fa-2x"></i> 
                <p>Location</p>
                <p>Ratanada jodhpur(Raj)</p>
            </div>
        </div>
      </div>
     
    </div>
  
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
  </script>
  </body>
</html>
