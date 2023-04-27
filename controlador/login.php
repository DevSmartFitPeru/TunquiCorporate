<?php
$serverName = "10.84.6.189";
$connectionInfo = array("Database" => "ERP_ORACLE", "UID" => "sa", "PWD" => "31zDM#OJ9f1g7h!&hsDR", "CharacterSet" => "UTF-8");
$conn = sqlsrv_connect($serverName, $connectionInfo);
#starts a new session
session_start();

$msg = ""; 
if(isset($_POST['submitBtnLogin'])){


#catches user/password submitted by html form
$email = $_POST['USUARIO_SISTEMA'];
$password = $_POST['PASSWORD_SISTEMA'];


#checks if the html form is filled
if(empty($_POST['USUARIO_SISTEMA']) || empty($_POST['PASSWORD_SISTEMA'])){
echo "Fill all the fields!";
}else{

$query = "SELECT * FROM ERP_ORACLE.ORACLE.COLABORADORES WHERE EMAIL_CORPORATIVO='{$email}' AND NRO_DOCUMENTO='{$password}'";
$result = sqlsrv_query($conn, $query);  

if($result === false){
    die( print_r( sqlsrv_errors(), true));
   }

   if(sqlsrv_has_rows($result) != 1){
      $error=sha1(md5("Error"));
      header("location: ../views/login?error=$error");
      
   }else{
   
   #creates sessions
   while($row = sqlsrv_fetch_array($result)){
      session_start();
      $_SESSION["verificar"]=true;
      $_SESSION["DNI"]= $row['NRO_DOCUMENTO'];
      $_SESSION["NOMBRES"]= $row['NOMBRES'];
      $_SESSION["APELLIDOS"]= $row['APELLIDOS'];
      $_SESSION["FILIAL"]= $row['FILIAL'];
      $_SESSION["AREA"]= $row['AREA'];


      $variable_config = $_SESSION["FILIAL"];

         #redirects user


   switch ($variable_config) {
        case "LIMCOR1-CENTRAL":
         $token=sha1(md5("Autorizacion"));
         header("location: ../views/view-cliente");
         case "SMFERP1-SMART ERP":
            $token=sha1(md5("Autorizacion"));
            header("location: ../views/view-cliente");
        break;
        case "LIMADM1-ADMINISTRADOR SMARTFIT":
         $token=sha1(md5("Autorizacion"));
         header("location: ../views/view-cliente");
     break;
        default:
        $token=sha1(md5("Autorizacion"));
         header("location: ../views/sin_acceso");
    }

    
   }


   
   }
   }


}
?>