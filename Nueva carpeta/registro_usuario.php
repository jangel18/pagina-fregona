<?php 
    include 'connection.php';
    $usuario= $_POST['Usuario'];
    $Contrasena= $_POST['Contrasena'];
    $ROL =$_POST['ROL'];

    $query= "INSERT INTO usuarios ( Usuario, Contrasena, ROL) 
        Values('$usuario','$Contrasena','$ROL')";
    
    $ejecutar= mysqli_query($connec,$query);

?>