<html>
  <head>
    <title>Titulo de la Pagina</title>
  </head>
  <body>
    <h1>LISTADO</h1>
   
<?php
	//Sintaxis de conexión de la base de datos de muestra para PHP y MySQL.
	
	//Conectar a la base de datos
	
$cons_usuario="root";
$cons_contra="";
$cons_base_datos="bdtaller";
$cons_equipo="localhost";

$obj_conexion = mysqli_connect($cons_equipo,$cons_usuario,$cons_contra,$cons_base_datos);
if(!$obj_conexion)
{
    echo "<h3>No se ha podido conectar PHP - MySQL, verifique sus datos.</h3><br>";
}
else
{
    echo "<h3>Conexion Exitosa PHP - MySQL</h3><br>";
}    


$var_consulta = "SELECT * from dias";

if ($_SERVER["REQUEST_METHOD"]=="POST")
{
  $b=$_POST["texto"];
  echo"texto ingresado   :".$b;

  $var_consulta = "insert into dias (codigo,nombre)values (3,'".$b."')";


$var_resultado = $obj_conexion->query($var_consulta);
  
}
?>
<form method="POST" action="<?php echo  $_SERVER['PHP_SELF'];?>">

<input type="text" name="texto" id ="texto">
<input type="submit" id="boton">

</form>
</body>
</html>