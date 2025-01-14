<?php
$servername = "localhost";
$username= "riveen";
$password = "admin";
$db_name = "login";
$conn = new mysqli($servername, $username, $password, $db_name, 3307);
if($conn->connect_error){
    die("Connection failed".$conn->connect_error);
}
echo "Connection Sucessful";

?>