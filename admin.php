 <?php
  include('controller/connect.php');
  session_start();
  if(isset($_SESSION['row'])){
    if($_SESSION['row']['user_type'] != 'admin'){
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
  <title>AVC - Admin Panel</title>
  <link rel="stylesheet" type="text/css" href="css/admin-style.css">
  <?php
    if(isset($_GET['open'])){
      if($_GET['open'] == 'pinned_request'){
        echo '<link rel="stylesheet" type="text/css" href="css/tables.css">';
      }
      if($_GET['open'] == 'reservations'){
        echo '<link rel="stylesheet" type="text/css" href="css/tables.css">';
      }
      if($_GET['open'] == 'register'){
        echo '<link rel="stylesheet" type="text/css" href="css/admin-register.css">';
      }
      if($_GET['open'] == 'manage'){
        echo '<link rel="stylesheet" type="text/css" href="css/admin-manage.css">';
      }
    }
  ?>
</head>
<body>

  <form method="get">
    <ul>
      <?php include "includes/profile.php"; ?>
      <li><a href="?open=pinned_request">Pinned Request</a></li>
      <li><a href="?open=reservations">Reservations</a></li>
      <li><a href="?open=manage">Manage Equipment</a></li>
      <li><a href="?open=register">Register Students</a></li>
      <li><a href="controller/logout.php" style="color: red">Logout</a></li>
    </ul>
  </form>
  <div style="margin-left:25%;padding:1px 16px;height:1000px;">
    <?php
      if(isset($_GET['open'])){
        if($_GET['open'] == 'pinned_request'){
          include("includes/pinned_request.php");
        }
        if($_GET['open'] == 'manage'){
          include("includes/equipment.php");
        }
        if($_GET['open'] == 'register'){
          include("includes/register.php");
        }
        if($_GET['open'] == 'reservations'){
          include("includes/reservations.php");
        }
      }

    ?>
  </div>

</body>
</html>