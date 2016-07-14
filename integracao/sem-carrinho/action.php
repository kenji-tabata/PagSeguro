<?php

ini_set('display_errors', 'on');
ini_set('track_errors', 'on');
ini_set('html_errors', 'on');
ini_set('error_reporting', E_ALL);
error_reporting(E_ALL);

$email = $_POST['txt-email'];

$_email = 'leandro.kenji@hotmail.com';
$_token = 'D6FF321275C14EBCA501A2A919DEDEC5 ';
$_wsdl = "https://ws.sandbox.pagseguro.uol.com.br/v2/checkout/?email=$_email&token=$_token";
$xml = '<?xml version="1.0" encoding="ISO-8859-1" standalone="yes"?>
    <checkout>
        <currency>BRL</currency>
        <items>
            <item>
                <id>0001</id>
                <description>Laudo Plus - nome</description>
                <amount>43.00</amount>
                <quantity>1</quantity>
                <weight>0</weight>
            </item>
        </items>
        <reference>REF1234</reference>
        <shipping>
            <type>3</type>
            <cost>0.00</cost>
        </shipping>
        <sender>
            <email>' . $email . '</email>
        </sender>
    </checkout>';

$curl = curl_init($_wsdl);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_HTTPHEADER, Array('Content-Type: application/xml; charset=ISO-8859-1'));
curl_setopt($curl, CURLOPT_POSTFIELDS, $xml);
$xml = curl_exec($curl);

curl_close($curl);

if ($xml == 'Unauthorized') {
    var_dump($xml);
    exit; //Mantenha essa linha
}

$xml = simplexml_load_string($xml);

var_dump($xml);

if (count($xml->error) > 0) {
    var_dump($xml);
    exit;
}

# Debug
//echo "será redirecionado!";
//die();

header('Location: https://sandbox.pagseguro.uol.com.br/v2/checkout/payment.html?code=' . $xml->code);
