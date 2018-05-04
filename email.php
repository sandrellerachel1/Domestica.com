<?php
$email=$_POST["email"];
$nome=$_POST["nome"];
$whatsapp=$_POST["whatsapp"];
$mensagem=$_POST["mensagem"];

$msg = "First line of text\nSecond line of text";

$mensagem = wordwrap($mensagem,100);

mail($email,"My subject",$mensagem);
if ($enviado) {
     echo "Seu email foi enviado com sucesso!";
} else {
     echo "Houve um erro enviando o email: ".$mail->ErrorInfo;
}
?>