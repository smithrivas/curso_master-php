<?php
//Conectar a la base de datos.
//$conexion = mysqli_connect($host, $user, $password, $database);
$conexion = mysqli_connect("localhost", "root", "", "phpmysql");

//Comprobar conexion
if (mysqli_connect_errno()) {
    echo 'La conexio a la base de datos MySQL ha fallado'.mysqli_connect_error();
}else{
    echo 'Conexion exitosa<br/>';
}

//Consulta para configurar la codificación de caracteres
mysqli_query($conexion, "SET NAMES 'utf8'");

//Consulta SELECT desde PHP
$query = mysqli_query($conexion, "SELECT * FROM notas");

while($nota = mysqli_fetch_assoc($query)){
    //var_dump($nota);
    echo '<h2>'.$nota['titulo'].'</h2><br/>';
    echo $nota['descripcion'].'<br/>';
}

//Insertar un dato en la DB desde PHP
$sql = "INSERT INTO notas VALUES(null,'Nota desde PHP','Esto es una nota de PHP','Green')";
$insert = mysqli_query($conexion, $sql);

echo '<hr/>';
if ($insert) {
    echo 'Datos insertados correctamente';
}else{
    echo "Error: ".mysqli_error($conexion);
}