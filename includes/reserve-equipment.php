<form action="controller/reserve.php" method="get">
	<table class="table">
		<tr>
			<th>ID</th>
			<th>Equipment Name</th>
			<th>Equipment Brand</th>
			<th>Equipment Count</th>
			<th>Actions</th>
		</tr>
		<?php
			$sql = "SELECT * FROM equipment";
			$result = mysqli_query($conn,$sql);
			while($_SESSION['equipments'] = $result->fetch_assoc()){
				echo "<tr>";
				echo "<td>" . $_SESSION['equipments']['unit_id'] . "</td>";
				echo "<td>" . $_SESSION['equipments']['unit_name'] . "</td>";
				echo "<td>" . $_SESSION['equipments']['unit_brand'] . "</td>";
				echo "<td>" . $_SESSION['equipments']['unit_count'] . "</td>";
				echo "<td><button name='reserve_id' value='" . $_SESSION['equipments']['unit_id'] . "'>Reserve</button></td>";
				echo "</tr>";
			}
		?>
	</table>
</form>
