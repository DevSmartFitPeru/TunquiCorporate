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
                            <h2>CONSULTA RUC SUNAT</h2>
              
                        </div>
                        <form action="create-customer" method="get">
                        <div class="form-example-int">
                            <div class="form-group">
                                <label>RUC:</label>
                                <div class="nk-int-st">
                                    <input type="text" name ="ruc"class="form-control input-sm" placeholder="Ingresar el RUC...">
                                </div>
                            </div>
                        </div>
 
                        <div class="form-example-int mg-t-15">
                            <button class="btn btn-success notika-btn-success">Consultar</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        
        </div>
    </div>
    <!-- Form Examples area End-->
   <?php
   include 'footer.php';
   ?>