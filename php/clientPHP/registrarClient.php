<?php
include_once("classes/class_client.php");

$client = new Client($_POST['nom'],$_POST['cognom'],$_POST['cognom2'],$_POST['tipus_doc'],$_POST['num_doc'],$_POST['data'],
$_POST['sexe'],$_POST['tlf'],$_POST['email'],$_POST['adreca'],$_POST['ciutat'],$_POST['provincia']);

$client->crearClient();

 ?>
