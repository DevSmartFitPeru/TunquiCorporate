<?php
date_default_timezone_set('America/Lima');
 
$fecha_actual = date("d-m-Y h:i:s");

	session_start();
	//include_once('../config/Conexion');
	include '../config/Conexion.php';
	if(isset($_POST['editar'])){

		try{
			$id = $_GET['id'];
			$FECHA_PAGO_FACTURA_CORPORATIVA= $_POST['FECHA_PAGO_FACTURA_CORPORATIVA'];
            $IMPORTE_PENDIENTE_PAGO= $_POST['IMPORTE_PENDIENTE_PAGO'];
            $FORMA_PAGO_DEUDA= $_POST['FORMA_PAGO_DEUDA'];

            
			$sql = "UPDATE SALES_CORPORATE.[CLIENTE].[FACTURACION_CORPORATIVA] SET  FECHA_PAGO_FACTURA_CORPORATIVA = '$FECHA_PAGO_FACTURA_CORPORATIVA',
            IMPORTE_PENDIENTE_PAGO = '$IMPORTE_PENDIENTE_PAGO',
            FORMA_PAGO_DEUDA = '$FORMA_PAGO_DEUDA',
            ESTADO ='FACTURA PAGADA'
			WHERE ID_FACTURACION= '$id'";
			//if-else statement in executing our query
			$_SESSION['message'] = ( $db->exec($sql) ) ? 'La deuda fue actualizada de manera correcta y se desactivaron las notificaciones ara este cliente corporativo' : 'No se puso actualizar los datos de deuda para este cliente.';

		}
		catch(PDOException $e){
			$_SESSION['message'] = $e->getMessage();
		}

	}
	else{
		$_SESSION['message'] = 'Complete el formulario de edición';
	}

	header('location: ../views/view-facturacion');

?>