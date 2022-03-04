<?php
include "config.php";
$sql = " SELECT * FROM `users` " ;
$result=$conn->query($sql);
?>
<html>
<head>
<title>view page</title>
</head>
<body>
<div class="container">
<h2>USERS</h2>
<table>
<tr>
<th>ID</th>
<th>First Name</th>
<th>Last Name</th>
<th>Email</th>
<th>Password</th>
<th>Gender</th>
<th>Action</th>
</tr>
<?php
if($result->num_rows>0)
{
	while($row=$result->fetch_assoc())
	{
?>
<tr>
<td><?php echo $row['id'];?></td>
<td><?php echo $row['firstname'];?></td>
<td><?php echo $row['lastname'];?></td>
<td><?php echo $row['email'];?></td>
<td><?php echo $row['password'];?></td>
<td><?php echo $row['gender'];?></td>
<td><a href="update.php?id=<?php echo $row['id'];?>">Edit</a></td>
<td><a href="delete.php?id=<?php echo $row['id'];?>">Delete</a></td>
<?php
	}
}
?>
</table>
</html>