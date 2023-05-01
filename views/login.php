<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>TunquiCorporate - Oracle ERP Cloud</title>
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
    <!-- font awesome CSS
		============================================ -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/owl.transitions.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- wave CSS
		============================================ -->
    <link rel="stylesheet" href="css/wave/waves.min.css">
    <!-- Notika icon CSS
		============================================ -->
    <link rel="stylesheet" href="css/notika-custom-icon.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="css/main.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>

     <!-- Mensaje Dinamico
		============================================ -->

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</head>

<body >



<?php 
$error=sha1(md5("Error"));
                        if (isset($_GET['error']) && $_GET['error']==$error) {
                            echo "
                            <script> Swal.fire(
                              'SmartTunqui Corporate',
                              'El usuario y/o password no es correcto, favor de intentar nuevamente.!<br><b>Atte.</b><br><b>Equipo de Desarrollo SmartFit Perú.</b>',
                              'error'
                            );</script>";
}
?>


    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- Login Register area Start-->
    <div class="login-content">
        <!-- Login -->
        <div class="nk-block toggled" id="l-login">
            <div class="nk-form" style="border-radius: 15px;">
                <h3 style="color:#1C1C1C;"><u>SmartTunqui "Corporate"</u></h3>
                <form   method="POST" action="../controlador/login.php">
            <img src="../public/imagenes/logo/logo-dark.svg" width="150">
            <br>
            <br>
                <div class="input-group" >
                    <span class="input-group-addon nk-ic-st-pro"><i class="notika-icon notika-support"></i></span>
                    <div class="nk-int-st">
                        <input type="text"  class="form-control"  name="USUARIO_SISTEMA" id="USUARIO_SISTEMA"  placeholder="Email" required autofocus>
                        <small>Usuario: Email Corporativo.</small>
                      </div>
                </div>
                <div class="input-group mg-t-15">
                    <span class="input-group-addon nk-ic-st-pro"><i class="notika-icon notika-edit"></i></span>
                    <div class="nk-int-st">
                        <input type="password"  class="form-control"  name="PASSWORD_SISTEMA" id="PASSWORD_SISTEMA"  autocomplete="off" placeholder="Password" required>
                        <small>Password: Documento de identidad.</small>
                    </div>
                </div>
                <small style="color:#1C1C1C;">* Gestión y Administración de Ventas Corporativas V.1.2 (Producción)</small>
             
                <button type="submit" name="submitBtnLogin" id="submitBtnLogin" class="btn btn-login btn-success btn-float"><i class="notika-icon notika-right-arrow right-arrow-ant"></i></button>
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
                <i class="fa fa-handshake-o" aria-hidden="true"></i> Ver Cambios Nueva Versión 1.2
</button>
            </div>

            </form>
        </div>

    </div>
    <!-- Login Register area End-->
    <!-- jquery
		============================================ -->
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- wow JS
		============================================ -->
    <script src="js/wow.min.js"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="js/jquery-price-slider.js"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="js/meanmenu/jquery.meanmenu.js"></script>
    <!-- counterup JS
		============================================ -->
    <script src="js/counterup/jquery.counterup.min.js"></script>
    <script src="js/counterup/waypoints.min.js"></script>
    <script src="js/counterup/counterup-active.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- sparkline JS
		============================================ -->
    <script src="js/sparkline/jquery.sparkline.min.js"></script>
    <script src="js/sparkline/sparkline-active.js"></script>
    <!-- flot JS
		============================================ -->
    <script src="js/flot/jquery.flot.js"></script>
    <script src="js/flot/jquery.flot.resize.js"></script>
    <script src="js/flot/flot-active.js"></script>
    <!-- knob JS
		============================================ -->
    <script src="js/knob/jquery.knob.js"></script>
    <script src="js/knob/jquery.appear.js"></script>
    <script src="js/knob/knob-active.js"></script>
    <!--  Chat JS
		============================================ -->
    <script src="js/chat/jquery.chat.js"></script>
    <!--  wave JS
		============================================ -->
    <script src="js/wave/waves.min.js"></script>
    <script src="js/wave/wave-active.js"></script>
    <!-- icheck JS
		============================================ -->
    <script src="js/icheck/icheck.min.js"></script>
    <script src="js/icheck/icheck-active.js"></script>
    <!--  todo JS
		============================================ -->
    <script src="js/todo/jquery.todo.js"></script>
    <!-- Login JS
		============================================ -->
    <script src="js/login/login-action.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="js/plugins.js"></script>
    <!-- main JS
		============================================ -->
    <script src="js/main.js"></script>
</body>

</html>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h5 class="modal-title" id="exampleModalLabel">NUEVA VERSION 2.1 - SMART TUNQUI CORPORATE</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
<strong>* Requerimiento 1.: </strong>Adjuntar el proceso de recepción y registro de CPE, en caso aplique la particularidad en la creación del cliente.<br>
<strong>Status Requerimiento 1:</strong> Solicitud Implementada, se permite adjuntar un archivo PDF al momento de crear al cliente.<br>
<strong>* Requerimiento 2.:</strong>Los totales deben salir automáticos (la cantidad multiplicada por el precio) y considerar los decimales. <br>
<strong>Status Requerimiento 2:</strong> Solicitud Implementada, los calculos son online.<br>
<strong>* Requerimiento 3.: </strong>Agregar el TAB LINE, para agregar las líneas para el campo de descripción en la solicitud de facturación, de acuerdo a lo conversado en la reunión. <br>
<strong>Status Requerimiento 3:</strong> Solicitud Implementada, se agrego delimitador success.<br>
<strong>* Requerimiento 4.: </strong>Alertar error de espacio o caracteres especiales, para los textos tanto en la creación de clientes y solicitud de facturación. <br>
<strong>Status Requerimiento 4:</strong> Solicitud Implementada, se agrego un contador y se restringio hasta 300 caracateres de acuerdo a las estructuras de Oracle.<br>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

      </div>
    </div>
  </div>
</div>