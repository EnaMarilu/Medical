<?php
/*
$serverName = "GL-CL-IT02"; //serverName\instanceName
$connectionInfo = array( "Database"=>"demo", "UID"=>"demo", "PWD"=>"C@p1b4r4");
$conn = sqlsrv_connect( $serverName, $connectionInfo);

*/
$host = "localhost";
$port = "5432";
$dbname = "solicitudes";
$user = "postgres";
$password = "C@p1b4r4"; 
$options = "--client_encoding=UTF8";
$connection_string = "host={$host} port={$port} dbname={$dbname} user={$user} password={$password}";
$conn = pg_connect($connection_string);     
pg_set_client_encoding($conn, "UTF-8");


if ($conn) {
     echo "<br><br><b>Conectado a la Base de Datos: </b>".$dbname;
}
else {
     echo "<br><b>Error al Realizar la conexión</b><br>";
}
