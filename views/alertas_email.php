<?php
include 'header.php';
error_reporting(0);

$fecha_inicio = $_GET["fecha_inicio"];
$fecha_fin = $_GET["fecha_fin"];

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
										<h2>Monitor de Alertas a Clientes Corporativos</h2>
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
                      
                        <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="get">
    <div>
    <label for="uname">Fecha Inicio: </label> <input type="date" name="fecha_inicio" required>
    <label for="uname">Fecha Fin: </label>  <input type="date"   name="fecha_fin" required>
  </div>
  <br>
                            <button type="submit" class="btn btn-success"> <i class="fa fa-search" aria-hidden="true"></i> Visualizar Alertas</button>
                            </form>
                        </div>
                        <div class="table-responsive">
                            <table id="example" class="table table-striped">
                                <thead>
                                    <tr>
                                    <th style="background-color:#0063AE;;color:#FFFFFF;">ID_ALERTA</th>
                                    <th style="background-color:#0063AE;;color:#FFFFFF;">ID_FACTURACION</th>
<th style="background-color:#0063AE;;color:#FFFFFF;">CLIENTE_CORPORATIVO</th>
<th style="background-color:#0063AE;;color:#FFFFFF;">EMAIL_TESORERIA</th>
<th style="background-color:#0063AE;;color:#FFFFFF;">LINK_PDF</th>
<th style="background-color:#0063AE;;color:#FFFFFF;">NRO_TRANSACCION_AR</th>
<th style="background-color:#0063AE;;color:#FFFFFF;">NRO_COMPROBANTE_AR</th>
<th style="background-color:#0063AE;;color:#FFFFFF;">IMPORTE_TOTAL</th>
<th style="background-color:#0063AE;;color:#FFFFFF;">IMPORTE_PAGADO</th>
<th style="background-color:#0063AE;;color:#FFFFFF;">IMPORTE_PENDIENTE_PAGO</th>
<th style="background-color:#0063AE;;color:#FFFFFF;">FECHA_VENCIMIENTO_INVOICE</th>
<th style="background-color:#0063AE;;color:#FFFFFF;">FECHA_EMISION_AR</th>
<th style="background-color:#0063AE;;color:#FFFFFF;">ESTADO_DE_FACTURA</th>
<th style="background-color:#0063AE;;color:#FFFFFF;">FECHA_ENVIO_ALERTA</th>

                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                try{	
                                $sql = "SELECT ID_ALERTA,T2.ID_FACTURACION,T2.CLIENTE_CORPORATIVO,T2.EMAIL_VARIOS EMAIL_TESORERIA,LINK_PDF,NRO_TRANSACCION_AR,NRO_COMPROBANTE_AR,t2.IMPORTE_TOTAL,isnull(t2.IMPORTE_PAGADO,0) IMPORTE_PAGADO,t2.IMPORTE_PENDIENTE_PAGO,FECHA_EMISION_AR,FECHA_VENCIMIENTO_INVOICE,ESTADO_DE_FACTURA,T1.FECHA_CREACION FECHA_ENVIO FROM SALES_CORPORATE.EMAIL.ALERTAS_EMAIL T1
                                LEFT JOIN SALES_CORPORATE.CLIENTE.FACTURACION_CORPORATIVA T2
                                ON T1.ID_FACTURA = T2.ID_FACTURACION WHERE CONVERT(date,T1.FECHA_CREACION) BETWEEN '$fecha_inicio' AND '$fecha_fin'
                                ";
                                foreach ($db->query($sql) as $row) {
 

					                     ?>

                                    <tr>
                                    <td><?php echo $row['ID_ALERTA']; ?></td>
                                    <td><?php echo $row['ID_FACTURACION']; ?></td>
                                    
                                    <td><?php echo $row['CLIENTE_CORPORATIVO']; ?></td>
                                    <td><?php echo $row['EMAIL_TESORERIA']; ?></td>
                                    <td><?php echo $row['LINK_PDF']; ?></td>
                                    <td><?php echo $row['NRO_TRANSACCION_AR']; ?></td>
                                    <td><?php echo $row['NRO_COMPROBANTE_AR']; ?></td>
                                    <td><?php echo number_format($row['IMPORTE_TOTAL'],2); ?></td>
                                    <td><?php echo number_format($row['IMPORTE_PAGADO'],2); ?></td>
                                    <td><?php echo number_format($row['IMPORTE_PENDIENTE_PAGO'],2); ?></td>
                                    <td><?php echo $row['FECHA_VENCIMIENTO_INVOICE']; ?></td>
                                    <td><?php echo $row['FECHA_EMISION_AR']; ?></td>
                                    <td><?php echo $row['ESTADO_DE_FACTURA']; ?></td>
                                    <td><?php echo $row['FECHA_ENVIO']; ?></td>

                                    </tr>
                                    <?php 
                                        }
                                    }
                                    catch(PDOException $e){
                                        echo "Hubo un problema en la conexión: " . $e->getMessage();
                                    }

                                
                                      ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                    <th style="background-color:#0063AE;;color:#FFFFFF;">ID_ALERTA</th>
                                    <th style="background-color:#0063AE;;color:#FFFFFF;">ID_FACTURACION</th>
<th style="background-color:#0063AE;;color:#FFFFFF;">CLIENTE_CORPORATIVO</th>
<th style="background-color:#0063AE;;color:#FFFFFF;">EMAIL_TESORERIA</th>
<th style="background-color:#0063AE;;color:#FFFFFF;">LINK_PDF</th>
<th style="background-color:#0063AE;;color:#FFFFFF;">NRO_TRANSACCION_AR</th>
<th style="background-color:#0063AE;;color:#FFFFFF;">NRO_COMPROBANTE_AR</th>
<th style="background-color:#0063AE;;color:#FFFFFF;">IMPORTE_TOTAL</th>
<th style="background-color:#0063AE;;color:#FFFFFF;">IMPORTE_PAGADO</th>
<th style="background-color:#0063AE;;color:#FFFFFF;">IMPORTE_PENDIENTE_PAGO</th>
<th style="background-color:#0063AE;;color:#FFFFFF;">FECHA_VENCIMIENTO_INVOICE</th>
<th style="background-color:#0063AE;;color:#FFFFFF;">FECHA_EMISION_AR</th>
<th style="background-color:#0063AE;;color:#FFFFFF;">ESTADO_DE_FACTURA</th>
<th style="background-color:#0063AE;;color:#FFFFFF;">FECHA_ENVIO_ALERTA</th>
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
