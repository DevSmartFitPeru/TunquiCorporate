<?php
error_reporting(0);
?>

<div class="modal fade" id="deuda_<?php echo $row['ID_FACTURACION']; ?>"  tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title" id="exampleModalLongTitle">TRANSACCIÓN | CLIENTE CORPORATIVO : <?php echo $row['CLIENTE_CORPORATIVO']; ?><br>
        <br>
        <h4 style ="color:#0A82FA"><U>TOTAL VENTA: ( S/. <?php echo $row['IMPORTE_TOTAL']; ?>)</U><h4>
        <input type="text" style="background-color:#0AA3FA;color:#FFFFFF;" value="<?php echo $row['IMPORTE_TOTAL']?>" id="multiplicando" onchange="restar(this.value);" class="form-control" placeholder="Importe">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="../controlador/regularizar_deuda.php?id=<?php echo $row['ID_FACTURACION']; ?>" method="post">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label >FECHA DE PAGO Y/O DEPÓSITO</label>
      <input type="date" class="form-control" name ="FECHA_PAGO_FACTURA_CORPORATIVA"   value="<?php echo $row['FECHA_PAGO_FACTURA_CORPORATIVA'];?>" >
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">IMPORTE DE PAGO</label>
      <input type="text" name="IMPORTE_PENDIENTE_PAGO" id="multiplicador" onchange="restar(this.value);"  value="<?php echo $row['IMPORTE_PENDIENTE_PAGO'];?>" placeholder="Importe" class="form-control">
      <input type="text" style="background-color:#0A82FA;color:#FFFFFF;"  id="resultado" class="form-control" placeholder="Saldo Pendiente de Pago...">
      <small> * Saldo Pendiente de Pago</small>
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">FORMA DE PAGO</label>
      <select name="FORMA_PAGO_DEUDA" class="form-control" required>
  <option value="">Seleccione:</option>
  <option value="TRANSFERENCIA INTERBANCARIA">TRANSFERENCIA INTERBANCARIA</option>
  <option value="DEPOSITO EN CUENTA">DEPOSITO EN CUENTA</option>
  <option value="PLIN">PLIN</option>
  <option value="YAPE">YAPE</option>
</select>
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">ESTADO DE DEUDA</label>
      <select name="ESTADO" class="form-control" required>
  <option value="">Seleccione:</option>
  <option value="FACTURADO">FACTURA PAGADA</option>
  <option value="PENDIENTE DE FACTURACION">PENDIENTE DE PAGO</option>
</select>
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