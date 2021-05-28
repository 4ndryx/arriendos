<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <!-- Start Left menu area -->
        <div id = "loader-wrapper" class="demo w-100 h-100" style="z-index: 1000;min-height: 54.3em;">
    <div class="loader">
        <div class="loader-inner box-1"></div>
        <div class="loader-inner box-2"></div>
        <div class="loader-inner box-3"></div>
        <div class="loader-inner box-4"></div>
    </div>
    </div>
    <div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content" style="width: 25%; background-color: currentColor;">
    <span class="close close-Btn">&times;</span>
    <p>Borrar registro?</p>
     <div class="modal-footer justify-content-between ">
      <button id = "cancel" type="button" class="btn btn-outline-light close-Btn" data-dismiss="modal">Cancelar</button>
      <button id ="delete" type="button" class="btn btn-outline-light">Borrar</button>
    </div>
  </div>

</div>
    <div class="left-sidebar-pro">
        <nav id="sidebar" class="">
            <div class="sidebar-header">
                <a href="<?php echo LINK ?>/controllers/dashboard.php"><img class="main-logo" style = "width: 220px" src="<?php echo LINK; ?>public/img/logo/logo.png" alt="" /></a>
                <strong><a href="<?php echo LINK ?>/controllers/dashboard.php"><img style = "width: 50px" src="<?php echo LINK; ?>public/img/logo/logosn.png" alt="" /></a></strong>
            </div>
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
                <nav class="sidebar-nav left-sidebar-menu-pro">
                    <ul class="metismenu" id="menu1">
                        <li>
                            <a class="has-arrow" href="<?php echo LINK ?>/controllers/dashboard.php">
                                   <span class="fa fa-home"></span>
                                   <span class="mini-click-non"> Dashboard</span>
                                </a>
                            <ul class="submenu-angle" aria-expanded="true">
                                <li><a title="Dashboard" href="<?php echo LINK ?>/controllers/dashboard.php"><span class="fa fa-home"></span><span class="mini-sub-pro"> Dashboard</span></a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow" href="#" aria-expanded="false"><span class="fa fa-user-o"></span> <span class="mini-click-non">Arrendatarios</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Ver arrendatarios" href="<?= LINK ?>controllers/show_lessee.php"><span class="fa fa-list"> Ver todos</span></a></li>
                                <li><a title="Agregar arrendatarios" href="<?= LINK ?>controllers/add_lessee.php"><span class="fa fa-plus-circle"> Agregar arrendatarios</span></a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow" href="#" aria-expanded="false"><span class="fa fa-user-o"></span> <span class="mini-click-non">Arrendadores</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Ver arrendadores" href="<?= LINK ?>controllers/show_lessor.php"><span class="fa fa-list"> Ver todos</span></a></li>
                                <li><a title="Agregar arrendadores" href="<?= LINK ?>controllers/add_lessor.php"><span class="fa fa-plus-circle"> Agregar arrendadores</span></a></li>
                            </ul>
                        </li>

                        <li>
                            <a class="has-arrow" href="#" aria-expanded="false"><span class="fa fa-building-o"></span> <span class="mini-click-non">Propriedades</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Ver propriedad" href="<?= LINK ?>controllers/show_property.php"><span class="fa fa-list"> Ver todos</span></a></li>
                                <li><a title="Agregar propriedad" href="<?= LINK ?>controllers/add_property.php"><span class="fa fa-plus-circle"> Agregar Propriedad</span></a></li>
                            </ul>
                        </li>

                        <li>
                            <a class="has-arrow" href="#" aria-expanded="false"><span class="fa fa-file-text-o"></span> <span class="mini-click-non">Arrendamientos</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Ver Contratos" href="<?= LINK ?>controllers/show_contract.php"><span class="fa fa-list"> Ver todos</span></a></li>
                                <li><a title="Agregar Contratos" href="<?= LINK ?>controllers/add_contract.php"><span class="fa fa-plus-circle"> Nuevo contrato</span></a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow" href="#" aria-expanded="false"><span class="fa fa-users"></span> <span class="mini-click-non">Administradores</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Ver Administradores" href="<?php echo LINK ?>admin/controllers/show_user.php"><span class="fa fa-list"> Ver todos</span></a></li>
                                <li><a title="Agregar Administradores" href="<?php echo LINK ?>admin/controllers/add_user.php"><span class="fa fa-plus-circle"> Agregar administrador</span></a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </nav>
    </div>
    <!-- End Left menu area -->
    <!-- Start Welcome area -->
    <div class="all-content-wrapper" width = "950%">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="<?php echo LINK ?>/controllers/dashboard.php"><img class="main-logo" style="width: 100px"src="<?php echo LINK; ?>public/img/logo/logo.png" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-advance-area">
            <div class="header-top-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="header-top-wraper">
                                <div class="row">
                                    <div class="col-1 ml-4">
                                        <div class="menu-switcher-pro">
                                            <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                                                    <i class="fa fa-bars"></i>
                                                </button>
                                        </div>
                                    </div>
                                    <div class="col-5">
                                        <div class="header-top-menu tabl-d-n">
                                            <ul class="nav navbar-nav mai-top-nav">
                                                <li class="nav-item"><a href="<?php echo LINK ?>/controllers/dashboard.php" class="nav-link">Inicio</a>
                                                </li>
                                                <li class="nav-item dropdown res-dis-nn">
                                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">Soporte</span></a>
                                                    <div role="menu" class="dropdown-menu animated zoomIn">
                                                        <a href="#" class="dropdown-item">Documentacion</a>
                                                        <a href="#" class="dropdown-item">Contactar Desarrollador</a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-5">
                                        <div class="header-right-info">
                                            <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                                
                                                <li class="nav-item">
                                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                                            <img src="" alt="" />
                                                            <span class="admin-name"><?= $_SESSION['name'] ?></span>
                                                        </a>
                                                    <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                                                        </li>
                                                        <li><a href="#"><span class="edu-icon edu-user-rounded author-log-ic"></span>Perfil</a>
                                                        </li>
                                                        <li><a href="<?php echo LINK ?>controllers/login.php?logout=true"><span class="edu-icon edu-locked author-log-ic"></span>Salir</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
        </div>