<?php
// $hostname = "localhost";
// $username = "root";
// $password = "";  
// $database = "eventos";   
// $connection= new mysqli($hostname,$username,$password,$database);  

// if ($connection->connect_error) {

//     die("Erro de conexão" . $connection->connect_error);
// }

require_once 'config.php';

$db = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

if($db->connect_error){
    die("Connection failed: " . $db->connect_error);
}

?>   