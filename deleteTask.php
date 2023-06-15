<?php

$dsn = 'mysql:host=localhost;dbname=todolist_db';
$login = 'root';
$password = '';

try {
    $pdo = new PDO($dsn, $login, $password);
    $delete = $_POST['delete'];
    print_r($delete);
    if (sizeof($delete) == 0) {
        echo 'erreur';
    } else {
        foreach ($delete as $valeur){
            $deleteRequest = 'DELETE FROM tasks WHERE id = {$valeur}';
            $selectResult = $pdo->prepare($deleteRequest);
            $selectResult->execute();
            $selectResult->fetch();
            }
        }
} catch(Exception $e) {
    echo 'Connexion à la base de donnée impossible';
}


