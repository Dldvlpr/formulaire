<?php

$lastName = $_POST['user_lastName'];
$firstName = $_POST['user_name'];
$phone = $_POST['user_phoneNumber'];
$mail = $_POST['user_email'];
$sujet = $_POST['subject'];
$message = $_POST['user_message'];

echo "Merci $firstName $lastName de nous avoir contacté à propos de $sujet Un de nos conseiller vous contactera soit à l’adresse $mail ou par téléphone au $phone dans les plus brefs délais pour traiter votre demande :
$message";
