<?php
 
    session_start();
    include_once("connection.php");//We include this to initialize global constants. See config.php
	if(!isset($_SESSION['username'])){
		echo '<script>alert("Connection Timed Out.");window.location.href = "/MiniProject";</script>';
	exit();
	}
$username= $_SESSION['username'];
$sql = "SELECT name FROM files where username='$username' ORDER BY time asc";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
echo "<table class='table' align=\"center\">
	<tr style=''>
	<td align=\"center\">Sr.no</td>
	<td align=\"center\">File Name</td>
	</tr>";
	$i=1;$j=0;
while($row = mysqli_fetch_array($result))
{
		  echo "<tr>";
		  echo "<td align=\"center\">".$i."</td>";
		  echo "<td align=\"center\">" . $row['name'] . "</td>";
		  echo "</tr>";
	  	$i++;

}
echo "</table>";
} else {
    echo "0 results";
}

?>
