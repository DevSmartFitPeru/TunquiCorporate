<?php
session_start();
include_once('../config/conexion.php');

if(isset($_POST['agregar'])){
	try{

$recepcion_variable = $_POST['FRONT_ID'];
$nro_de_ap = $_POST['AP'];

//Nueva validación

switch ($recepcion_variable) {
	case 0:
	 
			//hacer uso de una declaración preparada para prevenir la inyección de sql
	$stmt = $db->prepare("INSERT INTO DWH_SF.POS_SS.MAESTRO_AP_POS_UNIDADES (CODIGO_ALUMNO,AP,FECHA_OPERACION,MARCA_TARJETA,IMPORTE,FRONT_ID,RESPONSABLE_COBRO,REF,UNIDAD_COBRO,USUARIO_CREADOR,
	UNIDAD_LOGEADA, COMENTARIO,ERROR_TPV) VALUES (:CODIGO_ALUMNO,:AP,:FECHA_OPERACION,:MARCA_TARJETA,:IMPORTE,:FRONT_ID,:RESPONSABLE_COBRO,:REF,
	:UNIDAD_COBRO,:USUARIO_CREADOR,:UNIDAD_LOGEADA, :COMENTARIO,:ERROR_TPV)");
	//instrucción if-else en la ejecución de nuestra declaración preparada
	$_SESSION['message'] = ( $stmt->execute(array(
		':CODIGO_ALUMNO' => $_POST['CODIGO_ALUMNO'] , 
		':AP' => $_POST['AP'] , 
		':FECHA_OPERACION' => $_POST['FECHA_OPERACION'] , 
		':MARCA_TARJETA' => $_POST['MARCA_TARJETA'] , 
		':IMPORTE' => $_POST['IMPORTE'] , 
		':FRONT_ID' => $_POST['FRONT_ID'] , 
		':RESPONSABLE_COBRO' => $_POST['RESPONSABLE_COBRO'],
		':REF' => $_POST['REF'],
		':UNIDAD_COBRO' => $_POST['UNIDAD_COBRO'],
		':USUARIO_CREADOR' => $_POST['USUARIO_CREADOR'],
		':UNIDAD_LOGEADA' => $_POST['UNIDAD_LOGEADA'],
		':COMENTARIO' => $_POST['COMENTARIO'],
		':ERROR_TPV' => $_POST['ERROR_TPV']
	)) ) ? 'El <strong> Nro. de AP '.$nro_de_ap.' </strong> relacionado al <strong> # de pago '.$recepcion_variable.'</strong> fue registrado de manera exitosa!!!<br>Saludos,<br> Team de Sistemas y Aplicaciones' : 'Algo salió mal. No se puedo crear el AP, favor informar al team de Sistemas y Aplicaciones a la brevedad.';	
	header('Location: ../views/create_ap');

	  break;

	default:
	 
$sql = "SELECT TOP 5 ISNULL(COUNT(*),0) FROM DWH_SF.POS_SS.MAESTRO_AP_POS_UNIDADES WHERE FRONT_ID='$recepcion_variable'";
if ($resultado = $db->query($sql)) {

	

  if ($resultado->fetchColumn() > 0) {
     //echo "El registro ya existe!!!".$recepcion_variable;
     $_SESSION['message'] = 'El <strong># de pago '.$recepcion_variable.'</strong> ya existe en nuestra base de datos, favor verificar el  <strong># de pago </strong> correcto en SmartSystem. <br><strong>Saludos,<br>Team de Sistemas y Aplicaciones';
	  header('Location: ../views/create_ap');
    }

  else {

	//hacer uso de una declaración preparada para prevenir la inyección de sql
	$stmt = $db->prepare("INSERT INTO DWH_SF.POS_SS.MAESTRO_AP_POS_UNIDADES (CODIGO_ALUMNO,AP,FECHA_OPERACION,MARCA_TARJETA,IMPORTE,FRONT_ID,RESPONSABLE_COBRO,REF,UNIDAD_COBRO,USUARIO_CREADOR,
	UNIDAD_LOGEADA, COMENTARIO,ERROR_TPV) VALUES (:CODIGO_ALUMNO,:AP,:FECHA_OPERACION,:MARCA_TARJETA,:IMPORTE,:FRONT_ID,:RESPONSABLE_COBRO,:REF,
	:UNIDAD_COBRO,:USUARIO_CREADOR,:UNIDAD_LOGEADA, :COMENTARIO,:ERROR_TPV)");
	//instrucción if-else en la ejecución de nuestra declaración preparada
	$_SESSION['message'] = ( $stmt->execute(array(
		':CODIGO_ALUMNO' => $_POST['CODIGO_ALUMNO'] , 
		':AP' => $_POST['AP'] , 
		':FECHA_OPERACION' => $_POST['FECHA_OPERACION'] , 
		':MARCA_TARJETA' => $_POST['MARCA_TARJETA'] , 
		':IMPORTE' => $_POST['IMPORTE'] , 
		':FRONT_ID' => $_POST['FRONT_ID'] , 
		':RESPONSABLE_COBRO' => $_POST['RESPONSABLE_COBRO'],
		':REF' => $_POST['REF'],
		':UNIDAD_COBRO' => $_POST['UNIDAD_COBRO'],
		':USUARIO_CREADOR' => $_POST['USUARIO_CREADOR'],
		':UNIDAD_LOGEADA' => $_POST['UNIDAD_LOGEADA'],
		':COMENTARIO' => $_POST['COMENTARIO'],
		':ERROR_TPV' => $_POST['ERROR_TPV']
	)) ) ? 'El <strong> Nro. de AP '.$nro_de_ap.' </strong> relacionado al <strong> # de pago '.$recepcion_variable.'</strong> fue registrado de manera exitosa!!!<br>Saludos,<br> Team de Sistemas y Aplicaciones' : 'Algo salió mal. No se puedo crear el AP, favor informar al team de Sistemas y Aplicaciones a la brevedad.';	
	header('Location: ../views/create_ap');

    }
}

	}}
	catch(PDOException $e){
		$_SESSION['message'] = $e->getMessage();
	}

}

else{
	$_SESSION['message'] = 'Llene el formulario';
}

	
?>