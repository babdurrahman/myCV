<?php
            $servername = "localhost";
            $username = "id12014288_admin";
            $password = "thisispassword";
            $database = "id12014288_cv_db";

            $conn = mysqli_connect($servername,$username,$password) or die(mysql_error());
            $db = mysqli_select_db($conn,$database) or die(mysql_error());
            $query = "SELECT * FROM Kursus"; 
            $result = mysqli_query($conn,$query) or die(mysql_error());
            
?>
