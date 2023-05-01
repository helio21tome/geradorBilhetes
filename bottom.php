<?php
    include "Mbanco.php";

    $id = $_GET['id'];
    $pedido = $_GET['pedido'];

    //$pedido = 1: confirmar pagamento;
    //$pedido = 2: apagar registro;

    switch($pedido){
        case 1:
            confirmar_pagamento($connect,$id);
            break;
        case 2:
            eleminar_linha($connect,$id);
            break;
        case 3: 
            
            break;            
    }

    header("location: Vgerentebanco.php");
?>