<?php
include 'header.php';
include '../controlador/dashboard.php';
?>

	<!-- Breadcomb area End-->
    <!-- Start Status area -->
    <div class="notika-status-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="wb-traffic-inner notika-shadow">
                        <div class="website-traffic-ctn">
                            <h1><?php echo $total_customer ;?></h1>
                            <p>Clientes Corporativos</p>
                        </div>
                        <img src="../public/iconos/customer-review.png" width="100" height="100" />
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30">
                        <div class="website-traffic-ctn">
                            <h1><?php echo $total_solicitudes_pendientes_de_facturar;?></h2>
                            <p>Solicitudes Pendientes por Facturar</p>
                        </div>
                        <img src="../public/iconos/recibo.png" width="150" height="100" />
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30 dk-res-mg-t-30">
                        <div class="website-traffic-ctn">
                            <h1><?php echo $importe_facturado;?></h1>
                            <p>Valorizado Facturado en AR</p>
                        </div>
                        <img src="../public/iconos/flujo-de-dinero.png" width="120" height="100" />
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30 dk-res-mg-t-30">
                        <div class="website-traffic-ctn">
                            <h1><?php echo $importe_pendiente_pago;?></h1>
                            <p>Pendiente de Cobro</p>
                        </div>
                        <img src="../public/iconos/dolar.png" width="95" height="100"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Status area-->
    <!-- Start Email Statistic area-->
    <br><br><br><br><br><br><br><br><br><br><br>
    <!-- End Contact Info area-->
<?php
include 'footer.php';
?>