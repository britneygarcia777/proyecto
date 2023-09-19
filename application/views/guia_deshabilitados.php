  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>guias deshabilitados</h1>
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
                <h3 class="card-title"> GUIAS TURISTICOS DESHABILITADOS</h3><br>
               
              </div>
              <!-- /.card-header -->
              <div class="card-body" >
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Nor</th>
                    <th>Nombre</th>
                    <th>Primer Apellido</th>
                    <th>Segundo Apellido</th>
                    <th>Correo</th>
                    <th>Telefono</th>                    
                    <th>Fecha de Nacimiento</th>
                    <th>Rol</th>                 
                    <th>Habilitar</th>
                    <th>Eliminar</th>
                  </tr>
                  </thead>
                  <tbody>
<?php
 $indice=1;
 foreach ($guia->result() as $row) {
?>
                  <tr>
                    <td><?php echo $indice;?></td>
                    <td><?php echo $row->nombre?></td>
                    <td><?php echo $row->primerApellido?></td>
                    <td><?php echo $row->segundoApellido?></td>
                    <td><?php echo $row->email?></td>
                    <td><?php echo $row->telefono?></td>
                    <td><?php echo $row->fechaNacimiento?></td>
                    <td><?php echo $row->rol?></td>
                    <td>
<?php
echo form_open_multipart('admincontrl/habilitarbd');
?>
<input type="hidden" name="idguia" value="<?php echo $row->id?>">
<button class="btn btn-success fw-bold" type="submit">HABILITAR</button>
<?php
echo form_close();
?>
              </td>

              <td>
<?php
echo form_open_multipart('admincontrl/eliminarbd');
?>
<input type="hidden" name="idguia" value="<?php echo $row->id?>">
<button class="btn btn-danger fw-bold" type="submit">ELIMINAR</button>
<?php
echo form_close();
?>
              </td>


                  </tr>     
<?php
 $indice++;
 }?>             
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Nor</th>
                    <th>Nombre</th>
                    <th>Primer Apellido</th>
                    <th>Segundo Apellido</th>
                    <th>Correo</th>
                    <th>Telefono</th>                    
                    <th>Fecha de Nacimiento</th>
                    <th>Rol</th>                 
                    <th>Habilitar</th>
                    <th>Eliminar</th>
                  </tr>
                  </tfoot>
                </table>
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