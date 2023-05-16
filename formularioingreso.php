<html>
  <head>
    <title>Formularo Ingreso</title>
  </head>
  <body>
    
   
<?php
	//Sintaxis de conexión de la base de datos de muestra para PHP y MySQL.
	
	//Conectar a la base de datos
	
$cons_usuario="root";
$cons_contra="";
$cons_base_datos="taller";
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

//consulta de asignatura//

$var_consulta = "SELECT * from asignatura";


$var_resultado = $obj_conexion->query($var_consulta);

if($var_resultado->num_rows>0)
  {
    echo "<label for='asignatura'>asignatura </label><select id='asignatura'>'";

while ($var_fila=$var_resultado->fetch_array())
{
    echo"<tr><td>".$var_fila["codigo"]."</td>";    
	echo "<option>".$var_fila["nombre"]."</option>";    
	
 }
 echo'</select>';
}
else
  {
    echo "No hay Registros";

  }

  echo"</select>";

  //fin de consulta de asignatura//

  echo "<br><br>";

  //consulta de dias//

    $var_consulta = 'SELECT * from dias';


  $var_resultado = $obj_conexion->query($var_consulta);

  if($var_resultado->num_rows>0)
    {
      echo "<label for='dias'>dias </label><select id='dias'>'";

  while ($var_fila=$var_resultado->fetch_array())
  {
      echo"<tr><td>".$var_fila["codigo"]."</td>";    
    echo "<option>".$var_fila["nombre"]."</option>";    
    
  }
  echo'</select>';
  }
  else
    {
      echo "No hay Registros";

    }

    echo"</select>"
    
    //fin de consulta de dias//
    
    ?>
  </body>
</html>
