<?php

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    
    if (isset($_POST["loginButton"])){
        
        if (empty($_POST["email-login"]) || filter_input (INPUT_POST, 'email-login', FILTER_VALIDATE_EMAIL) === false){
    	    echo ("Please enter a valid email address");
    	}
    	else{
    	    $email = trim($_POST["email"]);
    	}


        if (empty($_POST["pwrd"]) || !preg_match("/^(?=.*[0-9])(?=.*[a-zA-Z])(?=.*[A-Z]).{8,}$/", $_POST["pwrd"])){
		   echo ("Please enter a valid password of at least one number, one letter, one capital letter and at least 8 characters long");
    	}
    	else{
    	    $password = trim($_POST["pwrd"]);
    	    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
    	}
    	
    	
    	$host = getenv('IP');
        $username = getenv('C9_USER');
        $password = '';
        $dbname = 'job_board';

		$conn = new PDO("mysql:host=$host;dbname=job_board", $username, $password);
        
		// set the PDO error mode to exception
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
		$sql = "SELECT email, password FROM Users where email = '$email' and password = '$hashedPassword'";
        
		$result = $conn->query($sql);
		
		catch(PDOException $e){
			echo "Connection failed: " . $e->getMessage();
        }
			
		$array = $result->fetch(PDO::FETCH_ASSOC);
			
		if (($email = $array['email']) || ($hashedPassword = $array['password'])){
		    header('Location : dashboard.html');
		    session_register('username') = $email;
            session_register('password') = $hashedPassword;
		}
		else{
		    return false;
		}
		
		
    }
}
		

?>