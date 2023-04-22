
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">UNIDAD AUTENTIFICADA ADMIN |  <?php echo $_SESSION["FILIAL"];?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="../controlador/create_pos_admin.php" method="post">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">* Codigo_Alumno:</label>
      <input type="text" class="form-control" name="CODIGO_ALUMNO" placeholder="Cod. Alumno" required>
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">* AP</label>
      <input type="text" class="form-control" name ="AP" placeholder="# Nro. AP" required>
      <small style="color:#FE2D01;">* Digitar el AP del Voucher de Pago</small>
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputCity">* Fecha Operación (POS)</label>
      <input type="date" name="FECHA_OPERACION" value="<?php echo date("Y-m-d");?>" class="form-control" rrequired>
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">Marca:</label>
      <select name="MARCA_TARJETA"  class="form-control" required>
  <option value="VISA">VISA</option>
  <option value="DINERS">DINERS</option>
  <option value="AMEX">AMEX</option>
  <option value="MASTERCARD">MASTERDCARD</option>
</select>
    </div>

    <div class="form-group col-md-4">
      <label for="inputZip">* Importe:</label>
      <input type="number" class="form-control" name ="IMPORTE" step="any" required>
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputCity">* # Pago</label>
      <input type="number" name="FRONT_ID" class="form-control" placeholder="# Pagamento" required>
      <small style="color:#FE2D01;"># de pago SmartSystem (POS)</small>
    </div>

  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">* Nombre Responsable Cobro:</label>
      <input type="text" name="RESPONSABLE_COBRO" class="form-control" placeholder="Responsable..." required>
    </div>

  </div>

  
  <div class="form-row">
    <div class="form-group col-md-2">
      <label for="inputCity">REF:</label>
      <input type="text" name="REF" class="form-control" placeholder="REF">
      <input type="hidden" name="USUARIO_CREADOR" value="<?php echo $_SESSION["NOMBRES"].' '.$_SESSION["APELLIDOS"];?>">

    </div>

  </div>

  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputCity">Comentarios (Opcional ):</label>
      <input type="text" name="COMENTARIO" class="form-control" placeholder="Comentarios...">
      <small style="background-color: #FE2D01;color:#ffffff;"><strong >NOTA 1:</strong> Si es un AP de PASE DIARIO que no fue registrado en smartsystem el mismo dia de la venta, en el campo <strong># Pago </strong>ingresar 0 y en comentarios detallar el motivo.</small>
    <br><small style="background-color: #0193FE;color:#ffffff;"><strong>NOTA 2:</strong> Si el cliente es de otra unidad y esta regularizando la deuda vía POS, en comentarios ingresar el codigo de la unidad Origen.</small>
    </div>

  </div>
  
  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputCity">Unidad a Registrar:</label>

      <select name="UNIDAD_LOGEADA" class="form-control">
  <option value="">Seleccione:</option>
  <option value="AQPAQP1-PARQUE LAMBRAMANI">AQPAQP1-PARQUE LAMBRAMANI</option>
<option value="AQPCAY1-CAYMA">AQPCAY1-CAYMA</option>
<option value="AQPCAY2-REAL PLAZA AREQUIPA">AQPCAY2-REAL PLAZA AREQUIPA</option>
<option value="AQPCOL1-CERRO COLORADO">AQPCOL1-CERRO COLORADO</option>
<option value="AQPPAU1-MALL AVENTURA PORONGAC">AQPPAU1-MALL AVENTURA PORONGAC</option>
<option value="CAJCAJ1-REAL PLAZA CAJAMARCA">CAJCAJ1-REAL PLAZA CAJAMARCA</option>
<option value="CALBEL1-BELLA VISTA">CALBEL1-BELLA VISTA</option>
<option value="CALCAL1-MINKA">CALCAL1-MINKA</option>
<option value="CHICLA1-MALL AVENTURA CHICLAYO">CHICLA1-MALL AVENTURA CHICLAYO</option>
<option value="CHICLA2-REAL PLAZA CHICLAYO">CHICLA2-REAL PLAZA CHICLAYO</option>
<option value="CUSCUS1-REAL PLAZA CUSCO">CUSCUS1-REAL PLAZA CUSCO</option>
<option value="HUAHUA1-REAL PLAZA HUANCAYO">HUAHUA1-REAL PLAZA HUANCAYO</option>
<option value="HUAHUA2-OPEN PLAZA HUANCAYO">HUAHUA2-OPEN PLAZA HUANCAYO</option>
<option value="ICAICA1-PLAZA VEA ICA">ICAICA1-PLAZA VEA ICA</option>
<option value="LIMANI1-SAN ANITA">LIMANI1-SAN ANITA</option>
<option value="LIMATE1-REAL PLAZA PURUCHUCO">LIMATE1-REAL PLAZA PURUCHUCO</option>
<option value="LIMBRE1-BRENA">LIMBRE1-BRENA</option>
<option value="LIMCHO1-CHORRILLOS">LIMCHO1-CHORRILLOS</option>
<option value="LIMCHO2-TOTTUS HUAYLAS">LIMCHO2-TOTTUS HUAYLAS</option>
<option value="LIMCHO3-FAISANES">LIMCHO3-FAISANES</option>
<option value="LIMCOM1-MALL PLAZA COMAS">LIMCOM1-MALL PLAZA COMAS</option>
<option value="LIMIND1-INDEPENDENCIA">LIMIND1-INDEPENDENCIA</option>
<option value="LIMIND2-IZAGUIRRE">LIMIND2-IZAGUIRRE</option>
<option value="LIMISI1-REAL 7">LIMISI1-REAL 7</option>
<option value="LIMISI2-BASADRE">LIMISI2-BASADRE</option>
<option value="LIMLIM1-COLONIAL">LIMLIM1-COLONIAL</option>
<option value="LIMLVC1-VILLARAN">LIMLVC1-VILLARAN</option>
<option value="LIMLVC2-GAMARRA">LIMLVC2-GAMARRA</option>
<option value="LIMMGD1-MAGDALENA">LIMMGD1-MAGDALENA</option>
<option value="LIMMIG1-SAN MIGUEL">LIMMIG1-SAN MIGUEL</option>
<option value="LIMMIR1-PARDO">LIMMIR1-PARDO</option>
<option value="LIMMIR2-BENAVIDES">LIMMIR2-BENAVIDES</option>
<option value="LIMMIR3-COMPUPALACE">LIMMIR3-COMPUPALACE</option>
<option value="LIMMIR4-LARCOMAR">LIMMIR4-LARCOMAR</option>
<option value="LIMMOL1-CAMACHO">LIMMOL1-CAMACHO</option>
<option value="LIMMOL2-FONTANA">LIMMOL2-FONTANA</option>
<option value="LIMPUL1-SUCRE">LIMPUL1-SUCRE</option>
<option value="LIMSBO1-SAN BORJA">LIMSBO1-SAN BORJA</option>
<option value="LIMSJL1-ALAMEDA PLAZA SJL">LIMSJL1-ALAMEDA PLAZA SJL</option>
<option value="LIMSJM1-MALL DEL SUR">LIMSJM1-MALL DEL SUR</option>
<option value="LIMSUQ1-SURQUILLO">LIMSUQ1-SURQUILLO</option>
<option value="LIMSUQ2-OPEN PLAZA ANGAMOS">LIMSUQ2-OPEN PLAZA ANGAMOS</option>
<option value="LIMSUR1-PLAZA VEA BOLICHERA">LIMSUR1-PLAZA VEA BOLICHERA</option>
<option value="LIMSUR2-PRIMAVERA">LIMSUR2-PRIMAVERA</option>
<option value="LIMSUR3-HIGUERETA">LIMSUR3-HIGUERETA</option>
<option value="LIMSUR4-EL POLO">LIMSUR4-EL POLO</option>
<option value="LIMSUR5-VALLE HERMOSO">LIMSUR5-VALLE HERMOSO</option>
<option value="LIMSUR6-JOCKEY PLAZA">LIMSUR6-JOCKEY PLAZA</option>
<option value="LIMSUR7-PATIO PANORAMA">LIMSUR7-PATIO PANORAMA</option>
<option value="LIMVMT1-REAL PLAZA VILLA MARÍA">LIMVMT1-REAL PLAZA VILLA MARÍA</option>
<option value="PIUCAS1-OPEN PLAZA PIURA">PIUCAS1-OPEN PLAZA PIURA</option>
<option value="PIUPIU1-REAL PLAZA PIURA">PIUPIU1-REAL PLAZA PIURA</option>
<option value="PIUPIU2-REAL PLAZA DEL SOL PIU">PIUPIU2-REAL PLAZA DEL SOL PIU</option>
<option value="PIUPIU3-PLAZA DE LA LUNA PIURA">PIUPIU3-PLAZA DE LA LUNA PIURA</option>
<option value="TRUTRU1-MALL PLAZA TRUJILLO">TRUTRU1-MALL PLAZA TRUJILLO</option>
<option value="TRUTRU2-REAL PLAZA TRUJILLO">TRUTRU2-REAL PLAZA TRUJILLO</option>
 
</select>
    </div>

  </div>


  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputCity">AP Pase Diario (Obligatorio si no se tiene # de Pago en SmartSystem):</label>

      <select name="ERROR_TPV" class="form-control">
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

  <button type="submit" name="agregar" class="btn btn-success">Crear AP</button>
  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
</form>
      </div>
      <div class="modal-footer">
          <small>Usuario: <?php echo $nombres?></small>
        
      </div>
    </div>
  </div>
</div>