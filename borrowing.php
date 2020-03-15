<?php
  include('controller/connect.php');
  session_start();
  if(isset($_SESSION['row'])){
    if($_SESSION['row']['user_type'] != 'student-assistant'){
      header("Location: forbidden.php");
    }
  }
  else{
    header("Location: index.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
  <title>AVC</title>
  <link rel="stylesheet" type="text/css" href="css/borrow-style.css">
  <?php
    if(isset($_GET['open'])){
      if($_GET['open'] == 'reservations'){
        echo '<link rel="stylesheet" type="text/css" href="css/tables.css">';
      }
    }
  ?>
</head>
<body>
<form method="get">
  <ul>
    <?php include "includes/profile.php"; ?>
    <li><a href="?open=reservations">Reservations</a></li>
    <li><a href="controller/logout.php" style="color: red">Logout</a></li>
  </ul>
</form>
<div style="margin-left:25%;padding:1px 16px;height:1000px;">
    <?php
      if(isset($_GET['open'])){
        if($_GET['open'] == 'dashboard'){
          include("includes/dashboard.php"); 
        }
        if($_GET['open'] == 'reservations'){
          include("includes/reservations.php");
        }
      }

    ?>
</div>


</body>
</html>