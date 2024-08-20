
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resgistro de usuarios</title>
    <link rel="stylesheet" href= "css/style.css"> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css
">
    <style></style>
</head>
<body>
    <div class="container text-center ">
      
         <h1  class="text-warning" >Sistema de Administracion de Tareas JASA</h1>
        
        <br>
        <br>
        <br>
        <div class= "d-flex justify-content-center">
          <div class="p-3 mb-2 bg-warning text-dark  ">
            <form  action="registro_usuario.php"  method="POST">
            
            <h2>Registrar usuario</h2>
            <div>
                <label for="usuario">Ingrese su usuario</label>
                <br>
                <input type="text" name="Usuario" placeholder="Usuario">
            </div>
                <br>
            <div >
                <label for="Contrasena">Ingrese su contraseña</label>
                <br>
                <input type="password" name="Contrasena" placeholder="Password">
            </div>
            <br>
            <div class="">
            <select name="ROL">

                <option value=1>Usuario</option>

                <option value=2>Administrador</option>

                </select>
            </div>
            <br>

            <input type="submit" value ="Registrar"    >
            
            </form>
            <p>ya tienes una cuenta? Inicia sesion <a href="http://localhost/mi_proyecto/nueva%20carpeta/index3.php?username=&a=sfsfsadfs#ola">aqui</a> </p>
        </div>
        </div>
        
    </div>
</body>
</html>
