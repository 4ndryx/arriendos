<?php 
$title = 'Dashboard';
$style = '';
$script = ''; 
$contentH ='Panel de administracion'?>

<?php ob_start(); ?>
	<div class="row mx-auto" style="max-width: 100%;min-width: 100%;">
          <div class="col-lg-5 col-6 ">
            <!-- small card -->
            <div class="small-box bg-gradient-blue">
              <!-- Loading (remove the following to stop the loading)-->
              <!-- end loading -->
              <div class="inner">
                <h3><?php echo $nbLessors ?></h3>

                <p>Arrendadores registrados</p>
              </div>
              <div class="icon">
                <i class="fa fa-user-o"></i>
              </div>
              <a href="<?= LINK ?>controllers/show_lessor.php" class="small-box-footer">
                Ver todos <i class="fa fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>

          <div class="col-lg-5 col-6">
            <!-- small card -->
            <div class="small-box bg-gradient-blue">
              <!-- Loading (remove the following to stop the loading)-->
              <!-- end loading -->
              <div class="inner">
                <h3><?php echo $nbLessees ?></h3>

                <p>Arrendatarios registrados</p>
              </div>
              <div class="icon">
                <i class="fa fa-user-o"></i>
              </div>
              <a href="<?= LINK ?>controllers/show_lessee.php" class="small-box-footer">
                Ver todos <i class="fa fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
    </div>
	<div class="row mx-auto" style="max-width: 100%;min-width: 100%;">
          <div class="col-lg-5 col-6 ">
            <!-- small card -->
            <div class="small-box bg-gradient-blue">
              <!-- Loading (remove the following to stop the loading)-->
              <!-- end loading -->
              <div class="inner">
                <h3><?php echo $nbProperties ?></h3>

                <p>Propriedades registradas</p>
              </div>
              <div class="icon">
                <i class="fa fa-building-o"></i>
              </div>
              <a href="<?= LINK ?>controllers/show_property.php" class="small-box-footer">
                Ver todos <i class="fa fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>

          <div class="col-lg-5 col-6">
            <!-- small card -->
            <div class="small-box bg-gradient-blue">
              <!-- Loading (remove the following to stop the loading)-->
              <!-- end loading -->
              <div class="inner">
                <h3><?php echo $nbContracts ?></h3>

                <p>Contratos vigentes</p>
              </div>
              <div class="icon">
                <i class="fa fa-file-text-o"></i>
              </div>
              <a href="<?= LINK ?>controllers/show_contract.php" class="small-box-footer">
                Ver todos <i class="fa fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
        </div>
        
<?php $content = ob_get_clean(); ?>

<?php require FOLDER.'views/templates.php'; ?>