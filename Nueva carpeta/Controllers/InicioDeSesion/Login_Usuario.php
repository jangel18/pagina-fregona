<?php 
session_start();
include '../../Config/connection.php';

// Obtener datos de POST
$usuario = $_POST['Usuario'];
$contrasena = $_POST['Contrasena'];

// Construir la consulta SQL para validar usuario y contraseña
$validacion = "SELECT * FROM usuarios WHERE Usuario = '$usuario' AND Contrasena = '$contrasena'";

// Ejecutar la consulta
$respuesta = mysqli_query($connec, $validacion);

// Comprobar si se encontró un registro coincidente
if (mysqli_num_rows($respuesta) > 0) {
    $usuarioDatos = mysqli_fetch_assoc($respuesta);
    
    // Guardar información del usuario en la sesión
    $_SESSION["Nombre"] = $usuarioDatos['Usuario'];
    $_SESSION["Rol"] = $usuarioDatos['ROL'];  // Asumimos que 'ROL' está en la tabla 'usuarios'
    
    // Redirigir según el rol
    if ($usuarioDatos['ROL'] == 1) {
        header("Location: ../../Vistas/Modulo-Usuario/ModuloUsuario.php");
        exit();
    } elseif ($usuarioDatos['ROL'] == 2) {
        header("Location: ../../Vistas/Modulo-Admin/ModuloAdmin.php");
        exit();
    } else {
        // Si no se reconoce el rol
        echo "Rol no reconocido.";
    }
} else {
    // Mostrar mensaje de error si las credenciales no son válidas
    echo "Error: Usuario o contraseña incorrectos.";
}

// Cerrar la conexión a la base de datos
mysqli_close($connec);
?>
