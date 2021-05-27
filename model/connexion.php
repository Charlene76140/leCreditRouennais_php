<?php
    try {
        $db = new PDO('mysql:host=localhost;dbname=banque_php;charset=utf8', 'root', '');
    }
    catch(Exception $error) {
        die($error->getMessage());
    }
?>