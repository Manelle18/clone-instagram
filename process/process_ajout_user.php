<?php
    // Connexion BDD (include)
include '../utils/db_connect.php';

$pseudo = $_POST['pseudo'];
$password = $_POST['password'];

    // Requete INSERT
    echo "bjr";

    try {
       
        $sqlUtilisateur = "INSERT INTO users (`id`, `pseudo`, `password`) VALUES (NULL, '$pseudo', '$password')";
        $newUser = $mysqlConnection->prepare($sqlUtilisateur);
        $newUser->execute();
        $users = $newUser->fetch();
    header('Location: http://localhost:81/TP-clone-instagram/html/inscription.html');
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
    

    // Redirection
    
    ?>