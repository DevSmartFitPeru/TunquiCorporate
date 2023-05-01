<?php
error_reporting(0);
include 'header.php';
$ruc = $_GET['ruc'];
$curl = curl_init();
curl_setopt_array($curl, array(
    CURLOPT_URL => "https://apiperu.dev/api/ruc/".$ruc."?api_token=9031634e2e95c585c2ef29fbd786bc0eedf3542a40c98c40b1adb3e15d125251",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_SSL_VERIFYPEER => false
));
$response = curl_exec($curl);
$err = curl_error($curl);
curl_close($curl);
if ($err) {
    echo "cURL Error #:" . $err;
} else {
    //echo $response;
}

$data = json_decode($response, true);
$direccion_completa = $data['data']['direccion_completa'];
$ruc_cliente = $data['data']['ruc'];
$nombre_o_razon_social = $data['data']['nombre_o_razon_social'];
$estado = $data['data']['estado'];
$condicion = $data['data']['condicion'];
$departamento = $data['data']['departamento'];
$provincia = $data['data']['provincia'];
$distrito = $data['data']['distrito'];
$ubigeo_sunat = $data['data']['ubigeo_sunat'];
?>
	<!-- Breadcomb area End-->
    <!-- Form Element area Start-->
    <div class="form-element-area">
        <div class="container">

        <form action="../controlador/create_customer.php" method="post" enctype="multipart/form-data">
        <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-element-list">
                    <div class="basic-tb-hd">
                            <h2>DATOS FISCALES - SUNAT</h2>
                            <p>* La información fiscal es extraida de SUNAT, de existir problemas con el servicio rest, validar los datos en consulta RUC haciendo clic <a  href="https://e-consultaruc.sunat.gob.pe/cl-ti-itmrconsruc/FrameCriterioBusquedaWeb.jsp"target="_blank" role="button">Aquí</a></p>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon  notika-next"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="text" name="EMPRESA_RUC" value="<?php echo $ruc_cliente?>" class="form-control" placeholder="RUC" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon  notika-next"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="text" name="EMPRESA_RAZON_SOCIAL" value="<?php echo $nombre_o_razon_social?>"  class="form-control" placeholder="RAZON SOCIAL" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon  notika-map"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="text" name="EMPRESA_DIRECCION_FISCAL" value="<?php echo $direccion_completa?>" class="form-control" placeholder="DIRECCION FISCAL" required>
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
                                        <input type="text" name="EMPRESA_ESTADO" value="<?php echo $estado?>" class="form-control" placeholder="ESTADO"required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-next"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="text" name="EMPRESA_CONDICION" value="<?php echo $condicion?>" class="form-control" placeholder="CONDICION"required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon  notika-next"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="text" name="EMPRESA_DEPARTAMENTO" value="<?php echo $departamento?>" class="form-control" placeholder="DEPARTAMENTO"required>
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
                                        <input type="text" name="EMPRESA_PROVINCIA" value="<?php echo $provincia?>" class="form-control" placeholder="PROVINCIA"required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon  notika-next"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="text" name="EMPRESA_DISTRITO" value="<?php echo $distrito?>"  class="form-control" placeholder="DISTRITO"required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon  notika-next"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="text" name="EMPRESA_UBIGEO" value="0000" class="form-control" placeholder="UBIGEO"required>
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
                                        <input type="text" name="CONTACTO_NOMBRES" class="form-control" placeholder="Nombres"required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-8 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-support"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="text" name="CONTACTO_APELLIDOS"  class="form-control" placeholder="Apellidos"required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-phone"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="text" name="CONTACTO_TELEFONO"  class="form-control" placeholder="Telefono"required>
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
                                        <input type="text"  name="CONTACTO_EMAIL" class="form-control" placeholder="Email"required>
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
                                        <input type="text"  name="FACTURACION_NOMBRES"class="form-control" placeholder="Nombres"required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-8 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-support"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="text" name="FACTURACION_APELLIDOS"  class="form-control" placeholder="Apellidos"required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-phone"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="text" name="FACTURACION_TELEFONO" class="form-control" placeholder="Telefono"required>
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
                                        <input type="text" name="FACTURACION_EMAIL"  class="form-control" placeholder="Email"required>
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
                            <p>* Favor de verificar que los datos ingresados sean los correctos, el sistema utilizara el email registrados alertas automaticas de facturas proximas a vencer.</p>
                        </div>

                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-support"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="text"  name="TESORERIA_NOMBRES"  class="form-control" placeholder="Nombres"required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-8 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-support"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="text" name="TESORERIA_APELLIDOS" class="form-control" placeholder="Apellidos"required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-phone"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="text"  name="TESORERIA_TELEFONO" class="form-control" placeholder="Telefono"required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-mail"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="text" name="TESORERIA_EMAIL"  class="form-control" placeholder="Email de contacto tesoreria..."required>
                                        <small>* Si el cliente tiene mas de un email, registrarlo separados por coma. Ejemplo<strong> "email1@gmail.com,email2@gmail.com"</strong></small>
                                        <input type="hidden" name="USUARIO_CREADOR" value="<?php echo $nombres;?>" class="form-control" required>
                            
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-mail"></i>
                                    </div>
                                    <div class="nk-int-st">
                                    <select name="TIPO_EMISION_CE" id="customer" class="form-control" required>
  <option value="">Seleccione:</option>
  <option value="REGULAR">Emisión Regular</option>
  <option value="PARTICULAR">Emisión Particular (Desea el envio de XML y PDF vía proceso interno.)</option>
</select>
<small>Tipo de Recepción de Documento Fiscales Solicitado por el cliente.</small>
    <input type="file" id="file" name="documento" multiple required="required" accept="application/pdf"/>
                                    </div>
                                </div>
                            </div>
                
                        </div>

                       
                       
                    </div>
                    
                </div>

                
            </div>
            <button type="submit"  name="agregar" class="btn btn-danger" onclick="validarFormulario();"><i class="fa fa-plus-circle" aria-hidden="true"></i> Crear Cliente Corporativo</button>
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
   <script type="text/javascript">

function validarFormulario() {
 
    var usuario = document.getElementById('customer').value;
    var pdf = document.getElementById('file');

  
 if(usuario=="REGULAR") {
    alert('Facturacion Regular');
    pdf.disabled = true;
   
  }
  if(usuario=="PARTICULAR") {
   // alert('Favor de adjuntar el procedimiento en formado PDF.');
   Swal.fire(
  'Tesorería Informa',
  'Favor de adjuntar el procedimiento enviado por el cliente en PDF, con el fin de emitir los documentos electrónicos de manera correcta.<br><strong>Saludos,<br>Team de Facturación y Cuentas por Cobrar - Smart Fit.',
  'success'
)
    pdf.focus();
    pdf.disabled = false;
   
  }

  this.submit();
}

   </script>