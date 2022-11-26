<?php
//validamos datos del servidor
$user = "root";
$host = "localhost";
$pass = "";

//conectamos a la base de datos
$connection = mysqli_connect($host, $user, $pass);

//hacemos llamado al input del formulario
$nombre = $_POST["nombre"];
$telefono = $_POST["telefono"];
$correo = $_POST["correo"];
$mensaje = $_POST["mensaje"];

//indicamos el nombre de la base de datos
$datab = "bioriego";

//indicamos seleccionar la base de datos
$db = mysqli_select_db($connection,$datab);

//insertamos datos de registro a mysql xammp, indicamos el nombre de la tabla y sus atributos
$instruccion_SQL = "INSERT INTO contacto (nombre,correo,telefono,mensaje)
                    VALUES ('$nombre','$correo','$telefono','$mensaje')";

$resultado = mysqli_query($connection,$instruccion_SQL);