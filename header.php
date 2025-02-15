<?php
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
 $select = mysqli_query($conn, "SELECT * FROM `register` WHERE id = '$user_id'") or die('query failed');
 if (mysqli_num_rows($select) > 0) {
   $fetch = mysqli_fetch_assoc($select);
 }
?>
<style>
    .dropbtn {
        background-color: transparent;
        color: white;
        padding: 10px;
        font-size: 16px;
        border: none;
        font-weight: 500;
        min-width: 150px;
        cursor: pointer;
    }

    .dropdown {
        position: relative;
        display: inline-block;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: rgba(0, 0, 0, 0.7);
        box-shadow: rgba(0, 0, 0, 0.19) 0px 10px 20px, rgba(0, 0, 0, 0.23) 0px 6px 6px;
        z-index: 1;
        backdrop-filter: blur(5px);
        min-width: 180px;
    }

    .dropdown-content a {
        color: white;
        padding: 10px 16px;
        text-decoration: none;
        display: block;
    }

    .dropdown-content a:hover {
        background-color: #252526;
    }

    .dropdown:hover .dropdown-content {
        display: block;
    }

    .dropdown:hover .dropbtn {
        box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 1px 3px 1px;
        color: rgb(30, 53, 255);
    }

    /* Submenu Styling */
    .submenu {
        position: absolute;
        left: 100%;
        top: 0;
        display: none;
        background-color: rgba(0, 0, 0, 0.7);
        min-width: 180px;
    }

    .dropdown-content .has-submenu:hover .submenu {
        display: block;
    }

    .has-submenu {
        position: relative;
    }

    .arrow {
        float: right;
        margin-left: 10px;
    }
</style>

 
<header class="header">
    <div class="header-inner"> 
      <div class="container-fluid px-lg-5">
        <nav class="navbar navbar-expand-lg my-navbar">
          <p class="navbar-brand"><span class="logo">
              <img src="img/logo5.png" class="img-fluid" style="width:30px; margin:-3px 0px 0px 0px;">STUDYMitra</span>
          </p>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"><i class="fas fa-bars" style="margin:5px 0px 0px 0px;"></i></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav m-auto">
              <li class="nav-item active">
                <a class="nav-link" href="./Homepage.php">Home<span class="sr-only">(current)</span></a>
              </li>
              <div class="dropdown">
                <button class="dropbtn">Study Resources</button>
                <div class="dropdown-content">
                    <div class="has-submenu">
                        <a href="#">BCA <span class="arrow">></span></a>
                        <div class="submenu">
                            <a href="./semester1.php">Semester-1</a>
                            <a href="./semester2.php">Semester-2</a>
                            <a href="./semester3.php">Semester-3</a>
                            <a href="./semester4.php">Semester-4</a>
                            <a href="./semester5.php">Semester-5</a>
                            <a href="./semester6.php">Semester-6</a>
                            <a href="./oldpaper.php">Old papers</a>
                        </div>
                    </div>
                    <div class="has-submenu">
                        <a href="#">MCA <span class="arrow">></span></a>
                        <div class="submenu">
                            <a href="./sem1.php">Semester-1</a>
                            <a href="./sem2.php">Semester-2</a>
                            <a href="./sem3.php">Semester-3</a>
                            <a href="./sem4.php">Semester-4</a>
                            <a href="./oldpper.php">Old papers</a>
                        </div>
                    </div>
                </div>
            </div>
            
              <li class="nav-item">
                <a class="nav-link" href="teacher.php">Teacher</a>
              </li>  
              <!-- <li class="nav-item">
                <a class="nav-link" href="./placement.php">Placement</a>
              </li> -->
              <li class="nav-item">
                <a class="nav-link" href="./about.php">About Us</a>
              </li>
            </ul>
            <div class="div-inline my-1 my-lg-0">
              <button class="header-btn my-5 my-sm-0" onclick="window.location.href='studentdashborad.php'"><?php echo $fetch['uname']; ?></button>
              <button class="header-btn my-5 my-sm-0" onclick="window.location.href='index.html? logout = <?php echo $user_id; ?>'">Logout</button>
            </div>
          </div>
        </nav>

      </div>
    </div>


  </header>
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