<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <!-- Start Left menu area -->
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
                                <li><a title="Ver Contratos" href="<?= LINK ?>controllers/show_contract"><span class="fa fa-list"> Ver todos</span></a></li>
                                <li><a title="Agregar Contratos" href="<?= LINK ?>controllers/add_contract"><span class="fa fa-plus-circle"> Nuevo contrato</span></a></li>
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
                                                    <i class="educate-icon educate-nav"></i>
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
                                                <!-- <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><span class="indicator-nt"></span></a>
                                                    <div role="menu" class="notification-author dropdown-menu animated zoomIn">
                                                        <div class="notification-single-top">
                                                            <h1>Notifications</h1>
                                                        </div>
                                                        <ul class="notification-menu">
                                                            <li>
                                                                <a href="#">
                                                                    <div class="notification-icon">
                                                                        <i class="educate-icon educate-checked edu-checked-pro admin-check-pro" aria-hidden="true"></i>
                                                                    </div>
                                                                    <div class="notification-content">
                                                                        <span class="notification-date">16 Sept</span>
                                                                        <h2>Advanda Cro</h2>
                                                                        <p>Please done this project as soon possible.</p>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <div class="notification-icon">
                                                                        <i class="fa fa-cloud edu-cloud-computing-down" aria-hidden="true"></i>
                                                                    </div>
                                                                    <div class="notification-content">
                                                                        <span class="notification-date">16 Sept</span>
                                                                        <h2>Sulaiman din</h2>
                                                                        <p>Please done this project as soon possible.</p>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <div class="notification-icon">
                                                                        <i class="fa fa-eraser edu-shield" aria-hidden="true"></i>
                                                                    </div>
                                                                    <div class="notification-content">
                                                                        <span class="notification-date">16 Sept</span>
                                                                        <h2>Victor Jara</h2>
                                                                        <p>Please done this project as soon possible.</p>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <div class="notification-icon">
                                                                        <i class="fa fa-line-chart edu-analytics-arrow" aria-hidden="true"></i>
                                                                    </div>
                                                                    <div class="notification-content">
                                                                        <span class="notification-date">16 Sept</span>
                                                                        <h2>Victor Jara</h2>
                                                                        <p>Please done this project as soon possible.</p>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <div class="notification-view">
                                                            <a href="#">View All Notification</a>
                                                        </div>
                                                    </div>
                                                </li> -->
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
            <!-- Mobile Menu start -->
           <!--  <div class="mobile-menu-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="mobile-menu">
                                <nav id="dropdown">
                                    <ul class="mobile-menu-nav">
                                        <li><a data-toggle="collapse" title="Dashboard" data-target="#Charts" href="#">Dashboard <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul class="collapse dropdown-header-top">
                                                <li><a href="<?php echo LINK ?>/controllers/dashboard.php" title="Dashboard" >Dashboard</a></li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" title = "Arrendatarios" data-target="#demoevent" href="#">Arrendatarios <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="demoevent" class="collapse dropdown-header-top">
                                                <li><a href="<?= LINK ?>controllers/show_lessee.php" title = "Ver todos"><span>Ver todos</span></a></li>
                                                <li><a href="<?= LINK ?>controllers/add_lesse.php" title = "Aggregar" ><span>Agregar arrendatarios</span></a></li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" title = "Arrendadores" data-target="#demoevent" href="#">Arrendadores <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="demoevent" class="collapse dropdown-header-top">
                                                <li><a href="<?= LINK ?>controllers/show_lessor.php" title = "Ver todos"><span>Ver todos</span></a></li>
                                                <li><a href="<?= LINK ?>controllers/add_lessor.php" title = "Aggregar" ><span>Agregar arrendadores</span></a></li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse"title = "Propriedades"  data-target="#demopro" href="#">Propriedades <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="demopro" class="collapse dropdown-header-top">
                                                <li><a href="<?= LINK ?>controllers/show_property.php" title = "Ver todos"><span >Ver todos</span></a></li>
                                                <li><a href="<?= LINK ?>controllers/add_property.php" title = "Aggregar" ><span >Agregar propriedad</span></a></li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" title = "Arrendatarios"  data-target="#democrou" href="#">Arrendamiento <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="democrou" class="collapse dropdown-header-top">
                                                <li><a href="<?php echo LINK ?>controllers/show_contract" title = "Ver todos"><span >Ver todos</span></a></li>
                                                <li><a href="<?php echo LINK ?>controllers/add_contract" title = "Aggregar" ><span >Nuevo contrato</span></a></li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#demolibra" href="#">Administradores <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="demolibra" class="collapse dropdown-header-top">
                                                <li><a href="<?php echo LINK ?>controllers/show_user.php"><span >Ver todos</span></a></li>
                                                <li><a href="<?php echo LINK ?>controllers/add_user.php"><span >Agregar administrador</span></a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- Mobile Menu end -->
        </div>