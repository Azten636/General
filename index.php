<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crud en php y mysqlt</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/fc90ac564b.js" crossorigin="anonymous"></script>
</head>
<body>
<header>
      <nav class="navbar navbar-expand-md fixed-top navbar-light bg-primary"> <div class="container">

      <a href="#" class="navbar-brand mb-0 h1" >  <img class="d-inline-block align-top" src="imagenes/logo sistemas.png" alt="Descripción de la imagen" width="40" height="40"> ISC

      </a>
      <button 
      class="navbar-toggler" 
      type="button" 
      data-bs-toggle="collapse" 
      data-bs-target="#navbarNav"
      aria-controls="navbarNav"
      aria-expanded="false"
      aria-label="Toggle navigation"
      >
      <span class="navbar-toggler-icon"></span>
    </button>

      <div class = "collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a href="#" class="nav-link">
            Home
          </a>
        </li>
        <li class="nav-item dropdown">
          <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Features
          </a>
          <ul class="dropdown-menu"
          aria-labelledby="navbarDropdown">
          <li>
            <a href="#" class="dropdown-item">hola1</a>
          </li>
          <li>
            <a href="#" class="dropdown-item">hola2</a>
          </li>
          <li>
            <a href="#" class="dropdown-item">hola3</a>
          </li>
          </ul>
        </li>
        <li class="nav-item active">
          <a href="#" class="nav-link">
            Pricing
          </a>
        </li>
      </ul>

        
      </div>
    </div>
    </nav>
    </header>
    
    <h1 class="text-center p-3">Plantilla crud</h1>
    <div class="container-fluid row">
      <form class ="col-4 p-3" method="POST">
        <h3 class="text-center text-secondary">Registro de personas</h3>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Nombres de la persona</label>
          <input type="text" class="form-control" name="nombres">
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Apellidos de la persona</labe>
          <input type="text" class="form-control" name="apellidos">
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Dni de la persona</label>
          <input type="text" class="form-control" name="dni">
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Fecha de nacimiento </label>
          <input type="date" class="form-control" name="fecha">
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Correo</label>
          <input type="email" class="form-control" name="correo">
        </div>
  
        <button type="submit" class="btn btn-primary"name="btnregistrar" value="ok" >Registrar</button>

        <div class="mb-3" >
          <?php
          include "modelo/conexion.php";
          include "controlador/registro_persona.php";
          ?>
        </div>
      </form>
<div class="col-8 p-4">

<table class="table">
  <thead class="bg-info">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombres</th>
      <th scope="col">Apellidos</th>
      <th scope="col">DNI</th>
      <th scope="col">Fecha de nacimiento</th>
      <th scope="col">Correo</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
  
    <?php
include "modelo/conexion.php";
$sql = $conexion->query("select * from persona");
while ($datos = $sql->fetch_object()) { ?>


      
<tr>
  <td><?= $datos->id_persona ?></td>
  <td><?= $datos->nombres ?></td>
  <td><?= $datos->apellidos ?></td>
  <td><?= $datos->dni ?></td>
  <td><?= $datos->fecha_nac ?></td>
  <td><?= $datos->correo ?></td>
  <td>
      <td>
        <a href=""class="btn btn-small btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
        <a href=""class="btn btn-small btn-danger"><i class="fa-solid fa-trash"></i></a>
      </td>
<?php }
    ?>
  </tbody>
</table>
</div>
</div>

    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>