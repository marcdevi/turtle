<?php

$user = $_SESSION['userid'];

$ville = $_GET['ville'];

$data = [
    'ville' => $ville
];

$messages = getMsgByVille($db, $data);

if (isset($_POST['message'])) {
    $nmessage = $_POST['message'];
    $datas = [
        'ville' => $ville,
        'id_user' => $user,
        'message' => $nmessage
    ];

    sendmsg($db, $datas);
}