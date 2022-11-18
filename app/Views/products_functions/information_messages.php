<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SoftwareKonecta!</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" 
    crossorigin="anonymous">
  </head>
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" 
crossorigin="anonymous"></script>

<header>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand"><strong>SoftwareKonecta</strong></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="<?=base_url('/')?>">Inicio</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Modulo Ventas
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?=base_url('create_sale')?>">Realizar Venta</a></li>
            <li><a class="dropdown-item" href="<?=base_url('sale_page')?>">Historial de Ventas</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
</header>
<br>
<?php 
switch ($valor) {
    case 1: ?>
        <center>
        <div class="alert alert-success" role="alert" style="width: 40rem;">
        <h4 class="alert-heading"><strong>PRODUCTO AGREGADO!</strong></h4>
        <p>El producto: <strong><?php echo $namepro?></strong> fue ingresado al sistema exitosamente.</p>
        </div>
        </center>

<?php
    break;
    
    case 2: ?>
        <center>
        <div class="alert alert-primary" role="alert" style="width: 40rem;">
        <h4 class="alert-heading"><strong>PRODUCTO ACTUALIZADO!</strong></h4>
        <p>La actualizacion de datos del producto: <strong><?php echo $namepro?></strong> fue exitosa.</p>
        </div>
        </center>
<?php
    break;
    
    case 3: ?>
        <center>
        <div class="alert alert-success" role="alert" style="width: 40rem;">
        <h4 class="alert-heading"><strong>PRODUCTO ELIMINADO!</strong></h4>
        <p>EL producto: <strong><?php echo $namepro?></strong> ha sido eliminado del sistema satisfactoriamente.</p>
        </div>
        </center>

<?php
    break;
    case 4: ?>
        <center>
        <div class="alert alert-warning" role="alert" style="width: 40rem;">
        <h4 class="alert-heading"><strong>ERROR!</strong></h4>
        <p>No se puede relizar la venta, debido a que la cantidad a vender supera al stock del o los productos ingresados</p>
        </div>
        </center>
    <?php
    break;
}?>
        <center>
        <a class="btn btn-dark" href="<?=base_url('/')?>" role="button">REGRESAR</a>
        </center>