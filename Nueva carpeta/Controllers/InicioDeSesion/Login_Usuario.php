<?php 
    session_start();
    include '../../Config/connection.php';
    $usuario= $_POST['Usuario'];
    $Contrasena= $_POST['Contrasena'];
    // Construir la consulta SQL correctamente
    $validacion = "SELECT * FROM usuarios WHERE Usuario = '$usuario' and Contrasena = '$Contrasena'";

    // Ejecutar la consulta
    $respuesta = mysqli_query($connec, $validacion);

    // Comprobar si se encontró un registro coincidente
    if(mysqli_num_rows($respuesta) > 0) {
        $usuarioDatos = mysqli_fetch_assoc($respuesta);
        $_SESSION["Nombre"]=$usuarioDatos['Usuario'] ;
        header("Location: ../../Vistas/Modulo-SesionInciada/SesionIniciada.php");
        exit();
    }
    else{
        echo "Error: Usuario o contraseña incorrectos.";
    }
 ?>