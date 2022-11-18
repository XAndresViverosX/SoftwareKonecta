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
    <form method="post" style="width: 90%;" action="<?=site_url('/save_sales')?>" enctype="multipart/form-data">
        <input name="ID" id="ID" class="form-control me-2" type="number" placeholder="Indique el ID del Producto">
        <br>
        <input name="Cant" id="Cant" class="form-control me-2" type="number" placeholder="Ingrese la Cantidad">
      <br>
            <select id="MethodPay" name="MethodPay" class="form-select" aria-label="Default select example" style="width:30%">
              <option selected>Seleccione medio de pago</option>
              <option value="Efectivo">Efectivo</option>
              <option value="TarjetaC">Tarjeta de Credito</option>
              <option value="TarjetaD">Tarjeta de Debito</option>
              <option value="PSE">PSE</option>
            </select>
            <br>
            <button type="submit" class="btn btn-success">REALIZAR VENTA</button>
            <a href="<?=base_url('/')?>" class="btn btn-danger">CANCELAR VENTA</a>
            </form>
            </center>