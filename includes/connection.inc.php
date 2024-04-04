<?php
//session_start();
try {
if (session_status() == PHP_SESSION_NONE) {
       session_start();
    }
    
 $con=mysqli_connect("localhost","root","","farmfreshfeast");
} catch (Exception $e) {
   // Handle the exception
   echo "An error occurred: " . $e->getMessage();

}
finally{
   echo"";
}
?>