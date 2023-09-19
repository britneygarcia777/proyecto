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
              <button class="btn btn-success fw-bold" type="submit">Agregar</button>
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
              <h3 class="card-title">Inf del lugar</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="inputEstimatedBudget">Estimated budget</label>
                <input type="number" id="inputEstimatedBudget" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputSpentBudget">Total amount spent</label>
                <input type="number" id="inputSpentBudget" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputEstimatedDuration">Estimated project duration</label>
                <input type="number" id="inputEstimatedDuration" class="form-control">
              </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <a href="#" class="btn btn-secondary">Cancel</a>
          <input type="submit" value="Create new Project" class="btn btn-success float-right">
        </div>
      </div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->