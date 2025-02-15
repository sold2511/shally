<?php
include('./dbconfig.php');
session_start();
if (isset($_POST['sub']) && $_POST['sub'] =="4") {
  $email = $_SESSION['email'];
  $feed = mysqli_real_escape_string($conn,$_POST['feed']);
  $sql4 = "INSERT INTO `feedback` (`id`, `name`, `email`, `feed`) VALUES (NULL, '$name', '$email', '$feed');";
  $res = mysqli_query($conn,$sql4);
 if($res) { 
  ?>
  <script>alert("Feedback Successfully")</script>
  <?php
}  
else { 
  die("Error". mysqli_connect_error());  
}  
}

?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <!--fontawesome-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="style1.css">


  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600&display=swap" rel="stylesheet">
  <style>
    
    body {
      font-family: 'Montserrat'sans-serif;
      /* background-color: #252526; */
    }
    .dropdown-content{
      min-width: 138px;
    }

    .main-content {
      margin-top: 50px;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
    }

    .content-container {
      display: flex;

      margin-top: 40px;
      margin-bottom: 40px;

    }

    .img {

      display: flex;
      height: 400px;
      width: 400px;

    }

    .content {


      height: 400px;
      width: 600px;
      padding: 20px 40px;
      /* color: bac; */
      box-shadow: rgba(0, 0, 0, 0.16) 0px 3px 6px, rgba(0, 0, 0, 0.23) 0px 3px 6px;

    }

    .user {
      width: 270px;
      height: 80px;
      display: inline-flex;
      margin: 3px 3px;

    }

    .icon {

      width: 70px;
      height: 70px;
      border-radius: 50%;
      margin-right: 10px;

    }

    .name {
      width: 150px;
      height: 70px;

    }

    
  

    .sub-content {
      width: auto;
      height: 150px;
      margin: 3px 3px;
    }

    .p1 {
      position: relative;
      top: 10px;
    }
    .college-image{
      object-fit: cover; 
      overflow :hidden ;
      box-shadow: rgba(0, 0, 0, 0.16) 0px 3px 6px, rgba(0, 0, 0, 0.23) 0px 3px 6px;

    }


    .newsletter{
      padding:0 20px;
    /* background:black; */
    /* background-size: cover;
    bac
    background-position: center;
    background-attachment: fixed; */
}

.newsletter form{
    max-width: 45rem;
    margin-left: auto;
    text-align: center;
    padding:5rem 0;
}

.newsletter form h3{
    font-size: 2.2rem;
    color:#fff;
    padding-bottom: .7rem;
    font-weight: normal;
}

.newsletter form .box{
    width: 100%;
    margin: .7rem 0;
    padding:1rem 1.2rem;
    font-size: 1.6rem;
    color:var(--black);
    border-radius: .5rem;
    text-transform: none;
}
.heading {
      /* width: 100vw; */
      background:white;
      /* height: 50px; */
      margin: 18px 3px;
      color:dodgerblue;
      text-align: center;
    /* margin: 2rem; */
    padding:20px 0;
    position: relative;
    }


/* .heading::before{
    content: '';
    position: absolute;
    top:50%; left:0;
    transform: translateY(-50%);
    width: 100%;
    height:.01rem;
    background: rgba(0,0,0,.1);
    z-index: -1;
}

.heading span{
    font-size: 3rem;
    padding:.5rem 2rem;
    color:var(--black);
    /* background: #fff; */
    /* border:var(--border); */
/* } */ 

#slidy-container { 
  width: 100%; 
  overflow: hidden;
   margin: 0 auto;
  /* height: 60vh; */
}
    .foot{
      background-color: white;
    }
  </style>


  <title>StudentOcean</title>
</head>


<body>
  <?php

 

  include('./header.php');?>


  <section class="content-banner">

    <div class="container">
      <div class="row d-flex justify-content-center">
        <div class="col-md-12">
          <div class="banner-con text-center">
            <p class="first-title">STUDYMitra</p>
            <p class="banner-des">All semester notes,Last year question paper and project report,Teachers can upload
              notes according to Semester...</p>

          </div>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div id="slidy-container">
      <h1 class="heading"> <span>Recommended Videos</span> </h1>
      <figure id="slidy">
        <iframe width="100%" height="512" src="https://www.youtube.com/embed/JMUxmLyrhSk" title="Artificial Intelligence Full Course | Artificial Intelligence Tutorial for Beginners | Edureka" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        <iframe width="100%" height="512" src="https://www.youtube.com/embed/hlGoQC332VM" title="SQL - Complete Course in 3 Hours | SQL One Shot using MySQL" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
      </figure>
    </div>
  </section>

  <section class="blogs" id="blogs">

<h1 class="heading"> <span>feedback</span> </h1>

<section class="newsletter" >

    <form method="post" role="form" action="" >
        <h3>give your feedback here...</h3>
        <input type="text" name="feed" placeholder="Feedback here" class="box">
        <input type="hidden" name="sub" value="4"> 
        <button class="btn" type="submit" >Feedback</button>
        <!-- <a href="./feedback.html"><input type="submit" value="feedback"> -->
        </a>
    </form>

</section>
</section>
<div class="foot">
<section class="footer">

  <div class="box-container">

      <div class="box">
          <h3>our locations</h3>
          <a href="#"><i class="fas fa-map-marker-alt"></i> india </a>
          <a href="#"><i class="fas fa-map-marker-alt"></i> USA </a>
      </div>

      <div class="box">
          <h3>quick links</h3>
          <a href="./Homepage.php"><i class="fas fa-arrow-right"></i> home </a>
          <a href="#featured"> <i class="fas fa-arrow-right"></i> featured </a>
          <a href="#arrivals"> <i class="fas fa-arrow-right"></i> Category </a>
          <a href="#reviews"> <i class="fas fa-arrow-right"></i> reviews </a>
          <a href="#blogs"> <i class="fas fa-arrow-right"></i> feedback </a>
         
      </div>

      <div class="box">
          <h3>extra links</h3>
          <a href="#"> <i class="fas fa-arrow-right"></i> account info </a>
          <a href="#"> <i class="fas fa-arrow-right"></i> ordered items </a>
          <a href="#"> <i class="fas fa-arrow-right"></i> privacy policy </a>
          <a href="#"> <i class="fas fa-arrow-right"></i> payment method </a>
          <a href="#"> <i class="fas fa-arrow-right"></i> our serivces </a>
      </div>

      <div class="box">
          <h3>contact info</h3>
          <a href="#"> <i class="fas fa-phone"></i> 1231231231 </a>
          <a href="#"> <i class="fas fa-envelope"></i> shally@gmail.com </a>
          <img src="https://raw.githubusercontent.com/KordePriyanka/Books4MU-Book-Store-Website-/main/image/worldmap.png" class="map" alt="">
      </div>

  </div>

  

  <div class="credit"> created by <span>Shally Goyal </span>copyright ©2024 all rights reserved! </div>

</section>
</div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script type="text/javascript">
    $(function() {
      var navbar = $('.header-inner');
      $(window).scroll(function() {
        if ($(window).scrollTop() <= 40) {
          navbar.removeClass('navbar-scroll');
        } else {
          navbar.addClass('navbar-scroll');
        }
      });
    });
  </script>
  
</body>
<script src="./script.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> -->
</html>