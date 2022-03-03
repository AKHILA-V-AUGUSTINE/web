<?php
require 'samp1.php';
$query="select * from studentdetails";
if($is_query_run=mysqli_query($con,$query))
{
	echo "query executed<br>";
	while($query_execute=mysqli_fetch_assoc($is_query_run))
	{
		echo '<table><tr><td>'.$query_execute['name'].'<tdS><td>'.$query_execute['surname'].'</td></tr></table>';
	}
}
else
{
	echo "query not executed";
}
?>

