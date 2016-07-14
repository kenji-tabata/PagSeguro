<?php

header("access-control-allow-origin: https://sandbox.pagseguro.uol.com.br");

if (isset($_POST['notificationType']) && $_POST['notificationType'] == 'transaction') {
    $email = 'leandro.kenji@hotmail.com';
    $token = 'D6FF321275C14EBCA501A2A919DEDEC5 ';
    $notificationCode = $_POST['notificationCode'];
    $wsdl = "https://ws.sandbox.pagseguro.uol.com.br/v3/transactions/notifications/$notificationCode?email=$email&token=$token";

    $curl = curl_init($wsdl);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $transaction = curl_exec($curl);
    curl_close($curl);

    if ($transaction == 'Unauthorized') {
        var_dump($transaction);
        exit; //Mantenha essa linha
    }
    $transaction = simplexml_load_string($transaction);
    # salva o registro no banco de dados


    if (($fp = fopen('logs.txt', 'a+')) !== false) {

        fwrite($fp, $transaction->asXML());
        fclose($fp);
    }

    var_dump($transaction);
}