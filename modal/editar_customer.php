<div class="modal fade" id="edit_<?php echo $row['ID_CORPO']; ?>"  tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Cliente Corporativo: <?php echo $row['EMPRESA_RUC']; ?> Razon Social <?php echo $row['EMPRESA_RAZON_SOCIAL']; ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="../controlador/update_datos_fiscales_sunat.php?id=<?php echo $row['ID_CORPO']; ?>" method="post">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">EMPRESA_RUC:</label>
      <input type="text" class="form-control" name="EMPRESA_RUC" value="<?php echo $row['EMPRESA_RUC']; ?>" placeholder="Cod. Alumno" required>
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">EMPRESA_RAZON_SOCIAL</label>
      <input type="text" class="form-control" name ="EMPRESA_RAZON_SOCIAL"   value="<?php echo $row['EMPRESA_RAZON_SOCIAL']; ?>" placeholder="# Nro. AP" required>
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputCity">EMPRESA_DIRECCION_FISCAL</label>
      <input type="text" name="EMPRESA_DIRECCION_FISCAL" value="<?php echo $row['EMPRESA_DIRECCION_FISCAL'];?>" class="form-control" rrequired>
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">EMPRESA_ESTADO:</label>
      <input type="text" name="EMPRESA_ESTADO" value="<?php echo $row['EMPRESA_ESTADO'];?>" class="form-control" rrequired>
    </div>

    <div class="form-group col-md-4">
      <label for="inputZip">EMPRESA_CONDICION:</label>
      <input type="text" name ="EMPRESA_CONDICION"  class="form-control"  value="<?php echo $row['EMPRESA_CONDICION'];?>" step="any" required>
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputCity">EMPRESA_DEPARTAMENTO</label>
      <input type="text" name="EMPRESA_DEPARTAMENTO" value="<?php echo $row['EMPRESA_DEPARTAMENTO'];?>" class="form-control" placeholder="# Pagamento" required>
    </div>

  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">EMPRESA_PROVINCIA:</label>
      <input type="text" name="EMPRESA_PROVINCIA" value="<?php echo $row['EMPRESA_PROVINCIA'];?>" class="form-control" placeholder="Responsable..." required>
    </div>

  </div>

  
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">EMPRESA_DISTRITO:</label>
      <input type="text" name="EMPRESA_DISTRITO" class="form-control" value="<?php echo $row['EMPRESA_DISTRITO'];?>" placeholder="EMPRESA_DISTRITO">
    </div>

  </div>

  
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputCity">EMPRESA_UBIGEO</label>
      <input type="text" name="EMPRESA_UBIGEO" value="<?php echo $row['EMPRESA_UBIGEO'];?>" class="form-control" rrequired>
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">CONTACTO_NOMBRES:</label>
      <input type="text" name="CONTACTO_NOMBRES" value="<?php echo $row['CONTACTO_NOMBRES'];?>" class="form-control" rrequired>
    </div>

    <div class="form-group col-md-4">
      <label for="inputZip">CONTACTO_APELLIDOS:</label>
      <input type="text" name ="CONTACTO_APELLIDOS"  class="form-control"  value="<?php echo $row['CONTACTO_APELLIDOS'];?>" step="any" required>
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputCity">CONTACTO_TELEFONO</label>
      <input type="text" name="CONTACTO_TELEFONO" value="<?php echo $row['CONTACTO_TELEFONO'];?>" class="form-control" rrequired>
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">CONTACTO_EMAIL:</label>
      <input type="text" name="CONTACTO_EMAIL" value="<?php echo $row['CONTACTO_EMAIL'];?>" class="form-control" rrequired>
    </div>

    <div class="form-group col-md-4">
      <label for="inputZip">FACTURACION_NOMBRES:</label>
      <input type="text" name ="FACTURACION_NOMBRES"  class="form-control"  value="<?php echo $row['FACTURACION_NOMBRES'];?>" step="any" required>
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputCity">FACTURACION_APELLIDOS</label>
      <input type="text" name="FACTURACION_APELLIDOS" value="<?php echo $row['FACTURACION_APELLIDOS'];?>" class="form-control" rrequired>
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">FACTURACION_TELEFONO:</label>
      <input type="text" name="FACTURACION_TELEFONO" value="<?php echo $row['FACTURACION_TELEFONO'];?>" class="form-control" rrequired>
    </div>

    <div class="form-group col-md-4">
      <label for="inputZip">FACTURACION_EMAIL:</label>
      <input type="text" name ="FACTURACION_EMAIL"  class="form-control"  value="<?php echo $row['FACTURACION_EMAIL'];?>" step="any" required>
    </div>
  </div>

  
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputCity">TESORERIA_NOMBRES</label>
      <input type="text" name="TESORERIA_NOMBRES" value="<?php echo $row['TESORERIA_NOMBRES'];?>" class="form-control" rrequired>
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">TESORERIA_APELLIDOS:</label>
      <input type="text" name="TESORERIA_APELLIDOS" value="<?php echo $row['TESORERIA_APELLIDOS'];?>" class="form-control" rrequired>
    </div>

    <div class="form-group col-md-4">
      <label for="inputZip">TESORERIA_TELEFONO:</label>
      <input type="text" name ="TESORERIA_TELEFONO"  class="form-control"  value="<?php echo $row['TESORERIA_TELEFONO'];?>" step="any" required>
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputCity">TESORERIA_EMAIL</label>
      <input type="text" name="TESORERIA_EMAIL" value="<?php echo $row['TESORERIA_EMAIL'];?>" class="form-control" rrequired>
      <input type="hidden" name="USUARIO_ACTUALIZADOR" value="<?php echo $nombres;?>" class="form-control" required>
    </div>
  </div>

  <button type="submit" name="editar" class="btn btn-success">Actualizar Datos Corporativos</button>
  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
</form>
      </div>
      <div class="modal-footer">
      <small>Usuario: <?php echo $nombres?></small>
      </div>
    </div>
  </div>
</div>


