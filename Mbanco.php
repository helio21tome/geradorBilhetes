<?php

    /*$bdhost = 'localhost';
    $bduser = 'root';
    $bdpassword = '';
    $bdbanco = 'transporte';*/

    $bdhost = 'localhost';
    $bduser = 'yesican1_root';
    $bdpassword = '#123456789Root';
    $bdbanco = 'yesican1_transporte';

    $connect = mysqli_connect($bdhost,$bduser,$bdpassword,$bdbanco);

    if (mysqli_connect_errno()){
        echo "Problemas ao conectar!";
        die();
    }

    function comprovativoPagamento($dados_factura){
        header("Location: recibo.php?id={$dados_factura['nome_completo']}");
    }

    function db_inserir_tabela($connect,$dados){
        $sqlGravar = "
        INSERT INTO cliente(
            nome_completo,partida,chegada,numero_pessoal,numero_familiar,periodo_partida
        )
        VALUES
        (
            '{$dados['nome_completo']}',
            '{$dados['partida']}',
            '{$dados['chegada']}',
            '{$dados['numero_pessoal']}',
            '{$dados['numero_familiar']}',
            '{$dados['periodo_partida']}'
    
        )";

        mysqli_query($connect, $sqlGravar);
   
        header("Location: Cfinalizacao_compra.php?nome={$dados['nome_completo']}");
    }


   function db_registrar_novo_usuario($connect,$dados){
         $sqlGravar = "
        INSERT INTO clientes_registrados(
            numeroDeCelular,senha
        )
        VALUES
        (
            '{$dados['numeroDeCelular']}',
            '{$dados['senha']}'

        )";

        mysqli_query($connect, $sqlGravar);

       header("Location: login.php?id={$dados['numeroDeCelular']}");
   }

   function db_verificar_senha($connect,$dados){

        $sqlbusca = "SELECT * FROM clientes_registrados WHERE numeroDeCelular = '{$dados['numeroDeCelular01']}' ";

        $resultado = mysqli_query($connect, $sqlbusca);

        $validar = false;
    
        $tarefas = array();
    
        while ($tarefa = mysqli_fetch_assoc($resultado)) {
            $tarefas[] = $tarefa;
        }

        $validar=comparar_senhas($dados['senha01'],$tarefas[0]['senha'],$dados['numeroDeCelular01'],$tarefas[0]['numeroDeCelular']);
    
        return $validar;
   }
   
   function comparar_senhas($primeiro,$segundo,$terceiro,$quarto){
        if($primeiro==$segundo && $terceiro==$quarto){
            return true;
        }

        return false;
   }

    function db_criar_factura($connect,$dados){

        $sqlbusca = "SELECT * FROM CLIENTE WHERE nome_completo = '{$dados}' ";

        $resultado = mysqli_query($connect, $sqlbusca);
    
        $tarefas = array();
    
        while ($tarefa = mysqli_fetch_assoc($resultado)) {
            $tarefas[] = $tarefa;
        }
    
        return $tarefas;
    }

    function todos_dados_tabela($connect){
        $sqlbuscar = "SELECT *FROM CLIENTE";
        $resultados = mysqli_query($connect, $sqlbuscar);
        
        $todos = array();

        while($todo = mysqli_fetch_assoc($resultados)){
            $todos[] =  $todo;
        }
        
        return $todos;
    }

   function confirmar_pagamento($connect,$id){

        $sqlEditar = " 
            UPDATE cliente SET PAGO = 1 WHERE ID = {$id} 
        ";
        mysqli_query($connect,$sqlEditar);
    } 

    function eleminar_linha($connect,$id){

        $sqlEditar = " 
            Delete From cliente WHERE ID = {$id} 
        ";

        echo $sqlEditar;
        mysqli_query($connect,$sqlEditar);
    }
?>