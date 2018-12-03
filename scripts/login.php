<?php

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
    	
    	
    	session_start();
    	
    	 $_SESSION['username'] = $email;
    	 $_SESSION['password'] = $hashedPassword;
    	 
    	 
    }
}


    
    
    


?>