<?php

    include 'Mbanco.php';
    include "helper.php";

    $dados =  todos_dados_tabela($connect);

    $tamanho = count($dados);

?>