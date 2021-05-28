<?php  
$title = 'Arrendamiento';
$style = '';
$script = '';
$contentH ='Datos de Arrendamiento'?>

<?php ob_start(); ?>
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content" style="width: 25%; background-color: currentColor;">
    <span class="close close-Btn pl-5">&times;</span>
    <p style="color: white;" class="mx-auto">Borrar registro?</p>
     <div class="modal-footer justify-content-between ">
      <button id = "cancel" type="button" class="btn btn-outline-light close-Btn" data-dismiss="modal">Cancelar</button>
      <button id ="deleteCttProfileBtn" type="button" data = "" class="btn btn-outline-light">Borrar</button>
    </div>
  </div>

</div>
        <!-- /.card-header -->
        <!-- form start -->
  <div class="form-horizontal" id = ""  style="max-width: 80%; min-width: 80%;">
          <div class="row">
    <div class="card mx-auto" style="max-width: 80%; min-width: 80%;">
      <div class="card-header card-warning card-outline">
        <h3 class="card-title">Arrendatario</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
        <div class="card-body">
                      <div class="row"> 
                      <div class="row col-12"> 
                        <div class="col-10 table-responsive">
                            <table class="table table-striped">
                            <tbody>
                                <tr style="height: 73px;">
                                  <td><b>Cedula</b><br> <span><?php echo  $lessee['id'] ?></span></td>
                                  <td><b>Nombres</b><br> <span><?php echo  $lessee['fname'] ?></span></td>
                                  <td><b>Apellidos</b><br> <span><?php echo  $lessee['lname'] ?></span></td>
                                </tr>
                                <tr style="height: 60px;">
                                  <td><b>Telefono Celular</b><br><span><?php echo  $lessee['phone'] ?></td>
                                  <td><b>Telefono de casa</b><br><span><?php echo  $lessee['home_phone'] ?></td>
                                  <td><b>Correo Electronico</b><br><span><?php echo  $lessee['email'] ?></td>
                            </tbody>
                          </table>
                        </div>
          <div class="text-center col-lg-2 my-auto">
                      <img class="profile-user-img img-fluid img-circle"
                           src="<?php echo $lessee['img'] ? LINK.'public/img/lessee_img/'.$lessee['img'] : LINK.'public/img/user.png' ?>"
                           alt="Imagen de perfil" style="height: 120px;width: 120px;" id = "leProfilePic">
                    </div>
                      </div>
                        <div class="row col-12" >
                        <div class="col-12 table-responsive" >
                          <table class="table table-striped">
                            <tbody>
                                <tr style="height: 73px">
                                  <td style="width:26.5%"><b>Direccion</b><br><span><?php echo  $lessee['adress'] ?></td>
                                  <td style="width:26.5%"><b>Ocupacion</b><br><span><?php echo  $lessee['ocupation'] ?></td>
                                  <td style="width:34%"><b>Nacionalidad</b><br><span><?php echo  $lessee['nacionality'] ?></td>
                                  <td style="width:26.5%"><b>Estado civil</b><br><span><?php echo  $lessee['civil_status'] ?></td>
                                </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                      </div>
        </div>
        </div>
      </div>
          <div class="row">
    <div class="card mx-auto" style="max-width: 80%; min-width: 80%;">
      <div class="card-header card-warning card-outline">
        <h3 class="card-title">Arrendador</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
        <div class="card-body">
                      <div class="row"> 
                      <div class="row col-12"> 
                        <div class="col-10 table-responsive">
                            <table class="table table-striped">
                            <tbody>
                                <tr style="height: 73px;">
                                  <td><b>Cedula</b><br> <span><?php echo  $lessor['id'] ?></span></td>
                                  <td><b>Nombres</b><br> <span><?php echo  $lessor['fname'] ?></span></td>
                                  <td><b>Apellidos</b><br> <span><?php echo  $lessor['lname'] ?></span></td>
                                </tr>
                                <tr style="height: 60px;">
                                  <td><b>Telefono Celular</b><br><span><?php echo  $lessor['phone'] ?></td>
                                  <td><b>Telefono de casa</b><br><span><?php echo  $lessor['home_phone'] ?></td>
                                  <td><b>Correo Electronico</b><br><span><?php echo  $lessor['email'] ?></td>
                            </tbody>
                          </table>
                        </div>
          <div class="text-center col-lg-2 my-auto">
                      <img class="profile-user-img img-fluid img-circle"
                           src="<?php  echo $lessor['img'] ? LINK.'public/img/lessor_img/'.$lessor['img'] : LINK.'public/img/user.png' ?>"
                           alt="Imagen de perfil" style="height: 120px;width: 120px;" id = "lrProfilePic">
                    </div>
                      </div>
                        <div class="row col-12" >
                        <div class="col-12 table-responsive" >
                          <table class="table table-striped">
                            <tbody>
                                <tr style="height: 73px">
                                  <td style="width:26.5%"><b>Direccion</b><br><span><?php echo  $lessor['adress'] ?></td>
                                  <td style="width:26.5%"><b>Ocupacion</b><br><span><?php echo  $lessor['ocupation'] ?></td>
                                  <td style="width:34%"><b>Nacionalidad</b><br><span><?php echo  $lessor['nacionality'] ?></td>
                                  <td style="width:26.5%"><b>Estado civil</b><br><span><?php echo  $lessor['civil_status'] ?></td>
                                </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                      </div>
        </div>
        </div>
      </div>
          <div class="row">
    <div class="card mx-auto" style="max-width: 80%; min-width: 80%;">
      <div class="card-header card-warning card-outline">
        <h3 class="card-title">Propriedad</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
        <div class="card-body">
                      <div class="row"> 
                        <div class="row col-12" >
                        <div class="col-12 table-responsive" >
                          <table class="table table-striped">
                            <tbody>
                                <tr style="height: 73px">
                                  <td><b>Direccion</b><br><span><?php echo  $property['adress'] ?></td>
                                  <td><b>Superficie</b><br><span><?php echo  $property['area'] ?></td>
                                  <td><b>Tipo</b><br><span><?php echo  $property['type'] ?></td>
                                </tr><tr style="height: 73px">
                                  <td><b>Estado de Uso</b><br><span><?php echo  $property['state'] ?></td>
                                  <td><b>Descripcion</b><br><span><?php echo  $property['description'] ?></td>
                                </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                      </div>
        </div>
        </div>
      </div>
          <div class="row">
    <div class="card mx-auto" style="max-width: 80%; min-width: 80%;">
      <div class="card-header card-warning card-outline">
        <h3 class="card-title">Datos del contrato</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
        <div class="card-body">
          <div class="row"> 
            <div class="row col-12" >
            <div class="col-12 table-responsive" >
              <table class="table table-striped">
                <tbody>
                    <tr style="height: 73px">
                      <td><b>Lugar</b><br><span><?php echo  $contract['place'] ?></td>
                      <td><b>Fecha de emision</b><br><span><?php echo  $contract['start_date'] ?></td>
                      <td><b>Fecha de fin</b><br><span><?php echo  $contract['end_date'] ?></td>
                      <td><b>Renta</b><br><span><?php echo  $contract['bill'] ?></td>
                    </tr><tr style="height: 73px">
                      <td><b>Fianza</b><br><span><?php echo  $contract['deposite'] ?></td>
                      <td><b>Fecha de pago</b><br><span><?php echo  $contract['pay_day'] ?></td>
                      <td><b>Actividad</b><br><span><?php echo  $contract['activity'] ?></td>
                      <td><b>Renovacion</b><br><span><?php echo  $contract['renew'] == 1 ? 'Si' : 'No' ?></td>
                    </tr>
                </tbody>
              </table>
            </div>
          </div>
          </div>
          <hr>  

          <div class="row">
                              <a class="btn btn-info btn-sm col-lg-1 ml-auto mr-1" href="add_contract.php?action=edit&id=<?php echo $contract['id'] ?>">
                                  <i class="fa fa-pencil">
                                  </i>
                                  Editar
                              </a>
                              <a class="btn btn-danger btn-sm col-lg-1 mr-auto ml-1 deleteBtn" href="#" data ="<?php echo $contract['id'] ?>">
                                  <i class="fa fa-trash">
                                  </i>
                                  Borrar
                              </a>
                    </div>
                    <div class="row mt-3">
                          <a class="btn btn-outline-secondary btn-sm col-lg-2 mx-auto" target="_blank" href="<?php echo LINK ?>controllers/print_ctt.php?id=<?php echo $contract['id'] ?>">
                          <i class="fa fa-file-pdf-o">
                          </i>
                          Imprimir
                      </a>


        </div>
        </div>
      </div>

        </div>
        <?php $content = ob_get_clean() ?>

<?php require FOLDER.'views/templates.php'; ?>