<?php
date_default_timezone_set('America/Lima');
 
$fecha_actual = date("d-m-Y h:i:s");

	session_start();
	//include_once('../config/Conexion');
	include '../config/Conexion.php';
	if(isset($_POST['editar'])){

		try{
			$id = $_GET['id'];
			$NRO_TRANSACCION_AR= $_POST['NRO_TRANSACCION_AR'];
            $FECHA_EMISION_AR= $_POST['FECHA_EMISION_AR'];
            $NRO_COMPROBANTE_AR= $_POST['NRO_COMPROBANTE_AR'];
            $LINK_PDF= $_POST['LINK_PDF'];
            $COMENTARIO= $_POST['COMENTARIO'];
            $ESTADO  = 'FACTURADO';
            $USUARIO_FACTURADOR = $_POST['USUARIO_FACTURADOR'];

            $FORMA_DE_PAGO = $_POST['FORMA_DE_PAGO'];

			/*RECEPCION DE DATOS

			 */

			$CANTIDAD = $_POST['CANTIDAD'];
			$PRECIO_UNITARIO = $_POST['PRECIO_UNITARIO'];
			
            
			$sql = "UPDATE SALES_CORPORATE.[CLIENTE].[FACTURACION_CORPORATIVA] SET  NRO_TRANSACCION_AR = '$NRO_TRANSACCION_AR',
            FECHA_EMISION_AR = '$FECHA_EMISION_AR',
            NRO_COMPROBANTE_AR = '$NRO_COMPROBANTE_AR',
            LINK_PDF = '$LINK_PDF',
            COMENTARIO = '$COMENTARIO',
            ESTADO = '$ESTADO',
            USUARIO_FACTURADOR = '$USUARIO_FACTURADOR',
            FECHA_FACTURACION_SISTEMA=GETDATE(),
            FECHA_VENCIMIENTO_INVOICE = DATEADD(DAY,TRY_CONVERT(INT,$FORMA_DE_PAGO),GETDATE()),
			CANTIDAD='$CANTIDAD',
			PRECIO_UNITARIO='$PRECIO_UNITARIO'

			WHERE ID_FACTURACION= '$id'";
			//if-else statement in executing our query
			$_SESSION['message'] = ( $db->exec($sql) ) ? 'Datos fiscales procesados con exito!!!' : 'No se puso actualizar la información de la facturación en AR.';

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