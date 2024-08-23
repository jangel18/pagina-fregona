<?php 
    include '../Config/connection.php';
    $usuario= $_POST['Usuario'];
    $Contrasena= $_POST['Contrasena'];
    $ROL =$_POST['ROL'];

    //Se utilizan los puntos para concatenar y no lo tome como si fuera un texto plano si no como una variable
    $query = "INSERT INTO usuarios (Usuario, Contrasena, ROL) 
          VALUES ('" . $usuario . "', '" . $Contrasena . "', '" . $ROL . "')";

    
    $ejecutar= mysqli_query($connec,$query);

    //Se elimina el ->execute() debido a que ese es un método que se utiliza en PHP cuando estás trabajando con consultas preparadas usando la API de MySQLi o PDO.
    //Mas no cuando estas haciendo este caso basico de codigo que no prevee inyeccion de sql 

    if ($ejecutar) {
        // Redirigir a una página de éxito SistemaAdministradorTareas
        header("Location: ../Vistas/Modulo-Login/FormularioLogin.php");
        exit();
    } else {    

        //Se pone correctamente el error de coneccion en caso de no ejecutarse la consulta correctamente
        echo "Error: " . mysqli_error($connec);
    }


?>
