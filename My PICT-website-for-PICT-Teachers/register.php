<?php
include_once("connection.php");

    $username1 = $_POST['txtUsername1'];
    $password = $_POST['txtPassword1'];
    $password2 = $_POST['txtPassword2'];
    $name = $_POST['txtName'];

if($password != $password2){
echo '<script>alert("Password Mismatch");window.location.href = "/MiniProject/#";</script>';
exit();
}
$query = "SELECT username, password FROM teachers". 
        " WHERE username = '$username1'"; 
        
        $result = mysqli_query($conn, $query);
        
if($result->num_rows > 0){
echo '<script>alert("Username Already Exists");window.location.href = "/MiniProject/#";</script>';
exit();
  }
if((!empty($username)) && (!empty($name)) && (!empty($password)) && (!empty($password2))){
	$query1 = "INSERT INTO teachers(name, username, password) VALUES('$name', '$username1', '$password')";
    $result = mysqli_query($conn, $query1);
echo '<script>alert("Registered Successfully");window.location.href = "/MiniProject";</script>';
exit();
}
?>
