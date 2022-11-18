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
            <li><a class="dropdown-item " href="<?=base_url('sale_page')?>">Historial de Ventas</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
</header>
<br>
<br>
<div class="card">
  <div class="card-body">
  <center><h5 class="card-title">ACTULIZAR PRODUCTO CON ID:    <?=$id_edit['ID']?> </h5></center>
  <form method="post" action="<?=site_url('/update')?>" enctype="multipart/form-data">
  <input type="hidden" name="id"  value="<?=$id_edit['ID']?>">
        <div class="form-group">

            <label for="nombre">Nombre del Producto</label>
            <input id="nombre" class="form-control" type="text" name="nombre"  value="<?=$id_edit['NameProduct']?>" placeholder="Capuccino..">

            <label for="referencia">Referencia</label>
            <input id="referencia" class="form-control" type="text" name="referencia" value="<?=$id_edit['Reference']?>" placeholder="62723..">

            <label for="precio">Precio</label>
            <input id="precio" class="form-control" type="number" name="precio" value="<?=$id_edit['Price']?>" placeholder="5000..">

            <label for="peso">Peso(Gramos)</label>
            <input id="peso" class="form-control" type="number" name="peso" value="<?=$id_edit['Weight']?>" placeholder="13g..">

            <label for="categoria">Categoria</label>
            <input id="categoria" class="form-control" type="text" name="categoria" value="<?=$id_edit['Category']?>" placeholder="Seleccione..">

            <label for="stock">Stock</label>
            <input id="stock" class="form-control" type="number" name="stock" value="<?=$id_edit['Stock']?>" placeholder="Ejemplo: 99..">

            <br>
            <center>
            <a href="<?=base_url('/')?>" class="btn btn-dark">REGRESAR</a>
            <button type="submit" class="btn btn-primary">ACTUALIZAR</button>
            </center>
    
        </div>
    </form>
  </div>
</div>