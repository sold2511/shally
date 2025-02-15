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


  ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Old paper</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!--fontawesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="navbar.css">
    <link rel="stylesheet" href="semester.css">
    <link href="https://fonts.googleapis.com/css2?family=Tiro+Bangla&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <style>
        .title {
            margin-top: 100px;
            color: dodgerblue;
            font-size: 50px;
            text-align: center;
            text-decoration: underline;
        }

        .papercontainer {
            margin-top: 85px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .paper {
            width: 800px;
            height: 57px;
            margin: 5px;
            border-radius: 5px;
            border: 1px solid rgba(248, 248, 255, 0.281);
            box-shadow: rgba(0, 0, 0, 0.19) 0px 10px 20px, rgba(0, 0, 0, 0.23) 0px 6px 6px;
        }

        .semster_name {
            color: white;
            font-size: 25px;
            padding: 10px;
            position: relative;
            display: inline;
            
            left: 0;
        }

        .downloadbtn {
            background-color:#252526;
            border: none;
            color: white;
            padding: 12px 30px;
            cursor: pointer;
            font-size: 20px;
            border-radius: 5px;
            position: relative;
            right: -474px;
        }

        .downloadbtn:hover {
            background-color: #2d2d30;
        }
        #bottom{
            margin-bottom: 50px;
        }
    </style>
</head>

<body>
<?php include('./header.php'); ?>
</body>
<p class="title">BCA All Semester Papers</p>
<div class="papercontainer">
    <div class="paper">
        <p class="semster_name">Semester-1</p>
        <button class="downloadbtn"  onclick="window.location.href='oldpapers/Semester1.zip'"><i class="fa fa-download"></i> Download</button>
    </div>
 
    <div class="paper">
        <p class="semster_name">Semester-2</p>
        <button class="downloadbtn" onclick="window.location.href='oldpapers/Semester2.zip'"><i class="fa fa-download"></i> Download</button>
    </div>
    <div class="paper">
        <p class="semster_name">Semester-3</p>
        <button class="downloadbtn" onclick="window.location.href='oldpapers/Semester3.zip'"><i class="fa fa-download"></i> Download</button>
    </div>
    <div class="paper">
        <p class="semster_name">Semester-4</p>
        <button class="downloadbtn" onclick="window.location.href='oldpapers/Semester4.zip'"><i class="fa fa-download"></i> Download</button>
    </div>
    <div class="paper">
        <p class="semster_name">Semester-5</p>
        <button class="downloadbtn" onclick="window.location.href='oldpapers/Semester5.zip'"><i class="fa fa-download"></i> Download</button>
    </div>
    <div class="paper" id="bottom">
        <p class="semster_name">Semester-6</p>
        <button class="downloadbtn"><i class="fa fa-download" onclick="window.location.href='oldpapers/Semester6.zip'"></i> Download</button>
    </div>
</div>

</html>