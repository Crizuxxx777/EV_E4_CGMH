<?php
$con = mysqli_connect("localhost", "root", "", "escolar_cgmh"); // Asignamos a una variable el resultado de la conexión
echo "<br><center>";

if (!$con) {
    die('No se estableció la conexión con el servidor: ' . mysqli_connect_error());
}

// Verificamos que id_matricula esté definido
if (isset($_POST['id_matricula'])) {
    $id_matricula = mysqli_real_escape_string($con, $_POST['id_matricula']);
    $sql = "DELETE FROM alumnos WHERE id_matricula = '$id_matricula'";

    if (!mysqli_query($con, $sql)) {
        die('Error al borrar el registro: ' . mysqli_error($con));
    }

    echo "Registro borrado<br><br>";
} else {
    echo "Falta el ID de matrícula para borrar el registro.";
}

echo "<a href='borrrar_datos.html'>Regresar</a>"; // Llamamos a consultas para ver el nuevo registro
mysqli_close($con);
?>
