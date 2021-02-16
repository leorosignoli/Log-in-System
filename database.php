<!DOCTYPE html> 
<html> 
  
<head> 
    <title>Confirmation</title> 
</head> 
  
<body> 
    <center> 
        <?php 
  
        require_once "config.php"; 
          
        // Taking the values from the form data(input) 
        $name =  $_REQUEST['name']; 
        $last_name =  $_REQUEST['last_name']; 
        $email = $_REQUEST['email']; 
        $password =  $_REQUEST['password']; 

          
        // Performing insert query execution 
        //  table name is info
        $sql = "INSERT INTO info  VALUES ('$name','$last_name',  
            '$email','$password')"; 
          
        if(mysqli_query($conn, $sql)){ 
            echo "<h3>data stored in a database successfully." 
                . " Please browse your localhost php my admin" 
                . " to view the updated data</h3>";  
  
            echo nl2br("\n$name \n $last_name"
                . "\n $email \n $password"); 
        } else{ 
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn); 
        } 
          
        // Close connection 
        mysqli_close($link); 
        ?> 

        <a href="index.php">Log-in</a>
    </center> 
</body> 
  
</html> 