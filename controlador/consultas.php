<?php
//Calculos para el dashboard

$res = $db->prepare("SELECT ISNULL(COUNT(*),0) AS TOTAL FROM  ORACLE.FACTURACION_CABECERA
 WHERE CONVERT(date,FECHA_DE_CREACION)= CONVERT(date,GETDATE())
AND YEAR(FECHA_DE_CREACION) = YEAR(GETDATE())");
$res->execute();
$total_tx_oracle = $res->fetchColumn();

$res = $db->prepare("SELECT ISNULL(SUM(NET_VALUE),0) AS TOTAL FROM  ORACLE.FACTURACION_CABECERA WHERE CONVERT(date,FECHA_DE_CREACION)= CONVERT(date,GETDATE())
AND YEAR(FECHA_DE_CREACION) = YEAR(GETDATE())
");
$res->execute();
$total_invoice = $res->fetchColumn();

$res = $db->prepare("SELECT 'S/ ' + CONVERT(VARCHAR, CONVERT(VARCHAR, CAST(ISNULL(SUM(VALOR_UNITARIO),0)  AS MONEY), 1)) AS VALOR FROM ERP_ORACLE.ORACLE.FACTURACION_ELECTRONICA");
$res->execute();
$valorizado_invoice = $res->fetchColumn();

?>