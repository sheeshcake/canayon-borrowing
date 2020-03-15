    <div class="content-header">
      <h1>Dashboard</h1>
      <p>AVC- Dashboard</p>
    </div>
    <div>
    	<?php
    		include "controller/connect.php";
    		$sql = "SELECT * FROM reserved WHERE student_id='" . $_SESSION['row']['id_number']. "' AND status='lost'";
			$result = mysqli_query($conn, $sql);
	 		$total_fines = 0;
	 		if(mysqli_num_rows($result) > 0){
	 		while($data = $result->fetch_assoc()){
	 			$sql1 = "SELECT * FROM equipment WHERE unit_id='" . $data['equipment_id'] . "'";
	 			$result1 = mysqli_query($conn, $sql1);
	 			if(mysqli_num_rows($result) > 0){
	 	?>
	 	<table>
    		<tr>
    			<th>Unit Name</th>
    			<th>Unit Brand</th>
    			<th>Description</th>
    		</tr>
	 	<?php
	 			while($data1 = $result1->fetch_assoc()){
	 	?>
	 		<tr>
	 			<td><?php echo $data1['unit_name']; ?></td>
	 			<td><?php echo $data1['unit_brand']; ?></td>
	 			<td>Please Replace</td>
	 		</tr>
	 	<?php
	 				}
	 			}
	 		}
	 		echo "</table>";
	 	}
	 	else
	 		echo "<h3>All Cleared! :) </h3>";	
    	?>
    </div>