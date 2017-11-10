<?php

require_once __DIR__.'/../inc/config.php';

$to = "michelmagnier@free.fr";
$subject = "Ceci est le sujet de l'email envoyé.";
$htmlContent = "Ceci est le contenu de l'email en <b>HTML</b>.";
$textContent = "Ceci est le contenu de l'email en texte pur.";

sendEmail($to, $subject, $htmlContent, $textContent='');

?>
