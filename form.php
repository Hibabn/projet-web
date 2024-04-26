<?php

// Connexion à la base de données (à remplacer par vos informations de connexion)
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "vetocare";

// Vérifier si les données POST existent
// Récupérer les valeurs du formulaire
if(isset($_POST['OK'])){
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $telephone = $_POST['num'];
    $email = $_POST['mail'];
    $objet = $_POST['objet'];
    $message = $_POST['message'];
}
?>
    

    

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Vérifier la connexion
    if ($conn->connect_error) {
        die("La connexion a échoué : " . $conn->connect_error);
    }

    // Préparer et exécuter la requête SQL pour insérer les données dans la table
    $sql = "INSERT INTO form (nom, prenom, num, email, objet, msg) VALUES ('$nom', '$prenom', '$telephone', '$email', '$objet', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "Le formulaire a été soumis avec succès.";
    } else {
        echo "Erreur lors de la soumission du formulaire : " . $conn->error;
    }

    // Fermer la connexion à la base de données
    $conn->close();
}
?>
