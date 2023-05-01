<?php

   include 'Mbanco.php';

    if(count($_POST) > 0){

        $_dadoscliente[] = array();

        $_dadoscliente['nome_completo'] = $_POST['nome_completo'];
        $_dadoscliente['partida'] = $_POST['partida'];
        $_dadoscliente['chegada'] = $_POST['chegada'];
        $_dadoscliente['numero_pessoal'] = $_POST['numero_pessoal'];
        $_dadoscliente['numero_familiar'] = $_POST['numero_familiar'];
        $_dadoscliente['periodo_partida'] = $_POST['periodo_partida'];

        db_inserir_tabela($connect,$_dadoscliente);
    }

    include 'Vtemplate.php';

?>