<?php  

    $servername = "localhost";  
    $username = "root";  
    $password = "4761";  
    $conn = mysqli_connect ($servername , $username , $password) or die("unable to connect to host");  
    $sql = mysqli_select_db ($conn, 'studentfinal') or die("unable to connect to database");

?>