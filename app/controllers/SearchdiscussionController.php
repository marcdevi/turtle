<?php

$ville = showDisc($db);

if(isset($_GET['search'])){
    $search = htmlspecialchars(trim($_GET['search']));
}