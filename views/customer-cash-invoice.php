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
                       
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="breadcomb-wp">
									<div class="breadcomb-icon">
										<i class="notika-icon notika-windows"></i>
									</div>
									<div class="breadcomb-ctn">
										<h2>Generar informe de pagos realizados por Clientes Corporativos</h2>
									</div>
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
                            <button type="submit" class="btn btn-success"> <i class="fa fa-search" aria-hidden="true"></i> Visualizar Informe</button>
                            </form>
                        </div>
                        <div class="table-responsive">
                            <table id="example" class="table table-striped">
                                <thead>
                                    <tr>
                                    <th style="background-color:#0063AE;;color:#FFFFFF;">ESTADO_DEUDA</th>
                                    <th style="background-color:#0063AE;;color:#FFFFFF;">NRO_TRANSACCION_AR</th>
                                    <th style="background-color:#0063AE;;color:#FFFFFF;">NRO_COMPROBANTE</th>
<th style="background-color:#0063AE;;color:#FFFFFF;">FECHA_PAGO</th>
<th style="background-color:#0063AE;;color:#FFFFFF;">FECHA_VENCIMIENTO_INVOICE</th>
<th style="background-color:#0063AE;;color:#FFFFFF;">FORMA_DE_PAGO</th>
<th style="background-color:#0063AE;;color:#FFFFFF;">IMPORTE_PAGADO</th>
<th style="background-color:#0063AE;;color:#FFFFFF;">IMPORTE_ORIGINAL</th>
<th style="background-color:#0063AE;;color:#FFFFFF;">CLIENTE_CORPORATIVO</th>
<th style="background-color:#0063AE;;color:#FFFFFF;">DESCRIPCION</th>
<th style="background-color:#0063AE;;color:#FFFFFF;">CANTIDAD</th>
<th style="background-color:#0063AE;;color:#FFFFFF;">PRECIO_UNITARIO</th>
<th style="background-color:#0063AE;;color:#FFFFFF;">IMPORTE_TOTAL</th>
<th style="background-color:#0063AE;;color:#FFFFFF;">FECHA_CIERRE_NEGOCIACION</th>
<th style="background-color:#0063AE;;color:#FFFFFF;">FECHA_EMISION_AR</th>
<th style="background-color:#0063AE;;color:#FFFFFF;">LINK_PDF</th>
<th style="background-color:#0063AE;;color:#FFFFFF;">IMPORTE_PENDIENTE_PAGO</th>
<th style="background-color:#0063AE;;color:#FFFFFF;">USUARIO_SOLICITANTE</th>
<th style="background-color:#0063AE;;color:#FFFFFF;">USUARIO_FACTURADOR</th>

                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                try{	
                                $sql = "SELECT T2.ESTADO_DEUDA,T2.NRO_TRANSACCION_AR,T2.NRO_COMPROBANTE_AR,T1.FECHA_PAGO,t2.FECHA_VENCIMIENTO_INVOICE,t2.FORMA_DE_PAGO,T1.IMPORTE_PAGADO,T1.IMPORTE_ORIGINAL,T2.CLIENTE_CORPORATIVO,T2.DESCRIPCION,T2.CANTIDAD,T2.PRECIO_UNITARIO,T2.IMPORTE_TOTAL,T2.FECHA_CIERRE_NEGOCIACION,T2.FECHA_EMISION_AR,T2.LINK_PDF,
                                T2.IMPORTE_PENDIENTE_PAGO,T2.USUARIO_SOLICITANTE,T2.USUARIO_FACTURADOR FROM SALES_CORPORATE.CLIENTE.FACTURACION_INVOICE_PAGADAS T1 LEFT JOIN SALES_CORPORATE.CLIENTE.FACTURACION_CORPORATIVA T2
                                ON T1.ID_FACTURA = T2.ID_FACTURACION WHERE T1.FECHA_PAGO BETWEEN '$fecha_inicio' AND '$fecha_fin'";
                                foreach ($db->query($sql) as $row) {
 

					                     ?>

                                    <tr>
                                    <td><?php echo $row['ESTADO_DEUDA']; ?></td>
                                    <td><?php echo $row['NRO_TRANSACCION_AR']; ?></td>
                                    <td><?php echo $row['NRO_COMPROBANTE_AR']; ?></td>
                                    <td style="background-color:#10AB00;color:#FFFFFF;"><?php echo $row['FECHA_PAGO']; ?></td>
                                    <td><?php echo $row['FECHA_VENCIMIENTO_INVOICE']; ?></td>
                                    <td><?php echo $row['FORMA_DE_PAGO']; ?></td>
                                    <td style="background-color:#10AB00;color:#FFFFFF;"><?php echo $row['IMPORTE_PAGADO']; ?></td>
                                    <td><?php echo $row['IMPORTE_ORIGINAL']; ?></td>
                                    <td><?php echo $row['CLIENTE_CORPORATIVO']; ?></td>
                                    <td><?php echo $row['DESCRIPCION']; ?></td>
                                    <td><?php echo $row['CANTIDAD']; ?></td>
                                    <td><?php echo $row['PRECIO_UNITARIO']; ?></td>
                                    <td><?php echo $row['IMPORTE_TOTAL']; ?></td>
                                    <td><?php echo $row['FECHA_CIERRE_NEGOCIACION']; ?></td>
                                    <td><?php echo $row['FECHA_EMISION_AR']; ?></td>
                                    <td><?php echo $row['LINK_PDF']; ?></td>
                                    <td><?php echo $row['IMPORTE_PENDIENTE_PAGO']; ?></td>
                                    <td><?php echo $row['USUARIO_SOLICITANTE']; ?></td>
                                    <td><?php echo $row['USUARIO_FACTURADOR']; ?></td>


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
                                    <th style="background-color:#0063AE;;color:#FFFFFF;">ESTADO_DEUDA</th>
                                    <th style="background-color:#0063AE;;color:#FFFFFF;">NRO_TRANSACCION_AR</th>
                                    <th style="background-color:#0063AE;;color:#FFFFFF;">NRO_COMPROBANTE</th>
<th style="background-color:#0063AE;;color:#FFFFFF;">FECHA_PAGO</th>
<th style="background-color:#0063AE;;color:#FFFFFF;">FECHA_VENCIMIENTO_INVOICE</th>
<th style="background-color:#0063AE;;color:#FFFFFF;">FORMA_DE_PAGO</th>
<th style="background-color:#0063AE;;color:#FFFFFF;">IMPORTE_PAGADO</th>
<th style="background-color:#0063AE;;color:#FFFFFF;">IMPORTE_ORIGINAL</th>
<th style="background-color:#0063AE;;color:#FFFFFF;">CLIENTE_CORPORATIVO</th>
<th style="background-color:#0063AE;;color:#FFFFFF;">DESCRIPCION</th>
<th style="background-color:#0063AE;;color:#FFFFFF;">CANTIDAD</th>
<th style="background-color:#0063AE;;color:#FFFFFF;">PRECIO_UNITARIO</th>
<th style="background-color:#0063AE;;color:#FFFFFF;">IMPORTE_TOTAL</th>
<th style="background-color:#0063AE;;color:#FFFFFF;">FECHA_CIERRE_NEGOCIACION</th>
<th style="background-color:#0063AE;;color:#FFFFFF;">FECHA_EMISION_AR</th>
<th style="background-color:#0063AE;;color:#FFFFFF;">LINK_PDF</th>
<th style="background-color:#0063AE;;color:#FFFFFF;">IMPORTE_PENDIENTE_PAGO</th>
<th style="background-color:#0063AE;;color:#FFFFFF;">USUARIO_SOLICITANTE</th>
<th style="background-color:#0063AE;;color:#FFFFFF;">USUARIO_FACTURADOR</th>

                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br><br><br><br><br><br><br><br><br>
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
