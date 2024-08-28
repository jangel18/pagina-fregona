<?php 

    include '../../Config/connection.php';
    $usuario= $_POST['Usuario'];
    $Contrasena= $_POST['Contrasena'];
    $Validacion  =  "SELECT FROM usuarios WHERE Usuario ='$usuario' and Contrasena ='$Contrasena'";
    $Respuesta = mysqli_query($connec,$Validacion);

    if(!empty($Respuesta)){
        echo" Error";
    }
    else{ echo "Error: " . mysqli_error($connec);}
?>