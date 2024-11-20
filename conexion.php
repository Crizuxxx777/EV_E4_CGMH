<?php
$server = "localhost";
$user = "root";
$password = "";
$bdtoconect = "";
$con = mysqli_connect($server, $user, $password, $bdtoconect);
if (!$con){
    echo "Error en la conexion";
    }

else
{
    echo "<h1>Conexion Exitosa <h1>";
}
mysqli_close($con);
?>
 ?>