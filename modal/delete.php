<div class="modal fade" id="delete_<?php echo $row['ID_FACTURACION']; ?>"  tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title" id="exampleModalLongTitle">ELIMINAR FACTURA: <?php echo $row['CLIENTE_CORPORATIVO']; ?> - Id # <?php echo $row['ID_FACTURACION']; ?> <br>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="../controlador/delete_invoice.php?id=<?php echo $row['ID_FACTURACION']; ?>" method="post">
  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputEmail4"># ESTADO DE LA FACTURACIÓN:</label>
      <input type="text" style="background-color:#0A82FA;color:#FFFFFF;" class="form-control" name="ESTADO_DEUDA" value="<?php echo $row['ESTADO_DEUDA']; ?>">
    </div>
  </div>



  <button type="submit" name="editar" <?php echo $flag_boton;?> class="btn btn-success"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Eliminar</button>
  <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times-circle" aria-hidden="true"></i>Close</button>
</form>
      </div>
      <div class="modal-footer">
      <small>Usuario: <?php echo $nombres?></small>
      </div>
    </div>
  </div>
</div>


