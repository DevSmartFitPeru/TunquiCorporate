<?php
include 'header.php';

switch ($area) {
    case "0088 - SMART ERP":
     $flag_boton = "enabled";
      break;
    case "0013 - FINANCIERO":
        $flag_boton = "enabled";
      break;
    case "0014 - FP&A":
        $flag_boton = "enabled";
      break;
      case "0034 - TI - SOLUCIONES CORPORA":
        $flag_boton = "enabled";
      break;
    default:
    $flag_boton = "disabled";
  }

?>
<?php 
	//session_start();
	if(isset($_SESSION['message'])){
		?>
<script type="text/javascript">
Swal.fire(
  'Tunqui Corporate',
  '<?php echo $_SESSION['message']; ?>',
  'success'
)
</script>
		<?php
		unset($_SESSION['message']);
	}
?>
<link href="../public/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
  <link href="../public/datatables/css/buttons.dataTables.min.css" rel="stylesheet">
	<!-- Breadcomb area Start-->
	<div class="breadcomb-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="breadcomb-list">
						<div class="row">
                       
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<div class="breadcomb-wp">
									<div class="breadcomb-icon">
										<i class="notika-icon notika-windows"></i>
									</div>
									<div class="breadcomb-ctn">
										<h2>Maestro Facturación Corporativa - AR</h2>
									
                                        <button type="button" class="btn btn-round"data-toggle="modal" data-target="#exampleModal">
<img src="../public/imagenes/user-interface.png" width="50" height="50" />
</button>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
								<div class="breadcomb-report">
									<button data-toggle="tooltip" data-placement="left" title="Download Report" class="btn"><i class="notika-icon notika-sent"></i></button>
								</div>
							</div>
                           
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Breadcomb area End-->
    <!-- Data Table area Start-->
    <div class="data-table-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="data-table-list">
                        <div class="basic-tb-hd">
                      
                            <p>La información que se muestra a continuación, corresponde a solicitudes pendientes de facturar en AR.</p>
                        </div>
                        <div class="table-responsive">
                            <table id="example" class="table table-striped">
                                <thead>
                                    <tr>
                                    <th style="background-color:#0063AE;;color:#FFFFFF;">#</th>
                                    <th style="background-color:#0063AE;;color:#FFFFFF;">FACTURACION</th>
                                    <th style="background-color:#0063AE;;color:#FFFFFF;">REGULARIZAR DEUDA</th>
                                    <th style="background-color:#0063AE;;color:#FFFFFF;">PDF RECEPCION CE</th>
                                    <th style="background-color:#0063AE;;color:#FFFFFF;">TIPO EMISION CE</th>
                                    <th style="background-color:#0063AE;;color:#FFFFFF;">CLIENTE_CORPORATIVO</th>
                                    <th style="background-color:#0063AE;;color:#FFFFFF;">TIPO_DE_CODIGO</th>
                                    <th style="background-color:#0063AE;;color:#FFFFFF;">DESCRIPCION</th>
                                    <th style="background-color:#0063AE;;color:#FFFFFF;">CANTIDAD</th>
                                    <th style="background-color:#0063AE;;color:#FFFFFF;">PRECIO_UNITARIO</th>
                                    <th style="background-color:#0063AE;;color:#FFFFFF;">IMPORTE_TOTAL</th>
                                    <th style="background-color:#0063AE;;color:#FFFFFF;">MONEDA</th>
                                    <th style="background-color:#0063AE;;color:#FFFFFF;">FORMA_DE_PAGO</th>
                                    <th style="background-color:#0063AE;;color:#FFFFFF;">FECHA_CIERRE_NEGOCIACION</th>
                                    <th style="background-color:#FFA743;;color:#FFFFFF;">NRO_TRANSACCION_AR</th>
                                    <th style="background-color:#FFA743;;color:#FFFFFF;">FECHA_EMISION_AR</th>
                                    <th style="background-color:#FFA743;;color:#FFFFFF;">NRO_COMPROBANTE_AR</th>
                                    <th style="background-color:#FFA743;;color:#FFFFFF;">OSE</th>
                                    <th style="background-color:#FFA743;;color:#FFFFFF;">LINK_PDF</th>
                                    <th style="background-color:#FFA743;;color:#FFFFFF;">COMENTARIO</th>
                                    <th style="background-color:#FF4943;;color:#FFFFFF;">FECHA_VENCIMIENTO_INVOICE</th>
                                    <th style="background-color:#FFA743;;color:#FFFFFF;">IMPORTE_PENDIENTE_PAGO</th>
                                    <th style="background-color:#FFA743;;color:#FFFFFF;">ESTADO</th>
                                    <th style="background-color:#FF7343;;color:#FFFFFF;">USUARIO_SOLICITANTE</th>
                                    <th style="background-color:#43BDFF ;;color:#FFFFFF;">USUARIO_FACTURADOR</th>
                                    <th style="background-color:#43BDFF ;color:#FFFFFF;">FECHA_FACTURACION_SISTEMA</th>
                                    <th style="background-color:#FF7343;;color:#FFFFFF;">FECHA_CREACION</th>

                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                try{	
                                $sql = "SELECT ID_FACTURACION,
                                CLIENTE_CORPORATIVO,
                                TIPO_DE_CODIGO,
                                DESCRIPCION,
                                CANTIDAD,
                                PRECIO_UNITARIO,
                                IMPORTE_TOTAL,
                                MONEDA,
                                FORMA_DE_PAGO,
                                FECHA_CIERRE_NEGOCIACION,
                                NRO_TRANSACCION_AR,
                                FECHA_EMISION_AR,
                                NRO_COMPROBANTE_AR,
                                LINK_PDF,
                                COMENTARIO,
                                FECHA_VENCIMIENTO_INVOICE,
                                IMPORTE_PENDIENTE_PAGO,
                                
                                ESTADO,
                                USUARIO_SOLICITANTE,
                                USUARIO_FACTURADOR,
                                FECHA_FACTURACION_SISTEMA,
                                FECHA_CREACION,TIPO_EMISION_CE,PROCEDIMIENTO_EMISION_CE,ESTADO_OSE 
                                FROM SALES_CORPORATE.[CLIENTE].[FACTURACION_CORPORATIVA]  WHERE ESTADO='PENDIENTE DE FACTURACION'
                                ";
                                foreach ($db->query($sql) as $row) {
                                    $variable = $row['ESTADO'];
                                    switch ($variable) {
                                    case "PENDIENTE DE FACTURACION":
                                        $color_tabla = "#10BEBB ";
                                        break;
                                    default:
                                        $color_tabla = "#15BE10 ";
                                    }

                                    $tipo_customer = $row['TIPO_EMISION_CE'];

                                    switch ($tipo_customer) {
                                        case "PARTICULAR":
                                        $variable_pdf = "enabled";
                                          break;
                                        default:
                                        $variable_pdf = "disabled";
                                      }


                                      $status_ose = $row['ESTADO_OSE'];

                                      switch ($status_ose) {
                                          case "Documento aceptado por la OSE":
                                          $variable_ose = "enabled";
                                            break;
                                          default:
                                          $variable_ose = "disabled";
                                        }

					                     ?>

                                    <tr>
                                    <td style="background-color:<?php echo $color_tabla?>;color:#FFFFFF;" ><?php echo $row['ID_FACTURACION']; ?></td>
                                    <td style="background-color:<?php echo $color_tabla?>;color:#FFFFFF;"><a href="#editt_<?php echo $row['ID_FACTURACION']; ?>" class="btn btn-danger btn-sm " data-toggle="modal" <?php echo $flag_boton;?>><i class="fa fa-file-pdf-o" aria-hidden="true"></i> FACTURAR</td>
                                    <td style="background-color:<?php echo $color_tabla?>;color:#FFFFFF;"><a href="#deuda_<?php echo $row['ID_FACTURACION']; ?>" class="btn btn-danger btn-sm " data-toggle="modal" <?php echo $flag_boton;?>><i class="fa fa-cc-visa" aria-hidden="true"></i>REGULARIZAR DEUDA</td>
                                    <td style="background-color:<?php echo $color_tabla?>;color:#FFFFFF;"><a href="../public/procedimientos/<?php echo $row['PROCEDIMIENTO_EMISION_CE']; ?>" class="btn btn-danger" <?php echo $variable_pdf;?> target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> VER PROCEDIMIENTO</a></td>
                                    <td style="background-color:<?php echo $color_tabla?>;color:#FFFFFF;"><?php echo $row['TIPO_EMISION_CE']; ?></td>             
                                    <td style="background-color:<?php echo $color_tabla?>;color:#FFFFFF;"><?php echo $row['CLIENTE_CORPORATIVO']; ?></td>
                                    <td style="background-color:<?php echo $color_tabla?>;color:#FFFFFF;"><?php echo $row['TIPO_DE_CODIGO']; ?></td>
                                    <td style="background-color:<?php echo $color_tabla?>;color:#FFFFFF;"><?php echo $row['DESCRIPCION']; ?></td>
                                    <td style="background-color:<?php echo $color_tabla?>;color:#FFFFFF;"><?php echo $row['CANTIDAD']; ?></td>
                                    <td style="background-color:<?php echo $color_tabla?>;color:#FFFFFF;"><?php echo $row['PRECIO_UNITARIO']; ?></td>
                                    <td style="background-color:<?php echo $color_tabla?>;color:#FFFFFF;"><?php echo $row['IMPORTE_TOTAL']; ?></td>
                                    <td style="background-color:<?php echo $color_tabla?>;color:#FFFFFF;"><?php echo $row['MONEDA']; ?></td>
                                    <td style="background-color:<?php echo $color_tabla?>;color:#FFFFFF;"><?php echo $row['FORMA_DE_PAGO']; ?></td>
                                    <td style="background-color:<?php echo $color_tabla?>;color:#FFFFFF;"><?php echo $row['FECHA_CIERRE_NEGOCIACION']; ?></td>
                                    <td style="background-color:<?php echo $color_tabla?>;color:#FFFFFF;"><?php echo $row['NRO_TRANSACCION_AR']; ?></td>
                                    <td style="background-color:<?php echo $color_tabla?>;color:#FFFFFF;"><?php echo $row['FECHA_EMISION_AR']; ?></td>
                                    <td style="background-color:<?php echo $color_tabla?>;color:#FFFFFF;"><?php echo $row['NRO_COMPROBANTE_AR']; ?></td>
                                    <td style="background-color:<?php echo $color_tabla?>;color:#FFFFFF;"><?php echo $row['ESTADO_OSE']; ?></td>
                                    <td style="background-color:<?php echo $color_tabla?>;color:#FFFFFF;"><a href="<?php echo $row['LINK_PDF']; ?>"target="_blank" disabled><img src="../public/imagenes/pdf.png" width="40" height="50" disabled/></a></td>
                                    <td style="background-color:<?php echo $color_tabla?>;color:#FFFFFF;"><?php echo $row['COMENTARIO']; ?></td>
                                    <td style="background-color:#43AAFF ;;color:#FFFFFF;"><?php echo $row['FECHA_VENCIMIENTO_INVOICE']; ?></td>
                                    <td><?php echo $row['IMPORTE_PENDIENTE_PAGO']; ?></td>
                                    <td><?php echo $row['ESTADO']; ?></td>
                                    <td><?php echo $row['USUARIO_SOLICITANTE']; ?></td>
                                    <td><?php echo $row['USUARIO_FACTURADOR']; ?></td>
                                    <td><?php echo $row['FECHA_FACTURACION_SISTEMA']; ?></td>
                                    <td><?php echo $row['FECHA_CREACION']; ?></td>
                                    </tr>
                                    <?php 
                                    include '../modal/facturar_ar.php';
                                    include '../modal/deuda.php';
                                        }
                                    }
                                    catch(PDOException $e){
                                        echo "Hubo un problema en la conexión: " . $e->getMessage();
                                    }

                                
                                      ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                    <th style="background-color:#0063AE;;color:#FFFFFF;">#</th>
                                    <th style="background-color:#0063AE;;color:#FFFFFF;">FACTURACION</th>
                                    <th style="background-color:#0063AE;;color:#FFFFFF;">REGULARIZAR DEUDA</th>
                                    <th style="background-color:#0063AE;;color:#FFFFFF;">PDF RECEPCION CE</th>
                                    <th style="background-color:#0063AE;;color:#FFFFFF;">TIPO EMISION CE</th>
                                    <th style="background-color:#0063AE;;color:#FFFFFF;">CLIENTE_CORPORATIVO</th>
                                    <th style="background-color:#0063AE;;color:#FFFFFF;">TIPO_DE_CODIGO</th>
                                    <th style="background-color:#0063AE;;color:#FFFFFF;">DESCRIPCION</th>
                                    <th style="background-color:#0063AE;;color:#FFFFFF;">CANTIDAD</th>
                                    <th style="background-color:#0063AE;;color:#FFFFFF;">PRECIO_UNITARIO</th>
                                    <th style="background-color:#0063AE;;color:#FFFFFF;">IMPORTE_TOTAL</th>
                                    <th style="background-color:#0063AE;;color:#FFFFFF;">MONEDA</th>
                                    <th style="background-color:#0063AE;;color:#FFFFFF;">FORMA_DE_PAGO</th>
                                    <th style="background-color:#0063AE;;color:#FFFFFF;">FECHA_CIERRE_NEGOCIACION</th>
                                    <th style="background-color:#FFA743;;color:#FFFFFF;">NRO_TRANSACCION_AR</th>
                                    <th style="background-color:#FFA743;;color:#FFFFFF;">FECHA_EMISION_AR</th>
                                    <th style="background-color:#FFA743;;color:#FFFFFF;">NRO_COMPROBANTE_AR</th>
                                    <th style="background-color:#FFA743;;color:#FFFFFF;">OSE</th>
                                    <th style="background-color:#FFA743;;color:#FFFFFF;">LINK_PDF</th>
                                    <th style="background-color:#FFA743;;color:#FFFFFF;">COMENTARIO</th>
                                    <th style="background-color:#FF4943;;color:#FFFFFF;">FECHA_VENCIMIENTO_INVOICE</th>
                                    <th style="background-color:#FFA743;;color:#FFFFFF;">IMPORTE_PENDIENTE_PAGO</th>
                                    <th style="background-color:#FFA743;;color:#FFFFFF;">ESTADO</th>
                                    <th style="background-color:#FF7343;;color:#FFFFFF;">USUARIO_SOLICITANTE</th>
                                    <th style="background-color:#43BDFF ;;color:#FFFFFF;">USUARIO_FACTURADOR</th>
                                    <th style="background-color:#43BDFF ;color:#FFFFFF;">FECHA_FACTURACION_SISTEMA</th>
                                    <th style="background-color:#FF7343;;color:#FFFFFF;">FECHA_CREACION</th>

                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Data Table area End-->
   <?php
   include 'footer.php';
   include '../modal/create_invoice.php';
   ?>
   <script src="../public/datatables/js/jquery-3.5.1.js"></script>
    <script src="../public/datatables/js/jquery.dataTables.min.js"></script>
    <script src="../public/datatables/js/dataTables.buttons.min.js"></script>
    <script src="../public/datatables/js/jszip.min.js"></script>
    <script src="../public/datatables/js/pdfmake.min.js"></script>
    <script src="../public/datatables/js/vfs_fonts.js"></script>
    <script src="../public/datatables/js/buttons.html5.min.js"></script>
    <script>
 $(document).ready(function() {
    $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'excelHtml5'
        ]
    } );
} );
</script>
