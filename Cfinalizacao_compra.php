<?php

    include 'Mbanco.php';

    require __DIR__."/autoload.php";

	use emagombe\Mpesa;

	set_time_limit(0);

	if(count($_POST) > 0){
		$montante = $_POST["montante"];
		$client_number = $_POST["numeroMpesa"];
		$nome = $_POST["nome_completo"];
	}else{
		$nome = $_GET['nome'];
	}	

    $dados_factura = array();
    $dados_factura = db_criar_factura($connect, $nome);

	$api_key = "";

	$public_key = "";

	$ssl = true;
	$estadoPagamento = false;
	$pointer = &$estadoPagamento;
	$mpesa = Mpesa::init($api_key, $public_key, $ssl);

	if(count($_POST) > 0){
		/* Transfer to business */
		$data = [
			"transaction_reference" => "BILHETE ENIEMI",
			"value" => $montante,
			"client_number" => "258".$client_number,
			"agent_id" => 171717,
		];

		$response = $mpesa->c2b($data);

		if(preg_match('/INS-0/',$response) && preg_match('/Request processed successfully/',$response)){
			$estadoPagamento = true;
		}else{
			$estadoPagamento = false;
		}
	}

    include "vfinalizacao_compra.php";
?>