<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>creacion de paquetes tours</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
      <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
      <!-- /.agragar estilos al mapa con el nimero de id del formulario ubicacion/mapa-->
      <style>
        #mapa{
          height: 400px;
          width: 600px;
        }
      </style>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-6">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Nuevo paquete turistico</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
<?php
echo form_open_multipart('guiacontrl/agregarbd');
?>
              <div class="form-group">
                <label for="inputName">Nombre del Proyecto</label>
                <input type="text" name="nombre" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputDescription">Descripcion del proyecto</label>
                <textarea name="descripcion" class="form-control" rows="4"></textarea>
              </div>             
              <div class="form-group">
                <label for="inputClientCompany">Fecha de Inicio</label>
                <input type="date" name="fechaI" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputProjectLeader">Capacidad</label>
                <input type="number" name="capacidad" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputStatus">Dificultal</label>
                <select name="dificultad" class="form-control custom-select">
                  <option selected disabled>Seleccione una opcion</option>
                  <option>Nivel Basico</option>
                  <option>Nivel Intermedio</option>
                  <option>Nivel Avanzado</option>
                </select>
              </div>
              <div class="form-group">
                <label for="inputProjectLeader">Precio</label>
                <input type="decimal" name="precio" class="form-control">
              </div>
              <button class="btn btn-success fw-bold" type="submit">Agregar paquete</button>
<?php
echo form_close();
?>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>

        <div class="col-md-6">
          <div class="card card-secondary">
            <div class="card-header">
              <h3 class="card-title">Ubicación</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
<?php
echo form_open_multipart('guiacontrl/agregarubibd');
?>
              <div class="form-group">
                <label for="inputEstimatedBudget">Nombre</label>
                <input type="text" id="nombre" class="form-control" name="nombre">
              </div>
              <div id="mapa"></div>
              <div class="form-group">
                <label for="inputSpentBudget">Latitud</label>
                <input type="decimal" id="latitud" class="form-control" name="latitud">
              </div>
              <div class="form-group">
                <label for="inputEstimatedDuration">Longitud</label>
                <input type="decimal" id="longitud" class="form-control" name="longitud">
              </div>
              <button class="btn btn-success fw-bold" type="submit">Agregar ubicacion</button>
<?php
echo form_close();
?>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
      <h5 class="mb-2">Fotos del destino</h5>
        <div class="card card-success">
          <div class="card-body">
            <div class="row">
              
            </div>
          </div>
        </div>
      
     <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
    <!-- /.script para mostrar el mapa -->
     <script>
       let map=L.map('mapa').setView([-17.388435,-66.159595],12);
       //colocamos capa
       L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'}).addTo(map);
       //L.marker([-17.42113,-66.14654]).addTo(map).bindPopup("Mi ubicacion").openPopup();
       var marcadorActual = null;
       map.on('click',onMapClick);
       function onMapClick(e){
        var latitudInput = document.getElementById("latitud");
        var longitudInput = document.getElementById("longitud");

        if (marcadorActual) {
            map.removeLayer(marcadorActual);
        }
        // Obtén las coordenadas e.latlng
        var latitud = e.latlng.lat.toFixed(6); // Limita el número de decimales
        var longitud = e.latlng.lng.toFixed(6); // Limita el número de decimales
         var nuevoMarcador =L.marker([latitud,longitud]).addTo(map).openPopup();
        // Actualiza los valores de los campos de entrada
        latitudInput.value = latitud;
        longitudInput.value = longitud;
            // Actualiza la referencia al marcador actual
        marcadorActual = nuevoMarcador;

       }
     </script>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->