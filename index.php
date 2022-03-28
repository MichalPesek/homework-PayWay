<?php
//Můj merchantId - fb0e0994 / 12345 / michal.pesekcze@gmail.com
$publicK = openssl_get_publickey("-----BEGIN PUBLIC KEY-----
MFwwDQYJKoZIhvcNAQEBBQADSwAwSAJBAK9i4eHStEr9M/Iix2WbQvB+i71H/eb6
da9M+/HvIBXywE+Q+bpTq2IGNK+EMWvVsQ0wNfLiBVez+vzA4r6JdC8CAwEAAQ==
-----END PUBLIC KEY-----");

$json = json_decode(file_get_contents("http://payway.bubileg.cz/api/echo"), true);
$signature = base64_decode($json["signature"]);
$data = $json["resultCode"] . "|" . $json["resultMessage"] . "|" . $json["dttm"];
echo $data;
/*
echo "<br>";
var_dump($signature);
*/
echo "<br>";
echo(openssl_verify($data, $signature, $publicK));
