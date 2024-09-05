<?php 
include '../../Config/connection.php';

    $RolU = $_POST['RolUsua'];
    $ValRol = "SELECT ROL FROM usuarios WHERE usuario ='$RolU'";
    $respuesta = mysqli_query($connec, $ValRol);
    echo  $ValRol;
   
    
    if ($respuesta) {
        // Obtener el resultado de la consulta
        $fila = mysqli_fetch_assoc($respuesta);
        
        if ($fila) {
            // Mostrar el rol del usuario
            echo "El rol del usuario es: " . htmlspecialchars($fila['ROL']);
            
            //Redireccion a vista de usuario
            if( $fila['ROL']==1){
                echo "usuario";
                header("Location: ../../Vistas/Modulo-Usuario/ModuloUsuario.php");
                exit();
            }
            
            //Redireccion a vista de admin
            elseif( $fila['ROL']==2){ 
                echo "Admin";
                header("Location: ../../Vistas/Modulo-Admin/ModuloAdmin.php");
                exit();
            }
        } else {
            // Si no se encuentra el usuario, mostrar un mensaje
            echo "No se encontró el usuario.";
        }
    } else {
        // Mostrar un mensaje de error en caso de que la consulta falle
        echo "Error en la consulta: " . mysqli_error($connec);
    }
    
    // Cerrar la conexión a la base de datos
    mysqli_close($connec);
    ?>

?>