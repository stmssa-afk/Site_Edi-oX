<?php
  $nome = $_POST['name'];
  $email = $_POST['email'];
  $mensagem = $_POST['message'];

  $arquivo = "

    Nome: $nome
    Email: $email
    Mensagem: $mensagem

  ";
  
  $destino = "stm.ssa@ifba.edu.br";
  $assunto = "Contato pelo Site";

  $headers  = "MIME-Version: 1.0\n";
  $headers .= "Content-type: text/html; charset=iso-8859-1\n";
  $headers .= "From: $nome <$email>";

  //Enviar
  mail($destino, $assunto, $arquivo, $headers);
  
  echo "<meta http-equiv='refresh' content='10;URL=../contact.html'>";
?>