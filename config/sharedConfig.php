<?php

// Conexion por default SQS

/*
Filas/ Filas:
  invoices_request_smarttunqui_staging
  invoices_returned_smarttunqui_staging

Credenciais para acessar a filas / Credenciales para acceder a las colas:
ID de clave: AKIA2CG646QVHO4ZH2HW
 Secreto: q9dpABgfzJEvqNeNve5Jfqf8wfLR0r ILyNJJBo9a

Front_System que debe usarse / Front_System que debe usarse:: 

  " SmartTunqui "
*/

/*ENVIO DE FACTURAS

invoices_request_smarttunqui_staging
https://sqs.us-east-1.amazonaws.com/691957199914/invoices_request_smarttunqui_staging

*/
$sharedConfig = [
    'region' => 'us-west-2',
    'version' => 'latest',
    'credentials' => [
    'key' => 'AKIA2CG646QVHO4ZH2HW',
    'secret' => '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',
    ],
   ];
   
   //$my_queue_name = "MyQueueExample";
   $my_queue_name = "https://sqs.us-east-1.amazonaws.com/691957199914/invoices_request_smarttunqui_staging";
   
?>