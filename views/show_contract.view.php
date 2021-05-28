<?php 
$title = 'Contratoss';
$style = '';
$script = ''; 
$contentH ='Lista de contratos'?>

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
          "buttons": false
        }).buttons().container().appendTo('#table_wrapper .col-md-6:eq(0)');
    var Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 3000
    });
  });
    </script>
<?php $script = ob_get_clean(); ?>


<?php ob_start(); ?>
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content" style="width: 25%; background-color: currentColor;">
    <span class="close close-Btn pl-5">&times;</span>
    <p style="color: white;" class="mx-auto">Borrar registro?</p>
     <div class="modal-footer justify-content-between ">
      <button id = "cancel" type="button" class="btn btn-outline-light close-Btn" data-dismiss="modal">Cancelar</button>
      <button id ="deleteContractBtn" type="button" data = "" class="btn btn-outline-light">Borrar</button>
    </div>
  </div>

</div>

    <div class="card mx-auto" style="max-width: 80%; min-width: 80%;">
      <div class="card-header card-warning card-outline">
                <h3 class="card-title">Arrendadores registrados</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="table" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th class="mr-1">Arrendatario</th>
                    <th>Arrendador</th>
                    <th>Propriedad</th>
                    <th>Renta</th>
                    <th>Fianza</th>
                    <th>Fecha de Emision</th>
                    <th>Fecha de fin</th>
                    <th>Dia de pago</th>
                    <th>Formato</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($contracts as $contract): ?>
                      <tr id="<?php echo $contract['id'] ?>">
                        <td><?php echo $contract['id_lessee'] ?></td>
                        <td><?php echo $contract['id_lessor'] ?></td>
                        <td><?php echo $contract['id_property'] ?></td>
                        <td><?php echo $contract['bill'] ?></td>
                        <td><?php echo $contract['deposite'] ?> </td>
                        <td><?php echo $contract['start_date'] ?></td>
                        <td><?php echo $contract['end_date'] ?></td>
                        <td><?php echo $contract['pay_day'] ?></td>
                        <td><div class="row">
                            <a class="btn btn-primary btn-sm mx-auto" href="show_contract_format.php?id=<?php echo $contract['id'] ?>" title="Ver datos"><i class="fa fa-folder"></i></a>
                            <a class="btn btn-info btn-sm mx-auto" href="add_contract.php?action=edit&id=<?php echo $contract['id'] ?>" title="Editar datos"><i class="fa fa-pencil"></i></a>
                            <a class="btn btn-danger btn-sm mx-auto deleteBtn" data = "<?php echo $contract['id'] ?>" href="#" title="Borrar datos"><i class="fa fa-trash"></i></a>
                          </div></td>
                      </tr>
                    <?php endforeach ?>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Arrendatario</th>
                    <th>Arrendador</th>
                    <th>Propriedad</th>
                    <th>Renta</th>
                    <th>Fianza</th>
                    <th>Fecha de Emision</th>
                    <th>Fecha de fin</th>
                    <th>Dia de pago</th>
                    <th>Formato</th>
                  </tr>
                  </tfoot>
                </table>
                <div class="row mt-3">
                      <a class="btn btn-outline-secondary btn-sm col-lg-1 mx-lg-2" target="_blank" href="<?php echo LINK ?>controllers/print_table.php?type=lessing">
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