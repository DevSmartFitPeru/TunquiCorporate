<?php
    include 'header.php';

error_reporting(0);
$fecha_inicio = $_GET["fecha_inicio"];
$fecha_fin = $_GET["fecha_fin"];
    
?>

<link href="../public/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
  <link href="../public/datatables/css/buttons.dataTables.min.css" rel="stylesheet">
	<!-- Breadcomb area End-->
    <div class="data-table-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="data-table-list">
                        <div class="basic-tb-hd">
                            <h2>Transacciones por Fecha de Emision AR</h2>
                        
    
                            <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="get">
    <div>
    <label for="uname">Fecha Inicio: </label> <input type="date" name="fecha_inicio" required>
    <label for="uname">Fecha Fin: </label>  <input type="date"   name="fecha_fin" required>
  </div>
  <br>
                            <button type="submit" class="btn btn-danger"> <i class="fa fa-search" aria-hidden="true"></i> Buscar Transacciones</button>
                            </form>
                            
                        </div>
                        <div class="table-responsive">
  
    <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
            <th>ID_FACTURACION</th>
            <th>CLIENTE_CORPORATIVO</th>
            <th>TIPO_DE_CODIGO</th>
            <th>DESCRIPCION</th>
            <th>CANTIDAD</th>
            <th>PRECIO_UNITARIO</th>
            <th>IMPORTE_TOTAL</th>
            <th>MONEDA</th>
            <th>FORMA_DE_PAGO</th>
            <th>FECHA_CIERRE_NEGOCIACION</th>
            <th>NRO_TRANSACCION_AR</th>
            <th>FECHA_EMISION_AR</th>
            <th>NRO_COMPROBANTE_AR</th>
            <th>LINK_PDF</th>
            <th>COMENTARIO</th>
            <th>FECHA_VENCIMIENTO_INVOICE</th>
            <th>IMPORTE_PENDIENTE_PAGO</th>
            <th>ESTADO</th>
            <th>USUARIO_SOLICITANTE</th>
            <th>USUARIO_FACTURADOR</th>
            <th>FECHA_FACTURACION_SISTEMA</th>
            <th>FECHA_CREACION</th>


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
                                FECHA_CREACION
                                 FROM SALES_CORPORATE.CLIENTE.FACTURACION_CORPORATIVA WHERE FECHA_EMISION_AR BETWEEN '$fecha_inicio' AND '$fecha_fin'";
                                foreach ($db->query($sql) as $row) {
					                     ?>
            <tr>
                                <td><?php echo $row['ID_FACTURACION']; ?></td>
                                <td><?php echo $row['CLIENTE_CORPORATIVO']; ?></td>
                                <td><?php echo $row['TIPO_DE_CODIGO']; ?></td>
                                <td><?php echo $row['DESCRIPCION']; ?></td>
                                <td><?php echo $row['CANTIDAD']; ?></td>
                                <td><?php echo $row['PRECIO_UNITARIO']; ?></td>
                                <td><?php echo $row['IMPORTE_TOTAL']; ?></td>
                                <td><?php echo $row['MONEDA']; ?></td>
                                <td><?php echo $row['FORMA_DE_PAGO']; ?></td>
                                <td><?php echo $row['FECHA_CIERRE_NEGOCIACION']; ?></td>
                                <td><?php echo $row['NRO_TRANSACCION_AR']; ?></td>
                                <td><?php echo $row['FECHA_EMISION_AR']; ?></td>
                                <td><?php echo $row['NRO_COMPROBANTE_AR']; ?></td>
                                <td><?php echo $row['LINK_PDF']; ?></td>
                                <td><?php echo $row['COMENTARIO']; ?></td>
                                <td><?php echo $row['FECHA_VENCIMIENTO_INVOICE']; ?></td>
                                <td><?php echo $row['IMPORTE_PENDIENTE_PAGO']; ?></td>
                                <td><?php echo $row['ESTADO']; ?></td>
                                <td><?php echo $row['USUARIO_SOLICITANTE']; ?></td>
                                <td><?php echo $row['USUARIO_FACTURADOR']; ?></td>
                                <td><?php echo $row['FECHA_FACTURACION_SISTEMA']; ?></td>
                                <td><?php echo $row['FECHA_CREACION']; ?></td>
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
            <th>ID_FACTURACION</th>
            <th>CLIENTE_CORPORATIVO</th>
            <th>TIPO_DE_CODIGO</th>
            <th>DESCRIPCION</th>
            <th>CANTIDAD</th>
            <th>PRECIO_UNITARIO</th>
            <th>IMPORTE_TOTAL</th>
            <th>MONEDA</th>
            <th>FORMA_DE_PAGO</th>
            <th>FECHA_CIERRE_NEGOCIACION</th>
            <th>NRO_TRANSACCION_AR</th>
            <th>FECHA_EMISION_AR</th>
            <th>NRO_COMPROBANTE_AR</th>
            <th>LINK_PDF</th>
            <th>COMENTARIO</th>
            <th>FECHA_VENCIMIENTO_INVOICE</th>
            <th>IMPORTE_PENDIENTE_PAGO</th>
            <th>ESTADO</th>
            <th>USUARIO_SOLICITANTE</th>
            <th>USUARIO_FACTURADOR</th>
            <th>FECHA_FACTURACION_SISTEMA</th>
            <th>FECHA_CREACION</th>


            </tr>
        </tfoot>
    </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
