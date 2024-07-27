<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Modificar Cliente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?php echo base_url('/');?>">Inicio</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Editar Cliente
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?php echo base_url('ver_clientes');?>">Clientes</a></li>
            <li><a class="dropdown-item" href="<?php echo base_url('ver_hoteles');?>">Hoteles</a></li>
            <li><a class="dropdown-item" href="<?php echo base_url('ver_reservaciones');?>">Reservaciones</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>  
</nav>
    <div class="container">
        <h1>Modificar Cliente</h1>
        <form action="<?=base_url('modificar_clientes')?>" method="post">
        <div class="mb-3">
                <label for="txtClienteId" class="form-label">ID Clientes</label>
                <input type="number" class="form-control" id="txtClienteId" name="txtClienteId" placeholder="Ingrese su No. de DPI" value="<?=$datos['cliente_id'];?>" readonly>
            </div>
            <div class="mb-3">
                <label for="txtNombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="txtNombre" name="txtNombre" placeholder="Ingrese su Apellido" value="<?=$datos['nombre'];?>">
            </div>
            <div class="mb-3">
                <label for="txtApellido" class="form-label">Apellido</label>
                <input type="text" class="form-control" id="txtApellido" name="txtApellido" placeholder="Ingrese su Nombre" value="<?=$datos['apellido'];?>">
            </div>
            <div class="mb-3">
                <label for="txtNit" class="form-label">Nit</label>
                <input type="number" class="form-control" id="txtNit" name="txtNit" placeholder="Ingrese su Direccion" value="<?=$datos['nit'];?>">
            </div>
            <div class="mb-3">
                <label for="txtTelefono" class="form-label">Telefono</label>
                <input type="number" class="form-control" id="txtTelefono" name="txtTelefono" placeholder="Ingrese su Telefono de Casa" value="<?=$datos['telefono'];?>">
            </div>
            <div class="mb-3">
                <label for="txtCorreo" class="form-label">Correo Electronico</label>
                <input type="email" class="form-control" id="txtCorreo" name="txtCorreo" placeholder="Ingrese su Numero Movil" value="<?=$datos['correo_electronico'];?>">
            </div>
            <div class="mb-3">
                <label for="txtDireccion" class="form-label">Direccion</label>
                <input type="text" class="form-control" id="txtDireccion" name="txtDireccion" placeholder="Ingrese su Correo Electronico" value="<?=$datos['direccion'];?>">
            </div>
            <button type="submit" class="btn btn-primary" id="btnEnviar" name="btnEnviar">Guardar</button>
        </form>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>