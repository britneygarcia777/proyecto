  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>guias registrados</h1>
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
                <h3 class="card-title"> LUGARES CREADOS</h3><br>
               
              </div>
              <!-- /.card-header -->
              <div class="card-body" >
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Nor</th>
                    <th>Nombre</th>
                    <th>municipio</th>
                    <th>mocificar</th>
                    <th>eliminaro</th>
                  </tr>
                  </thead>
                  <tbody>
<?php
 $indice=1;
 foreach ($lugar->result() as $row) {
?>
                  <tr>
                    <td><?php echo $indice;?></td>
                    <td><?php echo $row->nombre?></td>
                    <td><?php echo $row->municipio?></td>
                    <td>
<?php
echo form_open_multipart('lugarescontrl/modificar');
?>
<input type="hidden" name="idlugar" value="<?php echo $row->idlugares?>">
<button class="btn btn-success fw-bold" type="submit">MODIFICAR</button>
<?php
echo form_close();
?>
              </td>

              <td>
<?php
echo form_open_multipart('lugarescontrl/eliminarbd');
?>
<input type="hidden" name="idlugar" value="<?php echo $row->idlugares?>">
<button class="btn btn-warning fw-bold" type="submit">Eliminar</button>
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
                    <th>municipio</th>
                    <th>mocificar</th>
                    <th>eliminaro</th>
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