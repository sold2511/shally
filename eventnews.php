<?php
  include 'dbconfig.php';
  session_start();
  $teacher_id=$_SESSION['teacher_id'];
  $teacher_id=$_SESSION['teacher_id'];
  if (!isset($teacher_id)) {
    header('location:userlogin.php');
  };

  if (isset($_GET['logout'])) {
    unset($teacher_id);
    session_destroy();
    header('location:userlogin.php');
  }

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Teacherdashboard</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css">
  <scrip src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8">
    </script>
    <style>
      * {
        margin: 0;
        padding: 0;
        list-style: none;
        text-decoration: none;
        box-sizing: border-box;
        font-family: "Roboto", sans-serif;
      }

      body {
        background: #fff;
      }

      .wrapper .header {
        z-index: 1;
        background:#0b344a;
        position: fixed;
        width: calc(100% - 0%);
        height: 70px;
        display: flex;
        top: 0;
      }

      .wrapper .header .header-menu {
        width: calc(100% - 0%);
        height: 100%;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 0 20px;
        box-shadow: rgba(0, 0, 0, 0.16) 0px 3px 6px, rgba(0, 0, 0, 0.23) 0px 3px 6px;
      }

      .wrapper .header .header-menu .title {
        color: #fff;
        font-size: 25px;
        text-transform: uppercase;
        font-weight: 900;
      }

      .wrapper .header .header-menu .title span {
        color: #4CCEE8;
      }

      .wrapper .header .header-menu .sidebar-btn {
        color: #fff;
        position: absolute;
        margin-left: 240px;
        font-size: 22px;
        font-weight: 900;
        cursor: pointer;
        transition: 0.3s;
        transition-property: color;
      }

      .wrapper .header .header-menu .sidebar-btn:hover {
        color: #4CCEE8;
      }

      .wrapper .header .header-menu ul {
        display: flex;
      }

      .wrapper .header .header-menu ul li a {
        background: #fff;
        color: #000;
        display: block;
        margin: 0 10px;
        font-size: 18px;
        width: 34px;
        height: 34px;
        line-height: 35px;
        text-align: center;
        border-radius: 50%;
        transition: 0.3s;
        transition-property: background, color;
      }

      .wrapper .header .header-menu ul li a:hover {
        background: #4CCEE8;
        color: #fff;
      }

      .wrapper .sidebar {
        z-index: 1;
        background:#146cbc;
        position: fixed;
        top: 70px;
        width: 250px;
        height: 100%;
        transition: 0.3s;
        transition-property: width;
        overflow-y: auto;
      }

      .wrapper .sidebar .sidebar-menu {
        overflow: hidden;
      }

      .wrapper .sidebar .sidebar-menu .profile img {
        margin: 20px 0;
        width: 100px;
        height: 100px;
        border-radius: 50%;
      }

      .wrapper .sidebar .sidebar-menu .profile p {
        color: #bbb;
        font-weight: 700;
        margin-bottom: 10px;
      }

      .wrapper .sidebar .sidebar-menu .item {
        width: 250px;
        overflow: hidden;
      }

      .wrapper .sidebar .sidebar-menu .item .menu-btn {
        display: block;
        color: #fff;
        position: relative;
        padding: 25px 20px;
        transition: 0.3s;
        transition-property: color;
      }

      .wrapper .sidebar .sidebar-menu .item .menu-btn:hover {
        color: #4CCEE8;
      }

      .wrapper .sidebar .sidebar-menu .item .menu-btn i {
        margin-right: 20px;
      }

      .wrapper .main-container {
        width: (100% - 250px);

        margin-left: 250px;
        padding: 15px;
        /* background: #22242A; */
        background-size: cover;
        height: 100vh;
        transition: 0.3s;
      }

      .wrapper.collapse .sidebar {
        width: 70px;
      }

      .wrapper.collapse .sidebar .profile img,
      .wrapper.collapse .sidebar .profile p,
      .wrapper.collapse .sidebar a span {
        display: none;
      }

      .wrapper.collapse .sidebar .sidebar-menu .item .menu-btn {
        font-size: 23px;
      }



      .wrapper.collapse .main-container {
        width: calc(100% - 70px);
        margin-left: 70px;
      }

      .wrapper .main-container .card {
        background: #22242A;
        padding: 15px;

        font-size: 14px;
      }

      .main-container {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
      }

      .input::before {
        content: "";
        display: block;
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 300px;
        background: #0f1041;
      }


      .input-content {
        position: relative;
        padding: 44px 55px;
        background:rgb(117, 163, 211);
        box-shadow: rgba(0, 0, 0, 0.12) 0px 1px 3px, rgba(0, 0, 0, 0.24) 0px 1px 2px;
        
        z-index: 10;
        width: 800px;
        margin-top: 100px;
      }

      .input-content .inputbox {
        overflow: hidden;
        position: relative;
        
        padding: 15px 0 28px 200px;
      }

      .input-content .inputbox-title {
        position: absolute;
        top: 15px;
        left: 0;
        width: 200px;
        height: 30px;
        color: white;
        font-weight: bold;
        line-height: 30px;
      }

      .input-content .inputbox-content {
        position: relative;
        width: 100%;
      }

      .input-content .inputbox-content input {
        width: 100%;
        height: 30px;
        box-sizing: border-box;
        line-height: 30px;
        font-size: 20px;
        border: 0;
        padding: 10px;
        background: white;
        border-bottom: 1px solid #ccc;
        outline: none;
        border-radius: 0;
        appearance: none;
        -webkit-appearance: none;
        color: rgb(29, 25, 25);

      }

      .input-content .inputbox-content input:focus~label,
      .input-content .inputbox-content input:valid~label {
        color: #2962ff;
        transform: translateY(-20px);
        font-size: 0.825em;
        cursor: default;
      }

      .input-content .inputbox-content input:focus~.underline {
        width: 100%;
      }

      .input-content .inputbox-content label {
        position: absolute;
        top: 0;
        left: 10px;
        /* padding: 10px; */
        height: 30px;
        line-height: 30px;
        color: rgba(204, 204, 204, 0.514);
        cursor: text;
        transition: all 200ms ease-out;
        z-index: 10;
      }

      .input-content .inputbox-content .underline {
        content: "";
        display: block;
        position: absolute;
        bottom: -1px;
        left: 0;
        width: 0;
        height: 2px;
        background: #2962ff;
        transition: all 200ms ease-out;
      }

      textarea {
        background: white;

        color: black;
        font-size: 18px;
        padding: 10px 10px 10px 5px;
        display: block;
        /* padding: 5px; */
        width: 500px;
        border: none;
        border-bottom: 1px solid #c6c6c6;
        margin-top: 35px;
      }

      textarea:focus {
        outline: none;
      }

      textarea:focus~#textskill,
      textarea:valid~#textskill {
        top: 43px;
        font-size: 12px;
        color: #2962ff;
      }

      textarea:focus~.bar:before {
        width: 500px;
      }

      #textskill {
        color: #e0d0d0;
        font-size: 16px;
        font-weight: normal;
        position: absolute;
        pointer-events: none;
        left: 210px;
        top: 58px;
        transition: 300ms ease all;
      }

      .bar {
        position: relative;
        display: block;
        width: 320px;
      }

      .bar:before {
        content: "";
        height: 2px;
        width: 0;
        bottom: 0px;
        position: absolute;
        background: #2962ff;
        transition: 300ms ease all;
        left: 0%;
      }

      :root {
        --background-gradient: linear-gradient(30deg, #f39c12 30%, #f1c40f);
        --gray: #34495e;
        --darkgray: #2c3e50;
      }

      select {
        /* Reset Select */
        appearance: none;
        outline: 0;
        border: 0;
        box-shadow: none;
        /* Personalize */
        flex: 1;
        padding: 0 1em;
        color: #000;
        background-color: white;
        background-image: none;
        cursor: pointer;
        font-size: 15px;
      }

      /* Remove IE arrow */
      select::-ms-expand {
        display: none;
        
      }

      /* Custom Select wrapper */
      .select {
        position: relative;
        display: flex;
        width: 20em;
        height: 3em;
        border-radius: .25em;
        overflow: hidden;
      }

      /* Arrow */
      .select::after {
        content: '\25BC';
        position: absolute;
        top: 0;
        right: 0;
        padding: 1em;
        background-color: #a4c6e87e;
        transition: .25s all ease;
        pointer-events: none;
      }

      /* Transition */
      .select:hover::after {
        color: #22242A;
      }

      .btn {
        border: none;
        text-decoration: none;
        color: rgba(87, 84, 84, 0.95);
        background-color:rgb(253, 253, 253);
        cursor: pointer;
        transition: 0.3s all ease-in-out;
        width: 150px;
        box-shadow: rgba(0, 0, 0, 0.12) 0px 1px 3px, rgba(0, 0, 0, 0.24) 0px 1px 2px;
        border-radius: 3px;
        height: 40px;
        position: relative;
        left: 0px;
        top: 8px;
        font-size: 20px;
      }


      .btn:hover {
        background: rgba(0, 0, 0, 0.2);
        color:white;
        box-shadow: 0px 0px 10px 5px rgba(255, 255, 255, 0.85);
      }
      .upload-btn {
        border: none;
        text-decoration: none;
        color: rgba(87, 84, 84, 0.95);
        background-color:rgb(253, 253, 253);
        cursor: pointer;
        transition: 0.3s all ease-in-out;
        width: 150px;
        box-shadow: rgba(0, 0, 0, 0.12) 0px 1px 3px, rgba(0, 0, 0, 0.24) 0px 1px 2px;
        border-radius: 3px;
        height: 40px;
        font-size: 20px;
      }
      .upload-btn:hover {
        background: rgba(0, 0, 0, 0.2);
        color:white;
        box-shadow: 0px 0px 10px 5px rgba(255, 255, 255, 0.85);
      }

      .upload-btn-wrapper {
        position: relative;
        overflow: hidden;
        display: inline-block;
        left: 14px;
        top: 23px;

      }



      .upload-btn-wrapper input[type=file] {
        font-size: 100px;
        position: absolute;
        left: 0;
        top: 20;
        opacity: 0;
      }
    </style>
</head>

<body>
<?php
      $select = mysqli_query($conn, "SELECT * FROM `teacher` WHERE id = '$teacher_id'") or die('query failed');
      if(mysqli_num_rows($select) > 0){
         $fetch = mysqli_fetch_assoc($select);
      }
   ?>
  <!--wrapper start-->
  <div class="wrapper">
    <!--header menu start-->
    <?php include 'header1.php';?>
    <!--header menu end-->
    <!--sidebar start-->
    

    <div class="main-container">
      <div class="profile-container">
        <form action="eventnewscode.php"method="POST" class="profile" enctype="multipart/form-data">

          <section class="input-content">

            <div class="input-content-wrap">
              <dl class="inputbox">
                <dt class="inputbox-title">Title</dt>
                <dd class="inputbox-content">
                  <input id="input0" type="text" name="title" required />
                  <label for="input0">Enter news/event title</label>
                  <span class="underline"></span>
                </dd>
              </dl>
              <dl class="inputbox">
                <dt class="inputbox-title">Description</dt>

                <textarea type="textarea" rows="5" name="description" required></textarea>
                <span class="highlight"></span><span class="bar"></span>
                <label id="textskill">Description about news/event </label>
            </div>
            <dl class="inputbox">
              <dt class="inputbox-title">Select Category</dt>
              <div class="select">
                <select name="category">
                  <option value="1">College Event</option>
                  <option value="2">Latest News</option>

                </select>
              </div>
              <input type="submit" value="Save" class="btn" name="Save_news">
              <div class="upload-btn-wrapper">
                <button class="upload-btn">Upload image</button>
                <input type="file" accept="image/jpg, image/jpeg, image/png" name="image" />

              </div>
            

          </section>
        </form>
      </div>
    </div>



    <script type="text/javascript">
      $(document).ready(function() {
        $(".sidebar-btn").click(function() {
          $(".wrapper").toggleClass("collapse");
        });
      });
    </script>

</body>

</html>