<div class="header">
    <div class="header-menu">
        <div class="title">STUDY<span>Mitra</span></div>
        <div class="sidebar-btn">
            <i class="fas fa-bars"></i>
        </div>
        <ul>

            <li><a href="index.html?logout=<?php echo $teacher_id; ?>"><i class="fas fa-power-off"></i></a></li>
        </ul>
    </div>
</div>
<div class="sidebar">
      <div class="sidebar-menu">
        <center class="profile">
        <?php
          if($fetch['image'] == ''){
            echo '<img src="./profileimg/dev3.jpg">';
         }else{
            echo '<img src="teacherimg/'.$fetch['image'].'">';
         }
         ?>
          <p><?php echo $fetch['name'] ?></p>
        </center>
        <li class="item" id="profile">
          <a href="Teacherdashboard.php" class="menu-btn">
            <i class="fas fa-user-circle"></i><span>Profile</span>
          </a>

        </li>
        <li class="item" id="profile">
          <a href="Teacherviewdashboard.php" class="menu-btn">
            <i class="fas fa-chart-line"></i><span>Dashboard</span>
          </a>

        </li>
        <li class="item">
          <a href="notesupload.php" class="menu-btn">
            <i class="fa fa-upload"></i><span>Upload Notes</span>
          </a>
        </li>

        <li class="item" id="messages">
          <a href="eventnews.php" class="menu-btn">
            <i class="fas fa-calendar-day"></i><span>Event and News </span>
          </a>

        </li>

      </div>
    </div>