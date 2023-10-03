<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>CREATE NEW PLACE</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
      <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.1.0/css/select2.min.css" rel="stylesheet" />
      <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
      <!-- /.agragar estilos al mapa con el nimero de id del formulario ubicacion/mapa-->
      <style>
        #mapa{
          height: 500px;
          width: 900px;
        }
      </style>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
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
              <div class="row">
                <div class="col-md-9">
                  <div id="mapa"></div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label for="inputEstimatedBudget">Nombre</label>
                    <textarea type="text" id="nombre" class="form-control" name="nombre"></textarea>
                  </div>             
                  <div class="form-group">
                    <label for="inputSpentBudget">Latitud</label>
                    <input type="decimal" id="latitud" class="form-control" name="latitud">
                  </div>
                  <div class="form-group">
                    <label for="inputEstimatedDuration">Longitud</label>
                    <input type="decimal" id="longitud" class="form-control" name="longitud">
                  </div>
                  <button class="btn btn-success fw-bold" type="submit">Agregar ubicacion</button>
                </div>
              </div>
              <div class="row">
                <div class="col-md-9 my-5">
                  <div class="card card-primary">
                    <div class="card-header">
                      <h3 class="card-title">Seccion</h3>
                      <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                          <i class="fas fa-minus"></i>
                        </button>                       
                      </div>                     
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="autocomplete">Municipio</label>
                        <input type="text" id="busquedaMunicipio" class="form-control" style="width: 100%;">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Selecciona un Sector:</label>
                          <select class="form-control select2" style="width: 100%;" id="sectores" >
                            <option value="metropolitana">METROPOLITANA</option>
                            <option value="conosur">CONO SUR</option>
                            <option value="valles">VALLES</option>
                            <option value="andina">ANDINA</option>
                            <option value="tropico">TRÓPICO</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Selecciona un Municipio:</label>
                          <select class="form-control select2" style="width: 100%;" id="municipios">
                            <!-- Opciones iniciales vacías -->
                          </select>

                        </div>
                      </div>
                    </div>   
                  </div>
                    <!-- /.card -->
                </div>
              </div>
               
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
      
  
   <!-- Para crear mapa-->
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