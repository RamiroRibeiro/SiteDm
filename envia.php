<?php

    $nome = addcslashes($_POST['nome']);
    $email = addcslashes($_POST['email']);
    $contato = addcslashes($_POST['contato']);

    $destino = "sistemas@dmarcos.com.br";
    $assunto = "coleta de dados";


    $corpo = "Nome: ".$nome."\n"."Email: ".$email."\n"."Contato: ".$contato;

    $cabeca = "From: ribeiro.ramiro6@gmail.com"."\n"."Reply-to: ".$email."\n"."x=mailer:PHP/".phpversion();

    if(mail($para,$assunto,$corpo,$cabeca)){
        echo("E-mail enviado com sucesso");
    }else{
        echo("Houve um erro ao enviar o email");
    }
    

?>