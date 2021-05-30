<?php  

$title = 'Perfil de arrendador';
$style = '';
$script = '';
$contentH ='Perfil'?>

<?php ob_start(); ?>
<link rel="stylesheet" href="<?php echo LINK ?>public/css/all-type-form.css">
<link rel="stylesheet" href="<?php echo LINK ?>public/css/chosen/bootstrap-chosen.css">
<link rel="stylesheet" href="<?php echo LINK ?>public/css/datapicker/datepicker3.css">
<link rel="stylesheet" href="<?php echo LINK ?>public/css/form/themesaller-forms.css">
<link rel="stylesheet" href="<?php echo LINK ?>public/css/select2/select2.min.css">
<link rel="stylesheet" href="<?php echo LINK ?>public/css/icheck-bootstrap.min.css">
<?php $style = ob_get_clean(); ?>

<?php ob_start(); ?>
<script src="<?php echo LINK ?>public/js/chosen/chosen.jquery.js"></script>
<script src="<?php echo LINK ?>public/js/chosen/chosen-active.js"></script>
<script src="<?php echo LINK ?>public/js/select2/select2.full.min.js"></script>
<script src="<?php echo LINK ?>public/js/select2/select2-active.js"></script>
<script src="<?php echo LINK ?>public/js/icheck/icheck.min.js"></script>
<script src="<?php echo LINK ?>public/js/icheck/icheck-active.js"></script>
<?php $script = ob_get_clean(); ?>

<?php ob_start(); ?>
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content" style="width: 25%; background-color: currentColor;">
    <span class="close close-Btn pl-5">&times;</span>
    <p style="color: white;" class="mx-auto">Borrar registro?</p>
     <div class="modal-footer justify-content-between ">
      <button id = "cancel" type="button" class="btn btn-outline-light close-Btn" data-dismiss="modal">Cancelar</button>
      <button id ="deleteLrProfileBtn" type="button" data = "" class="btn btn-outline-light">Borrar</button>
    </div>
  </div>

</div>

    <div class="row mx-auto" style="max-width: 80%; min-width: 80%; display:contents;">
    <div class="card mr-4 card-warning  card-primary card-outline" style="max-width: 27%; min-width: 27%;">
            <div class="card-body box-profile">
                    <div class="text-center">
                      <img class="profile-user-img img-fluid img-circle"
                           src="<?php echo $lessor['img'] ? LINK.'public/img/lessor_img/'.$lessor['img'] : LINK.'public/img/user.png' ?>"
                           alt="Imagen de perfil" style="height: 120px;width: 120px;">
                    </div>

                    <h3 class="profile-username text-center mt-3"><?php echo $lessor['fname'] ?></h3>

                    <p class="text-muted text-center"><?php echo $lessor['lname'] ?></p>

                    <ul class="list-group list-group-unbordered mb-2">
                      <li class="list-group-item mt-2">
                        <b>Cedula</b> <a class="float-right" id = "id"><?php echo $lessor['id'] ?></a>
                      </li>
                      <li class="list-group-item mt-2">
                        <b>Movil</b> <a class="float-right"><?php echo $lessor['phone'] ?></a>
                      </li>
                      <li class="list-group-item mt-2">
                        <b>Direccion</b> <a class="float-right"><?php echo $lessor['adress'] ?></a>
                      </li>
                    </ul>
                    <div class="row mt-4">
                              <a class="btn btn-info btn-sm col-lg-5 mx-auto" href="add_lessor.php?action=edit&id=<?php echo $lessor['id'] ?>">
                                  <i class="fa fa-pencil">
                                  </i>
                                  Editar
                              </a>
                              <a class="btn btn-danger btn-sm col-lg-5 mx-auto deleteBtn"  data = "<?php echo $lessor['id'] ?>" href="#">
                                  <i class="fa fa-trash">
                                  </i>
                                  Borrar
                              </a>
                    </div>
                              <div class="row mt-3">
                          <a class="btn btn-outline-secondary btn-sm col-lg-5 mx-auto" target="_blank" href="<?php echo LINK ?>controllers/print_lelr.php?type=lessor&&id=<?php echo $lessor['id'] ?>">
                          <i class="fa fa-file-pdf-o">
                          </i>
                          Imprimir
                      </a>
                    </div>

                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->


    <div style="max-width: 68%; min-width: 68%;">
        <div class="row">
            <div class="card" style="max-width: 100%; min-width: 100%;">
                <div class="card-header card-warning card-outline">
                   <h2 class="card-title">Informacion General</h2>
                </div>
                <div class="card-body box-profile">
                    <div class="row col-12 mx-auto">
                        <div class="col-12 table-responsive">
                          <table class="table table-striped">
                            <tbody>
                                <tr>
                                  <td><i class="fa fa-envelope"></i> <b>Correo electronico</b></td>
                                  <td><?php echo $lessor['email'] ?></td>
                                </tr>
                                <tr>
                                  <td><i class="fa fa-phone"></i> <b>Telefono de casa</b></td>
                                  <td><?php echo $lessor['home_phone'] ?></td>
                                </tr>
                                <tr>
                                  <td><i class="fa fa-briefcase"></i> <b>Ocupacion</b></td>
                                  <td><?php echo $lessor['ocupation'] ?></td>
                                </tr>
                                <tr>
                                  <td><i class="fa fa-flag"></i> <b>Nacionalidad</b></td>
                                  <td><?php echo $lessor['nacionality'] ?></td>
                                </tr>
                                <tr>
                                  <td><i class="fa fa-home"></i> <b>Estado civil</b></td>
                                  <td><?php echo $lessor['civil_status'] ?></td>
                                </tr>
                            </tbody>
                          </table>
                        </div>
                        <!-- /.col -->
                    </div>                      
                </div>
            </div>
        </div>
        <div class="row">
            <div class="card mr-4" style="max-width: 100%; min-width: 100%;">
                <div class="card-header card-warning card-outline ">
                    <h2 class="card-title">Arrendamiento</h2>
                </div>
                <div class="card-body">
                    <div class="col-lg-12">
                        <strong><i class="fa fa-building mr-1"></i> Imueble</strong>
                            <div class="row col-12 mx-auto">
                                <div class="col-12 table-responsive">
                                  <table class="table table-striped">
                                    <tbody id = "tppt">
                                      <?php if (empty($properties)): ?>
                                        <tr  id = 'no_ppt'>
                                          <td class="text-center">No tiene propriedad en arriendo</td>
                                        </tr>
                                      <?php else: ?>
                                        <?php foreach ($properties as $property): ?>
                                          <tr>
                                            <td><?php echo $property['adress'] ?></td>
                                            <td><?php echo $property['type'] ?></td>
                                            <td><?php echo $property['area'] ?></td>
                                            <td><a class="btn btn-primary btn-sm col-lg-12 mx-auto" href="show_property_profile.php?id=<?php echo $property['id'] ?>" title="Ver propriedad"><i class="fa fa-folder"></i></a></td>
                                          </tr>
                                        <?php endforeach ?>                                        
                                      <?php endif ?>
                                      <tr>
                                          <td class="text-center">Agregar como arrendador de propriedad:</td>
                                          <td>
            <select name = "addPpt2Lr"  id = "ppt2Lr" class="select2_demo_3 form-control " tabindex="-1">
                <option value="">Seleccionar</option>

                <?php foreach ($ppts as $ppt): ?>
                    <option value="<?php echo $ppt['id'] ?>"><?php echo $ppt['adress'] ?></option>
                <?php endforeach ?>
            </select><input type="hidden" name="lessorId" id = "lrId" value="<?php echo $lessor['id'] ?>">
                                         </td>
                                         <td></td>
                                         <td><a class="btn btn-success btn-sm col-lg-12 mx-auto" href="#" id = "addppt2lrBtn" title="Listo"><i class="fa fa-check"></i></a></td>
                                        </tr>
                                    </tbody>
                                  </table>
                                </div>
                          </div>                      
                    </div>        
                </div>
              </div>
        </div>
    </div>
</div>
                    

<?php $content = ob_get_clean(); ?>

<?php require FOLDER.'views/templates.php'; ?>        