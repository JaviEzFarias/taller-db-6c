<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "bdtaller");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 

if(isset($_POST['buscar'])){
$xproblema =  $_REQUEST['xproblema'];
}

$var_consulta = "SELECT codigo,nombre  FROM `asignatura` ";



echo $xproblema;

?>