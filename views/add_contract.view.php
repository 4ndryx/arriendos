<?php
$title = 'Registrar Arrendamiento';
$style = '';
$script = '';
$contentH ='Datos de Arrendamiento'?> 

<?php ob_start(); ?>
<link rel="stylesheet" href="<?php echo LINK ?>public/css/all-type-form.css">
<link rel="stylesheet" href="<?php echo LINK ?>public/css/chosen/bootstrap-chosen.css">
<link rel="stylesheet" href="<?php echo LINK ?>public/css/datapicker/datepicker3.css">
<link rel="stylesheet" href="<?php echo LINK ?>public/css/form/themesaller-forms.css">
<link rel="stylesheet" href="<?php echo LINK ?>public/css/select2/select2.min.css">
<link rel="stylesheet" href="<?php echo LINK ?>public/css/icheck-bootstrap.min.css">
<?php $style = ob_get_clean(); ?>

<?php ob_start(); ?>
<button class="btn col-2 btn-primary  abuttons center-block" type="submit">Agregar</button>
<?php $btn = ob_get_clean(); ?>
<?php ob_start(); ?>
<button type="submit" class="btn btn-primary btn-block mb-2 abuttons col-md-4 center-block">Guardar</button><a class="mb-2 col-md-4 center-block" href="<?= LINK ?>controllers/show_contract.php"><button type="button" class="btn btn-block btn-secondary btn-lg">Cancelar</button></a>
<?php $btnSave = ob_get_clean(); ?>

<?php ob_start(); ?>
        <!-- /.card-header -->
        <!-- form start -->
        <form class="form-horizontal" id = "createContractForm" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" enctype = "multipart/form-data" >
    <div class="card mx-auto" style="max-width: 80%; min-width: 80%;">
      <div class="card-header card-warning card-outline">
        <h3 class="card-title">Arrendatario</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
        <div class="card-body">
        <div class="row col-lg-12">
        <div class="row col-lg-12">
        <div class="row col-lg-10">
        <div class="row mb-4">
          <!-- Name input -->
          <div class="form-outline col-md-4 chosen-select-single">
            <label class="form-label" for="lrId">Cedula</label>
            <select name = "id_lessee"  id = "idLessee" class="select2_demo_3 form-control" <?php if ($action == 'edit'){echo 'disabled'; } ?> tabindex="-1">
              <?php if ($contractEdit['id_lessee'] != '' ): ?>
                <option value="<?php echo $contractEdit['id_lessee'] ?>"><?php echo $contractEdit['id_lessee'] ?></option>
              <?php else: ?>
                <option >Seleccionar</option>
                <?php foreach ($lessees as $lessee): ?>
                    <option value="<?php echo $lessee['id'] ?>"><?php echo $lessee['id'] ?></option>
                <?php endforeach ?>
              <?php endif ?>
            </select>
          <!-- <input type="hidden" name="id_lessee" value = "<?php if(isset($action) && $action == 'edit'){echo $cttELe['id'];} ?>"> -->
          </div>
          <div class="form-outline col-md-4">
            <label class="form-label" for="lrFName" >Nombres</label><input disabled type="text" id="lrFName" class="form-control ls" name="fname" placeholder = "Nombres" value = "<?php if(isset($action) && $action == 'edit'){echo $cttELe['fname'];} ?>"/>
            
          </div>
          <div class="form-outline col-md-4">
            <label class="form-label" for="lrLName">Apellidos</label><input disabled type="text" id="lrLName" class="form-control ls" name="lname" placeholder = "Apellidos"/value = "<?php if(isset($action) && $action == 'edit'){echo $cttELe['lname'];} ?>">
            
          </div>
        </div>
        <div class="row mb-4">
          <!-- Username input -->
          <div class="form-outline col-md-4">
            <label class="form-label" for="lrCellPhone">Telefono Celular</label><input disabled type="text" id="lrCellPhone" class="form-control ls" name="phone" placeholder = "Telefono Celular" value = "<?php if(isset($action) && $action == 'edit'){echo $cttELe['phone'];} ?>"/>
            
          </div>
          <div class="form-outline col-md-4">
            <label class="form-label" for="lrHomePhone">Telefono de casa</label><input disabled type="text" id="lrHomePhone" class="form-control ls" name="home_phone" placeholder = "Telefono de casa" value = "<?php if(isset($action) && $action == 'edit'){echo $cttELe['home_phone'];} ?>"/>
            
          </div>
          <div class="form-outline col-md-4">
            <label class="form-label" for="lrEmail">Correo Electronico</label><input disabled type="text" id="lrEmail" class="form-control ls" name="email" placeholder = "Correo Electronico" value = "<?php if(isset($action) && $action == 'edit'){echo $cttELe['home_phone'];} ?>"/>
            
          </div>
        </div>
        </div>
          <div class="text-center col-lg-2 my-auto">
                      <img class="profile-user-img img-fluid img-circle"
                           src="<?php if(isset($action) && $action == 'edit'){echo LINK.'public/img/lessee_img/'.$cttELe['img'];}else{echo LINK.'public/img/user.png';} ?>"
                           alt="Imagen de perfil" style="height: 120px;width: 120px;" id = "leProfilePic">
                    </div>
                    </div>
        <div class="row mb-4">
          <!-- Name input -->
          <div class="form-outline col-md-3">
            <label class="form-label" for="lrAdress">Direccion</label><input disabled type="text" id="lrAdress" class="form-control ls" name="adress" placeholder = "Direccion" value = "<?php if(isset($action) && $action == 'edit'){echo $cttELe['adress'];} ?>"/>
            
          </div>

          <!-- Username input -->
          <div class="form-outline col-md-3">
            <label class="form-label" for="lrOcupation">Ocupacion</label><input disabled type="text" id="lrOcupation" class="form-control ls" name="ocupation" placeholder = "Ocupacion" value = "<?php if(isset($action) && $action == 'edit'){echo $cttELe['ocupation'];} ?>"/>
            
          </div>

          <!-- Name input -->
          <div class="form-outline col-md-3">
            <label class="form-label" for="lrnationality">Nacionalidad</label><input disabled type="text" id="lrnationality" class="form-control ls" name="nacionality" placeholder = "Nacionalidad" value = "<?php if(isset($action) && $action == 'edit'){echo $cttELe['nacionality'];} ?>"/>
            
          </div>
        
          <div class="form-outline col-md-3">
            <label class="form-label" for="lrCivilState">Estado civil</label><input disabled type="text" id="lrCivilState" class="form-control ls" name="civil_status" placeholder = "Estado civil" value = "<?php if(isset($action) && $action == 'edit'){echo $cttELe['civil_status'];} ?>"/>
            
          </div>
          <!-- Username input -->

        </div>                
            </div>
        </div>
        </div>



    <div class="card mx-auto" style="max-width: 80%; min-width: 80%;">
      <div class="card-header card-warning card-outline">
        <h3 class="card-title">Arrendador</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
        <div class="card-body">
        <div class="row col-12">
        <div class="row col-12">
        <div class="row col-10">
        <div class="row mb-4">
          <!-- Name input -->
          <div class="form-outline col-md-4 chosen-select-single" style = 'width :100%;'>
            <label class="form-label" for="lrId">Cedula</label>
            <select name = "id_lessor"  id = "idLessor" class="select2_demo_3 form-control" <?php if ($action == 'edit'){echo 'disabled'; } ?> tabindex="-1">
              <?php if ($contractEdit['id_lessor'] != '' ): ?>
                <option value="<?php echo $contractEdit['id_lessor'] ?>"><?php echo $contractEdit['id_lessor'] ?></option>
              <?php else: ?>
                <option >Seleccionar</option>
                <?php foreach ($lessors as $lessor): ?>
                    <option value="<?php echo $lessor['id'] ?>"><?php echo $lessor['id'] ?></option>
                <?php endforeach ?>                
              <?php endif ?>
            </select>
          <!-- <input type="hidden" name="id_lessor" value = "<?php if(isset($action) && $action == 'edit'){echo $cttELr['id'];} ?>"> -->
          </div>
          <div class="form-outline col-md-4">
            <label class="form-label" for="lrFName">Nombres</label><input disabled type="text" id="lrFName" class="form-control lr" name="fname" placeholder = "Nombres" value = "<?php if(isset($action) && $action == 'edit'){echo $cttELr['fname'];} ?>"/>
            
          </div>
          <div class="form-outline col-md-4">
            <label class="form-label" for="lrLName">Apellidos</label><input disabled type="text" id="lrLName" class="form-control lr" name="lname" placeholder = "Apellidos"/ value = "<?php if(isset($action) && $action == 'edit'){echo $cttELr['lname'];} ?>">
            
          </div>
        </div>
        <div class="row mb-4">
          <!-- Username input -->
          <div class="form-outline col-md-4">
            <label class="form-label" for="lrCellPhone">Telefono Celular</label><input disabled type="text" id="lrCellPhone" class="form-control lr" name="phone" placeholder = "Telefono Celular" value = "<?php if(isset($action) && $action == 'edit'){echo $cttELr['phone'];} ?>"/>
            
          </div>
          <div class="form-outline col-md-4">
            <label class="form-label" for="lrHomePhone">Telefono de casa</label><input disabled type="text" id="lrHomePhone" class="form-control lr" name="home_phone" placeholder = "Telefono de casa" value = "<?php if(isset($action) && $action == 'edit'){echo $cttELr['home_phone'];} ?>"/>
            
          </div>
          <div class="form-outline col-md-4">
            <label class="form-label" for="lrEmail">Correo Electronico</label><input disabled type="text" id="lrEmail" class="form-control lr" name="email" placeholder = "Correo Electronico" value = "<?php if(isset($action) && $action == 'edit'){echo $cttELr['email'];} ?>"/>
            
          </div>
          </div>
        </div>
        <div class="text-center col-lg-2 my-auto">
                      <img class="profile-user-img img-fluid img-circle"
                           src="<?php if(isset($action) && $action == 'edit'){echo LINK.'public/img/lessor_img/'.$cttELr['img'];}else{echo LINK.'public/img/user.png';} ?>"
                           alt="Imagen de perfil" style="height: 120px;width: 120px;" id = "lrProfilePic">
                    </div>
                    </div>
        </div>
        <div class="row mb-4">
          <!-- Name input -->
          <div class="form-outline col-md-3">
            <label class="form-label" for="lrAdress">Direccion</label><input disabled type="text" id="lrAdress" class="form-control lr" name="adress" placeholder = "Direccion" value = "<?php if(isset($action) && $action == 'edit'){echo $cttELr['adress'];} ?>"/>
            
          </div>

          <!-- Username input -->
          <div class="form-outline col-md-3">
            <label class="form-label" for="lrOcupation">Ocupacion</label><input disabled type="text" id="lrOcupation" class="form-control lr" name="ocupation" placeholder = "Ocupacion" value = "<?php if(isset($action) && $action == 'edit'){echo $cttELr['ocupation'];} ?>"/>
            
          </div>

          <!-- Name input -->
          <div class="form-outline col-md-3">
            <label class="form-label" for="lrnationality">Nacionalidad</label><input disabled type="text" id="lrnationality" class="form-control lr" name="nacionality" placeholder = "Nacionalidad" value = "<?php if(isset($action) && $action == 'edit'){echo $cttELr['nacionality'];} ?>"/>
            
          </div>

          <div class="form-outline col-md-3">
            <label class="form-label" for="lrCivilState">Estado civil</label><input disabled type="text" id="lrCivilState" class="form-control lr" name="civil_status" placeholder = "Estado civil" value = "<?php if(isset($action) && $action == 'edit'){echo $cttELr['civil_status'];} ?>"/>
            
          </div>
          <!-- Username input -->
        </div>
                
            </div>
        </div>
        </div>
        </div>
        



    <div class="card mx-auto" style="max-width: 80%; min-width: 80%;">
      <div class="card-header card-warning card-outline">
        <h3 class="card-title">Propriedad</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <!-- Name input -->
      <div class="card-body">
        <div class="row mb-4">
          <div class="form-outline col-md-4 chosen-select-single">
            <label class="form-label" for="pDirection">Direccion</label>
            <select name = "adress_property" id = "adressProperty" class="select2_demo_3 form-control" <?php if ($action == 'edit'){echo 'disabled'; }  ?> tabindex="-1">
              <?php if ($contractEdit['id_property'] != '' ): ?>
                <option value = "<?php if(isset($action) && $action == 'edit'){echo $cttEPpt['adress'];} ?>"><?php if(isset($action) && $action == 'edit'){echo $cttEPpt['adress'];} ?></option>
                <?php else: ?>  
                <option value="">Seleccionar</option>
                <?php endif ?>
            </select>
          </div>
          <input type="hidden" name="id_property" class="ppt" value = "<?php if(isset($action) && $action == 'edit'){echo $cttEPpt['id'];} ?>">
          <div class="form-outline col-md-4">
            <label class="form-label" for="pArea">Superficie</label><input disabled type="text" id="pArea" class="form-control ppt" name="area" value = "<?php if(isset($action) && $action == 'edit'){echo $cttEPpt['area'];} ?>"/>
          </div>

        <!-- Name input -->
          <div class="form-outline col-md-4">
            <label class="form-label" for="pType">Tipo</label><input disabled type="text" id="pType" class="form-control ppt" name="type" value = "<?php if(isset($action) && $action == 'edit'){echo $cttEPpt['type'];} ?>" />

          </div>
        </div>
        <div class="row mb-4">
          <div class="form-outline col-md-4">
            <label class="form-label" for="pState">Estado de Uso</label><input disabled type="text" id="pState" class="form-control ppt" value = "<?php if(isset($action) && $action == 'edit'){echo $cttEPpt['state'];} ?>" name="state" />
            
          </div>

        <!-- Name input -->
          <div class="form-outline col-md-4">
            <label class="form-label" for="pDescription">Descripcion</label><input disabled type="text" id="pDescription" class="form-control ppt" name="description" value = "<?php if(isset($action) && $action == 'edit'){echo $cttEPpt['description'];} ?>" />
            
          </div>
          <!-- Poner una galeria que permite crud de imagenes --> 
<!--          <div class="form-group-inner col-md-4">
           <div class="row mt-4">
              <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                <label class="login2 pull-right pull-right-pro" for="pImg">Imagenes</label> poner btn para ver las foto en galeria
              </div>
               <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
              <div class="file-upload-inner ts-forms">
                <div class="input prepend-big-btn">
                  <label class="icon-right" for="prepend-big-btn">
                    <i class="fa mt-1 fa-download"></i>
                  </label>
                  <div class="file-button" width = "" >Examinar<input disabled type="file" multiple onchange="document.getElementById('prepend-big-btn').value = this.value;" id="pImg" class="" name="img[]">
                  </div>
                  <input disabled type="text" id="prepend-big-btn" class="ppt" placeholder="Seleccionar archivo">
                </div>
              </div>
            </div>
                         
           </div>-->
          </div>
                  </div>
            </div>
        </div>





    <div class="card mx-auto" style="max-width: 80%; min-width: 80%;">
                <div class="card-header card-warning card-outline">
                    <h2 class="card-title text-center">Datos del contrato</h3>
                </div>
            <div class="card-body">
                <div class="form-group-inner">
                    <div class="row">
                        <div class="mg-b-20 col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <label>Lugar</label>
                            <input type="text" name = "place" class="form-control col-lg-12col-md-12col-sm-12col-xs-12" value = "<?php  echo $contractEdit['place'] ?>" <?php if (isset($action) && $action == 'edit'){echo 'disabled'; } ?>/>
                        </div>
                        <div class="data-custon-pick col-lg-3 col-md-3 col-sm-3 col-xs-12" id="data_1">
                            <label>Fecha de emision</label>
                            <div class="input-group date" >
                                <span class="input-group-addon" <?php if (isset($action) && $action == 'edit'){echo 'style = "cursor: not-allowed;background-color: #ddd;"'; } ?> ><i class="fa mt-1 fa-calendar" ></i></span>
                                <input type="text" name = "start_date" class="form-control" <?php if (isset($action) && $action == 'edit'){echo 'disabled'; } ?> value = "<?php  echo $contractEdit['start_date'] ?>">
                            </div>
                        </div>


                        <div class="data-custon-pick mg-t-20 col-lg-3 col-md-3 col-sm-3 col-xs-12" id="data_11">
                            <label>Fecha de fin</label>
                            <div class="input-group date">
                                <span class="input-group-addon"><i class="fa mt-1 fa-calendar "></i></span>
                                <input type="text" name = "end_date" class="form-control input-group.date" value = "<?php  echo $contractEdit['end_date'] ?>">
                            </div>
                        </div>
                            <div class="mg-t-20 col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <label>Renta</label>
                                <div>
                                    <div class="">
                                        <input name = "bill" type="text" class="form-control" data-mak="$ 999,999,999.99"placeholder="" value = "<?php  echo $contractEdit['bill'] ?>">
                                        <span class="help-block">$ 999,999.99 o 999,999.99 Bs.F</span>
                                    </div>
                                </div>
                            </div>
                   </div>
                        <div class="row">
                            <div class="mg-t-20 col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <label>Fianza</label>
                                <div>
                                    <div class=" mg-b-22">
                                        <input name = "deposite" type="text" class="form-control" data-mas="$ 999,999,999.99"placeholder="" value = "<?php  echo $contractEdit['deposite'] ?>">
                                        <span class="help-block">$ 999,999.99 o 999,999.99 Bs.F</span>
                                    </div>
                                </div>
                            </div>
                            <div class="data-custon-pick mg-t-20 col-lg-3 col-md-3 col-sm-3 col-xs-12" id="data_111">
                                <label>Fecha de pago</label>
                                <div class="input-group date">
                                    <span class="input-group-addon"><i class="fa mt-1 fa-calendar"></i></span>
                                    <input name="pay_day" type="text" class="form-control" value = "<?php  echo $contractEdit['pay_day'] ?>">
                                </div>
                            </div>
                        <div class="mg-b-20 col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <label>Actividad</label>
                            <input name = "activity" type="text" class="form-control col-lg-12col-md-12col-sm-12col-xs-12" value = "<?php  echo $contractEdit['renew'] ?>"/>
                    </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <label>Renovacion</label>
                            <div class="form-group clearfix mx-auto mt-2">
                          <div class="icheck-primary d-inline">
                            <input type="radio" id="radioPrimary1" name="renew" value = "1"<?php if ($contractEdit['renew'] == 1){echo 'checked';} ?>>
                            <label for="radioPrimary1">Si 
                            </label>
                          </div>
                          <div class="icheck-primary d-inline">
                            <input type="radio" id="radioPrimary2" name="renew" value = "0"<?php if ($contractEdit['renew'] == 0){echo 'checked';} ?>>
                            <label for="radioPrimary2">No 
                            </label>
                          </div>
                        </div>
                        </div>
                </div>
            </div>
            <input type="hidden" name="id" value = "<?php if(isset($action) && $action == 'edit'){echo $contractEdit['id'];} ?>">
                    <div class="row error-message" style="color: red;"><p class="error-message"></p></div>


            <hr>
              <div class="row mx-auto col-6">
          <?php echo ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['action']) && isset($_GET['id']))? $btnSave : $btn  ?> 
        </div>
        </div>
        </div>

        </form>
      
<?php $content = ob_get_clean(); ?>

<?php ob_start(); ?>
<script src="<?php echo LINK ?>public/js/chosen/chosen.jquery.js"></script>
<script src="<?php echo LINK ?>public/js/chosen/chosen-active.js"></script>
<script src="<?php echo LINK ?>public/js/select2/select2.full.min.js"></script>
<script src="<?php echo LINK ?>public/js/select2/select2-active.js"></script>
<script src="<?php echo LINK ?>public/js/datapicker/bootstrap-datepicker.js"></script>
<script src="<?php echo LINK ?>public/js/datapicker/datepicker-active.js"></script>
<script src="<?php echo LINK ?>public/js/input-mask/jasny-bootstrap.min.js"></script>
<script src="<?php echo LINK ?>public/js/icheck/icheck.min.js"></script>
<script src="<?php echo LINK ?>public/js/icheck/icheck-active.js"></script>
<?php $script = ob_get_clean(); ?>
<?php require FOLDER.'views/templates.php'; ?>
