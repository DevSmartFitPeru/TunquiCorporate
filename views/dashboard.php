<?php
include 'header.php';
include '../controlador/dashboard.php';
include '../controlador/sales_mouth.php';
include '../controlador/sales_vencidas.php';
include '../controlador/sales_facturacion.php';
include '../controlador/sales_valorizado_vencido.php';
include '../controlador/facturas_proxima_a_vencer.php';
include '../controlador/facturas_valorizado_proxima_a_vencer.php';
include '../controlador/total_invoice_pagadas.php';
include '../controlador/valorizado_fac_pagadas.php';



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
        <!-- Start Sale Statistic area-->
        <div class="sale-statistic-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="sale-statistic-inner notika-shadow mg-tb-30">
                        <div class="curved-inner-pro">
                            <div class="curved-ctn">
                                <h2></h2>
                            </div>
                        </div>
                        <div id="container"></div>
                    </div>
                </div>
            
            </div>
        </div>
    </div>
    <!-- End Sale Statistic area-->
    <!-- End Contact Info area-->
<?php
include 'footer.php';
?>

<script src="../public/Highcharts_10_3_2/code/highcharts.js"></script>
<script src="../public/Highcharts_10_3_2/code/modules/exporting.js"></script>
<script src="../public/Highcharts_10_3_2/code/modules/export-data.js"></script>
<script src="../public/Highcharts_10_3_2/code/modules/accessibility.js"></script>

<script type="text/javascript">
// Data retrieved https://en.wikipedia.org/wiki/List_of_cities_by_average_temperature
Highcharts.chart('container', {
    chart: {
        type: 'line'
    },
    title: {
        text: 'Dashboard Analítico Corporate Sales - Smart Fit PE'
    },
    subtitle: {
        text: ''     },
    xAxis: {
        categories: ['Ene', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
    },
    yAxis: {
        title: {
            text: 'Monitor Transaccional - Sales Corporate'
        }
    },
    plotOptions: {
        line: {
            dataLabels: {
                enabled: true
            },
            enableMouseTracking: false
        }
    },
    series: [{
        name: 'Valorizado Facturas Emitidas',
        data: [<?php echo $enero_fac?>, <?php echo $febrero_fac?>,
        <?php echo $marzo_fac?>, <?php echo $abril_fac?>, <?php echo $mayo_fac?>, <?php echo $junio_fac?>, <?php echo $julio_fac?>,
        <?php echo $agosto_fac?>, <?php echo $setiembre_fac?>,  <?php echo $octubre_fac?>,
        <?php echo $noviembre_fac?>, <?php echo $diciembre_fac?>]
    }, {
        name: 'Valorizado Facturas Vencidas',
        data: [<?php echo $enero_fac_v?>, <?php echo $febrero_fac_v?>,
        <?php echo $marzo_fac_v?>, <?php echo $abril_fac_v?>, <?php echo $mayo_fac_v?>, <?php echo $junio_fac_v?>, <?php echo $julio_fac_v?>,
        <?php echo $agosto_fac_v?>, <?php echo $setiembre_fac_v?>,  <?php echo $octubre_fac_v?>,
        <?php echo $noviembre_fac_v?>, <?php echo $diciembre_fac_v?>]
    },{
        name: 'Valorizado Facturas Proximas a Vencer',
        data: [<?php echo $enero_fac_p?>, <?php echo $febrero_fac_p?>,
        <?php echo $marzo_fac_p?>, <?php echo $abril_fac_p?>, <?php echo $mayo_fac_p?>, <?php echo $junio_fac_p?>, <?php echo $julio_fac_p?>,
        <?php echo $agosto_fac_p?>, <?php echo $setiembre_fac_p?>,  <?php echo $octubre_fac_p?>,
        <?php echo $noviembre_fac_p?>, <?php echo $diciembre_fac_p?>]
    },{
        name: 'Valorizado Facturas Pagas al 100 %',
        data: [<?php echo $enero_fac_cancelada?>, <?php echo $febrero_fac_cancelada?>,
        <?php echo $marzo_fac_cancelada?>, <?php echo $abril_fac_cancelada?>, <?php echo $mayo_fac_cancelada?>, <?php echo $junio_fac_cancelada?>, <?php echo $julio_fac_cancelada?>,
        <?php echo $agosto_fac_cancelada?>, <?php echo $setiembre_fac_cancelada?>,  <?php echo $octubre_fac_cancelada?>,
        <?php echo $noviembre_fac_cancelada?>, <?php echo $diciembre_fac_cancelada?>]
    }, {
        name: 'Total Facturas Vencidas',
        data: [<?php echo $enero_v?>, <?php echo $febrero_v?>,
        <?php echo $marzo_v?>, <?php echo $abril_v?>, <?php echo $mayo_v?>, <?php echo $junio_v?>, <?php echo $julio_v?>,
        <?php echo $agosto_v?>, <?php echo $setiembre_v?>,  <?php echo $octubre_v?>,
        <?php echo $noviembre_v?>, <?php echo $diciembre_v?>]
    }, {
        name: 'Total Facturas Emitidas',
        data: [<?php echo $enero?>, <?php echo $febrero?>,
        <?php echo $marzo?>, <?php echo $abril?>, <?php echo $mayo?>, <?php echo $junio?>, <?php echo $julio?>,
        <?php echo $agosto?>, <?php echo $setiembre?>,  <?php echo $octubre?>,
        <?php echo $noviembre?>, <?php echo $diciembre?>]
    }, {
        name: 'Total Facturas Proximas a Vencer',
        data: [<?php echo $enero_p?>, <?php echo $febrero_p?>,
        <?php echo $marzo_p?>, <?php echo $abril_p?>, <?php echo $mayo_p?>, <?php echo $junio_p?>, <?php echo $julio_p?>,
        <?php echo $agosto_p?>, <?php echo $setiembre_p?>,  <?php echo $octubre_p?>,
        <?php echo $noviembre_p?>, <?php echo $diciembre_p?>]
    }, {
        name: 'Total Facturas Pagadas al 100 %',
        data: [<?php echo $enero_pag?>, <?php echo $febrero_pag?>,
        <?php echo $marzo_pag?>, <?php echo $abril_pag?>, <?php echo $mayo_pag?>, <?php echo $junio_pag?>, <?php echo $julio_pag?>,
        <?php echo $agosto_pag?>, <?php echo $setiembre_pag?>,  <?php echo $octubre_pag?>,
        <?php echo $noviembre_pag?>, <?php echo $diciembre_pag?>]
    }]
});

		</script>