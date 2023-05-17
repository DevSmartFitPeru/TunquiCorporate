<?php
session_start();
include_once('../config/conexion.php');

if(isset($_POST['editar'])){
	try{

//Nueva validación
			//hacer uso de una declaración preparada para prevenir la inyección de sql
			$stmt = $db->prepare("INSERT INTO SALES_CORPORATE.[CLIENTE].[FACTURACION_INVOICE_PAGADAS](ID_FACTURA,IMPORTE_PAGADO,IMPORTE_ORIGINAL,FECHA_PAGO) 
            VALUES (:ID_FACTURA,:IMPORTE_PAGADO,:IMPORTE_ORIGINAL,:FECHA_PAGO)");
	//instrucción if-else en la ejecución de nuestra declaración preparada
	$_SESSION['message'] = ( $stmt->execute(array(
       // ':CLIENTE_CORPORATIVO' => $_POST['CLIENTE_CORPORATIVO'], 
        ':ID_FACTURA' => $_POST['ID_FACTURA'], 
        ':IMPORTE_PAGADO' => $_POST['IMPORTE_PAGADO'], 
        ':IMPORTE_ORIGINAL' => $_POST['IMPORTE_ORIGINAL'], 
        ':FECHA_PAGO' => $_POST['FECHA_PAGO']

	)) ) ? 'El pago fue registrado de Manera Correcta en la Base de Datos' : 'No se pudo actualizar el pago del Cliente, favor de verificar.';	
	header('Location: ../views/regularizacion_deuda');
    }
	
	catch(PDOException $e){
		$_SESSION['message'] = $e->getMessage();
	}
}
else{
	$_SESSION['message'] = 'Llene el formulario';
}
?>