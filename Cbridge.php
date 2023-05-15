<?php

    include 'Mbanco.php';

    if($_POST['o_que_fazer']=="vform"){    

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

    }elseif ($_POST['o_que_fazer']=="registro") {

        if(count($_POST) > 0){

            $_dadoscliente[] = array();
            
            $_dadoscliente['numeroDeCelular'] = $_POST['numeroDeCelular'];
            $_dadoscliente['senha'] = $_POST['senha'];

            db_registrar_novo_usuario($connect,$_dadoscliente);
        }

        
    }else{

        if(count($_POST) > 0){

            $_dadoscliente[] = array();

            $_dadoscliente['numeroDeCelular01'] = $_POST['numeroDeCelular'];
            $_dadoscliente['senha01'] = $_POST['senha'];

            if(db_verificar_senha($connect,$_dadoscliente)){
                 header("Location: vform.php?id={$dados['numeroDeCelular01']}");   
            }else{
                 header("Location: login.php?");
            }
        }
        
    }

?>