<?php

$para= "contato@paiva.net";
$assunto "contato pelo site";
$nome= $_REQUEST ['nome'];
$idade= $_REQUEST ['idade'];
$email= $_REQUEST ['email'];

$corpo = "<strong> mensagem de contato </strong><br><br>";
$corpo .= "<strong> nome: </strong> $nome";
$corpo .= "<br><strong> idade: </strong> $idade";
$corpo .= "<br><strong> email: </strong> $email";

$header= "Content-Type: text/html; charset= utf-8/n";
$header .="from: $email Reply-to $email/n";

mail($para,$assunto,$corpo,$header);

?> 