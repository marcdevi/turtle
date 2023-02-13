<?php

function adduser($db, $data) {
    $stmt = $db->getPDO()->prepare('INSERT INTO user (nom, email, numero, numeroC, nomC, password) VALUES (:nom, :email, :numero, :numeroC, :nomC, :password)');
    return $stmt->execute($data);
}



function verifiAdmin($db, $data){
    $sql = 'SELECT * FROM admin WHERE email = :email AND password = :password';
    $query = $db->getPDO()->prepare($sql);
    $query->execute($data);
    $data = $query->fetchAll(PDO::FETCH_ASSOC);
    return $data;
}

function verifiuser($db, $data){
    $sql = 'SELECT * FROM user WHERE email = :email AND password = :password';
    $query = $db->getPDO()->prepare($sql);
    $query->execute($data);
    $data = $query->fetchAll(PDO::FETCH_ASSOC);
    return $data;
}

function searchDisc($db, $data){
    $sql = 'SELECT * FROM user WHERE ';
    $query = $db->getPDO()->prepare($sql);
    $query->execute($data);
    $data = $query->fetchAll(PDO::FETCH_ASSOC);
    return $data;
}

function showDisc($db){
    $sql = 'SELECT * FROM ville';
    $query = $db->getPDO()->prepare($sql);
    $query->execute();
    $data = $query->fetchAll(PDO::FETCH_ASSOC);
    return $data;
}

function isConnected(){
    if(isset($_SESSION['useradmin']) && $_SESSION['useradmin'] == true || isset($_SESSION['userid'])){
        return true;
    }else{
        return false;
    }
}

?>