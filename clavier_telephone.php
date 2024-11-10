<?php
// import fichier 'ClavierTelephone.php'
require 'ClavierTelephone.php';

// structure conditionnelle disant que : si '$_GET['message_a_traduire']' est défini alors j'affecte à la variable '$message' la valeur de '$_GET['message_a_traduire']', sinon je lui affecte une chaine de caractères vide
$message = isset($_GET['message_a_traduire']) ? $_GET['message_a_traduire'] : "";

// structure conditionnelle, si la variable '$message' n'est pas vide, alors je crée une instance de l'objet $nouveauMessage basé sur la classe 'ClavierTelephone()'
if (!empty($message)) {
    $nouveauMessage = new ClavierTelephone($message);
}


?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clavier Téléphone</title>
</head>
<body>
    <!-- j'affiche, selon ce que me retourne la structure conditionnelle, si la variable '$message' n'est pas vide, le message encodé, sinon je demande à ce que l'on entre un message à encoder -->
    <p><?php echo (!empty($message)) ? "Votre message encodé est le suivant : " . $nouveauMessage->getTraduction() . "." : "Veuillez entrer un message à traduire." ?></p>
    <form action="" method="">
        <input type="text" name="message_a_traduire" placeholder="Indiquez le message à traduire">
        <input type="submit">
    </form>
</body>
</html>