<?php

$res = $db->prepare("SELECT ISNULL(COUNT(*),0) AS TOTAL FROM SALES_CORPORATE.CLIENTE.CLIENTE_CORPORATIVO");
$res->execute();
$total_customer = $res->fetchColumn();


$res = $db->prepare("SELECT ISNULL(COUNT(*),0) AS TOTAL  FROM SALES_CORPORATE.CLIENTE.FACTURACION_CORPORATIVA
 WHERE ESTADO='PENDIENTE DE FACTURACION'");
$res->execute();
$total_solicitudes_pendientes_de_facturar = $res->fetchColumn();


$res = $db->prepare("SELECT 'S/ ' + CONVERT(VARCHAR, CONVERT(VARCHAR, CAST(ISNULL(SUM(IMPORTE_TOTAL),0) AS MONEY), 1)) 
AS TOTAL FROM SALES_CORPORATE.CLIENTE.FACTURACION_CORPORATIVA WHERE ESTADO='FACTURADO'");
$res->execute();
$importe_facturado = $res->fetchColumn();

$res = $db->prepare("SELECT 'S/ ' + CONVERT(VARCHAR, CONVERT(VARCHAR, CAST(ISNULL(SUM(IMPORTE_TOTAL-IMPORTE_PENDIENTE_PAGO),0) AS MONEY), 1)) 
AS TOTAL FROM SALES_CORPORATE.CLIENTE.FACTURACION_CORPORATIVA WHERE ESTADO='FACTURADO'");
$res->execute();
$importe_pendiente_pago = $res->fetchColumn();



?>