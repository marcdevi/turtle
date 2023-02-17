<?php 

session_start();

require '../../vendor/autoload.php';

use App\Database;

$db = new Database('turtle');

require '../../app/models/function.php';

session_destroy();
header('location: ../connexion.php');


?>