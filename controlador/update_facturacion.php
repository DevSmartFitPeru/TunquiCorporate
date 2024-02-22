<?php
date_default_timezone_set('America/Lima');
 
$fecha_actual = date("Y-m-d");
$fecha = new DateTime($fecha_actual);
$fecha_resultante = $fecha->format('Y-m-d');

	session_start();
	//include_once('../config/Conexion');
	include '../config/conexion.php';
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
			
			//Obtenemos la cantidad de dias de pago y sumamaos a la fecha actual
			$fecha->modify('+'.$FORMA_DE_PAGO.' day');
            $fecha_vencimiento = $fecha->format('Y-m-d');

			$sql = "UPDATE SALES_CORPORATE.[CLIENTE].[FACTURACION_CORPORATIVA] SET  NRO_TRANSACCION_AR = '$NRO_TRANSACCION_AR',
            FECHA_EMISION_AR = '$FECHA_EMISION_AR',
            NRO_COMPROBANTE_AR = '$NRO_COMPROBANTE_AR',
            LINK_PDF = '$LINK_PDF',
            COMENTARIO = '$COMENTARIO',
            ESTADO = '$ESTADO',
            USUARIO_FACTURADOR = '$USUARIO_FACTURADOR',
            FECHA_FACTURACION_SISTEMA='".date('Y-m-d H:m:s')."',
            FECHA_VENCIMIENTO_INVOICE ='$fecha_vencimiento',
			CANTIDAD='$CANTIDAD',
			PRECIO_UNITARIO='$PRECIO_UNITARIO'

			WHERE ID_FACTURACION= '$id'";
			//if-else statement in executing our query
			echo $sql;
			$_SESSION['message'] = ( $db->exec($sql) ) ? 'Datos fiscales procesados con exito!!!' : 'No se puso actualizar la información de la facturación en AR.';

		}
		catch(PDOException $e){
			$_SESSION['message'] = $e->getMessage();
			echo $e->getMessage();
		}

	}
	else{
		$_SESSION['message'] = 'Complete el formulario de edición';
	}

	header('location: ../views/view-facturacion');

?>