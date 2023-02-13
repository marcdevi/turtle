<?php
if (
    isset($_GET['nom']) &&
    isset($_GET['email']) &&
    isset($_GET['numero']) &&
    isset($_GET['nomC']) &&
    isset($_GET['numeroC'])
) {
    header("Location: inscription.php?nom={$_GET['nom']}&email={$_GET['email']}&numero={$_GET['numero']}&nomC={$_GET['nomC']}&numeroC={$_GET['numeroC']}");
} else {
    if (isset($_POST['submit'])) {
        $error = "Extension invalide";
    }
};
