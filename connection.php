<?php

$host = "localhost";
$user = "root";
$password = "";
$dbname = "form";
$port = "";

try{
    $conn = new PDO("mysql:host=$host; port=$port; dbname=" . $dbname, $user, $pass);
    echo "Conexão com banco de dados realizado com sucesso!";
}catch (Exception $ex) {
    echo "Erro: Conexão com banco de dados não realizado com sucesso!";
}