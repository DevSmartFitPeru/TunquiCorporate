<?php
include 'header.php';
?>
	<!-- Breadcomb area End-->
    <!-- Form Element area Start-->
    <div class="form-element-area">
        <div class="container">

        <form action="../controlador/create_customer.php" method="post">

            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-element-list">
                    <div class="basic-tb-hd">
                            <h2>DATOS FISCALES - SUNAT</h2>
                            <p>* La información fiscal es extraida de SUNAT</p>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon  notika-next"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="text" name="EMPRESA_RUC" value="20331066703" class="form-control" placeholder="RUC" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon  notika-next"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="text" name="EMPRESA_RAZON_SOCIAL" value="INRETAIL PHARMA S.A."  class="form-control" placeholder="RAZON SOCIAL" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon  notika-map"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="text" name="EMPRESA_DIRECCION_FISCAL" value="AV. DEFENSORES DEL MORRO NRO. 1277, LIMA - LIMA - CHORRILLOS" class="form-control" placeholder="DIRECCION FISCAL" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon  notika-next"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="text" name="EMPRESA_ESTADO" value="ACTIVO" class="form-control" placeholder="ESTADO"required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-next"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="text" name="EMPRESA_CONDICION" value="HABIDO" class="form-control" placeholder="CONDICION"required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon  notika-next"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="text" name="EMPRESA_DEPARTAMENTO" value="LIMA" class="form-control" placeholder="DEPARTAMENTO"required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon  notika-next"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="text" name="EMPRESA_PROVINCIA" value="LIMA" class="form-control" placeholder="PROVINCIA"required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon  notika-next"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="text" name="EMPRESA_DISTRITO" value="CHORRILLOS"  class="form-control" placeholder="DISTRITO"required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon  notika-next"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="text" name="EMPRESA_UBIGEO" value="150108" class="form-control" placeholder="UBIGEO"required>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                    </div>
                </div>
            </div>
       
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-element-list">
                        <div class="basic-tb-hd">
                            <h2>PERSONA DE CONTACTO</h2>
                            <p>* Favor de verificar que los datos ingresados sean los correctos.</p>
                        </div>

                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-support"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="text" name="CONTACTO_NOMBRES" value="LUIS DEV" class="form-control" placeholder="Nombres"required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-8 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-support"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="text" name="CONTACTO_APELLIDOS" value="DEV AZAÑERO" class="form-control" placeholder="Apellidos"required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-phone"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="text" name="CONTACTO_TELEFONO" value="99959392237" class="form-control" placeholder="Telefono"required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-mail"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="email"  name="CONTACTO_EMAIL" value="luis.azanero@smartfit.com" class="form-control" placeholder="Email"required>
                                    </div>
                                </div>
                            </div>
                
                        </div>
                      
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-element-list">
                        <div class="basic-tb-hd">
                            <h2>CONTACTO AREA DE FACTURACIÓN</h2>
                            <p>* Favor de verificar que los datos ingresados sean los correctos.</p>
                        </div>

                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-support"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="text"  name="FACTURACION_NOMBRES" value="NAME CONTACT" class="form-control" placeholder="Nombres"required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-8 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-support"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="text" name="FACTURACION_APELLIDOS" value="APELLIDOS CONTACT" class="form-control" placeholder="Apellidos"required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-phone"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="text" name="FACTURACION_TELEFONO" value="99999999" class="form-control" placeholder="Telefono"required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-mail"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="email" name="FACTURACION_EMAIL" value="CONTACT@CONTACTO.COM"  class="form-control" placeholder="Email"required>
                                    </div>
                                </div>
                            </div>
                
                        </div>
                      
                    </div>
                </div>
            </div>
          
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-element-list">
                        <div class="basic-tb-hd">
                            <h2>CONTACTO AREA DE TESORERIA</h2>
                            <p>* Favor de verificar que los datos ingresados sean los correctos.</p>
                        </div>

                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-support"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="text"  name="TESORERIA_NOMBRES" value="NAME TESORERIA" class="form-control" placeholder="Nombres"required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-8 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-support"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="text" name="TESORERIA_APELLIDOS" value="APELLIDOS TESORERIA" class="form-control" placeholder="Apellidos"required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-phone"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="text"  name="TESORERIA_TELEFONO" value="88888888" class="form-control" placeholder="Telefono"required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-mail"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="email" name="TESORERIA_EMAIL" value="tesoreria@email.com" class="form-control" placeholder="Email"required>
                                    </div>
                                </div>
                            </div>
                
                        </div>
                        <button type="button" class="btn btn-danger">Crear Cliente Corporativo</button>
                    </div>
                    
                </div>

                
            </div>
           
            </form>
        </div>
    </div>
    <!-- Form Element area End-->
    <!-- Datepicker area Start-->

    <!-- Datepicker area End-->
    <!-- Color Picker area Start-->
 
   <?php
   include 'footer.php';
   ?>