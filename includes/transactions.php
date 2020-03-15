<?php

?>
<table class="table">
	<tr>
		<td>ID</td>
		<td>Equipment Name</td>
		<td>Equipment Brand</td>
		<td>Status</td>
	</tr>
	
	<?php
		echo $_SESSION['row']['id_number'];
		$sql = "SELECT * FROM reserved WHERE student_id='" . $_SESSION['row']['id_number'] . "'";
		$result = mysqli_query($conn, $sql);
		while($data1 = $result->fetch_assoc()){
			$sql1 = "SELECT * FROM equipment WHERE unit_id=" . $data1['equipment_id'];
			$result1 = mysqli_query($conn, $sql1);
			echo "<tr>";
			echo "<td>" . $data1['reservation_id'] . "</td>";
			while($data = $result1->fetch_assoc()){
				echo "<td>" . $data['unit_name'] . "</td>";
				echo "<td>" . $data['unit_brand'] . "</td>";
			}
			echo "<td>" . $data1['status'] . "</td>";
			echo "</tr>";
		}
	?>
</table>