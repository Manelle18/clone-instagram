<?php
include '../utils/db_connect.php';
session_start();

// Récupère pseudo et password envoyés par le formulaire
$pseudo = $_POST['pseudo'];
$password = $_POST['password'];


setcookie("pseudo", $pseudo, time() + 3600);

// On récupère tout le contenu de la table user
$sqlQuery = 'SELECT * FROM users WHERE pseudo = :pseudo';
$userStatement = $mysqlConnection->prepare($sqlQuery);
$userStatement->execute([
    'pseudo' => $pseudo,
]);
$user = $userStatement->fetch();

echo "Le mot de passe de " . $user['pseudo'] . " est " . $user['password'] . "<br>";
echo "Le mot de passe que vous avez entré est " . $password;

if($password === $user['password'] && !empty($password)) {
    // Connexion autorisée
    header('Location: ../accueil.php');
} else {
    // connexion refusée
    header('Location: ../index.php?error=Le mot de passe est incorrect');
}


// if (password_verify($password, $user['password'])) { $_SESSION['pseudo'] = $pseudo;
//     header('Location: accueil.php');
//     exit();
// } else {
//     $_SESSION['error_message'] = 'Pseudo ou mot de passe incorrect';
//     header('Location: login.php');
//     exit();
// }

/*$pseudo = $_POST['pseudo'];
$password = $_POST['password'];

$query = "SELECT password FROM users WHERE pseudo = '$pseudo'";
$result = mysqli_query($conn, $query);
$user = mysqli_fetch_assoc($result);

if (password_verify($password, $user['password'])) {
    echo "Bonjour";
    // mot de passe est valide
header('Location: /accueil.html');

    exit();
} else {
    // mot de passe est invalide
    echo "Bonjour";
        echo '<script language="javascript">';
        echo 'alert("Pseudo ou/et mot de passe incorrect")';
        echo '</script>';
        header('Location: '.$_SERVER['REQUEST_URI']);
}*/

?>