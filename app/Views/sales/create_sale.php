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
          <a class="nav-link active dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <strong>Modulo Ventas</strong>
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item active" href="<?=base_url('create_sale')?>">Realizar Venta</a></li>
            <li><a class="dropdown-item" href="<?=base_url('sale_page')?>">Historial de Ventas</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
</header>
<br>
<center>
<strong><h2>REGISTRO DE VENTAS</h2></strong>
    <br>
    <form class="d-flex" role="search" style="width: 90%;">
        <input name="ID" id="ID" class="form-control me-2" type="search" placeholder="Indique el ID del Producto" aria-label="Search">
        <input name="Cant" id="Cant" class="form-control me-2" type="number" placeholder="Ingrese la Cantidad" aria-label="Search">
        <a href="<?=base_url('/')?>" class="btn btn-outline-success" type="submit">Buscar</a>
      </form>