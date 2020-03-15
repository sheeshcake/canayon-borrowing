<?php
	// $sql = "SELECT * FROM reserved";
	// $result = mysqli_query($conn,$sql);
	// $_SESSION['reserved-items'] = mysqli_fetch_array($result,MYSQLI_ASSOC);
?>
<form action="controller/claim.php" method="get">
	<div id="wrapper">
		<table class="table">
			<tr>
				<th>ID</th>
				<th>Item Name</th>
				<th>Item Brand</th>
				<th>Student ID</th>
				<th>Status</th>
				<th>Actions</th>
			</tr>

			<?php
				$sql = "SELECT * FROM reserved INNER JOIN equipment ON reserved.equipment_id = equipment.unit_id";
				$reserved_data = mysqli_query($conn, $sql);
		 		while($data = $reserved_data->fetch_assoc()){
		 			echo "<tr>";
		 			echo "<td>" . $data['reservation_id'] . "</td>";
					echo "<td>" . $data['unit_name'] . "</td>";
					echo "<td>" . $data['unit_brand'] . "</td>";
					echo "<td>" . $data['student_id'] . "</td>";
		 			echo "<td>" . $data['status'] . "</td><td>";
		 			if($data['status'] == 'claimed'){
		 				echo "<button name='id' value='" . $data['reservation_id'] . "'>Return</button>";
		 				echo "<br><br><a href='controller/lost.php?item_id=" . $data['reservation_id'] . "'>Item Lost</a></td>";
		 			}
		 			else if($data['status'] == 'reserved'){
		 				echo "<button name='id' value='" . $data['reservation_id'] . "'>Claim</button>";
		 			}
		 			else if($data['status'] == 'returned'){
		 				echo "<p style='color: green'>Returned</button></p></td>";
		 			}
		 			else if($data['status'] === 'lost'){
		 				echo "<p style='color:red'>Item Lost</p>";
		 			}
		 			echo "</tr>";
		 		}	
			?>
		</table>
	</div>
</form>


