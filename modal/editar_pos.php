<div class="modal fade" id="edit_<?php echo $row['ID_PAGO']; ?>"  tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Editar Registro #<?php echo $row['ID_PAGO']; ?> relacionado al AP # <?php echo $row['AP']; ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="../controlador/editar_pos.php?id=<?php echo $row['ID_PAGO']; ?>" method="post">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Codigo_Alumno:</label>
      <input type="text" class="form-control" name="CODIGO_ALUMNO" value="<?php echo $row['CODIGO_ALUMNO']; ?>" placeholder="Cod. Alumno" required>
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">AP</label>
      <input type="text" class="form-control" name ="AP"   value="<?php echo $row['AP']; ?>" placeholder="# Nro. AP" required>
      <small style="color:#FE2D01;">* Digitar el AP del Voucher de Pago</small>
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputCity">Fecha Operación</label>
      <input type="date" name="FECHA_OPERACION" value="<?php echo $row['FECHA_OPERACION'];?>" class="form-control" rrequired>
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">Marca:</label>
      <select name="MARCA_TARJETA"  value="<?php echo $row['MARCA_TARJETA'];?>" class="form-control" required>
  <option value="VISA">VISA</option>
  <option value="DINERS">DINERS</option>
  <option value="AMEX">AMEX</option>
  <option value="MASTERCARD">MASTERDCARD</option>
</select>
    </div>

    <div class="form-group col-md-4">
      <label for="inputZip">Importe:</label>
      <input type="number" class="form-control"  value="<?php echo $row['IMPORTE'];?>" name ="IMPORTE" step="any" required>
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputCity"># Pago</label>
      <input type="number" name="FRONT_ID" value="<?php echo $row['FRONT_ID'];?>" class="form-control" placeholder="# Pagamento" required>
      <small style="color:#FE2D01;"># de pago SmartSystem (POS)</small>
    </div>

  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Nombre Responsable Cobro:</label>
      <input type="text" name="RESPONSABLE_COBRO" value="<?php echo $row['RESPONSABLE_COBRO'];?>" class="form-control" placeholder="Responsable..." required>
    </div>

  </div>

  
  <div class="form-row">
    <div class="form-group col-md-2">
      <label for="inputCity">REF:</label>
      <input type="text" name="REF" class="form-control" value="<?php echo $row['REF'];?>" placeholder="REF">
    </div>

  </div>


  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputCity">Comentarios:</label>
      <input type="text" name="COMENTARIO" class="form-control" value="<?php echo $row['COMENTARIO'];?>"  placeholder="Comentarios...">
      <small style="background-color: #FE2D01;color:#ffffff;"><strong >NOTA 1:</strong> Si es un AP de PASE DIARIO que no fue registrado en smartsystem el mismo dia de la venta, en el campo <strong># Pago </strong>ingresar 0 y en comentarios detallar el motivo.</small>
    <br><small style="background-color: #0193FE;color:#ffffff;"><strong>NOTA 2:</strong> Si el cliente es de otra unidad y esta regularizando la deuda vía POS, en comentarios ingresar el codigo de la unidad Origen.</small>
    </div>

  </div>
  
  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputCity">AP Pase Diario (Obligatorio si no se tiene # de Pago en SmartSystem):</label>

      <select name="ERROR_TPV" value="<?php echo $row['ERROR_TPV'];?>"  class="form-control">
  <option value="">Seleccione:</option>
  <option value="Error SmartSystem">Error SmartSystem</option>
  <option value="Error Totem">Error Totem</option>
  <option value="No se tiene codigo de alumno">No se tiene codigo de alumno</option>
  <option value="Otro tipo de Error">Otro tipo de Error</option>
  <option value="Se nos olvido ingresar el AP el mismo dia">Se nos olvido ingresar el AP el mismo dia</option>
 
</select>
<small  style="background-color: #0397FE;color:#ffffff;">Si es un AP de PASE DIARIO que no fue registrado en smartsystem el mismo dia de la venta, indicar el sistema con error o el motivo en la lista desplegable.</small>
    </div>

  </div>


  <button type="submit" name="editar" class="btn btn-success">Editar Registro AP</button>
  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
</form>
      </div>
      <div class="modal-footer">
      <small>Usuario: <?php echo $nombres?></small>
      </div>
    </div>
  </div>
</div>



<!-- Delete -->
<div class="modal fade" id="delete_<?php echo $row['ID_PAGO']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-danger">
        <div class="modal-content">
            <div class="modal-header">
			<h4 class="modal-title">Mantenimiento - Eliminar AP</h4>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">	
            	<p class="text-center">¿Esta seguro de Borrar el registro?</p>
				<h2 class="text-center">AP # <?php echo $row['AP']; ?></h2>
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success" data-dismiss="modal"><i class="fa fa-check-square-o" aria-hidden="true"></i>  Cancelar</button>
                <a href="../controlador/delete_ap.php?id=<?php echo $row['ID_PAGO']; ?>" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Si</a>
            </div>

        </div>
    </div>
</div>