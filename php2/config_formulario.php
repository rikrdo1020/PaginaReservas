<?php
    $servername='localhost';
    $username='bookc_usr';
    $password='bookc_pwd01';
    $dbname = "reservascourt2";
    $conn=mysqli_connect($servername,$username,$password,"$dbname");
      if(!$conn){
          die('Could not Connect MySql Server:' .mysql_error());
        }
?>
