<?php  
$title = 'Agregar usuario';
$style = '';
$script = ''; 
$contentH ='Datos del Usuario'?>
<?php ob_start(); ?>
<link rel="stylesheet" href="<?php echo LINK ?>public/css/all-type-form.css">
<?php $style = ob_get_clean(); ?>

<?php ob_start(); ?>
      <!-- form start -->
      <form class="form-horizontal mt-5" id = "addUserForm" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <div class="card col-6" style="max-width: 1000px; min-width: 1000px;">
          <div class="card-header card-warning card-outline">
            <h3 class="card-title">Agregar un usuario</h3>
          </div>
      <!-- /.card-header -->
      <!-- Name input -->
          <div class="card-body">
            <div class="row mb-4">
              <div class="form-outline col-md-5 mx-auto">
                <label class="form-label" for="FName">Nombre</label><input type="text" id="FName" class="form-control" name="name" />
                 <p style="font-size: 12px; color: gray;">  ej: Andly <br><spam class = "error-message error-input"  style="color: red;"></spam></p>
                
              </div>
              <!-- Email input -->
              <div class="form-outline col-md-5 mx-auto">
                <label class="form-label" for="Email">Correo electronico</label><input type="email" id="Email" class="form-control" name="email" />
                 <p style="font-size: 12px; color: gray;">  ej: Andly <br><spam class = "error-message error-input"  style="color: red;"></spam></p>
              </div>
            </div>
            <div class="row mb-5">
          <!-- Username input -->
              <div class="form-outline col-md-5 mx-auto">
                <label class="form-label" for="UName">Usuario</label><input type="text" id="UName" class="form-control" name="uname" />
                 <p style="font-size: 12px; color: gray;">  ej: Andly <br><spam class = "error-message error-input"  style="color: red;"></spam></p>
              </div>

              <!-- Password input -->
              <div class="form-outline col-md-5 mx-auto">
                <label class="form-label" for="addUserPassword">Contrasena</label><input type="password" id="addUserPassword" class="form-control" name="password" />
                 <p style="font-size: 12px; color: gray;">  ej: Andly <br><spam class = "error-message error-input"  style="color: red;"></spam></p>
              </div>
            </div>
                    <div class="row error-message" style="color: red;"><p class="error-message"></p></div>
        <div class="row error-message" style="color: red;"><p class="error-message"></p></div>
            <hr>

          <!-- Submit button -->
            <div class="row"><button type="submit" id="addUserBtn" class="btn btn-primary center-block col-2 abuttons mt-2">Agregar</button>
          </div>
        </div>
      </form>
    </div>
<?php $content = ob_get_clean(); ?>
<?php require FOLDER.'views/templates.php'; ?>