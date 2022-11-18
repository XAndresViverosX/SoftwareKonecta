<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>SoftwareKonecta!</title>
  <meta name="description" content="The small framework with powerful features">
  <meta name="viewport" content="wi1dth=device-width, initial-scale=1">
  <link rel="shortcut icon" type="image/png" href="/favicon.ico" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
</head>

<body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

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
              <a class="nav-link active" aria-current="page" href="<?= base_url('/') ?>"><strong>Inicio</strong></a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Modulo Ventas
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="<?= base_url('create_sale') ?>">Realizar Venta</a></li>
                <li><a class="dropdown-item" href="<?= base_url('sale_page') ?>">Historial de Ventas</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <br>
  <center>
    <strong>
      <h2>LISTADO DE PRODUCTOS</h2>
    </strong>
    <br>
    <a href="<?= base_url('create') ?>" class="btn btn-success" style="width: 15%;" tolt>NUEVO PRODUCTO</a>
    <br>
    <table id="BDProductos" class="table table-striped" style="width:95%">
      <thead class="table-dark">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">NombreProducto</th>
          <th scope="col">Referencia</th>
          <th scope="col">Precio</th>
          <th scope="col">Peso</th>
          <th scope="col">Categoria</th>
          <th scope="col">Stock</th>
          <th scope="col">FechaCreacion</th>
          <th scope="col">Acciones</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($productos as $datapr) { ?>
          <tr>
            <th scope="row"><?php echo $datapr['ID'] ?></th>
            <td><?php echo $datapr['NameProduct'] ?></td>
            <td><?php echo $datapr['Reference'] ?></td>
            <td>$<?php echo number_format($datapr['Price'], 0, ",", "."); ?></td>
            <td><?php echo $datapr['Weight'] ?></td>
            <td><?php echo $datapr['Category'] ?></td>
            <td><?php echo $datapr['Stock'] ?></td>
            <td><?php echo $datapr['CreationDate'] ?></td>
            <td><a href="<?= base_url('edit/' . $datapr['ID']) ?>" class="btn btn-primary" tolt>Editar</a>
              <a href="<?= base_url('deleteconfirm/' . $datapr['ID']) ?>" class="btn btn-danger" tolt>Borrar</a>
            </td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </center>

  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
  <script>
    $(document).ready(function () {
    $('#BDProductos').DataTable({
      "language":{
    "processing": "Procesando...",
    "lengthMenu": "Mostrar _MENU_ registros",
    "zeroRecords": "No se encontraron resultados",
    "emptyTable": "Ningún dato disponible en esta tabla",
    "info": "Mostrando registros del _START_ al _END_ de un total de _MAX_ registros",
    "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
    "infoFiltered": "(filtrado de un total de _MAX_ registros)",
    "search": "Buscar:",
    "infoThousands": ",",
    "loadingRecords": "Cargando...",
    "paginate": {
        "first": "Primero",
        "last": "Último",
        "next": "Siguiente",
        "previous": "Anterior"
    }},
    });
    
  });
  </script>

</body>

</html>