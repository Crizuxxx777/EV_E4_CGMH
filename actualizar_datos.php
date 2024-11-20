<!DOCTYPE html>
<html>
    <link reel="stylesheet" type="text/css" href="css.css"><!--Especificamos el archivo CSS a ocupar-->
    <meta charset="utf-8"/>
    <style type="text/css"></style>
</html>
<?php
$con = mysqli_connect("localhos", "root", "", "escpñar_cgmh");
$resultado = mysqli_query($con, "select * from datos");
if($resultado === FALSE) {
    echo "fallo";
    die(mysqli_error());
}
echo "<center>";
echo "<h1>Actualizazr Datos</h1>";
echo "<table border='1'">
<