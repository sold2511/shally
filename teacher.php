<?php

include 'dbconfig.php';
session_start();
$user_id = $_SESSION['user_id'];
// echo $user_id;
if (!isset($user_id)) {
    header('location:userlogin.php');
  };
 
  if (isset($_GET['logout'])) {
    unset($user_id);
    session_destroy();
    header('location:userlogin.php');
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!--fontawesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">



    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="navbar.css">
    <link rel="stylesheet" href="semester.css">
    <link href="https://fonts.googleapis.com/css2?family=Tiro+Bangla&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <style>
        body {
            font-family: 'Montserrat'sans-serif;
            /* background-color: #1e1e1e; */
        }

        @media only screen and (min-width:1200px) {
            .nav-item>.nav-link {
                padding: 5px 20px !important;
                display: block !important;
            }
        }

        @media only screen and (max-width:1280px) {
            .header-inner {
                background-color: white !important;
            }

            .nav-item>.nav-link {
                color: black !important
            }

            .logo {
                color: #000 !important;
                font-weight: 500 !important;
            }
        }



        .header {
            position: relative;
            width: 100%;
            height: 70px;
            /* background-color: #252526; */
            padding: 0;
            position: fixed;
            top: 0;
            z-index: 99;
            box-shadow: 0px 1px 10px rgba(0, 0, 0, 0.4);
            transition-duration: 0.6s;
        }

        .header-inner {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 99;
        }

        .logo {
            color: #ffffff;
        }

        .nav-item .nav-link {
            display: block;
            line-height: 36px;
            text-transform: capitalize;
            font-size: 16px;
            font-weight: 500;
            color: #ffffff;
            transition: 0.15s;
        }

        .nav-item .nav-link:hover {
            color: #007acc;
            font-weight: 700;
        }


        .header-btn {
            color: #ffffff;
            border-radius: 30px;
            background-color: rgb(8, 162, 223);
            border: none;
            font-weight: 500;
            outline: none;
            font-size: 15px;
            padding: 7px 22px;
            transition: 0.7s;
        }

        .header-btn:hover {
            background-color: #007acc;
            cursor: pointer;
        }


        .first-title {
            text-transform: capitalize;
        }

        .main-content {
            color: white;
            margin-top: 20px;
        }

        .dropbtn {
            background-color: transparent;
            color: white;
            padding: 10px;
            font-size: 16px;
            border: none;
            font-weight: 500;
            min-width: 120px;

        }

        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: transparent;
            min-width: 120px;
            box-shadow: rgba(0, 0, 0, 0.19) 0px 10px 20px, rgba(0, 0, 0, 0.23) 0px 6px 6px;
            z-index: 1;
            backdrop-filter: blur(5px);
        }

        .dropdown-content a {
            color: white;
            padding: 7px 28px;
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
            color: #007acc;
        }

        .content-title {
            margin-top: 80px;
            font-size: 50px;
            color: #009FDB;
        }

        .content {
            margin-top: 50px;
            margin-left: 50px;
            display: flex;
            flex-wrap: wrap;
            justify-content: start;
        }

        .data {
            background-color:rgb(194, 207, 126);
            color: #009FDB;
            width: 300px;
            height: auto;
            margin: 10px;
            font-size: 20px;
            border-radius: 10px;
            box-shadow: rgba(0, 0, 0, 0.19) 0px 10px 20px, rgba(0, 0, 0, 0.23) 0px 6px 6px;
        }

        .notes-btn-coloured {
            text-decoration: none;
            background: #00acec;
            border: 2px solid #00ACEC;
            padding: 10px 20px 10px 20px;
            color: #FFFFFF;
            text-align: center;
            width: 100%;
            border-radius: 10px;
        }

        .notes-btn:hover {
            color: #FFFFFF;
            background-color: #00acec;
        }

        .notes-btn-coloured:hover {
            color: #FFFFFF;
            background-color: #009FDB;
        }

        .inside-content {
            display: flex;
            justify-content: flex-end;

        }

        .title {
            padding: 5px;
            text-align: center;
            font-size: 20px;
            font-weight: 500;
        }

        .description {
            text-align: center;
            font-size: 15px;
            font-weight: 100;
        }

        .teachername {
            padding-left: 10px;
            padding-right: 10px;
            text-align: right;
        }
    </style>
</head>

<body>
    <?php
      $select = mysqli_query($conn, "SELECT * FROM `academic_info` WHERE student_id = '$user_id'") or die('query failed');
      echo "SELECT * FROM `academic_info` WHERE student_id = '$user_id'";
      if (mysqli_num_rows($select) > 0) {
        $fetchsemster = mysqli_fetch_assoc($select);
      }
    ?>
   <?php include('./header.php'); ?>
    <div class="main-container">
        <center>
            <p class="content-title">Semester- <?php echo $fetchsemster['sem'] ?>&nbsp; Notes</p>
        </center>
        <div class="content">
            <?php
              $semster= $fetchsemster['sem'];
            //   echo $semster;
              $query="SELECT  * from notesupload where semester= $semster ";
              $query_run=mysqli_query($conn,$query);
              $fetch_data=mysqli_num_rows($query_run)>0;
              if ($fetch_data){
                  while($row=mysqli_fetch_assoc($query_run)){
                    
                      ?>
            

            <div class="data">
                <div>
                    <p class="title"><?php echo $row['notes_title'] ?></p>
                    <p class="description"><?php echo $row['notes_desc'] ?></p>
                    <p class="teachername">-By <?php echo $row['teacher_name'] ?></p>
                </div>
                <div class="inside-content">
                    <a href="Teachernotes/<?php echo$row['notesname']?>" class="notes-btn-coloured btn-lg" target="_blank">Download</a>
                    
                </div>
            </div>
            <?php
        }
      }
      ?>
        </div>
    </div>
</body>

</html>