<!DOCTYPE html>
<html>
<style>
table, th, td {
  border:1px solid black;
}
</style>
<body>

<h2>A basic HTML table</h2>

<table style="width:100%">
  <tr>
  <th scope="col">user_name</th>
      <th scope="col">phone_number</th>
      <th scope="col">address</th>
      <th scope="col">Email</th>
      <th scope="col">id_no</th>

  </tr>

  <?php
            $conn = mysqli_connect("localhost", "root", "", "products");
          
            if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
            }
            $sql = "SELECT username, phone_number, address, email,id_no FROM shopping";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
           
            while($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["username"]. "</td><td>" . $row["phone_number"] . "</td><td>"
            . $row["address"]. "</td></tr>" . $row["email"]. "</td></tr>" . $row["id_no"]. "</td></tr>";
            }
            echo "</table>";
            } else { echo "0 results"; }
            $conn->close();
            ?>
</table>
<h1>Employees</h1>
	<table width="500" cellpadding=5celspacing=5 border=1>
	<tr>
	<th>ID#</th>
	<th>First Name</th>
	<th>Last Name</th>
	<th>Department</th>
	<th>Email</th>
	</tr>
	<?php while($row=mysqli_fetch_array($result)):
    
    ?>
	<tr>
	<td><?php echo $row['user_name'];?></td>
	<td><?php echo $row['phone_number'];?></td>
	<td><?php echo $row['address'];?></td>
	<td><?php echo $row['Email'];?></td>
	<td><?php echo $row['id_no'];?></td>
	</tr>
	<?php endwhile;?> 
  <?php
            $conn = mysqli_connect("localhost", "root", "", "products");
          
            if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
            }
            $sql = "SELECT username, phone_number, address, email,id_no FROM shopping";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
           
            while($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["username"]. "</td><td>" . $row["phone_number"] . "</td><td>"
            . $row["address"]. "</td></tr>" . $row["email"]. "</td></tr>" . $row["id_no"]. "</td></tr>";
            }
            echo "</table>";
            } else { echo "0 results"; }
            $conn->close();
            ?>
	</table>

<p>To undestand the example better, we have added borders to the table.</p>

</body>
</html>

