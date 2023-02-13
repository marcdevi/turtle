<?php
if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = htmlspecialchars(trim($_POST['email']));
    $password = sha1(htmlspecialchars(trim($_POST['password'])));
    $data = [
        "email" => $email,
        "password" => $password
    ];

    $verif2 = verifiuser($db, $data);

    if ($verif2) {
        $_SESSION['userid'] = $verif2[0]['id'];

        header('location: user/index.php');
    }
    $error = 'Email ou mots de passe incorrect';
}
