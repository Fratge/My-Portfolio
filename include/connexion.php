<?php

    try {
        $connexion = new PDO("mysql:host=localhost; dbname=contact; charset=utf8", "root", "");
        $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    } catch (Exception $e) {
        $e->getMessage();
    }

?>