<meta charset="utf-8">
<html>
<head>
    <title>Consultar Alumnos</title>
    <link rel="stylesheet" type="text/css" href="CSS.css">
</head>
<body>
<center>
<?php
$con = mysqli_connect("localhost", "root", "", "escolar_cgmh"); //se crea la conexion al servidor
$resultado = mysqli_query($con, "SELECT * FROM alumnos"); //consultamos el contenido de la tabla datos
if ($resultado === false) {
    echo "Fallo";
    die(mysqli_error($con)); //Muestra el error que ocurrió
}
echo "<center><font face='Arial'>";
echo "<a href='consulta_alumnos.php'>Actualizar tabla</a>";
echo "<h1>Consulta de la tabla Datos</h1>";
echo "<table border='1'>"; // Abre la tabla
echo "<tr>
    <th>Matricula</th>
    <th>Nombre</th>
    <th>Apellidos</th>
    <th>Edad</th>
</tr>";

while ($row = mysqli_fetch_array($resultado)) { //Muestra el contenido de cada alumno
    echo "<tr>";
    echo "<td align=center>" . $row['id_matricula'] . "</td>";
    echo "<td>" . $row['Nombre'] . "</td>";
    echo "<td>" . $row['Apellido'] . "</td>";
    echo "<td align=center>" . $row['Edad'] . "</td>";
    echo "</tr>";
}

echo "</table>"; // Cierra la tabla
$registros = mysqli_num_rows($resultado);
echo "<br>Registros : " . $registros;
mysqli_close($con); //Cerramos la conexion a la BD
?>
</center>
</body>
</html>
