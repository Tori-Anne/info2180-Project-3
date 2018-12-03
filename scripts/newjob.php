<?PHP

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    
    if (isset($_POST["submitButton"])){
        
        if (empty($_POST["jobTitle"]) || filter_input (INPUT_POST, 'jobTitle', FILTER_SANITIZE_STRING) === false){
    	    echo ("Please enter a valid Job Title");
    	}
    	else{
    	    $jobTitle = trim($_POST["jobTitle"]);
    	}
    	
    	
    	if (empty($_POST["jobDescription"]) || filter_input (INPUT_POST, 'jobDescription', FILTER_SANITIZE_STRING) === false){
    	    echo ("Please enter a valid Job Description");
    	}
    	else{
    	    $jobDescription = trim($_POST["jobDescription"]);
    	}
    	
    	
    	if (empty($_POST["company"]) || filter_input (INPUT_POST, 'company', FILTER_SANITIZE_STRING) === false){
    	    echo ("Please enter a valid Company");
    	}
    	else{
    	    $company = trim($_POST["company"]);
    	}
    	
    	
    	if (empty($_POST["jobLocation"]) || filter_input (INPUT_POST, 'jobLocation', FILTER_SANITIZE_STRING) === false){
    	    echo ("Please enter a valid Job Location");
    	}
    	else{
    	    $jobLocation = trim($_POST["jobLocation"]);
    	}
    	
    	
    	$host = getenv('IP');
        $username = getenv('C9_USER');
        $password = '';
        $dbname = 'job_board';

        try {
            $conn = new PDO("mysql:host=$servername;dbname=job_board", $username, $password);
    
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
            // adding form data into the database
            $sql = "INSERT INTO Jobs () VALUES (    )";
    
            // use exec() because no results are returned
            $conn->exec($sql);
    
            echo "A new job has been inserted succesfully "; 
        }


        catch(PDOException $e){
            echo "Connection failed: " . $e->getMessage();
        }
    
    }
    
}


?>