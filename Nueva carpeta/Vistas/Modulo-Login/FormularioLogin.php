<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesion</title>
    <link rel="stylesheet" href= "../css/style.css"> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css
">
    <style></style>
</head> 
<body>
    <div class="container text-center ">
        <div class="div bg-light ">
            <header class><h1>Sistema de Administracion de Tareas JASA</h1></header>
            <form id="ola" action="">
            
            <h2>Inicio de sesion</h2>
            <div>
                <label for="usuario">Ingrese su usuario</label>
                <br>
                <input type="text" name="Usuario" placeholder="Usuario">
            </div>
                <br>
            <div class="">
                <label for="password">Ingrese su contraseña</label>
                <br>
                <input type="password" name="password" placeholder="Password">
            </div>
            <br>

            <input type="submit" value ="Iniciar Sesion" >
            
            </form>
            <!-- En lugar de ocupar la ruta  http://localhost/mi_proyecto/nueva%20carpeta/index3.php?username=&a=sfsfsadfs#ola es mejor ocupar el archivo o la ruta del archivo-->

            <p>Aun no tienes cuenta? Registrate <a href="../Modulo-Registro/FormularioRegistro.php">aqui</a> </p> 


        </div>
    </div>
</body>
</html>