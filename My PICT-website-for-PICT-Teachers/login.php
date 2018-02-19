<?php 
    include_once("connection.php"); 
if(isset($_POST['submit1'])){
    if( isset($_POST['txtUsername']) && isset($_POST['txtPassword'])) { 
        $username = $_POST['txtUsername'];
        $password = $_POST['txtPassword'];
        
        $query = "SELECT username, password FROM teachers". 
        " WHERE username = '$username' AND password = '$password'"; 
        
        $result = mysqli_query($conn, $query);
        
        if($result->num_rows > 0){

		$success = true;
	while($row = mysqli_fetch_assoc($result)) {
		$_SESSION['username'] = $row['username'];	
	}
	echo '<script>alert("Login Successfully");window.location.href = "/MiniProject/index2.php";</script>';
	exit();       
	} else{ 
            echo '<script>alert("Login Failed");window.location.href = "/MiniProject";</script>';
		exit(); 
        } 
    }
}
?>

