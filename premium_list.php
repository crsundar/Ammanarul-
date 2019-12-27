<?php
include_once ("connection.php");
error_reporting(0);
$query = "SELECT * FROM premium";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);

if ($total != 0)
{
	?>
	<table>
		<tr>
			<td>Name</td>
			<td>Town</td>
			<td>City</td>
			<td>State</td>
			<td>Prayer</td>
			<td>Email</td>
			<td>Phone</td>
			<td>Profile</td>
		</tr>
	<?php

	while($result = mysqli_fetch_assoc($data))
	{
		echo "<tr>
				<td>".$result['name']."</td>
				<td>".$result['town']."</td>
				<td>".$result['city']."</td>
				<td>".$result['state']."</td>
				<td>".$result['prayer']."</td>
				<td>".$result['email']."</td>
				<td>".$result['phone']."</td>
				<td><img src='".$result['profile']."' height='100' width='100' /> </td>
			</tr>";
	}
}
else
{
	echo "No records found";
}
?>
</table>