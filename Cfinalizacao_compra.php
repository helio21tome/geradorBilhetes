<?php

    include 'Mbanco.php';

    $nome = $_GET['nome'];
    $dados_factura = array();
    $dados_factura= db_criar_factura($connect, $nome);

    $ver = $dados_factura[0]["pago"];

    include "vfinalizacao_compra.php";
?>