<?php 
$title = 'Perfil de propriedad';
$style = '';
$script = ''; 
$contentH ='Perfil'?>


<?php ob_start(); ?>
<!-- <link rel="stylesheet" href="<?php echo LINK ?>public/css/admin-lte.min.css"> -->
<?php $style = ob_get_clean(); ?>

<?php ob_start(); ?>
<!-- <script src="<?php echo LINK ?>public/js/datatables/jquery.dataTables.min.js"></script> -->
    <!-- <script src="<?php echo LINK ?>public/js/bootstrap-bundle.min.js"></script> -->
    
<?php $script = ob_get_clean(); ?>


<?php ob_start(); ?>
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content" style="width: 25%; background-color: currentColor;">
    <span class="close close-Btn pl-5">&times;</span>
    <p style="color: white;" class="mx-auto">Borrar registro?</p>
     <div class="modal-footer justify-content-between ">
      <button id = "cancel" type="button" class="btn btn-outline-light close-Btn" data-dismiss="modal">Cancelar</button>
      <button id ="deletePptProfileBtn" type="button" data = "" class="btn btn-outline-light">Borrar</button>
    </div>
  </div>

</div>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row ">
          <div class="col-12">
        <div class="row ">
    <div class="card mx-auto" style="max-width: 80%; min-width: 80%;">
      <div class="card-header card-warning card-outline ">
                <h3 class="card-title">Acerca de la propriedad</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <strong><i class="fa fa-building mr-1"></i> Tipo</strong>

                <p class="text-muted">
                  <?= $datos['type']?>
                </p>
                <hr>

                <strong><i class="fa fa-map-marker mr-1"></i> Direccion</strong>

                <p class="text-muted"><?= $datos['adress']?></p>

                <hr>                

                <strong><i class="fa fa-list-alt mr-1"></i> Estado</strong>

                <p class="text-muted"><?= $datos['state']?></p>

                <hr>                

                <strong><i class="fa fa-retweet mr-1"></i> Area</strong>

                <p class="text-muted"><?= $datos['area']?></p>

                <hr>

                <strong><i class="fa fa-pencil mr-1"></i> Descripcion</strong>

                <p class="text-muted"><?= $datos['description']?></p>

                <hr>

                    <div class="row  mt-4">
                      <a class="btn btn-info btn-sm col-lg-5 mx-auto" href="add_property.php?action=edit&id=<?php echo $datos['id'] ?>">
                          <i class="fa fa-pencil">
                          </i>
                          Editar
                      </a>
                              <a class="btn btn-danger btn-sm col-lg-5 mx-auto deleteBtn" data = "<?php echo $datos['id'] ?>" href="#">
                                  <i class="fa fa-trash">
                                  </i>
                                  Borrar
                              </a>
                          <a class="btn btn-outline-secondary btn-sm col-lg-5 mx-auto" target="_blank" href="<?php echo LINK ?>controllers/print_ppt.php?id=<?php echo $datos['id'] ?>">
                          <i class="fa fa-file-pdf-o">
                          </i>
                          Imprimir
                      </a>
                    </div>


              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            <div style="max-width: 60%; min-width: 60%;">
          <div class="row">
<div class="card mr-4" style="max-width: 100%; min-width: 100%;">

      <div class="card-header card-warning card-outline ">
            <h3 class="timeline-header">Imagenes</h3>
          </div>
          <div class="card-body">
            <?php foreach ($imgs as $img): ?>

              <?php if ($img != ''): ?>

                <img width = "230px" src="<?= LINK;?>public/img/property_img/<?= $id.'/'.$img?>" alt="...">
                
              <?php endif ?>
              
            <?php endforeach ?>
          </div>
          </div>
          </div>
      <div class="row" >
            <div class="card mr-4" style="max-width: 100%; min-width: 100%;">

        <div class="card-header card-warning card-outline ">
            <h3 class="timeline-header">Arrendamiento</h3>
          </div>
          <div class="card-body">
            <div class="row col-12 mx-auto">
              <div class="col-12 table-responsive">
                <table class="table table-striped">
                  <tbody>
                      <tr><?php if (empty($lessor)): ?>
                        <td>No tiene arrendador. Registre al arrendador, o ingrese al perfil de su arrendador para asignarselo </td>
                      <?php else: ?>
                        <td><strong><i class="fa fa-user mr-1"></i> Arrendador</strong></td>
                        <td><?php echo $lessor['fname'] ?></td>
                        <td><?php echo $lessor['lname'] ?></td>
                        <td><?php echo $lessor['id'] ?></td>
                        <td><a class="btn btn-primary btn-sm col-lg-12 mx-auto" href="show_lessor_profile.php?id=<?php echo $lessor['id'] ?>" title="Ver arrendatario"><i class="fa fa-folder"></i></a></td>
                      <?php endif ?>
                      </tr>
                      <tr>
                      <?php if (empty($lessee)): ?>
                        <td>Aun no tiene arrendatario</td>
                      <?php else: ?>
                        <td><strong><i class="fa fa-user mr-1"></i> Arrendatario</strong></td>
                        <td><?php echo $lessee['fname'] ?></td>
                        <td><?php echo $lessee['lname'] ?></td>
                        <td><?php echo $lessee['id'] ?></td>
                        <td><a class="btn btn-primary btn-sm col-lg-12 mx-auto" href="show_lessee_profile.php?id=<?php echo $lessee['id'] ?>" title="Ver arrendador"><i class="fa fa-folder"></i></a></td>
                      <?php endif ?>

                      </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.col -->
            </div>                
          </div>
          </div>
      </div>
            </div>
          </div>
          <!-- /.col -->
          
        </div>

            <!-- About Me Box -->

            
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  <!-- /.content-wrapper -->

<?php $content = ob_get_clean(); ?>

<?php require FOLDER.'views/templates.php'; ?>