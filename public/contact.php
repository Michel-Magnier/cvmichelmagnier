<?php

require_once __DIR__.'/../inc/config.php';

$email="";
$subject="";
$content="";
$formOK = true;


// Je verifie si je viens d'emplir le formulaire de contact
if (!empty($_POST)){
    	if($email = !empty($_POST['saisieEmail'])){
    		$email = $_POST['saisieEmail'];
            $messageErreurTab['email'] = "";
    	}else{
    		$email = '';
            $messageErreurTab['email'] = "The email address field is empty.<br>";
            $formOK = false;
    	}

    	if($subject = !empty($_POST['saisieSujet'])){
    		$subject = $_POST['saisieSujet'];
            $messageErreurTab['subject'] = "";
    	}else{
    		$subject = '';
            $messageErreurTab['subject'] = "The subject field is empty.<br>";
            $formOK = false;
    	}

        if($content = !empty($_POST['saisieContenu'])){
    		$content = $_POST['saisieContenu'];
            $messageErreurTab['content'] = "";
    	}else{
    		$content = '';
            $messageErreurTab['content'] = "The content field is empty.<br>";
            $formOK = false;
    	}

    $email = trim(strip_tags($email));
    $subject = trim(strip_tags($subject));
    $content = trim(strip_tags($content));

    if($formOK){
        // Je prépare ma requête INSERT
        $sqlInsert = "
            INSERT INTO contact (con_email, con_subject, con_content)
            VALUES ('{$email}','{$subject}', '{$content}');
        ";

        // Je fais l'INSERT
        $insertedRows = $pdo->exec($sqlInsert);
        $messageErreurTab['sentemail'] = "";
        if($insertedRows == false){
            print_r($pdo->errorInfo());
        }
        else{
            // Je récupère l'ID de la ligne insérée.
            $lastId = $pdo->lastInsertId();
            // var_dump($lastId);
            sendEmail($email, $subject, $content);
            $messageErreurTab['sentemail'] = "Your email was successfully sent.";
        } // fin de vérification si le INSERT s'est bien passé.
    }else{ // Le formulaire de contact n'est pas bien empli
        echo "<pre>";
        print_r($messageErreurTab);
        echo "</pre>";
    } //fin de vérification si le formulaire de contact était bien empli
} // fin de la verification que le POST is not empty

require_once __DIR__.'/../view/header.php';
require_once __DIR__.'/../view/contact.php';
require_once __DIR__.'/../view/footer.php';


?>
