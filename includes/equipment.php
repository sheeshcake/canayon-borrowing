<center>
	<div>
		<?php
			if(isset($_SESSION['message'])){
				echo "<h4 style='color:green'>" . $_SESSION['message'] . "</h4>";
				unset($_SESSION['message']);
			}
		?>
	</div>
</center>
<table class="table-fill" id="table">
	<thead>
		<tr>
			<th class="text-left">ID</th>
			<th class="text-left">Name</th>
			<th class="text-left">Brand</th>
			<th class="text-left">Units</th>
			<th><button onclick="row();">Add new Equipment</button></th>
		</tr>
	</thead>
	<tbody class="table-hover">
			<?php
				$sql = "SELECT * FROM equipment";
				$result = mysqli_query($conn,$sql);
				while($data = $result->fetch_assoc()){
					echo '<form method="get" action="controller/actions.php">';
					echo '<input type="hidden" name="unit_id" value="' . $data['unit_id'] . '">';
					echo "<tr>";
					echo "<td>" . $data['unit_id'] . "</td>";
					echo "<td><input name='unit_name' value='" . $data['unit_name'] . "'></td>";
					echo "<td><input name='unit_brand' value='" . $data['unit_brand'] . "'></td>";
					echo "<td><input type='number' name='unit_count' value='" . $data['unit_count'] . "'></td>";
					echo "<td><button type='submit' name='submit' value='update'>Update</button>";
					echo "<button type='submit' name='submit' value='delete'>Delete</button></td>";
					echo "</tr>";
					echo "</form>";
				}
			?>
	</tbody>
</table>

<script> 
    function row() { 
	    var MyTable = document.getElementById("table");
	    var NewRow = MyTable.insertRow(1);
	    var id = NewRow.insertCell(0); 
	    var name = NewRow.insertCell(1);
	    var brand = NewRow.insertCell(2); 
	    var units = NewRow.insertCell(3); 
	    var price = NewRow.insertCell(4);
	    var action = NewRow.insertCell(5);
	    id.innerHTML = "None"; 
	    name.innerHTML = "<input form='addf' name='unit_name' type='text' placeholder='Unit Name'>"; 
	    brand.innerHTML = "<input form='addf' name='unit_brand' type='text' placeholder='Unit Brand'>";
	    units.innerHTML = "<input form='addf' name='unit_count' type='number' placeholder='Number of Unit'>";
	    price.innerHTML = "<input form='addf' name='unit_price' type='number' placeholder='Unit Price'>";
	    action.innerHTML = "<form id='addf' method='get' action='controller/actions.php'><button type='submit' name='submit' value='add'>Add</button></form>"
    } 
</script> 
  