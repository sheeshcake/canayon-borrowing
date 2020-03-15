
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
		 			?>
		 	<form action="controller/returned.php" method="get">
		 		<input type="hidden" name="unit_id" value="<?php echo $data['equipment_id']; ?>">
		 		<?php
		 			echo "<td>" . $data['reservation_id'] . "</td>";
					echo "<td>" . $data['unit_name'] . "</td>";
					echo "<td>" . $data['unit_brand'] . "</td>";
					echo "<td>" . $data['student_id'] . "</td>";
		 			echo "<td>" . $data['status'] . "</td><td>";
		 			if($data['status'] == 'pending'){
		 				echo "<button name='equipment_id-return' value='" . $data['reservation_id'] . "'>Return</button>";
		 			}
		 			if($data['status'] == 'lost'){
		 				echo "<button name='equipment_id-lost' value='" . $data['reservation_id'] . "'>Replaced</button>";
		 			}
		 			?>
		 	</form>
		 	<?php
		 			echo "</tr>";
		 		}	
			?>
		</table>
	</div>
