<?php //Create new user
    $id = $_GET['id'];

    include "../includes/connection.php";

    $sql = "UPDATE reportdoc SET status='Approved' WHERE docID='$id'" ;

    if(mysqli_query($con, $sql)){
        ?>
<script type="text/javascript"> 
alert("Report successfully approved"); 
window.location.href = "upreports.php";
</script> 
<?php

    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
    }
     
    // Close connection
    mysqli_close($con);
?>
?>