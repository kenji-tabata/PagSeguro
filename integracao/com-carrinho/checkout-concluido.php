<?php

/**
 * Ao finalizar a compra no PagSeguro (checkout) o cliente é redirecionado automaticamente
 * para este controller. O cliente irá visualizará os dados da compra realizada, o status
 * atual do pedido e as mensagens de erros caso ocorra.
 * 
 * Para definir a página de redirecionamento acesse o site da PagSeguro com seu login e senha
 * e clique em Painel -> Minha Conta -> Preferências -> Integrações ou acesse o link abaixo:
 * https://pagseguro.uol.com.br/preferencias/integracoes.jhtml
 */

#
# Para Debug
#
$_GET['transacao'] = "BC9CA211DBA64715B6FFBFA3EAC506FE";

if (!isset($_GET['transacao'])) {
    $titulo   = "Código da transação não foi enviado!";
    $mensagem = "Ocorreu um erro ao enviar código da transação para obter os dados.";
    require_once 'views/error.php';
    exit();
}

$email = 'leandro.kenji@hotmail.com';
$token = 'D6FF321275C14EBCA501A2A919DEDEC5';
$notificationCode = $_GET['transacao'];
$wsdl = "https://ws.sandbox.pagseguro.uol.com.br/v3/transactions/$notificationCode?email=$email&token=$token";

$curl = curl_init($wsdl);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$transaction = curl_exec($curl);
curl_close($curl);

#
#
#
if ($transaction == 'Unauthorized') {
    $titulo   = "Credenciais inválidas";
    $mensagem = "Ocorreu um erro ao validar as credenciais do vendedor.";
    require_once 'views/error.php';
    exit();
}

$transaction = simplexml_load_string($transaction);

switch ($transaction->status) {
    case 1:
        echo "<h1>Aguardando pagamento</h1>";
        break;
    case 2:
        echo "<h1>Em análise</h1>";
        break;
    case 3:
        echo "<h1>Paga</h1>";
        break;
    case 4:
        echo "<h1>Disponível</h1>";
        break;
    case 5:
        echo "<h1>Em disputa</h1>";
        break;
    case 6:
        echo "<h1>Devolvida</h1>";
        break;
    case 7:
        echo "<h1>Cancelada</h1>";
        break;
    default:
        echo "<h1>Opção inválida</h1>";
        break;
}
var_dump($transaction);
require_once 'views/checkout-concluido.php';
