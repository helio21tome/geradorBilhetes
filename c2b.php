<?php

require __DIR__."/autoload.php";

use emagombe\Mpesa;

set_time_limit(0);

$montante = $_POST["montante"];
$client_number = $_POST["numeroMpesa"];

$api_key = "";

$public_key = "";

$ssl = true;
$estadoPagamento = false;
$mpesa = Mpesa::init($api_key, $public_key, $ssl);

/* Transfer to business */
$data = [
	"transaction_reference" => "BILHETE ENIEMI",
	"value" => $montante,
	"client_number" => "258".$client_number,
	"agent_id" => 171717,
];

$mpesa->c2b($data, function($response){
	print_r($response);
});