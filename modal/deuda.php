<?PHP
error_reporting(0);
?>
<div class="modal fade" id="deuda_<?php echo $row['ID_FACTURACION']; ?>"  tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">DEUDA PENDIENTE <strong>(DEUDA S/. <?php echo $row['IMPORTE_TOTAL']; ?>)</strong> | CLIENTE CORPORATIVO : <?php echo $row['CLIENTE_CORPORATIVO']; ?><br>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="../controlador/regularizar_deuda.php?id=<?php echo $row['ID_FACTURACION']; ?>" method="post">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputPassword4">FECHA DE PAGO Y/O DEPÓSITO</label>
      <input type="date" class="form-control" name ="FECHA_PAGO_FACTURA_CORPORATIVA"   value="<?php echo $row['FECHA_PAGO_FACTURA_CORPORATIVA'];?>"  required>
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">IMPORTE_PENDIENTE_PAGO</label>
      <input type="text" name="IMPORTE_PENDIENTE_PAGO" value="<?php echo $row['IMPORTE_PENDIENTE_PAGO'];?>" placeholder="Importe" class="form-control" required>
    </div>

  </div>

  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputCity">FORMA DE PAGO (REGULARICIÓN DE DEUDA)</label>
      <select name="FORMA_PAGO_DEUDA" class="form-control" required>
  <option value="">Seleccione:</option>
  <option value="TRANSFERENCIA INTERBANCARIA">TRANSFERENCIA INTERBANCARIA</option>
  <option value="DEPOSITO EN CUENTA">DEPOSITO EN CUENTA</option>
  <option value="PLIN">Plin</option>
  <option value="YAPE">Yape</option>
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


