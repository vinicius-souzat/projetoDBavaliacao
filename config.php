<?php

$host = "localhost"; // nome do servidor MySQL
$user = "id20597537_socratesmendesaulabd"; // usuário do MySQL
$pass = "5yD1>)cvcL!j{{\!"; // senha do MySQL
$dbname = "id20597537_1091392223012"; // nome do banco de dados

// Conexão com o banco de dados MySQL
$conn = mysqli_connect($host, $user, $pass, $dbname);

// Verifica se houve erro na conexão
if (!$conn) {
    die("Falha na conexão: " . mysqli_connect_error());
}