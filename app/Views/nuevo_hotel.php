<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nuevos Hoteles</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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
            Nuevos Hoteles
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
        <h1>Nuevos Hoteles</h1>
        <form action="agregar_hotel" method="post">
            <div class="mb-3">
                <label for="txtHotelId" class="form-label">ID Hotel</label>
                <input type="number" class="form-control" id="txtHotelId" name="txtHotelId" placeholder="Ingrese su No. de DPI">
            </div>
            <div class="mb-3">
                <label for="txtNombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="txtNombre" name="txtNombre" placeholder="Ingrese su Apellido">
            </div>
            <div class="mb-3">
                <label for="txtCorreo" class="form-label">Correo Electronico</label>
                <input type="email" class="form-control" id="txtCorreo" name="txtCorreo" placeholder="Ingrese su Numero Movil">
            </div>
            <div class="mb-3">
                <label for="txtTelefono" class="form-label">Telefono</label>
                <input type="number" class="form-control" id="txtTelefono" name="txtTelefono" placeholder="Ingrese su Telefono de Casa">
            </div>
            <div class="mb-3">
                <label for="txtTelefono" class="form-label">Direccion</label>
                <input type="text" class="form-control" id="txtDireccion" name="txtDireccion" placeholder="Ingrese su Correo Electronico">
            </div>
            <div class="mb-3">
                <label for="txtCiudadId" class="form-label">ID Ciudad</label>
                <select class="form-select" name="txtCiudadId" id="txtCiudadId" >
                    <option value=""></option>
                    <option value="1">Guatemala</option>
                    <option value="2">Retalhuleu</option>
                    <option value="4">Acapulco</option>
                    <option value="5">Cancun</option>
                    <option value="7">Cartagena</option>
                    <option value="8">Bogota</option>
                    <option value="11">Cartago</option>
                    <option value="13">Rio de Janeiro</option>
                    <option value="14">Sao Pablo</option>
                    <option value="16">Cusco</option>
                    <option value="17">Limar</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="txtCategoriaId" class="form-label">ID Categoria</label>
                <select class="form-select" name="txtCategoriaId" id="txtCategoriaId" >
                    <option value=""></option>
                    <option value="101">1 Estrella</option>
                    <option value="102">2 Estrellas</option>
                    <option value="103">3 Estrellas</option>
                    <option value="104">4 Estrellas</option>
                    <option value="105">5 Estrellas</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="txtUsuarioId" class="form-label">ID Usuario</label>
                <select class="form-select" name="txtUsuarioId" id="txtUsuarioId" >
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>