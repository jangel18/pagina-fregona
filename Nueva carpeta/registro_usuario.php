<?php 
    include 'connection.php';
    $usuario= $_POST['Usuario'];
    $Contrasena= $_POST['Contrasena'];
    $ROL =$_POST['ROL'];

    //Se utilizan los puntos para concatenar y no lo tome como si fuera un texto plano si no como una variable
    $query = "INSERT INTO usuarios (Usuario, Contrasena, ROL) 
          VALUES ('" . $usuario . "', '" . $Contrasena . "', '" . $ROL . "')";

    
    $ejecutar= mysqli_query($connec,$query);

?>
