<?php
session_start();
include_once('../config/conexion.php');

if(isset($_POST['agregar'])){
	try{

$recepcion_variable = $_POST['EMPRESA_RUC'];
$razon_social = $_POST['EMPRESA_RAZON_SOCIAL'];
$user = $_POST['USUARIO_CREADOR'];

//Nueva validación

$sql = "SELECT TOP 2 ISNULL(COUNT(*),0) FROM SALES_CORPORATE.CLIENTE.CLIENTE_CORPORATIVO WHERE EMPRESA_RUC='$recepcion_variable'";
if ($resultado = $db->query($sql)) {
  if ($resultado->fetchColumn() > 0) {
     //echo "El registro ya existe!!!".$recepcion_variable;
     $_SESSION['message'] = 'El <strong> RUC: '.$recepcion_variable.'</strong> con la razon social <strong># RUC: '.$razon_social.'</strong> ya existe en nuestra base de datos, favor verificar si el RUC ingresado es el correcto.<br><strong>Saludos,<br>Team de Sistemas y Aplicaciones';
	  header('Location: ../views/view-cliente');
    }
  else {
			//hacer uso de una declaración preparada para prevenir la inyección de sql
			$stmt = $db->prepare("INSERT INTO SALES_CORPORATE.CLIENTE.CLIENTE_CORPORATIVO (EMPRESA_RUC,
			EMPRESA_RAZON_SOCIAL,
			EMPRESA_DIRECCION_FISCAL,
			EMPRESA_ESTADO,
			EMPRESA_CONDICION,
			EMPRESA_DEPARTAMENTO,
			EMPRESA_PROVINCIA,
			EMPRESA_DISTRITO,
			EMPRESA_UBIGEO,
			CONTACTO_NOMBRES,
			CONTACTO_APELLIDOS,
			CONTACTO_TELEFONO,
			CONTACTO_EMAIL,
			FACTURACION_NOMBRES,
			FACTURACION_APELLIDOS,
			FACTURACION_TELEFONO,
			FACTURACION_EMAIL,
			TESORERIA_NOMBRES,
			TESORERIA_APELLIDOS,
			TESORERIA_TELEFONO,
			TESORERIA_EMAIL,
			USUARIO_CREADOR) VALUES (:EMPRESA_RUC,
			:EMPRESA_RAZON_SOCIAL,
			:EMPRESA_DIRECCION_FISCAL,
			:EMPRESA_ESTADO,
			:EMPRESA_CONDICION,
			:EMPRESA_DEPARTAMENTO,
			:EMPRESA_PROVINCIA,
			:EMPRESA_DISTRITO,
			:EMPRESA_UBIGEO,
			:CONTACTO_NOMBRES,
			:CONTACTO_APELLIDOS,
			:CONTACTO_TELEFONO,
			:CONTACTO_EMAIL,
			:FACTURACION_NOMBRES,
			:FACTURACION_APELLIDOS,
			:FACTURACION_TELEFONO,
			:FACTURACION_EMAIL,
			:TESORERIA_NOMBRES,
			:TESORERIA_APELLIDOS,
			:TESORERIA_TELEFONO,
			:TESORERIA_EMAIL,
			:USUARIO_CREADOR)");
	//instrucción if-else en la ejecución de nuestra declaración preparada
	$_SESSION['message'] = ( $stmt->execute(array(
		':EMPRESA_RUC' => $_POST['EMPRESA_RUC'], 
		':EMPRESA_RAZON_SOCIAL' => $_POST['EMPRESA_RAZON_SOCIAL'], 
		':EMPRESA_DIRECCION_FISCAL' => $_POST['EMPRESA_DIRECCION_FISCAL'], 
		':EMPRESA_ESTADO' => $_POST['EMPRESA_ESTADO'], 
		':EMPRESA_CONDICION' => $_POST['EMPRESA_CONDICION'], 
		':EMPRESA_DEPARTAMENTO' => $_POST['EMPRESA_DEPARTAMENTO'], 
		':EMPRESA_PROVINCIA' => $_POST['EMPRESA_PROVINCIA'], 
		':EMPRESA_DISTRITO' => $_POST['EMPRESA_DISTRITO'], 
		':EMPRESA_UBIGEO' => $_POST['EMPRESA_UBIGEO'], 
		':CONTACTO_NOMBRES' => $_POST['CONTACTO_NOMBRES'], 
		':CONTACTO_APELLIDOS' => $_POST['CONTACTO_APELLIDOS'], 
		':CONTACTO_TELEFONO' => $_POST['CONTACTO_TELEFONO'], 
		':CONTACTO_EMAIL' => $_POST['CONTACTO_EMAIL'], 
		':FACTURACION_NOMBRES' => $_POST['FACTURACION_NOMBRES'], 
		':FACTURACION_APELLIDOS' => $_POST['FACTURACION_APELLIDOS'], 
		':FACTURACION_TELEFONO' => $_POST['FACTURACION_TELEFONO'], 
		':FACTURACION_EMAIL' => $_POST['FACTURACION_EMAIL'], 
		':TESORERIA_NOMBRES' => $_POST['TESORERIA_NOMBRES'], 
		':TESORERIA_APELLIDOS' => $_POST['TESORERIA_APELLIDOS'], 
		':TESORERIA_TELEFONO' => $_POST['TESORERIA_TELEFONO'], 
		':TESORERIA_EMAIL' => $_POST['TESORERIA_EMAIL'], 
		':USUARIO_CREADOR' => $_POST['USUARIO_CREADOR']
	)) ) ? 'El cliente corporativo con <strong> RUC '.$recepcion_variable.' </strong> con razón social <strong> '.$razon_social.'</strong>  fue registrado de manera exitosa!!!<br><strong>Saludos,<br> Team de Sistemas y Aplicaciones' : 'Algo salió mal. No se puedo crear al cliente corporativo, favor informar al team de Sistemas y Aplicaciones a la brevedad.';	
	header('Location: ../views/view-cliente');
    }
}
	}
	catch(PDOException $e){
		$_SESSION['message'] = $e->getMessage();
	}
}
else{
	$_SESSION['message'] = 'Llene el formulario';
}
?>