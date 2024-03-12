<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "crud_php";

// crear la conexion
$conn = new mysqli($servername, $username, $password, $database);

// verificar conexion
if ($conn->connect_error) {
    die("Conexion fallida a la base de datos: " . $conn->connect_error);
}
