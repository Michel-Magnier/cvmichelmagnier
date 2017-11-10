<?php

require_once __DIR__.'/../inc/config.php';


$selectContacts="
    SELECT contact.con_id,
        contact.con_email
    FROM contact;
";
$pdoStatement = $pdo->query($selectContacts);
if($pdoStatement === false){
    print_r($pdo->errorInfo());
}
// Récupération des résultats
$resultatContacts = $pdoStatement->fetchAll(PDO::FETCH_ASSOC);


?>

<html>
<body>
<head><title>SELECT FROM contact</title></head>

<table border="1">
<tr><th>CONTACT ID</th><th>CONTACT EMAIL</th></tr>
<?php foreach ($resultatContacts as $key => $value)  : ?>
    <tr>
        <td>
            <?= $resultatContacts[$key]['con_id']; ?>
        </td>
        <td>
            <?= $resultatContacts[$key]['con_email']; ?>
        </td>
    </tr>
<?php endforeach ?> <!-- fin d'une ligne de la liste des étudiants -->

</table>
</body>
</html>
