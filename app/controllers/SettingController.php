<?php

$data = [
    "id" => $_SESSION['userid']
];

$userinfos = showUser($db, $data);

