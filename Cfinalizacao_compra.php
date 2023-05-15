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

	$api_key = "0q8m65f9mli7gnnfzaurlw9e24nqtg7l";

	$public_key = "
	MIICIjANBgkqhkiG9w0BAQEFAAOCAg8AMIICCgKCAgEAmptSWqV7cGUUJJhUBxsMLonux24u+FoTlrb+4Kgc6092JIszmI1QUoMohaDDXSVueXx6IXwYGsjjWY32HGXj1iQhkALXfObJ4DqXn5h6E8y5/xQYNAyd5bpN5Z8r892B6toGzZQVB7qtebH4apDjmvTi5FGZVjVYxalyyQkj4uQbbRQjgCkubSi45Xl4CGtLqZztsKssWz3mcKncgTnq3DHGYYEYiKq0xIj100LGbnvNz20Sgqmw/cH+Bua4GJsWYLEqf/h/yiMgiBbxFxsnwZl0im5vXDlwKPw+QnO2fscDhxZFAwV06bgG0oEoWm9FnjMsfvwm0rUNYFlZ+TOtCEhmhtFp+Tsx9jPCuOd5h2emGdSKD8A6jtwhNa7oQ8RtLEEqwAn44orENa1ibOkxMiiiFpmmJkwgZPOG/zMCjXIrrhDWTDUOZaPx/lEQoInJoE2i43VN/HTGCCw8dKQAwg0jsEXau5ixD0GUothqvuX3B9taoeoFAIvUPEq35YulprMM7ThdKodSHvhnwKG82dCsodRwY428kg2xM/UjiTENog4B6zzZfPhMxFlOSFX4MnrqkAS+8Jamhy1GgoHkEMrsT5+/ofjCx0HjKbT5NuA2V/lmzgJLl3jIERadLzuTYnKGWxVJcGLkWXlEPYLbiaKzbJb2sYxt+Kt5OxQqC1MCAwEAAQ==";

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