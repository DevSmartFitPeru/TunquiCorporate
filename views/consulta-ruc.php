<?php
include 'header.php';
?>

	<!-- Breadcomb area End-->
    <!-- Form Examples area start-->
    <div class="form-example-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-example-wrap">
                        <div class="cmp-tb-hd">
                            <h2>Consulta RUC</h2>
                            <img src="../public/imagenes/logo_sunat.png" width="100" height="100" />
                        </div>
                        <form action="create-customer" method="get">
                        <div class="form-example-int">
                            <div class="form-group">
                                <label>Criterios de la búsqueda:</label>
                                <div class="nk-int-st">
                                    <input type="text" name ="ruc"class="form-control input-sm" required placeholder="Ingresar el RUC..." autofocus>
                                </div>
                            </div>
                        </div>
 
                        <div class="form-example-int mg-t-15">
                            <button class="btn btn-success btn-lg active"><i class="fa fa-search" aria-hidden="true"></i> Consultar en SUNAT</button>
                            <a href="create-customer" class="btn btn-info btn-lg active" role="button" aria-pressed="true">Crear Manualmente</a>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        
        </div>
    </div>
    <!-- Form Examples area End-->
    <br><br><br><br><br><br><br><br>
   <?php
   include 'footer.php';
   ?>