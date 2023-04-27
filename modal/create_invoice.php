
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">SOLICITUD DE FACTURACIÓN CORPORATIVA - PASO 1</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="../controlador/crear_solicitud.php" method="post">
  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputEmail4">* CLIENTE_CORPORATIVO:</label>
      <select name="CLIENTE_CORPORATIVO"  class="form-control" required>
      <?php                         include '../config/conexion.php';

                                    $sql = "SELECT  EMPRESA_RUC,EMPRESA_RAZON_SOCIAL FROM SALES_CORPORATE.CLIENTE.CLIENTE_CORPORATIVO
                                    ORDER BY EMPRESA_RAZON_SOCIAL ASC";
                                            foreach ($db->query($sql) as $row) {
                                    echo '<option value="'.$row['EMPRESA_RUC'].'-'.$row['EMPRESA_RAZON_SOCIAL'].'">'.$row['EMPRESA_RAZON_SOCIAL'].'</option>';
                                    }
                                    //$database->close();
                                    ?>
</select>
    </div>
    <div class="form-group col-md-12">
      <label for="inputPassword4">* TIPO DE CODIGO</label>
   
      <select name="TIPO_DE_CODIGO"  class="form-control" required>
  <option value="MENSUAL">MENSUAL</option>
  <option value="SEMESTRAL">SEMESTRAL</option>
  <option value="TRIMESTRAL">TRIMESTRAL</option>
  <option value="ANUAL">ANUAL</option>
  <option value="DAY PASS">DAY PASS</option>
</select>

    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputCity">* DESCRIPCIÓN</label>
      <input type="text" name="DESCRIPCION"  class="form-control" placeholder="Ingresar la descripcion de la facturación" required>
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputCity">*CANTIDAD</label>
      <input type="number" name="CANTIDAD" class="form-control" placeholder="Cantidad" required>

    </div>

  </div>

  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputCity">* PRECIO_UNITARIO:</label>
      <input type="number" name="PRECIO_UNITARIO" class="form-control" placeholder="Precio" required>
    </div>

  </div>

  
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputCity">TOTAL:</label>
      <input type="number" name="IMPORTE_TOTAL" class="form-control" placeholder="Importe">

    </div>

  </div>


  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">* MONEDA:</label>
      <select name="MONEDA"  class="form-control" required>
      <option value="PEN">SOLES</option>
      <option value="US">DOLARES</option>
</select>
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">* FORMA_DE_PAGO</label>
   
      <select name="FORMA_DE_PAGO"  class="form-control" required>
      <option value="30">CRÉDITO 30 DIAS</option>
      <option value="15">CRÉDITO 15 DIAS</option>
      <option value="7">CRÉDITO 7 DIAS</option>
      <option value="0">CONTADO</option>

    </select>

    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputCity">CIERRE DE NEGOCIACIÓN:</label>
      <input type="date" name="FECHA_CIERRE_NEGOCIACION" value="<?php echo date("Y-m-d");?>" class="form-control" placeholder="Importe">
      <input type="hidden" name="USUARIO_SOLICITANTE" value="<?php echo $nombres;?>" class="form-control" required>

    </div>

  </div>

  <div class="form-row">
    <div class="form-group col-md-12">

  </div>

  </div>

  <button type="submit" name="agregar" class="btn btn-success">Crear Solicitud</button>
  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
</form>
      </div>
      <div class="modal-footer">
          <small>Usuario: <?php echo $nombres?></small>
        
      </div>
    </div>
  </div>
</div>