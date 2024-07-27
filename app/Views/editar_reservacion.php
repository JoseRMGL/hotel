<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Modificar Reservacion</title>
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
            Editar Reservacion
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
        <h1>Modificar Reservacion</h1>
        <form action="<?=base_url('modificar_reservacion')?>" method="post">
        <div class="mb-3">
                <label for="txtClienteId" class="form-label">ID Reservacion</label>
                <input type="number" class="form-control" id="txtClienteId" name="txtClienteId" placeholder="Ingrese su No. de DPI" value="<?=$datos['reservacion_id'];?>" readonly>
            </div>
            <div class="mb-3">
                <label for="txtNombre" class="form-label">Fecha</label>
                <input type="date" class="form-control" id="txtNombre" name="txtNombre" placeholder="Ingrese su Apellido" value="<?=$datos['fecha'];?>">
            </div>
            <div class="mb-3">
                <label for="txtApellido" class="form-label">ID Cliente</label>
                <input type="number" class="form-control" id="txtApellido" name="txtApellido" placeholder="Ingrese su Nombre" value="<?=$datos['cliente_id'];?>">
            </div>
            <div class="mb-3">
                <label for="txtHotelId" class="form-label">ID Hotel</label>
                <select class="form-select" name="txtHotelId" id="txtHotelId" >
                    <option value="1">Gran Jaguar</option>
                    <option value="2">Real InterContinental</option>
                    <option value="3">Gran Tikal Futura Hotel</option>
                    <option value="4">Casa Bourbon Hote</option>
                    <option value="5">Hotel Y Restaurante Río Reu</option>
                    <option value="6">Santa Clara</option>
                    <option value="7">Palomar</option>
                    <option value="8">TriCentenario</option>
                    <option value="9">Hospedajon</option>
                    <option value="10">Los locos</option>
                    <option value="11">La GInebra</option>
                    <option value="12">El abuelo</option>
                    <option value="13">Las pajaras</option>
                    <option value="14">Los amuletos</option>
                    <option value="15">Las ruinas</option>
                    <option value="16">Agua verde</option>
                    <option value="19">Santo Thomas </option>
                    <option value="20">Grand HotelContinental</option>
                    <option value="24">El Buen Viajero</option>
                    <option value="25">Años de Estancia</option>
                    <option value="26">Guerrero Maya</option>
                    <option value="27">SIempre Feliz</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="txtCorreo" class="form-label">Descripcion</label>
                <input type="email" class="form-control" id="txtCorreo" name="txtCorreo" placeholder="Ingrese su Numero Movil" value="<?=$datos['descripcion'];?>">
            </div>
            <div class="mb-3">
                <label for="txtUsuario" class="form-label">ID Usuario</label>
                <select class="form-select" name="txtUsuario" id="txtUsuario" >
                    <option value=""></option>
                    <option value="2">Soyla Recepcionista</option>
                    <option value="5">Juan Perez</option>
                    <option value="100">Juan Alvarez</option>
                    <option value="200">Maria Batz</option>
                    <option value="300">Martha Flores</option>
                    <option value="301">Daniel Urizar</option>
                    <option value="777">Soyel Administrador</option>
                    <option value="888">Soyel Recepcionista</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary" id="btnEnviar" name="btnEnviar">Guardar</button>
        </form>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>