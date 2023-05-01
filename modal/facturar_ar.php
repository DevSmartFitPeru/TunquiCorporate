<div class="modal fade" id="editt_<?php echo $row['ID_FACTURACION']; ?>"  tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">FACTURAR CLIENTE CORPORATIVO: <?php echo $row['CLIENTE_CORPORATIVO']; ?><br>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="../controlador/update_facturacion.php?id=<?php echo $row['ID_FACTURACION']; ?>" method="post">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">NRO_TRANSACCION_AR:</label>
      <input type="text" class="form-control" name="NRO_TRANSACCION_AR" value="<?php echo $row['NRO_TRANSACCION_AR']; ?>" placeholder="NRO_TRANSACCION_AR" >
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">FECHA EMISION AR</label>
      <input type="date" class="form-control" name ="FECHA_EMISION_AR"   value="<?php echo $row['FECHA_EMISION_AR']; ?>" placeholder="Fecha emision" >
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">NRO_COMPROBANTE_AR</label>
      <input type="text" name="NRO_COMPROBANTE_AR" value="<?php echo $row['NRO_COMPROBANTE_AR'];?>" placeholder="# documento fiscal" class="form-control">
    </div>
    <div class="form-group col-md-6">
      <label for="inputState">LINK PDF:</label>
      <input type="text" name="LINK_PDF" value="<?php echo $row['LINK_PDF'];?>" class="form-control" placeholder="URL PDF" >
    </div>

  </div>

  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputCity">COMENTARIO</label>
      <input type="text" name="COMENTARIO" value="<?php echo $row['COMENTARIO'];?>" class="form-control"  placeholder="Comentario" required>
      <input type="hidden" name="USUARIO_FACTURADOR" value="<?php echo $nombres;?>" class="form-control" required>
      <input type="hidden" name="FORMA_DE_PAGO" value="<?php echo $row['FORMA_DE_PAGO'];?>" class="form-control" required>
    </div>
  </div>

  <button type="submit" name="editar" <?php echo $flag_boton;?> class="btn btn-success">Procesar Datos Fiscales</button>
  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
</form>
      </div>
      <div class="modal-footer">
      <small>Usuario: <?php echo $nombres?></small>
      </div>
    </div>
  </div>
</div>


