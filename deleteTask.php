<?php

$dsn = 'mysql:host=localhost;dbname=todolist_db';
$login = 'root';
$password = '';

try {
    $pdo = new PDO($dsn, $login, $password);
    $delete = $_POST['delete'];
    if (sizeof($delete) == 0) {
        echo 'erreur';
    } else {
        foreach ($delete as $valeur){
            $deleteRequest = 'DELETE FROM tasks WHERE id = :valeur';
            $selectResult = $pdo->prepare($deleteRequest);
            $selectResult->bindParam(':valeur', $valeur, PDO::PARAM_INT);
            $selectResult->execute();
            $selectResult->fetch();
            header('Location: index.php');
            }
        }
} catch(Exception $e) {
    echo 'Connexion à la base de donnée impossible';
}


