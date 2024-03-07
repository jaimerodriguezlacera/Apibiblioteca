<?php
$host='mysql-rodriguezlacera.alwaysdata.net';
$user='349927';
$password='Lauravanessa12';
$database='rodriguezlacera_biblioteca';
$mysqli= new mysqli($host,$user,$password,$database);
if($mysqli->connect_errno)
{
  echo "Error - No se pudo conectar a la BD: ".$mysqli->connect_errno.'<br>';
}