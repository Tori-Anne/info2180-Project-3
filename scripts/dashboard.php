<?php
    $host = getenv('IP');
    $username = getenv('C9_USER');
    $password = '';
    $dbname = 'job_board';

    $conn = new mysql_connect("mysql:host=$host;dbname=$dbname", $username, $password);
   // $conn = mysql_connect("localhost","root"," ");
    mysql_select_db('job_board'); 
    $sql="select company_name, job_title, category, date_posted from Jobs"; 
    $result= $conn-> query($sql);
    
    if($result-> num_rows >0){
        while($row= $result-> fetch_assoc()){
            echo "<tr><td>". $row["company_name"]."</td><td>".$row["job_title"]."</td><td>".$row["category"]."</td><td>".$row["date_posted"]."</td></tr>";
        }
        echo "</table>";
    }
    else{
        echo "o result";
    }
    $conn-> close();
?>
