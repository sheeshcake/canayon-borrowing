<?php
  include('controller/connect.php');
  session_start();
  if(isset($_SESSION['row'])){
    if($_SESSION['row']['user_type'] != 'student'){
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
  <link rel="stylesheet" type="text/css" href="css/borrow-style.css">
  <link rel="stylesheet" type="text/css" href="css/tables.css">
	<title>AVC - Reserve</title>
</head>
<body>
  <form method="get">
    <ul>
      <?php include "includes/profile.php"; ?>
      <li><a href="?open=dashboard"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li><a href="?open=transactions"><i class="fa fa-dashboard"></i> Transactions</a></li>
      <li><a href="?open=reserve"><i class="fa fa-desktop"></i> Reserve</a></li>
      <li><a href="controller/logout.php" style="color: red">Logout</a></li>
    </ul>
  </form>
  <div style="margin-left:25%;padding:1px 16px;height:1000px;">
    <?php
      if(isset($_GET['open'])){
        if($_GET['open'] == 'dashboard'){
          include("includes/dashboard.php");
        }
        if($_GET['open'] == 'transactions'){
          include("includes/transactions.php"); 
        }
        if($_GET['open'] == 'reserve'){
          include "includes/reserve-equipment.php";
        }
      }

    ?>
  </div>
	    <script> 
        function row() { 
            
                
            var MyTable =  
                document.getElementById("Courses"); 
            
            // insert new row. 
            var NewRow = MyTable.insertRow(0); 
            var Newcell1 = NewRow.insertCell(0); 
            var Newcell2 = NewRow.insertCell(1); 
            Newcell1.innerHTML = "Placement"; 
            Newcell2.innerHTML = "Sudo Placement"; 
        } 
    </script> 
</body>
</html>