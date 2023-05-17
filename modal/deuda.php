<?php
include_once('../config/conexion.php');
error_reporting(0);
?>

<div class="modal fade" id="deuda_<?php echo $row['ID_FACTURACION']; ?>"  tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title" id="exampleModalLongTitle">TRANSACCIÓN | CLIENTE CORPORATIVO : <?php echo $row['CLIENTE_CORPORATIVO']; ?><br>
        <br>
        <h4 style ="color:#0A82FA"><U>TOTAL VENTA: ( S/. <?php echo number_format($row['IMPORTE_TOTAL'],2); ?>)</U><h4>
        <h4 style ="color:#0A82FA"><U>IMPORTE PAGADO: ( S/. <?php echo number_format($row['IMPORTE_PAGADO'],2); ?>)</U><h4>
        <h4 style ="color:#0A82FA"><U>DEUDA PENDIENTE: ( S/. <?php echo number_format($row['IMPORTE_PENDIENTE_PAGO'],2); ?>)</U><h4>
        <h4 style ="color:#0A82FA"><U>ESTADO DE DEUDA: ( <?php echo $row['ESTADO_DEUDA']; ?>)</U><h4>

        
        <input type="hidden" style="background-color:#0AA3FA;color:#FFFFFF;" value="<?php echo $row['IMPORTE_TOTAL']?>" id="multiplicando" onchange="restar(this.value);" class="form-control" placeholder="Importe">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="../controlador/crear_pago.php" method="post">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label >FECHA DE PAGO Y/O DEPÓSITO</label>
      <input type="date" class="form-control" name ="FECHA_PAGO"  >

      <input type="hidden" class="form-control" name ="ID_FACTURA"   value="<?php echo $row['ID_FACTURACION'];?>" >
      <input type="hidden" class="form-control" name ="IMPORTE_ORIGINAL"   value="<?php echo $row['IMPORTE_TOTAL'];?>" >

    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">IMPORTE DE PAGO</label>
      <input type="text" name="IMPORTE_PAGADO" id="multiplicador" onchange="restar(this.value);"  placeholder="Importe" class="form-control">
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputCity"><u>Histórico de Pagos Realizados:</u></label><br>
      <?php
      $variable_invoice = $row['ID_FACTURACION'];
            
                                $sql = "SELECT  ID_FACTURA,IMPORTE_PAGADO,IMPORTE_ORIGINAL,FECHA_CREACION,FECHA_PAGO  FROM SALES_CORPORATE.CLIENTE.FACTURACION_INVOICE_PAGADAS
                                 WHERE ID_FACTURA='$variable_invoice'
                                ";
                                foreach ($db->query($sql) as $row) {
                                  ?>
                              
      <small> <strong>* Fecha de Pago:</strong> <?php echo $row['FECHA_PAGO']; ?> - <strong>Importe S/. </strong> <?php echo number_format($row['IMPORTE_PAGADO'],2); ?> </small><br>

    <?php
  }
  

    ?>
    </div>
  </div>





  <button type="submit" name="editar" <?php echo $flag_boton;?> class="btn btn-success"> <i class="fa fa-money" aria-hidden="true"></i> Regularizar Deuda</button>
  <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times" aria-hidden="true"></i>Close</button>
</form>
      </div>
      <div class="modal-footer">
      <small>Usuario: <?php echo $nombres?></small>
      </div>
    </div>
  </div>
</div>


<script type="text/javascript">
function restar(){
  m1 = document.getElementById("multiplicando").value;
  m2 = document.getElementById("multiplicador").value;
  r = m1-m2;
  document.getElementById("resultado").value = r;
}


</script>
