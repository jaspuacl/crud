<?php

$mysqli = new mysqli('localhost:3307', 'root', '', 'compras');
/* verificar la conexión */
if ($mysqli->connect_errno) {
    printf("Conexión fallida: %s\n", $mysqli->connect_error);
    exit();
}

?> 