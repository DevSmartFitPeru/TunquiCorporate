<?php
$res = $db->prepare("SELECT ISNULL(COUNT(*),0) AS TOTAL
FROM SALES_CORPORATE.CLIENTE.FACTURACION_CORPORATIVA WHERE ESTADO_DEUDA='FACTUARA PAGADA 100%' and MONTH(FECHA_EMISION_AR) ='01'");
$res->execute();
$enero_pag = $res->fetchColumn();

$res = $db->prepare("SELECT ISNULL(COUNT(*),0) AS TOTAL
FROM SALES_CORPORATE.CLIENTE.FACTURACION_CORPORATIVA WHERE ESTADO_DEUDA='FACTUARA PAGADA 100%' and MONTH(FECHA_EMISION_AR) ='02'");
$res->execute();
$febrero_pag = $res->fetchColumn();


$res = $db->prepare("SELECT ISNULL(COUNT(*),0) AS TOTAL
FROM SALES_CORPORATE.CLIENTE.FACTURACION_CORPORATIVA WHERE ESTADO_DEUDA='FACTUARA PAGADA 100%' and MONTH(FECHA_EMISION_AR) ='03'");
$res->execute();
$marzo_pag = $res->fetchColumn();


$res = $db->prepare("SELECT ISNULL(COUNT(*),0) AS TOTAL
FROM SALES_CORPORATE.CLIENTE.FACTURACION_CORPORATIVA WHERE ESTADO_DEUDA='FACTUARA PAGADA 100%' and MONTH(FECHA_EMISION_AR) ='04'");
$res->execute();
$abril_pag = $res->fetchColumn();


$res = $db->prepare("SELECT ISNULL(COUNT(*),0) AS TOTAL
FROM SALES_CORPORATE.CLIENTE.FACTURACION_CORPORATIVA WHERE ESTADO_DEUDA='FACTUARA PAGADA 100%' and MONTH(FECHA_EMISION_AR) ='05'");
$res->execute();
$mayo_pag = $res->fetchColumn();


$res = $db->prepare("SELECT ISNULL(COUNT(*),0) AS TOTAL
FROM SALES_CORPORATE.CLIENTE.FACTURACION_CORPORATIVA WHERE ESTADO_DEUDA='FACTUARA PAGADA 100%' and MONTH(FECHA_EMISION_AR) ='06'");
$res->execute();
$junio_pag = $res->fetchColumn();


$res = $db->prepare("SELECT ISNULL(COUNT(*),0) AS TOTAL
FROM SALES_CORPORATE.CLIENTE.FACTURACION_CORPORATIVA WHERE ESTADO_DEUDA='FACTUARA PAGADA 100%' and MONTH(FECHA_EMISION_AR) ='07'");
$res->execute();
$julio_pag = $res->fetchColumn();


$res = $db->prepare("SELECT ISNULL(COUNT(*),0) AS TOTAL
FROM SALES_CORPORATE.CLIENTE.FACTURACION_CORPORATIVA WHERE ESTADO_DEUDA='FACTUARA PAGADA 100%' and MONTH(FECHA_EMISION_AR) ='08'");
$res->execute();
$agosto_pag = $res->fetchColumn();

$res = $db->prepare("SELECT ISNULL(COUNT(*),0) AS TOTAL
FROM SALES_CORPORATE.CLIENTE.FACTURACION_CORPORATIVA WHERE ESTADO_DEUDA='FACTUARA PAGADA 100%' and MONTH(FECHA_EMISION_AR) ='09'");
$res->execute();
$setiembre_pag = $res->fetchColumn();

$res = $db->prepare("SELECT ISNULL(COUNT(*),0) AS TOTAL
FROM SALES_CORPORATE.CLIENTE.FACTURACION_CORPORATIVA WHERE ESTADO_DEUDA='FACTUARA PAGADA 100%' and MONTH(FECHA_EMISION_AR) ='10'");
$res->execute();
$octubre_pag = $res->fetchColumn();

$res = $db->prepare("SELECT ISNULL(COUNT(*),0) AS TOTAL
FROM SALES_CORPORATE.CLIENTE.FACTURACION_CORPORATIVA WHERE ESTADO_DEUDA='FACTUARA PAGADA 100%' and MONTH(FECHA_EMISION_AR) ='11'");
$res->execute();
$noviembre_pag = $res->fetchColumn();

$res = $db->prepare("SELECT ISNULL(COUNT(*),0) AS TOTAL
FROM SALES_CORPORATE.CLIENTE.FACTURACION_CORPORATIVA WHERE ESTADO_DEUDA='FACTUARA PAGADA 100%' and MONTH(FECHA_EMISION_AR) ='12'");
$res->execute();
$diciembre_pag = $res->fetchColumn();

?>