<?php      
    $host = "localhost";  
    $user = "julyhost_mugisha";  
    $password = 'PhI.TA8auV{t';  
    $dbname = "julyhost_mugisha";  
      
    $con = mysqli_connect($host, $user, $password, $dbname);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  
?>   