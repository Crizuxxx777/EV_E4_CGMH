<?php
$con = mysqli_connect("localhost", "root", "", "escolar_cgmh");
if (!$con) {
    die('No se estableció la conexión con el servidor: ' . mysqli_connect_error());
}

// Verificación de que los datos están definidos
if (isset($_POST['id_matricula'], $_POST['nombre'], $_POST['apellidos'], $_POST['edad'])) {
    $id_matricula = mysqli_real_escape_string($con, $_POST['id_matricula']);
    $nombre = mysqli_real_escape_string($con, $_POST['nombre']);
    $apellido = mysqli_real_escape_string($con, $_POST['apellidos']);
    $edad = mysqli_real_escape_string($con, $_POST['edad']);
    
    $sql = "INSERT INTO alumnos (id_matricula, Nombre, Apellido, Edad) VALUES ('$id_matricula', '$nombre', '$apellido', '$edad')";
    
    if (!mysqli_query($con, $sql)) {
        die('Error al insertar el registro: ' . mysqli_error($con));
    }
    
    echo "<center>";
    echo "1 registro agregado con éxito <br>";
    echo "<a href='consulta_alumnos.php'>Ver registros</a>";
} else {
    echo "Faltan datos para agregar el registro.";
}

mysqli_close($con);
?>

