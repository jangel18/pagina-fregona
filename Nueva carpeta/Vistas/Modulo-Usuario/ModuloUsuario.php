<?php

    session_start();
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-light bg-light">
  <div>
    <h3>Bienvenido Usuario <?php echo $_SESSION["Nombre"];?> </h3>
  </div>
</nav> 

<table>
  <th>Nro. de tarea</th>
  <th>Fecha de creacion o actualizacion</th>
  <th>Tarea</th>
  <th>Comentarios</th>

  
</table>
</body>
</html>