<?php

$server = "localhost";
$user = "root";
$password = "";
$database = "teste_php";

$connection = new mysqli($server, $user, $password, $database);

if ($connection->connect_error) {

    die("Erro de conexão" . $connection->connect_error);
}
?>