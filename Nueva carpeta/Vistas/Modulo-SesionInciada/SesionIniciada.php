<?php
    
    // Inicio de sesion personalizado
    session_start();
   //Mantiene la sesion iniciada
    echo "Hola" . $_SESSION["Nombre"];
    $RolUsua = $_SESSION["Nombre"];
    echo "$RolUsua";
    
    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="../../Controllers/ValidarRol/validar_rol.php" method="POST">
    <input type="hidden" name="RolUsua" value="<?php echo htmlspecialchars($RolUsua); ?>">
    <button type="submit">De click para acceder segun su rol</button>       


    </form>

</body>
</html>