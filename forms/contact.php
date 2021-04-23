<?php

  $receiving_email_address = 'sasaamoruso@gmail.com';

  $name = $_POST["name"];
  $email = $_POST["email"];
  $subject = $_POST["subject"];
  $message = $_POST["message"];

  if(!mail($receiving_email_address, $subject, $message, $email)){
    echo "C'é stato un problema con l'invio della mail, mi dispiace.. 
    fammi sapere di questo problema, così provvederò a sistemarlo!";
  };

  echo "OK";

?>
