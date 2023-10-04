<footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.2.0
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->

 <script src="<?php echo base_url();?>/adminlte/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url();?>/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="<?php echo base_url();?>/adminlte/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url();?>/adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo base_url();?>/adminlte/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?php echo base_url();?>/adminlte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?php echo base_url();?>/adminlte/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url();?>/adminlte/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?php echo base_url();?>/adminlte/plugins/jszip/jszip.min.js"></script>
<script src="<?php echo base_url();?>/adminlte/plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?php echo base_url();?>/adminlte/plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?php echo base_url();?>/adminlte/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?php echo base_url();?>/adminlte/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?php echo base_url();?>/adminlte/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<script src="<?php echo base_url();?>/adminlte/dist/js/adminlte.min.js"></script>
<script src="<?php echo base_url();?>/adminlte/dist/js/demo.js"></script>


<!-- Para lugares_crear-->

<!-- Select2 -->
<script src="<?php echo base_url();?>/adminlte/plugins/select2/js/select2.full.min.js"></script>
<script src="<?php echo base_url();?>/adminlte/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
<script src="<?php echo base_url();?>/adminlte/plugins/moment/moment.min.js"></script>
<script src="<?php echo base_url();?>/adminlte/plugins/inputmask/jquery.inputmask.min.js"></script>
<script src="<?php echo base_url();?>/adminlte/plugins/daterangepicker/daterangepicker.js"></script>
<script src="<?php echo base_url();?>/adminlte/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<script src="<?php echo base_url();?>/adminlte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<script src="<?php echo base_url();?>/adminlte/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
<script src="<?php echo base_url();?>/adminlte/plugins/bs-stepper/js/bs-stepper.min.js"></script>
<script src="<?php echo base_url();?>/adminlte/plugins/dropzone/min/dropzone.min.js"></script>
<script src="<?php echo base_url();?>/adminlte/dist/js/adminlte.min.js"></script>
<script src="<?php echo base_url();?>/adminlte/dist/js/demo.js"></script>
<script src="<?php echo base_url();?>/adminlte/dist/js/adminlte.js"></script>
<!-- Page specific script -->

<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
<!-- estilo para selects -->
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })
    
    //Bootstrap Duallistbox
    $('.duallistbox').bootstrapDualListbox()

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    $('.my-colorpicker2').on('colorpickerChange', function(event) {
      $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
    })

  })
  
</script>


<!-- javascript de seleccion de selects -->

<script>
  $(function() {
    // Obtén una referencia al campo de entrada y al select de municipios
    var $busquedaMunicipio = $("#busquedaMunicipio");
    var $municipiosSelect = $("#municipios");
    // Obtén todas las opciones de los cinco selects y agrégalas a un arreglo
    const municipios = [
      "Cochabamba", "Quillacollo", "Sacaba", "Tiquipaya", "Colcapirhua",
      "Vinto", "Sipe Sipe", "Aiquile", "Alalay", "Arani", "Mizque",
      "Omereque", "Pasorapa", "Pocona", "Pojo", "Tiraque", "Totora",
      "Vacas", "Vila Vila", "Arque", "Bolivar", "Cocapata", "Independencia",
      "Morochata", "Sicaya", "Tocapaya", "Tapacarí", "Anzaldo", "Arbieto",
      "Capinota", "Cliza", "Gualberto Villarroel", "Punata", "Sacabamba",
      "San Benito", "Santivañez", "Tacachi", "Tarata", "Toco", "Tolata",
      "Villa Rivero", "Chimoré", "Colomi", "Entre Ríos", "Puerto Villarroel",
      "Shinahota", "Villa Tunari"
    ];

    // Inicializa el widget de autocompletar en el campo de entrada "busquedaMunicipio"
    $busquedaMunicipio.autocomplete({
      source: municipios,
      minLength: 2, // Número mínimo de caracteres antes de mostrar sugerencias
      select: function(event, ui) {
        // Cuando se selecciona un valor en el campo de entrada, establece el valor del segundo select
        $municipiosSelect.val(ui.item.value);
      }
    });
  });
</script>


<script>
$(document).ready(function() {
  // Inicializa los elementos select con Select2
  $('#sectores').select2();
  $('#municipios').select2();

  // Define un objeto que mapea las opciones del primer select a las opciones del segundo select
  var opcionesRelacionadas = {
    metropolitana: [
        "Cochabamba", "Quillacollo", "Sacaba", "Tiquipaya", "Colcapirhua", "Vinto", "Sipe Sipe"
      ],
      conosur: [
        "Aiquile", "Alalay", "Arani", "Mizque", "Omereque", "Pasorapa", "Pocona", "Pojo", "Tiraque", "Totora", "Vacas", "Vila Vila"
      ],
      valles: [
        "Anzaldo", "Arbieto", "Capinota", "Cliza", "Gualberto Villarroel", "Punata", "Sacabamba", "San Benito", "Santivañez", "Tacachi", "Tarata", "Toco", "Tolata", "Villa Rivero"
      ],
      andina: [
        "Arque", "Bolivar", "Cocapata", "Independencia", "Morochata", "Sicaya", "Tocapaya", "Tapacarí"
      ],
      tropico: [
        "Chimoré", "Colomi", "Entre Ríos", "Puerto Villarroel", "Shinahota", "Villa Tunari"
      ],
  };

  // Agrega un controlador de evento al cambio del primer select
  $('#sectores').on('change', function() {
    var opcionSeleccionada = $(this).val();
    var opciones = opcionesRelacionadas[opcionSeleccionada] || [];

    // Vacía el segundo select y agrega las nuevas opciones
    $('#municipios').empty();
    $.each(opciones, function(index, value) {
      $('#municipios').append(new Option(value, value));
    });

    // Actualiza el segundo select con las nuevas opciones
    $('#municipios').trigger('change.select2');
  });

  // Agrega un controlador de evento al cambio del segundo select
  $('#municipios').on('change', function() {
    var municipioSeleccionado = $(this).val();
    $('#busquedaMunicipio').val(municipioSeleccionado);
  });
});
</script>




</body>
</html>