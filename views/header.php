<?php
//Zona Horaria por default lima
date_default_timezone_set("America/Lima");

include_once('../config/conexion.php');
session_start();
if(!$_SESSION["verificar"]){
  header("location: ../views/login");
}
$dni = $_SESSION["DNI"];
$nombre = $_SESSION["NOMBRES"];
$ape = $_SESSION["APELLIDOS"];

$nombres = $nombre.' '.$ape;
$filial = $_SESSION["FILIAL"];
$area = $_SESSION["AREA"];

?>
<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>SmartCorporate - Oracle ERP Cloud</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="../public/imagenes/apple-icon-57x57-2947bd46.ICO">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/owl.transitions.css">
    <!-- meanmenu CSS
		============================================ -->
    <link rel="stylesheet" href="css/meanmenu/meanmenu.min.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- jvectormap CSS
		============================================ -->
    <link rel="stylesheet" href="css/jvectormap/jquery-jvectormap-2.0.3.css">
    <!-- notika icon CSS
		============================================ -->
    <link rel="stylesheet" href="css/notika-custom-icon.css">
      <!-- codemirror CSS
		============================================ -->
        <link rel="stylesheet" href="css/code-editor/codemirror.css">
    <link rel="stylesheet" href="css/code-editor/ambiance.css">

      <!-- Data Table JS
		============================================ -->
    <link rel="stylesheet" href="css/jquery.dataTables.min.css">
    <!-- wave CSS
		============================================ -->
    <link rel="stylesheet" href="css/wave/waves.min.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="css/main.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="css/responsive.css">

    <script src="js/vendor/modernizr-2.8.3.min.js"></script>

     <!-- Mensaje Dinamico
		============================================ -->

    

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <div class="header-top-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-8 col-sm-12 col-xs-12">
                    <div class="logo-area">
                        <a ><img src="../public/imagenes/logo-header-smarttunqui.svg" width="200" height="90"/></a> <small style="color:#ffb612;">TunquiCorporate</small> 
                    </div>
                    
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    
                    <div class="header-top-menu">
                        <ul class="nav navbar-nav notika-top-nav">
 
                           
                            <li class="nav-item nc-al"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><span><div class="hd-message-img">
                                                    <img src="../public/usuarios/smartfit.png" width="40" height="40" />
                                                </div></span></a>
                                <div role="menu" class="dropdown-menu message-dd notification-dd animated zoomIn">

                                    <div class="hd-message-info">
                                        <a href="#">
                                            <div class="hd-message-sn">
                                                <div class="hd-message-img">
                                                    <img src="../public/usuarios/smartfit.png" alt="" />
                                                </div>
                                                <div class="hd-mg-ctn">
                                                    <h3><?php echo $nombres?></h3>
                                                    <h3><?php echo $dni?></h3>
                                                    <p><strong></strong> <?php echo $filial?></p>
                                                    <p><strong></strong> <?php echo $area?></p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="hd-mg-va">
                                        <a href="logout">Cerrar Sesión</a>
                                    </div>
                                </div>
                            </li>
                       
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Mobile Menu start -->
    <div class="mobile-menu-area">
        
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="mobile-menu">
                        <nav id="dropdown">
                            <ul class="mobile-menu-nav">
                           
                         
                             
                                <li><a data-toggle="collapse" data-target="#demodepart" href="#">Type Transaction</a>
                                    <ul id="demodepart" class="collapse dropdown-header-top">
                                  
                                        <li><a href="type_transaction">OIC</a></li>
                                    </ul>
                                </li>
                                <li><a data-toggle="collapse" data-target="#demodepart" href="#">Administrador</a>
                                    <ul id="demodepart" class="collapse dropdown-header-top">
                                  
                                        <li><a href="view_user">Crear Usuario</a></li>
                                    </ul>
                                </li>
                                <li><a data-toggle="collapse" data-target="#demodepart" href="#">Oracle ERP</a>
                                    <ul id="demodepart" class="collapse dropdown-header-top">
                                        <li><a href="oic_location">ID Location</a></li>
                                    </ul>
                                </li>
                                <li><a data-toggle="collapse" data-target="#demodepart" href="#">SOVOS</a>
                                    <ul id="demodepart" class="collapse dropdown-header-top">
                                        <li><a href="factura_sovos">ID Location</a></li>
                                    </ul>
                                </li>
                                <li><a data-toggle="collapse" data-target="#demodepart" href="#">TI</a>
                                    <ul id="ti" class="collapse dropdown-header-top">
                                        <li><a href="api_tunqui_invoice">Procesos OIC_DB</a></li>
                                    </ul>
                                </li>
                            
                                <li><a data-toggle="collapse" data-target="#demo" href="#">Facturación</a>
                                    <ul id="demo" class="collapse dropdown-header-top">
                                        <li><a href="search_reniec">Generar Boleta Electrónica</a>
                                </li>
                                <li><a href="search_sunat">Generar Factura Electrónica</a>
                                </li>
                                    </ul>
                                </li>
                              
                                <li><a data-toggle="collapse" data-target="#Pagemob" href="#">Sesión</a>
                                    <ul id="Pagemob" class="collapse dropdown-header-top">
                                   
                                        <li><a href="logout">Sesion</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Mobile Menu end -->
    <!-- Main Menu area start-->
    <div class="main-menu-area mg-tb-40">
        
        <div class="container">
            
            <div class="row" style="background-color: #ffb612;">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <ul class="nav nav-tabs notika-menu-wrap menu-it-icon-pro">
                    
                    <li><a data-toggle="tab" href="#Home"><i class="notika-icon notika-windows"></i>Dashboard</a>
                        </li>
                        <li><a data-toggle="tab" href="#administrador"><i class="notika-icon notika-windows"></i>Clientes Corporativos</a>
                        </li>
                        <li><a data-toggle="tab" href="#facturacion"><i class="notika-icon notika-windows"></i>Facturación AR</a>
                        </li>
           
                        <li><a data-toggle="tab" href="#reporte"><i class="notika-icon notika-windows"></i>Reportes</a>
                        </li>
           
                     
                        <li><a data-toggle="tab" href="#Page"><i class="notika-icon notika-support"></i>Sesión</a>
                        </li>
                    </ul>
                    <div class="tab-content custom-menu-content">
                        <div id="Home" class="tab-pane in active notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="dashboard">Dashboard</a>
                                </li>
                           
                            </ul>
                        </div>


                        <div id="administrador" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                             
                                <li><a href="view-cliente">Clientes Corporativos</a>
                                </li>


                            </ul>
                        </div>

                        
                        <div id="reporte" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                             
                                <li><a href="invoice_ar">Fecha Emisión AR</a>
                                </li>
                                <li><a href="invoice_vencimiento">Fecha Vencimiento</a>
                                </li>


                            </ul>
                        </div>


                        <div id="facturacion" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                             
                                <li><a href="view-facturacion">Facturación</a>
                                </li>
                                <li><a href="regularizacion_deuda">Regularizar Deuda</a>
                                </li>

                            </ul>
                        </div>
						
                        <div id="cuadratura" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                             
                                <li><a href="reporte_pos"><img src="../manual/inmigracion.png" width="50" height="30" /> Reporte de AP Registrados</a>
                                </li>

                                
                                <li><a href="front-id-error"><img src="../manual/smart.png" width="50" height="30" /> Error # de Pago.</a>
                                </li>

                                <li><a href="ap-error"><img src="../manual/POS-ANDROID-1.png" width="30" height="30" /> Error AP (Fecha de Operación incorrecto)</a>
                                </li>

                                <li><a href="cuadratura"><img src="../manual/terminal-pos.png" width="50" height="30" />Reporte Total por Día (Cuadre de Caja)</a>
                                </li>
                                <li><a href="reporte_analitico_pos"><img src="../manual/analitica.png" width="50" height="30" /> Reporte detallado por Día</a>
                                </li>

                                
                            </ul>
                        </div>
                     
                        <div id="manual" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                             
                                <li><a href="../manual/cuadratura.pdf" target="_blank"><img src="../manual/archivo-pdf.png" width="50" height="30" /> Ver Manual</a>
                                </li>
                                
                                
                            </ul>
                        </div>
                     

                    
                        <div id="Page" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                        
                                <li><a href="logout">Cerrar Sesión</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    <!-- Main Menu area End-->
    