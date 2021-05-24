<?php  
$title = 'Agregar arrendador';
$style = '';
$script = '';
$contentH ='Agregar un arrendador'?> 

<?php ob_start(); ?>
<link rel="stylesheet" href="<?php echo LINK ?>public/css/all-type-form.css">
<?php $style = ob_get_clean(); ?>

<?php ob_start(); ?>
<button type="submit" class="btn btn-primary btn-block mb-2 abuttons col-md-4 center-block btn-lg">Agregar</button>
<?php $btn = ob_get_clean(); ?>
<?php ob_start(); ?>
<button type="submit" class="btn btn-primary btn-block mb-2 abuttons col-md-4 center-block">Guardar</button><a class="mb-2 col-md-4 center-block" href="<?= LINK ?>controllers/show_lessor.php"><button type="button" class="btn btn-block btn-secondary btn-lg">Cancelar</button></a>
<?php $btnSave = ob_get_clean(); ?>

<?php ob_start(); ?>
    <div class="card mx-auto" style="max-width: 80%; min-width: 80%;">
      <div class="card-header card-warning card-outline">
        <h3 class="card-title">Arrendador</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form class="form-horizontal" id = "addLessorForm" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" enctype = "multipart/form-data">
        <div class="card-body">
        <div class="row mb-4">
          <!-- Name input -->
          <div class="form-outline col-md-4">
            <label class="form-label" for="lrFName">Nombres</label><input type="text" id="lrFName" class="form-control" name="fname" placeholder = "Nombres" value="<?php echo $lessoredit['fname'] ?>" />
            
          </div>
          <div class="form-outline col-md-4">
            <label class="form-label" for="lrLName">Apellidos</label><input type="text" id="lrLName" class="form-control" name="lname" placeholder = "Apellidos" value="<?php echo $lessoredit['lname'] ?>" />
            
          </div>
          <div class="form-outline col-md-4">
            <label class="form-label" for="lrId">Cedula</label><input type="text" id="lrId" class="form-control" name="id" placeholder = "Cedula" value="<?php echo $lessoredit['id'] ?>" />
            
          </div>
        </div>
        <div class="row mb-4">
          <!-- Username input -->
          <div class="form-outline col-md-4">
            <label class="form-label" for="lrCellPhone">Telefono Celular</label><input type="text" id="lrCellPhone" class="form-control" name="phone" placeholder = "Telefono Celular" value="<?php echo $lessoredit['phone'] ?>" />
            
          </div>
          <div class="form-outline col-md-4">
            <label class="form-label" for="lrHomePhone">Telefono de casa</label><input type="text" id="lrHomePhone" class="form-control" name="home_phone" placeholder = "Telefono de casa" value="<?php echo $lessoredit['home_phone'] ?>" />
            
          </div>
          <div class="form-outline col-md-4">
            <label class="form-label" for="lrEmail">Correo Electronico</label><input type="text" id="lrEmail" class="form-control" name="email" placeholder = "Correo Electronico" value="<?php echo $lessoredit['email'] ?>" />
            
          </div>
        </div>
        <div class="row mb-4">
          <!-- Name input -->
          <div class="form-outline col-md-4">
            <label class="form-label" for="lrAdress">Direccion</label><input type="text" id="lrAdress" class="form-control" name="adress" placeholder = "Direccion" value="<?php echo $lessoredit['adress'] ?>" />
            
          </div>

          <!-- Username input -->
          <div class="form-outline col-md-4">
            <label class="form-label" for="lrOcupation">Ocupacion</label><input type="text" id="lrOcupation" class="form-control" name="ocupation" placeholder = "Ocupacion" value="<?php echo $lessoredit['ocupation'] ?>" />
            
          </div>

          <!-- Name input -->
          <div class="form-outline col-md-4">
            <label class="form-label" for="lrnationality">Nacionalidad</label><input type="text" id="lrnationality" class="form-control" name="nacionality" placeholder = "Nacionalidad" value="<?php echo $lessoredit['nacionality'] ?>" />
            
          </div>
        </div>
        <div class="row mb-4">
          <div class="form-outline col-md-4">
            <label class="form-label" for="lrCivilState">Estado civil</label><input type="text" id="lrCivilState" class="form-control" name="civil_status" placeholder = "Estado civil" value="<?php echo $lessoredit['civil_status'] ?>" />
            
          </div>
          <!-- Username input -->
          
          <div class="form-group-inner form-outline col-md-8">
             <div class="row mt-4">
                <div class="col-lg-2 col-md-12 col-sm-12 col-xs-12">
                  <label class="" for="lrProfilImg">Imagen de perfil</label>
                </div>
                <div class="col-lg-10 col-md-12 col-sm-12 col-xs-12">
                  <div class="file-upload-inner ts-forms">
                    <div class="input prepend-big-btn">
                      <label class="icon-right" for="prepend-big-btn">
                        <i class="fa fa-upload"></i>
                      </label>
                      <div class="file-button" width = "" >Examinar<input type="file" onchange="document.getElementById('prepend-big-btn').value = this.value;" id="lrProfilImg" class="" name="img">
                      </div>
                      <input type="text" id="prepend-big-btn" placeholder="Seleccionar archivo">
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <input type="hidden" name="oldImg" value="<?php echo $lessoredit['img'] ?>">
        </div>
        <div class="row error-message" style="color: red;"><p class="error-message"></p></div>
<hr>
                                                     
        <!-- Submit button -->
        <div class="row col-6 mx-auto">
          <?php echo ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['action']) && isset($_GET['id']))? $btnSave : $btn  ?>
        </div>
          
        </div>
      </form>
    </div>
<?php $content = ob_get_clean(); ?>
<?php require FOLDER.'views/templates.php'; ?>
