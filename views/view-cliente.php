<?php
include 'header.php';
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
										<h2>Maestro Clientes Corporativos</h2>
										<a href="consulta-ruc" class="btn btn-success active btn-round" role="button" aria-pressed="true"><i class="fa fa-user-plus" aria-hidden="true"></i> Crear Cliente Corporativo</a>
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
                        </div>
                        <div class="table-responsive">
                            <table id="example" class="table table-striped">
                                <thead>
                                    <tr>
                                    <th style="background-color:#0063AE;;color:#FFFFFF;">#</th>
                                    <th style="background-color:#0063AE;;color:#FFFFFF;">EDITAR</th>
                                    <th style="background-color:#0063AE;;color:#FFFFFF;">PROCEDIMIENTO</th>
                                    <th style="background-color:#0063AE;;color:#FFFFFF;">TIPO EMISION CE</th>
                                    <th style="background-color:#0063AE;;color:#FFFFFF;">EMPRESA_RUC</th>
                                    <th style="background-color:#0063AE;;color:#FFFFFF;">EMPRESA_RAZON_SOCIAL</th>
                                    <th style="background-color:#0063AE;;color:#FFFFFF;">EMPRESA_DIRECCION_FISCAL</th>
                                    <th style="background-color:#0063AE;;color:#FFFFFF;">EMPRESA_ESTADO</th>
                                    <th style="background-color:#0063AE;;color:#FFFFFF;">EMPRESA_CONDICION</th>
                                    <th style="background-color:#0063AE;;color:#FFFFFF;">EMPRESA_DEPARTAMENTO</th>
                                    <th style="background-color:#0063AE;;color:#FFFFFF;">EMPRESA_PROVINCIA</th>
                                    <th style="background-color:#0063AE;;color:#FFFFFF;">EMPRESA_DISTRITO</th>
                                    <th style="background-color:#0063AE;;color:#FFFFFF;">EMPRESA_UBIGEO</th>
                                    <th style="background-color:#0063AE;;color:#FFFFFF;">CONTACTO_NOMBRES</th>
                                    <th style="background-color:#0063AE;;color:#FFFFFF;">CONTACTO_APELLIDOS</th>
                                    <th style="background-color:#0063AE;;color:#FFFFFF;">CONTACTO_TELEFONO</th>
                                    <th style="background-color:#0063AE;;color:#FFFFFF;">CONTACTO_EMAIL</th>
                                    <th style="background-color:#0063AE;;color:#FFFFFF;">FACTURACION_NOMBRES</th>
                                    <th style="background-color:#0063AE;;color:#FFFFFF;">FACTURACION_APELLIDOS</th>
                                    <th style="background-color:#0063AE;;color:#FFFFFF;">FACTURACION_TELEFONO</th>
                                    <th style="background-color:#0063AE;;color:#FFFFFF;">FACTURACION_EMAIL</th>
                                    <th style="background-color:#0063AE;;color:#FFFFFF;">TESORERIA_NOMBRES</th>
                                    <th style="background-color:#0063AE;;color:#FFFFFF;">TESORERIA_APELLIDOS</th>
                                    <th style="background-color:#0063AE;;color:#FFFFFF;">TESORERIA_TELEFONO</th>
                                    <th style="background-color:#0063AE;;color:#FFFFFF;">TESORERIA_EMAIL</th>
                                    <th style="background-color:#0063AE;;color:#FFFFFF;">USUARIO_CREADOR</th>
                                    <th style="background-color:#0063AE;;color:#FFFFFF;">USUARIO_ACTUALIZADOR</th>
                                    <th style="background-color:#0063AE;;color:#FFFFFF;">ULTIMA_ACTUALIZACION</th>
                                    <th style="background-color:#0063AE;;color:#FFFFFF;">FECHA_CREACION</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                try{	
                                $sql = "SELECT ID_CORPO,
                                EMPRESA_RUC,
                                EMPRESA_RAZON_SOCIAL,
                                EMPRESA_DIRECCION_FISCAL,
                                EMPRESA_ESTADO,
                                EMPRESA_CONDICION,
                                EMPRESA_DEPARTAMENTO,
                                EMPRESA_PROVINCIA,
                                EMPRESA_DISTRITO,
                                EMPRESA_UBIGEO,
                                CONTACTO_NOMBRES,
                                CONTACTO_APELLIDOS,
                                CONTACTO_TELEFONO,
                                CONTACTO_EMAIL,
                                FACTURACION_NOMBRES,
                                FACTURACION_APELLIDOS,
                                FACTURACION_TELEFONO,
                                FACTURACION_EMAIL,
                                TESORERIA_NOMBRES,
                                TESORERIA_APELLIDOS,
                                TESORERIA_TELEFONO,
                                TESORERIA_EMAIL,
                                USUARIO_CREADOR,
                                USUARIO_ACTUALIZADOR,
                                ULTIMA_ACTUALIZACION,
                                FECHA_CREACION,PROCEDIMIENTO_EMISION_CE,TIPO_EMISION_CE FROM SALES_CORPORATE.CLIENTE.CLIENTE_CORPORATIVO
                                ";
                                foreach ($db->query($sql) as $row) {
                                $tipo_customer = $row['TIPO_EMISION_CE'];

                                    switch ($tipo_customer) {
                                        case "PARTICULAR":
                                        $variable_pdf = "enabled";
                                          break;
                                        default:
                                        $variable_pdf = "disabled";
                                      }

					                     ?>

                                    <tr>
                                    <td><?php echo $row['ID_CORPO']; ?></td>
                                    <td><a href="#edit_<?php echo $row['ID_CORPO']; ?>" class="btn btn-success btn-sm " data-toggle="modal" ><i class="fa fa-check-square-o" aria-hidden="true"></i> Actualizar Datos</td>
                                    <td><a href="../public/procedimientos/<?php echo $row['PROCEDIMIENTO_EMISION_CE']; ?>" class="btn btn-danger" <?php echo $variable_pdf;?> target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> VER PDF</a></td>
                                    <td><?php echo $row['TIPO_EMISION_CE']; ?></td>
                                    <td><?php echo $row['EMPRESA_RUC']; ?></td>
                                    <td><?php echo $row['EMPRESA_RAZON_SOCIAL']; ?></td>
                                    <td><?php echo $row['EMPRESA_DIRECCION_FISCAL']; ?></td>
                                    <td><?php echo $row['EMPRESA_ESTADO']; ?></td>
                                    <td><?php echo $row['EMPRESA_CONDICION']; ?></td>
                                    <td><?php echo $row['EMPRESA_DEPARTAMENTO']; ?></td>
                                    <td><?php echo $row['EMPRESA_PROVINCIA']; ?></td>
                                    <td><?php echo $row['EMPRESA_DISTRITO']; ?></td>
                                    <td><?php echo $row['EMPRESA_UBIGEO']; ?></td>
                                    <td><?php echo $row['CONTACTO_NOMBRES']; ?></td>
                                    <td><?php echo $row['CONTACTO_APELLIDOS']; ?></td>
                                    <td><?php echo $row['CONTACTO_TELEFONO']; ?></td>
                                    <td><?php echo $row['CONTACTO_EMAIL']; ?></td>
                                    <td><?php echo $row['FACTURACION_NOMBRES']; ?></td>
                                    <td><?php echo $row['FACTURACION_APELLIDOS']; ?></td>
                                    <td><?php echo $row['FACTURACION_TELEFONO']; ?></td>
                                    <td><?php echo $row['FACTURACION_EMAIL']; ?></td>
                                    <td><?php echo $row['TESORERIA_NOMBRES']; ?></td>
                                    <td><?php echo $row['TESORERIA_APELLIDOS']; ?></td>
                                    <td><?php echo $row['TESORERIA_TELEFONO']; ?></td>
                                    <td><?php echo $row['TESORERIA_EMAIL']; ?></td>
                                    <td style="background-color:#4398FF;;color:#FFFFFF;" ><?php echo $row['USUARIO_CREADOR']; ?></td>
                                    <td  style="background-color:#bf0909;;color:#FFFFFF;"><?php echo $row['USUARIO_ACTUALIZADOR']; ?></td>
                                    <td  style="background-color:#bf0909;;color:#FFFFFF;"><?php echo $row['ULTIMA_ACTUALIZACION']; ?></td>
                                    <td style="background-color:#4398FF;;color:#FFFFFF;"><?php echo $row['FECHA_CREACION']; ?></td>
                                    </tr>
                                    <?php 
                                    include '../modal/editar_customer.php';
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
                                    <th style="background-color:#0063AE;;color:#FFFFFF;">EDITAR</th>
                                    <th style="background-color:#0063AE;;color:#FFFFFF;">PROCEDIMIENTO</th>
                                    <th style="background-color:#0063AE;;color:#FFFFFF;">TIPO EMISION CE</th>
                                    <th style="background-color:#0063AE;;color:#FFFFFF;">EMPRESA_RUC</th>
                                    <th style="background-color:#0063AE;;color:#FFFFFF;">EMPRESA_RAZON_SOCIAL</th>
                                    <th style="background-color:#0063AE;;color:#FFFFFF;">EMPRESA_DIRECCION_FISCAL</th>
                                    <th style="background-color:#0063AE;;color:#FFFFFF;">EMPRESA_ESTADO</th>
                                    <th style="background-color:#0063AE;;color:#FFFFFF;">EMPRESA_CONDICION</th>
                                    <th style="background-color:#0063AE;;color:#FFFFFF;">EMPRESA_DEPARTAMENTO</th>
                                    <th style="background-color:#0063AE;;color:#FFFFFF;">EMPRESA_PROVINCIA</th>
                                    <th style="background-color:#0063AE;;color:#FFFFFF;">EMPRESA_DISTRITO</th>
                                    <th style="background-color:#0063AE;;color:#FFFFFF;">EMPRESA_UBIGEO</th>
                                    <th style="background-color:#0063AE;;color:#FFFFFF;">CONTACTO_NOMBRES</th>
                                    <th style="background-color:#0063AE;;color:#FFFFFF;">CONTACTO_APELLIDOS</th>
                                    <th style="background-color:#0063AE;;color:#FFFFFF;">CONTACTO_TELEFONO</th>
                                    <th style="background-color:#0063AE;;color:#FFFFFF;">CONTACTO_EMAIL</th>
                                    <th style="background-color:#0063AE;;color:#FFFFFF;">FACTURACION_NOMBRES</th>
                                    <th style="background-color:#0063AE;;color:#FFFFFF;">FACTURACION_APELLIDOS</th>
                                    <th style="background-color:#0063AE;;color:#FFFFFF;">FACTURACION_TELEFONO</th>
                                    <th style="background-color:#0063AE;;color:#FFFFFF;">FACTURACION_EMAIL</th>
                                    <th style="background-color:#0063AE;;color:#FFFFFF;">TESORERIA_NOMBRES</th>
                                    <th style="background-color:#0063AE;;color:#FFFFFF;">TESORERIA_APELLIDOS</th>
                                    <th style="background-color:#0063AE;;color:#FFFFFF;">TESORERIA_TELEFONO</th>
                                    <th style="background-color:#0063AE;;color:#FFFFFF;">TESORERIA_EMAIL</th>
                                    <th style="background-color:#0063AE;;color:#FFFFFF;">USUARIO_CREADOR</th>
                                    <th style="background-color:#0063AE;;color:#FFFFFF;">USUARIO_ACTUALIZADOR</th>
                                    <th style="background-color:#0063AE;;color:#FFFFFF;">ULTIMA_ACTUALIZACION</th>
                                    <th style="background-color:#0063AE;;color:#FFFFFF;">FECHA_CREACION</th>
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
