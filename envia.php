<?php

$nome = addslashes($_POST['nome']);
$email = addslashes($_POST['email']);
$contato = addslashes($_POST['contato']);

$destino = "sistemas@dmarcos.com.br";
$assunto = "coleta de dados";

$corpo = "Nome: " . $nome . "\n" . "Email: " . $email . "\n" . "Contato: " . $contato;

$cabeca = "From: ribeiro.ramiro6@gmail.com" . "\n" . "Reply-to: " . $email . "\n" . "X-Mailer:PHP/" . phpversion();

if (mail($destino, $assunto, $corpo, $cabeca)) {
    echo ("E-mail enviado com sucesso");
} else {
    echo ("Houve um erro ao enviar o email");
}

?>