<?php

$mysqli = mysqli_connect('localhost', 'root', '', 'yrpreybib');

/* Check connection before executing the SQL query */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

?>