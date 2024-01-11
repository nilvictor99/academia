<?php
    session_start();
    
    if (!isset($_SESSION['valido']))
        $_SESSION['valido'] = 0;

    $user = $_POST['usuario'];
    $pass = $_POST['pass'];

    $conexion = new mysqli('localhost', 'root', '', 'sistemaacademia');

    if ($conexion->connect_error) {
        die('No se pudo conectar: ' . $conexion->connect_error);
    }

    echo 'Conexion satisfactoria';

    $query = "SELECT * FROM cuenta WHERE usuario='$user' AND contrasenia='$pass'";
    $result = $conexion->query($query);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $_SESSION['valido'] = 1;

        if ($row['Profesor_id'] == 1) {
            header('location: iniciodireccion.php');
        } elseif ($row['Profesor_id'] == 2) {
            header('location: iniciodocente.php');
        }
    } else {
        $_SESSION['valido'] = 0;
        header('location: index.php');
    }

    $conexion->close();
?>