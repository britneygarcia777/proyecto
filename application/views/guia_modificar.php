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
/*<form action="<?php echo base_url();?>index.php/guia/agregarbd" method="POST">
*/
?>
<?php
foreach ($infoguia->result() as $row) {
echo form_open_multipart('admincontrl/modificarbd');
?>
<input type="hidden" name="idguia" value="<?php echo $row->id?>">
					<div class="mb-2 row fw-bold">
						<label class="col-sm-2 col-form-label"><p>Nombre</p></label>
						<div class="col-sm-8">
							<input class="form-control bg-transparent fw-bold" type="text" name="nombre" placeholder="nombre de guía" autocomplete="off" value="<?php echo $row->nombre;?>" >
						</div>					
					</div>
					<div class="mb-2 row fw-bold">
						<label class="col-sm-2 col-form-label"><p>Primer Apellido</p></label>
						<div class="col-sm-8">
							<input class="form-control bg-transparent fw-bold" type="text" name="apellido1" placeholder="primer apellido" autocomplete="off" value="<?php echo $row->primerApellido;?>" >
						</div>				
					</div>	
					<div class="mb-2 row fw-bold">
						<label class="col-sm-2 col-form-label"><p>Segundo Apellido</p></label>
						<div class="col-sm-8">
							<input class="form-control bg-transparent fw-bold" type="text" name="apellido2" placeholder="segundo apellido" autocomplete="off" value="<?php echo $row->segundoApellido;?>" >
						</div>				
					</div>		
					<div class="mb-2 row fw-bold">
						<label class="col-sm-2 col-form-label"><p>Correo</p></label>
						<div class="col-sm-8">
							<input class="form-control bg-transparent fw-bold" type="email" name="correo" placeholder="correo" autocomplete="off" value="<?php echo $row->email;?>">
						</div>				
					</div>
					<div class="mb-2 row fw-bold">
						<label class="col-sm-2 col-form-label"><p>Telefono</p></label>
						<div class="col-sm-8">
							<input class="form-control bg-transparent fw-bold" type="text" name="telefono" placeholder="telefono" autocomplete="off"value="<?php echo $row->telefono;?>" >
						</div>				
					</div>	
					<div class="mb-2 row fw-bold">
						<label class="col-sm-2 col-form-label"><p>Fecha de Nacimiento</p></label>
						<div class="col-sm-8">
							<input class="form-control bg-transparent fw-bold" type="date" name="fechaN" placeholder="fecha" autocomplete="off"value="<?php echo $row->fechaNacimiento;?>" >
						</div>		
					

					</div>
		<button class="btn btn-success fw-bold" type="submit">MODIFICAR</button>		

<?php
echo form_close();
}//fin del foreache
?>
<!--</form>-->
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