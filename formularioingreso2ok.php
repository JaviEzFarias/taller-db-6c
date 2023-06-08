<html>
  <head>
    <title>Formularo Ingreso</title>
  </head>
  <body>
    
   
<?php
	//Sintaxis de conexión de la base de datos de muestra para PHP y MySQL.
	
	//Conectar a la base de datos
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener el valor del campo de entrada
    $xdia = $_POST["dia"];
	 $xasignatura = $_POST["asignatura"];
	 $xhoradesde = $_POST["horadesde"];
     $xhorahasta = $_POST["horahasta"];
    // Realizar cualquier procesamiento o validación adicional aquí
    
    // Imprimir el valor del campo de entrada
  //  echo "Hola, " . $nombre . "! Has enviado el formulario.";
    $var_consulta = "INSERT INTO `horario`( `coddia`, `codasignatura`, `horarioingreso`, `horarioegreso`) VALUES (".$xdia.",".$xasignatura.",'".$xhoradesde."','".$xhorahasta."')";

    $cons_usuario='root';
    $cons_contra='';
    $cons_base_datos='bdtaller';
    $cons_equipo='localhost';
   $obj_conexion = mysqli_connect($cons_equipo,$cons_usuario,$cons_contra,$cons_base_datos);
   $var_resultado = $obj_conexion->query($var_consulta);


  }
  
  /*


 








*/
    ?>
</br>
 
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label for="horadesde">Hora Desde:</label>
    <input type="text" name="horadesde" id="horadesde" required>
	</br>
	</br>
	  <label for="horahasta">Hora Hasta:</label>
    <input type="text" name="horahasta" id="horahasta" required>
	</br>
	</br>
    <?php

$cons_usuario='root';
$cons_contra='';
$cons_base_datos='bdtaller';
$cons_equipo='localhost';
$obj_conexion = mysqli_connect($cons_equipo,$cons_usuario,$cons_contra,$cons_base_datos);

$var_consulta = 'SELECT * from dia';


$var_resultado = $obj_conexion->query($var_consulta);

echo "<label  id='lbdias'>Dias :".str_repeat(" ",10)."</label>";
if($var_resultado->num_rows>0) { 
  echo "<select name='dia'>";

while ($var_fila=$var_resultado->fetch_array()){
echo " <option value='".$var_fila['codigo']."'>".$var_fila['nombre']."</option>";    
}
}
echo'</select>';
echo "</br>";
echo "</br>";
echo "<label  id='lbasignatura'>Asignatura :</label>";



$var_consulta = "SELECT * from asignatura";


$var_resultado = $obj_conexion->query($var_consulta);

if($var_resultado->num_rows>0)
  {
    echo "<select name='asignatura'>";

while ($var_fila=$var_resultado->fetch_array())
{
    echo " <option value='".$var_fila["codigo"]."'>".$var_fila["nombre"]."</option>";
 

}
echo "</select>";
  } 


    ?>
    <br>
	</br>
    <input type="submit" value="Enviar">
</form>


  </body>
</html>