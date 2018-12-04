<?php

include('logout.php');

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    
    if (isset($_POST["submitButton"])){
        
    	if (empty($_POST["firstName"]) || !filter_input (INPUT_POST, 'firstName', FILTER_SANITIZE_STRING)){
    	    echo ("Please enter a valid first name of only letters <br/> <br/>");
    	}
    	else{
    	    $firstName = trim($_POST["firstName"]);
    	}
    	
    	
    	if (empty($_POST["lastName"]) || !filter_input (INPUT_POST, 'lastName', FILTER_SANITIZE_STRING)){
    	    echo ("Please enter a valid last name of only letters <br/> <br/>");
    	}
    	else{
    	    $lastName = trim($_POST["lastName"]);
    	}
		
		
    	if (empty($_POST["password"]) || !preg_match("/^(?=.*[0-9])(?=.*[a-zA-Z])(?=.*[A-Z]).{8,}$/", $_POST["password"])){
		   echo ("Please enter a valid password of at least one number, one letter, one capital letter and at least 8 characters long <br/> <br/>");
    	}
    	else{
    	    $password = trim($_POST["password"]);
    	    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
    	}
    	
    	
    	if (empty($_POST["email"]) || !filter_input (INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)){
    	    echo ("Please enter a valid email address <br/> <br/>");
    	}
    	else{
    	    $email = trim($_POST["email"]);
    	}
    	
    	    
    	if (empty($_POST["telephone"]) || !preg_match("/^[0-9]+$/", $_POST["telephone"])){
    	    echo ("Please enter a valid telephone number of only numbers <br/> <br/>");
    	}
    	else{
    	    $telephone = trim($_POST["telephone"]);
    	}
    	
    }
}
    

    	$host = getenv('IP');
        $username = getenv('C9_USER');
        $password = '';
        $dbname = 'job_board';

        try {
			$conn = new PDO("mysql:host=$host;dbname=job_board", $username, $password);
        
			// set the PDO error mode to exception
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
			// adding form data into the database
			$sql = "INSERT INTO Users (firstName, lastName, password, email, telephone) 
			VALUES ('$firstName', '$lastName', '$hashedPassword', '$email', '$telephone')";
        
			// use exec() because no results are returned
			$conn->exec($sql);
    
			echo "The records were inserted succesfully "; 
        }
        
        
        catch(PDOException $e){
			echo "Connection failed: " . $e->getMessage();
        }
      
    

?>