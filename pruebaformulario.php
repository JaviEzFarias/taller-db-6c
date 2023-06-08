<html>
  <head>
    <title>Titulo de la Pagina</title>
  </head>
  <body>
    <h1>LISTADO</h1>
   
<?php
	//Sintaxis de conexi�n de la base de datos de muestra para PHP y MySQL.
	
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


$var_consulta = "SELECT * from horarios";


$var_resultado = $obj_conexion->query($var_consulta);

if(isset($_POST['submit']))
{
    echo "hizo submit";
}


    ?>
    <form name="form1" method="post" 
    action="<?pnp echo '$_SERVER['PHP_SELF']';?>">
    <input type="text" id="nombre">
    <input type="submit" id="submit">

    </form>

  </body>
</html>