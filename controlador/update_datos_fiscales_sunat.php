<?php
date_default_timezone_set('America/Lima');
 
$fecha_actual = date("Y-m-d H:i:s");

	session_start();
	//include_once('../config/Conexion');
	include '../config/conexion.php';
	if(isset($_POST['editar'])){


		try{

            if(isset($_FILES['documento']) && $_FILES['documento']['type']=='application/pdf'){

                $imgFile = $_FILES['documento']['name'];
                $tmp_dir = $_FILES['documento']['tmp_name'];
                $upload_dir = '../public/procedimientos/'; // upload directory
                $imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); // get image extension
                $proceso_name = rand(1000,1000000).".".$imgExt;
                //move_uploaded_file ($_FILES['documento']['tmp_name'] , '../public/procedimientos/'.$_FILES['documento']['name']);
                move_uploaded_file($tmp_dir,$upload_dir.$proceso_name);
                $imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); // get image extension
            
                // rename uploading image
            
                            
            }

			$id = $_GET['id'];
			$EMPRESA_RUC= $_POST['EMPRESA_RUC'];
            $EMPRESA_RAZON_SOCIAL= $_POST['EMPRESA_RAZON_SOCIAL'];
            $EMPRESA_DIRECCION_FISCAL= $_POST['EMPRESA_DIRECCION_FISCAL'];
            $EMPRESA_ESTADO= $_POST['EMPRESA_ESTADO'];
            $EMPRESA_CONDICION= $_POST['EMPRESA_CONDICION'];
            $EMPRESA_DEPARTAMENTO= $_POST['EMPRESA_DEPARTAMENTO'];
            $EMPRESA_PROVINCIA= $_POST['EMPRESA_PROVINCIA'];
            $EMPRESA_DISTRITO= $_POST['EMPRESA_DISTRITO'];
            $EMPRESA_UBIGEO= $_POST['EMPRESA_UBIGEO'];
            $CONTACTO_NOMBRES= $_POST['CONTACTO_NOMBRES'];
            $CONTACTO_APELLIDOS= $_POST['CONTACTO_APELLIDOS'];
            $CONTACTO_TELEFONO= $_POST['CONTACTO_TELEFONO'];
            $CONTACTO_EMAIL= $_POST['CONTACTO_EMAIL'];
            $FACTURACION_NOMBRES= $_POST['FACTURACION_NOMBRES'];
            $FACTURACION_APELLIDOS= $_POST['FACTURACION_APELLIDOS'];
            $FACTURACION_TELEFONO= $_POST['FACTURACION_TELEFONO'];
            $FACTURACION_EMAIL= $_POST['FACTURACION_EMAIL'];
            $TESORERIA_NOMBRES= $_POST['TESORERIA_NOMBRES'];
            $TESORERIA_APELLIDOS= $_POST['TESORERIA_APELLIDOS'];
            $TESORERIA_TELEFONO= $_POST['TESORERIA_TELEFONO'];
            $TESORERIA_EMAIL= $_POST['TESORERIA_EMAIL'];
            $USUARIO_ACTUALIZADOR= $_POST['USUARIO_ACTUALIZADOR'];

            $TIPO_EMISION_CE= $_POST['TIPO_EMISION_CE'];
           // $PROCEDIMIENTO_EMISION_CE= $proceso_name;//$_POST['PROCEDIMIENTO_EMISION_CE'];

			$sql = "UPDATE SALES_CORPORATE.CLIENTE.CLIENTE_CORPORATIVO SET  EMPRESA_RUC = '$EMPRESA_RUC',
            EMPRESA_RAZON_SOCIAL = '$EMPRESA_RAZON_SOCIAL',
            EMPRESA_DIRECCION_FISCAL = '$EMPRESA_DIRECCION_FISCAL',
            EMPRESA_ESTADO = '$EMPRESA_ESTADO',
            EMPRESA_CONDICION = '$EMPRESA_CONDICION',
            EMPRESA_DEPARTAMENTO = '$EMPRESA_DEPARTAMENTO',
            EMPRESA_PROVINCIA = '$EMPRESA_PROVINCIA',
            EMPRESA_DISTRITO = '$EMPRESA_DISTRITO',
            EMPRESA_UBIGEO = '$EMPRESA_UBIGEO',
            CONTACTO_NOMBRES = '$CONTACTO_NOMBRES',
            CONTACTO_APELLIDOS = '$CONTACTO_APELLIDOS',
            CONTACTO_TELEFONO = '$CONTACTO_TELEFONO',
            CONTACTO_EMAIL = '$CONTACTO_EMAIL',
            FACTURACION_NOMBRES = '$FACTURACION_NOMBRES',
            FACTURACION_APELLIDOS = '$FACTURACION_APELLIDOS',
            FACTURACION_TELEFONO = '$FACTURACION_TELEFONO',
            FACTURACION_EMAIL = '$FACTURACION_EMAIL',
            TESORERIA_NOMBRES = '$TESORERIA_NOMBRES',
            TESORERIA_APELLIDOS = '$TESORERIA_APELLIDOS',
            TESORERIA_TELEFONO = '$TESORERIA_TELEFONO',
            TESORERIA_EMAIL = '$TESORERIA_EMAIL',
            USUARIO_ACTUALIZADOR = '$USUARIO_ACTUALIZADOR',
            ULTIMA_ACTUALIZACION='$fecha_actual',
            TIPO_EMISION_CE='$TIPO_EMISION_CE',
            PROCEDIMIENTO_EMISION_CE='$proceso_name'

			WHERE ID_CORPO= '$id'";
			//if-else statement in executing our query
			$_SESSION['message'] = ( $db->exec($sql) ) ? 'Datos Fiscales del Customer Corporate actualizados de manera correcta.' : 'No se puso actualizar el Cliente Corporativo.';

		}
		catch(PDOException $e){
            
			$_SESSION['message'] = $e->getMessage();
		}

	}
	else{
		$_SESSION['message'] = 'Complete el formulario de edición';
	}

	header('location: ../views/view-cliente');

?>