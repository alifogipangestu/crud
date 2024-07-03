<?php

try {
    $con = new PDO('mysql:host=localhost;dbname=db_belajar', 'root', '', array(PDO::ATTR_PERSISTENT => true));
} catch (PDOException $e) {
    echo $e->getMessage();
}

include_once 'Auth.php';

$user = new Auth($con);