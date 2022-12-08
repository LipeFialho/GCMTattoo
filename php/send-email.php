<?php
  //Variáveis
  $name = $_POST['name'];
  $fone = $_POST['fone'];
  $email = $_POST['email'];
  $description = $_POST['description'];
  //$image = $_POST['image'];
  $date = date('d/m/Y');
  $hour = date('h:i:s');

  //Compo E-mail
  $file = "
    <html>
      <p><b>Nome: </b>$name</p>
      <p><b>Telefone: </b>$fone</p>
      <p><b>E-mail: </b>$email</p>
      <p><b>Descrição da Tatuagem: </b>$description</p>
      <p>Este e-mail foi enviado em <b>$date</b> às <b>$hour</b></p>
    </html>
  ";
  
  //Emails para quem será enviado o formulário
  $receiver = "gcmtattoo@gmail.com";
  $subject = "ORÇAMENTO";

  //Este sempre deverá existir para garantir a exibição correta dos caracteres
  $headers  = "MIME-Version: 1.0\n";
  $headers .= "Content-type: text/html; charset=iso-8859-1\n";
  $headers .= "From: $name <$email>";

  //Enviar
  mail($receiver, $subject, $file, $headers);
  
  echo "<meta http-equiv='refresh' content='0;URL=../index.html'>";
?>