<?php
	session_start();
	//include_once('../config/Conexion');
	include '../config/conexion.php';
	if(isset($_POST['editar'])){

		try{
			$id = $_GET['id'];
			$codigo_alumno= $_POST['CODIGO_ALUMNO'];
            $ap = $_POST['AP'];
            $fecha_operacion = $_POST['FECHA_OPERACION'];
            $front_id = $_POST['FRONT_ID'];
            $RESPONSABLE_COBRO = $_POST['RESPONSABLE_COBRO'];
            $marca_tarjeta = $_POST['MARCA_TARJETA'];
            $IMPORTE = $_POST['IMPORTE'];
            $ref = $_POST['REF'];
            $unidad_cobro = $_POST['UNIDAD_COBRO'];
			$comentarios = $_POST['COMENTARIO'];
			$error_tpv = $_POST['ERROR_TPV'];
			$sql = "UPDATE DWH_SF.POS_SS.MAESTRO_AP_POS_UNIDADES SET  CODIGO_ALUMNO = '$codigo_alumno',
            AP = '$ap',  FECHA_OPERACION = '$fecha_operacion', FRONT_ID = '$front_id',
            RESPONSABLE_COBRO = '$RESPONSABLE_COBRO', MARCA_TARJETA = '$marca_tarjeta',
            IMPORTE = '$IMPORTE', REF = '$ref',
            UNIDAD_COBRO = '$unidad_cobro', COMENTARIO= '$comentarios',ERROR_TPV= '$error_tpv'
			WHERE ID_PAGO= '$id'";
			//if-else statement in executing our query
			$_SESSION['message'] = ( $db->exec($sql) ) ? 'AP Actualizado con éxito!' : 'No se puso actualizar el AP.';

		}
		catch(PDOException $e){
			$_SESSION['message'] = $e->getMessage();
		}

	}
	else{
		$_SESSION['message'] = 'Complete el formulario de edición';
	}

	header('location: ../views/create_ap_admin');

?>