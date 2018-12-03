<?php
$to = 'evaldascasas3@iesmontsia.org';
$subject = 'prova';
$message = 'missatge de prova des de PHP';

function sendMail($to, $subject, $message)
{
  $status = imap_mail($to, $subject, $message);
  return $status;
}
/*
if(sendMail($to, $subject, $message) == true)
{
  echo "S'ha enviat correctament";
}
else
{
  echo "Error NOI";
}
*/
?>
