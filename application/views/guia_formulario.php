<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>formulario</h1>
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
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
           
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">REGISTRAR NUEVO EGUIA</h3>
                <br>
              </div>

              <!-- /.card-header -->
              <div class="card-body">
                
              	<?php
echo form_open_multipart('admincontrl/agregarbd');
?>
					<div class="mb-2 row fw-bold">
						<label class="col-sm-2 col-form-label"><p>Nombre</p></label>
						<div class="col-sm-8">
							<input class="form-control bg-transparent fw-bold" type="text" name="nombre" placeholder="nombre del guía" autocomplete="off" >
						</div>					
					</div>
					<div class="mb-2 row fw-bold">
						<label class="col-sm-2 col-form-label"><p>Pirmer Apellido</p></label>
						<div class="col-sm-8">
							<input class="form-control bg-transparent fw-bold" type="text" name="apellido1" placeholder="Primer Apellido" autocomplete="off" >
						</div>				
					</div>				
					
					<div class="mb-2 row fw-bold">
						<label class="col-sm-2 col-form-label"><p>Segundo Apellido</p></label>
						<div class="col-sm-8">
							<input class="form-control bg-transparent fw-bold" type="text" name="apellido2" placeholder="Segundo Apellido" autocomplete="off" >
						</div>				
					</div>
					<div class="mb-2 row fw-bold">
						<label class="col-sm-2 col-form-label"><p>Correo Electronico</p></label>
						<div class="col-sm-8">
							<input class="form-control bg-transparent fw-bold" type="email" name="email" placeholder="correo" autocomplete="off" >
						</div>				
					</div>
					<div class="mb-2 row fw-bold">
						<label class="col-sm-2 col-form-label"><p>Contraseña</p></label>
						<div class="col-sm-8">
							<input class="form-control bg-transparent fw-bold" type="password" name="password" placeholder="contraseña" autocomplete="off" >
						</div>				
					</div>
					<div class="mb-2 row fw-bold">
						<label class="col-sm-2 col-form-label"><p>Telefono</p></label>
						<div class="col-sm-8">
							<input class="form-control bg-transparent fw-bold" type="text" name="telefono" placeholder="telefono" autocomplete="off" >
						</div>				
					</div>
					<div class="mb-2 row fw-bold">
						<label class="col-sm-2 col-form-label"><p>Fecha de nacimiento</p></label>
						<div class="col-sm-8">
							<input class="form-control bg-transparent fw-bold" type="date" name="fechaN" placeholder="correo" autocomplete="off" >
						</div>				
					</div>
					<div class="mb-2 row fw-bold">
						<label class="col-sm-2 col-form-label"><p>rol</p></label>
						<div class="col-sm-8">
							<input class="form-control bg-transparent fw-bold" type="text" name="rol" placeholder="correo" autocomplete="off" value="guia">
						</div>				
					</div>
					<button class="btn btn-success fw-bold" type="submit">Agregar</button>
					<button class="btn btn-warning fw-bold" type="reset">borrar</button>
          
<?php
echo form_close();
?>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->