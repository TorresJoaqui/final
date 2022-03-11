<?php

const DB_SERVER = 'mysqldb';

const DB_USERNAME = 'root';

const DB_PASSWORD = 'root';

const DB_NAME = 'MapaCultural';

$link = mysqli_connect (DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if($link === false){
    die("ERROR: No se ha podido establecer la conexión. " . mysqli_connect_error());
}

?>