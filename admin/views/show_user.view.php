<?php 
$title = 'Usuarios';
$style = '';
$script = ''; 
$contentH ='Lista de usuarios'?>

<?php ob_start(); ?>
<link rel="stylesheet" href="<?php echo LINK ?>public/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?php echo LINK ?>public/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="<?php echo LINK ?>public/css/buttons.bootstrap4.min.css">
<?php $style = ob_get_clean(); ?>

<?php ob_start(); ?>
<script src="<?php echo LINK ?>public/js/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo LINK ?>public/js/datatables/dataTables.bootstrap4.min.js"></script>
    <script src="<?php echo LINK ?>public/js/datatables/dataTables.responsive.min.js"></script>
    <script src="<?php echo LINK ?>public/js/datatables/responsive.bootstrap4.min.js"></script>
    <script src="<?php echo LINK ?>public/js/datatables/dataTables.buttons.min.js"></script>
    <script src="<?php echo LINK ?>public/js/datatables/buttons.bootstrap4.min.js"></script>
    <script src="<?php echo LINK ?>public/js/datatables/jszip.min.js"></script>
    <script src="<?php echo LINK ?>public/js/datatables/pdfmake.min.js"></script>
    <script src="<?php echo LINK ?>public/js/datatables/vfs_fonts.js"></script>
    <script src="<?php echo LINK ?>public/js/datatables/buttons.html5.min.js"></script>
    <script src="<?php echo LINK ?>public/js/datatables/buttons.print.min.js"></script>
    <script src="<?php echo LINK ?>public/js/datatables/buttons.colVis.min.js"></script>
    <script>
      $(function () {
        $("#table").DataTable({
          "responsive": true,
          "lengthChange": false,
          "autoWidth": false,
          "language": {
            paginate: {
                next: "Siguiente",
                previous: "Anterior",
                last: "Ultimo",
                first: "Primero"
            }, 
            info: "Mostrando _START_ a _END_ de _TOTAL_ resultados",
            emptyTable: "No hay registros",
            infoEmpty: "0 Registros",
            search: "Buscar"
        },
          "buttons": [{extend: "copy", text: "Copiar"},{extend: "excel", text: "Hoja de calculo"},{extend: "print", text: "Imprimir"}]
        }).buttons().container().appendTo('#table_wrapper .col-md-6:eq(0)');
      });
    </script>
<?php $script = ob_get_clean(); ?>


<?php ob_start(); ?>
            <div class="card" style="max-width: 1000px; min-width: 1000px;">
              <div class="card-header card-warning card-outline">
                <h3 class="card-title">Usuarios</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="table" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Usuario</th>
                    <th>Nombre</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($users as $user): ?>
                      <tr>
                        <td><?php echo $user['uname'] ?></td>
                        <td><?php echo $user['name'] ?></td>
                      </tr>
                    <?php endforeach ?>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Usuario</th>
                    <th>Nombre</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
<?php $content = ob_get_clean(); ?>
<?php require FOLDER.'views/templates.php'; ?>