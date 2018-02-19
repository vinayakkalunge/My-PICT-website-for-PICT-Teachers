<?php
if(!isset($_SESSION)){
    session_start();
}

class teachers {
public $username = null;
public $password = null;

public function __construct( $data = array() ) {
		 if( isset( $data['username'] ) ) $this->username = stripslashes( strip_tags( $data['username'] ) );
		 if( isset( $data['password'] ) ) $this->password = stripslashes( strip_tags( $data['password'] ) );	  
	 }
	 
	 
	 
	 public function storeFormValues( $params ) {
		//store the parameters
		$this->__construct( $params ); 
	 }
	 
	
	 public function userLogin() {
		 $success = false;
		 try{
			 
			$con = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD ); //Concecting the database
			$con->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );//Setting errors and exceptions
			$sql = "SELECT * FROM teachers WHERE username = :username AND password = :password LIMIT 1";//SQL QUERY
			
			$stmt = $con->prepare( $sql );//Preparing sql query
			//Assigning values to the variables in Query (:username and :password)
			$stmt->bindValue( "username", $this->username, PDO::PARAM_STR );
			$stmt->bindValue( "password", $this->password, PDO::PARAM_STR );
			$stmt->execute();
			$valid = $stmt->fetchColumn();
			
			
			if( $valid ) {
				$success = true;
				$_SESSION['loggedIn']=$this->username;
			

				$sql = "SELECT * FROM teachers WHERE username = :username";
				$stmt = $con->prepare( $sql );
				$stmt->bindValue( "username", $this->username, PDO::PARAM_STR );
				$stmt->execute();
				$row = $stmt->fetch(PDO::FETCH_ASSOC);
				//Getting all session variables which can be used throughout the site.
				$_SESSION['username'] = $row['username'];
				
		
			}
			
			
			$con = null;
			return $success;
		 }catch (PDOException $e) {
			 echo $e->getMessage();
			 return $success;
		 }
	 }
}
?>
