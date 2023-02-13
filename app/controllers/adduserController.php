<?php
if (isset($_POST['password']) && isset($_POST['passwordC'])) {
    if ($_POST['password'] === $_POST['passwordC']) {
        if (
            isset($_GET['nom']) &&
            isset($_GET['email']) &&
            isset($_GET['numero']) &&
            isset($_GET['nomC']) &&
            isset($_GET['numeroC'])
        ) {
            $nom = htmlspecialchars(trim($_GET['nom']));
            $email = htmlspecialchars(trim($_GET['email']));
            $numero = htmlspecialchars(trim($_GET['numero']));
            $nomC = htmlspecialchars(trim($_GET['nomC']));
            $numeroC = htmlspecialchars(trim($_GET['numeroC']));
            $password = sha1(htmlspecialchars(trim($_POST['password'])));
            $data = [
                "nom" => $nom,
                "email" => $email,
                "numero" => $numero,
                "nomC" => $nomC,
                "numeroC" => $numeroC,
                "password" => $password,
            ];
            adduser($db, $data);
            header("Location: connexion.php");
        }
    } else {
        $error = "Mots de passe incorrecte";
    }
}
