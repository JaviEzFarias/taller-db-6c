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
	


   
$var_resultado = $obj_conexion->query($var_consulta);
echo "<label id='lbdias'>Dias :</label>";
if($var_resultado->num_rows>0)
  {
    echo "<select name='dias'>";

while ($var_fila=$var_resultado->fetch_array())
{
    echo" <option value='".$var_fila["codigo"]."'>".$var_fila["nombre"]."</option>";    
	   

 }
 
 

}

 echo'</select>';
 echo "</br>";
 echo "</br>";
echo "<label id='lbasignatura'>Asignatura :</label>";
 $var_consulta = "SELECT * from asignatura";


 $var_resultado = $obj_conexion->query($var_consulta);
 
 if($var_resultado->num_rows>0)
   {
     echo "<select name='dias'>";
 
 while ($var_fila=$var_resultado->fetch_array())
 {
     echo" <option value='".$var_fila["codigo"]."'>".$var_fila["nombre"]."</option>";
  

 }
   } 


    ?>

 
 <form name="form1" method="post" 
    action="<?pnp echo '$_SERVER['PHP_SELF']';?>">
    <br><br>
    <input type="submit" id="submit"><br><br>

  
</form>

</form>
</body>
</html>