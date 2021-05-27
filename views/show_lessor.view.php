<?php 
$title = 'Arrendadores';
$style = '';
$script = ''; 
$contentH ='Lista de arrendadores'?>

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
          "buttons": false/*[{extend: "copy", text: "Copiar"},{extend: "excel", text: "Hoja de calculo"},{extend: "print", text: "Imprimir"}]*/
        }).buttons().container().appendTo('#table_wrapper .col-md-6:eq(0)');
      });
    </script>
<?php $script = ob_get_clean(); ?>


<?php ob_start(); ?>


    <div class="card mx-auto" style="max-width: 80%; min-width: 80%;">
      <div class="card-header card-warning card-outline">
                <h3 class="card-title">Arrendadores registrados</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="table" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Nombre</th>
                    <th>Cedula</th>
                    <th>Cellular</th>
                    <th>Direccion</th>
                    <th>Perfil</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($lessors as $lessor): ?>
                      <tr id ="<?php echo $lessor['id'] ?>">
                        <td><?php echo $lessor['fname'].' '.$lessor['lname'] ?></td>
                        <td><?php echo $lessor['id'] ?></td>
                        <td><?php echo $lessor['phone'] ?></td>
                        <td><?php echo $lessor['adress'] ?></td>
                        <td>
                          <div class="row">
                            <a class="btn btn-primary btn-sm col-lg-3 mx-auto" href="show_lessor_profile.php?id=<?php echo $lessor['id'] ?>" title="Ver arrendador"><i class="fa fa-folder"></i></a>
                            <a class="btn btn-info btn-sm col-lg-3 mx-auto" href="add_lessor.php?action=edit&id=<?php echo $lessor['id'] ?>" title="Editar arrendador"><i class="fa fa-pencil"></i></a>
                            <a class="btn btn-danger btn-sm col-lg-3 mx-auto deleteLessorBtn" href="#" title="Borrar arrendador"><i class="fa fa-trash"></i></a>
                          </div>
                        </td>
                      </tr>
                    <?php endforeach ?>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Nombre</th>
                    <th>Cedula</th>
                    <th>Cellular</th>
                    <th>Direccion</th>
                    <th>Perfil</th>
                  </tr>
                  </tfoot>
                </table>
                <div class="row mt-3">
                      <a class="btn btn-outline-secondary btn-sm col-lg-1 mx-lg-2" target="_blank" href="<?php echo LINK ?>controllers/print_table.php?type=lessor">
                         <i class="fa fa-file-pdf-o">
                         </i>
                         Imprimir
                     </a>
                   </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
<?php $content = ob_get_clean(); ?>

<?php require FOLDER.'views/templates.php'; ?>