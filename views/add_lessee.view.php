<?php  
$title = 'Agregar arrendatario';
$style = '';
$script = ''; 
$contentH ='Agregar un arrendatario'?>

<?php ob_start(); ?>
<link rel="stylesheet" href="<?php echo LINK ?>public/css/all-type-form.css">
<?php $style = ob_get_clean(); ?>

<?php ob_start(); ?>
<button type="submit" class="btn btn-primary btn-block mb-2 abuttons col-md-4 center-block btn-lg">Agregar</button>
<?php $btn = ob_get_clean(); ?>
<?php ob_start(); ?>
<button type="submit" class="btn btn-primary btn-block mb-2 abuttons col-md-4 center-block">Guardar</button><a class="mb-2 col-md-4 center-block" href="<?= LINK ?>controllers/show_lessee.php"><button type="button" class="btn btn-block btn-secondary btn-lg">Cancelar</button></a>
<?php $btnSave = ob_get_clean(); ?>

<?php ob_start(); ?>
    <div class="card mx-auto" style="max-width: 80%; min-width: 80%;">
      <div class="card-header card-warning card-outline">
        <h3 class="card-title">Arrendatario</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form class="form-horizontal" id = "addLesseeForm" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" enctype = "multipart/form-data">
        <div class="card-body">
        <div class="row mb-4">
          <!-- Name input -->
          <div class="form-outline col-md-4">
            <label class="form-label" for="lrFName">Nombres</label><input type="text" id="FName" class="form-control" name="fname" placeholder = "Nombres" value="<?php echo $lesseeedit['fname'] ?>" />
            <p style="font-size: 12px; color: gray;"><spam class = "error-input"></spam>  ej: Andly</p>
          </div>
          <div class="form-outline col-md-4">
            <label class="form-label" for="lrLName">Apellidos</label><input type="text" id="LName" class="form-control" name="lname" placeholder = "Apellidos" value="<?php echo $lesseeedit['lname'] ?>" />
            <p style="font-size: 12px; color: gray;"><spam class = "error-input"></spam>  ej: Pierre</p>
          </div>
          <div class="form-outline col-md-4">
            <label class="form-label" for="lrId">Cedula</label><input type="text" id="lrId" class="form-control" name="id" placeholder = "Cedula" value="<?php echo $lesseeedit['id'] ?>" />
            <p style="font-size: 12px; color: gray;"><spam class = "error-input"></spam>  ej: 84604654</p>
          </div>            
          </div>
          </div>
        </div>
        <div class="row mb-4">
          <!-- Username input -->
          <div class="form-outline col-md-4">
            <label class="form-label" for="lrCellPhone">Telefono Celular</label><input type="text" id="lrCellPhone" class="form-control" name="phone" placeholder = "Telefono Celular" value="<?php echo $lesseeedit['phone'] ?>" />
            <p style="font-size: 12px; color: gray;"><spam class = "error-input"></spam>  ej: 04126526654</p>
            
          </div>
          <div class="form-outline col-md-4">
            <label class="form-label" for="lrHomePhone">Telefono de casa</label><input type="text" id="lrHomePhone" class="form-control" name="home_phone" placeholder = "Telefono de casa" value="<?php echo $lesseeedit['home_phone'] ?>" />
            <p style="font-size: 12px; color: gray;"><spam class = "error-input"></spam>  ej: 02683524569</p>
          <div class="form-outline col-md-4">
            <label class="form-label" for="lrEmail">Correo Electronico</label><input type="text" id="lrEmail" class="form-control" name="email" placeholder = "Correo Electronico" value="<?php echo $lesseeedit['email'] ?>" />
            <p style="font-size: 12px; color: gray;"><spam class = "error-input"></spam>  ej: andlypierre@gmail.com</p>
          </div>
        </div>
        <div class="row mb-4">
          <!-- Name input -->
          <div class="form-outline col-md-4">
            <label class="form-label" for="lrAdress">Direccion</label><input type="text" id="lrAdress" class="form-control" name="adress" placeholder = "Direccion" value="<?php echo $lesseeedit['adress'] ?>" />
            <p style="font-size: 12px; color: gray;"><spam class = "error-input"></spam>  ej: Calle, Localidad, Ciudad, Estado</p>
          </div>

          <!-- Username input -->
          <div class="form-outline col-md-4">
            <label class="form-label" for="lrOcupation">Ocupacion</label><input type="text" id="lrOcupation" class="form-control" name="ocupation" placeholder = "Ocupacion" value="<?php echo $lesseeedit['ocupation'] ?>" />
            <p style="font-size: 12px; color: gray;"><spam class = "error-input"></spam>  ej: Comerciante</p>
          </div>

          <!-- Name input -->
          <div class="form-outline col-md-4">
            <label class="form-label" for="lrnationality">Nacionalidad</label><input type="text" id="lrnationality" class="form-control" name="nacionality" placeholder = "Nacionalidad" value="<?php echo $lesseeedit['nacionality'] ?>" />
            <p style="font-size: 12px; color: gray;"><spam class = "error-input"></spam>  ej: Venezolano</p>
          </div>
        </div>
        <div class="row mb-4">
          <div class="form-outline col-md-4">
            <label class="form-label" for="lrCivilState">Estado civil</label><input type="text" id="lrCivilState" class="form-control" name="civil_status" placeholder = "Estado civil" value="<?php echo $lesseeedit['civil_status'] ?>" />
            
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

            <input type="hidden" name="oldImg" value="<?php echo $lesseeedit['img'] ?>">
            <div class="form-outline col-md-4">
            <p style="font-size: 12px; color: gray;"><spam class = "error-input"></spam>  ej: Divorciado</p>
            
          </div>

        </div>
                <div class="row error-message" style="color: red;"><p class="error-message"></p></div>

<hr>
                                                     
        <!-- Submit button -->
        <div class="row mx-auto col-6">
          <?php echo ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['action']) && isset($_GET['id']))? $btnSave : $btn  ?> 
        </div>
          
        </div>
      </form>
    </div>
<?php $content = ob_get_clean(); ?>
<?php require FOLDER.'views/templates.php'; ?>
