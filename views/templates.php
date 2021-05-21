<?php
require 'head.php';
    require 'header.php'; ?>
            <div class="content-wrapper mt-4" style="margin-left: 1px">
                <section class="content-header">
                  <div class="container-fluid">
                    <div class="row mb-2">
                      <div class="col-sm-6 mt-4">
                        <h1><?php echo $contentH ?></h1>
                      </div>
                    </div>
                  </div><!-- /.container-fluid -->
                </section>
                <div class="row  d-flex align-items-center justify-content-center">
                    <div class="content ">
                        <div class="container-fluid">
                            <div class="row">
                                <?= $content ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php require 'footer.php'; ?>
