<?php
session_start();
include_once('../config/conexion.php');

if(isset($_POST['agregar'])){
	try{

//$CLIENTE = $_POST['CLIENTE_CORPORATIVO'];

$CABECERA = $_POST['CLIENTE_CORPORATIVO'];
$LINE_CABECERA =explode("|", $CABECERA); 
$EMPRESA_RUC=$LINE_CABECERA[0];
$EMPRESA_RAZON_SOCIAL=$LINE_CABECERA[1];

$CLIENTE = $EMPRESA_RUC.' - '.$EMPRESA_RAZON_SOCIAL;

$TESORERIA_EMAIL=$LINE_CABECERA[2];
$TIPO_EMISION_CE=$LINE_CABECERA[3];
$PROCEDIMIENTO_EMISION_CE=$LINE_CABECERA[4];

//Nueva validación
			//hacer uso de una declaración preparada para prevenir la inyección de sql
			$stmt = $db->prepare("INSERT INTO SALES_CORPORATE.[CLIENTE].[FACTURACION_CORPORATIVA](CLIENTE_CORPORATIVO,
            TIPO_DE_CODIGO,
            DESCRIPCION,
            CANTIDAD,
            PRECIO_UNITARIO,
            IMPORTE_TOTAL,
            MONEDA,
            FORMA_DE_PAGO,
            FECHA_CIERRE_NEGOCIACION,USUARIO_SOLICITANTE,ESTADO,TESORERIA_EMAIL,TIPO_EMISION_CE,PROCEDIMIENTO_EMISION_CE) VALUES ('$CLIENTE',
:TIPO_DE_CODIGO,
:DESCRIPCION,
:CANTIDAD,
:PRECIO_UNITARIO,
:IMPORTE_TOTAL,
:MONEDA,
:FORMA_DE_PAGO,
:FECHA_CIERRE_NEGOCIACION,:USUARIO_SOLICITANTE,'PENDIENTE DE FACTURACION','$TESORERIA_EMAIL','$TIPO_EMISION_CE','$PROCEDIMIENTO_EMISION_CE')");
	//instrucción if-else en la ejecución de nuestra declaración preparada
	$_SESSION['message'] = ( $stmt->execute(array(
       // ':CLIENTE_CORPORATIVO' => $_POST['CLIENTE_CORPORATIVO'], 
        ':TIPO_DE_CODIGO' => $_POST['TIPO_DE_CODIGO'], 
        ':DESCRIPCION' => $_POST['DESCRIPCION'], 
        ':CANTIDAD' => $_POST['CANTIDAD'], 
        ':PRECIO_UNITARIO' => $_POST['PRECIO_UNITARIO'], 
        ':IMPORTE_TOTAL' => $_POST['IMPORTE_TOTAL'], 
        ':MONEDA' => $_POST['MONEDA'], 
        ':FORMA_DE_PAGO' => $_POST['FORMA_DE_PAGO'], 
        ':FECHA_CIERRE_NEGOCIACION' => $_POST['FECHA_CIERRE_NEGOCIACION'],
        ':USUARIO_SOLICITANTE' => $_POST['USUARIO_SOLICITANTE']
	)) ) ? 'La solicitud del cliente identificado con <strong> '.$CLIENTE.' </strong>fue registrado de manera exitosa!!!<br><strong>Saludos,<br> Team de Sistemas y Aplicaciones' : 'Algo salió mal. No se puedo crear la solicitud de cliente corporativo, favor informar al team de Sistemas y Aplicaciones a la brevedad.';	
	header('Location: ../views/view-facturacion');
    }
	
	catch(PDOException $e){
		$_SESSION['message'] = $e->getMessage();
        echo $e->getMessage();
	}
}
else{
	$_SESSION['message'] = 'Llene el formulario';
}
?>