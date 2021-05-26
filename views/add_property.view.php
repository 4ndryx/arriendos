<?php  
$title = 'Agregar propriedad';
$style = '';
$script = '';
$contentH ='Agregar una propriedad'?>

<?php ob_start(); ?>
<link rel="stylesheet" href="<?php echo LINK ?>public/css/all-type-form.css">
<?php $style = ob_get_clean(); ?>

<?php ob_start(); ?>
<button type="submit" class="btn btn-primary btn-block mb-2 abuttons col-md-4 center-block btn-lg">Agregar</button>
<?php $btn = ob_get_clean(); ?>
<?php ob_start(); ?>
<button type="submit" class="btn btn-primary btn-block mb-2 abuttons col-md-4 center-block">Guardar</button><a class="mb-2 col-md-4 center-block" href="<?= LINK ?>controllers/show_property.php"><button type="button" class="btn btn-block btn-secondary btn-lg">Cancelar</button></a>
<?php $btnSave = ob_get_clean(); ?>

<?php ob_start(); ?>
    <div class="card mx-auto" style="max-width: 80%; min-width: 80%;">
      <div class="card-header card-warning card-outline">
        <h3 class="card-title">Propriedad</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form class="form-horizontal" id = "addPropertyForm" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" enctype = "multipart/form-data">
      <!-- Name input -->
      <div class="card-body">
        <div class="row mb-4">
          <div class="form-outline col-md-4">
            <label class="form-label" for="adress">Direccion</label><input type="text" id="adress" class="form-control" name="adress" value= "<?php echo $propertyedit['adress'] ?>"/>
            <p style="font-size: 12px; color: gray;">  ej: Mercado, # de local<br><spam class = "error-message error-input"  style="color: red;"></spam></p>
          </div>
          <div class="form-outline col-md-4">
            <label class="form-label" for="pArea">Superficie</label><input type="number" id="pArea" class="form-control" name="area" value= "<?php echo $propertyedit['area'] ?>"/>
            <p style="font-size: 12px; color: gray;">  ej: 20 <br><spam class = "error-message error-input"  style="color: red;"></spam></p>
          </div>

        <!-- Name input -->
          <div class="form-outline col-md-4">
            <label class="form-label" for="pType">Tipo</label><input type="text" id="pType" class="form-control" name="type" value= "<?php echo $propertyedit['type'] ?>"/>
            <p style="font-size: 12px; color: gray;">  ej: Imueble <br><spam class = "error-message error-input"  style="color: red;"></spam></p>
          </div>
        </div>
        <div class="row mb-4">
          <div class="form-outline col-md-4">
            <label class="form-label" for="pState">Estado de Uso</label><input type="text" id="pState" class="form-control" name="state" value= "<?php echo $propertyedit['state'] ?>"/>
            <p style="font-size: 12px; color: gray;">  ej: Buen estado <br><spam class = "error-message error-input"  style="color: red;"></spam></p>
            
          </div>

        <!-- Name input -->
          <div class="form-outline col-md-4">
            <label class="form-label" for="pDescription">Descripcion</label><input type="text" id="pDescription" class="form-control" name="description" value= "<?php echo $propertyedit['description'] ?>"/>
            <p style="font-size: 12px; color: gray;">  ej: Local vacio .... <br><spam class = "error-message error-input"  style="color: red;"></spam></p>
            
          </div>

          <!-- Username input -->

          <div class="form-group-inner col-md-4">
           <div class="row mt-4">
              <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                <label class="login2 pull-right pull-right-pro" for="pImg">Imagenes</label>
              </div>
              <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                <div class="file-upload-inner ts-forms">
                  <div class="input prepend-big-btn">
                    <label class="icon-right" for="prepend-big-btn">
                      <i class="fa fa-download"></i>
                    </label>
                    <div class="file-button" width = "" >Examinar<input type="file" multiple onchange="document.getElementById('prepend-big-btn').value = this.value;" id="pImg" class="" name="img[]">
                    </div>
                    <input type="text" id="prepend-big-btn" placeholder="Seleccionar archivo">
                  </div>
                </div>
              </div>
            </div>
          </div>

          <input type="hidden" name="id" value="<?php echo $propertyedit['id'] ?>">
          <input type="hidden" name="oldImg" value="<?php echo $propertyedit['img'] ?>">

        </div>

        <div class="row mx-auto col-6">
          <?php echo ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['action']) && isset($_GET['id']))? $btnSave : $btn  ?> 
        </div>
      </div>
      <!-- Username input -->
      

      <!-- Username input -->
      
                                                   

      </form>
    </div>
<?php $content = ob_get_clean(); ?>
<?php require FOLDER.'views/templates.php'; ?>
