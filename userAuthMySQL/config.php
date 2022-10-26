<?php 
   
    function db() {
        $host = "localhost";
        $user = " root";
        $password = "";
        $db = "zuriphp";
       
        //create connection
        $conn = mysqli_connect("localhost", "root", "", "zuriphp");
        //check connection
        if ($conn){
            die("Database connection not established:" . $conn);
        }
        else{
            echo "connected successfully";
        }
        return $conn;
    }
   
?>
