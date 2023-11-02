<?php
date_default_timezone_set('America/Lima');
 
$fecha_actual = date("d-m-Y h:i:s");

	session_start();
	//include_once('../config/Conexion');
	include '../config/Conexion.php';
	if(isset($_POST['editar'])){

		try{
			$id = $_GET['id'];

            
			$sql = "DELETE FROM SALES_CORPORATE.CLIENTE.FACTURACION_CORPORATIVA WHERE ID_FACTURACION= '$id'";
			//if-else statement in executing our query
			$_SESSION['message'] = ( $db->exec($sql) ) ? 'Factura Eliminada con Exito!!!!' : 'No se pudo eliminar la factura, favor de reportar a Tecnologias.';

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