<?php

$dsn = 'mysql:host=localhost;dbname=todolist_db';
$password = '';
$login = 'root';
$taskText = $_POST['taskText'];
$person = $_POST['person'];
$priority = $_POST['priority'];
$taskDate = $_POST['taskDate'];

try {
  //require_once 'User.php';
  $pdo = new PDO($dsn, $login, $password);
  $statement = $pdo->prepare('INSERT INTO tasks(taskText, person, priority, taskDate) VALUES(:taskText, :person, :priority, :taskDate)');
  $statement->bindValue(':taskText', $taskText);
  $statement->bindValue(':person', $person);
  $statement->bindValue(':priority', $priority);
  $statement->bindValue(':taskDate', $taskDate);

  if ($statement->execute()) {
    header('Location: index.php');
  }
} catch(PDOException $e) {
    echo 'Échec de la connexion : ligne' . $e->getLine();
}


//pour récupérer des données :
//dans le try
//foreach ($pdo->query('SELECT name, email FROM users', PDO::FETCH_ASSOC) as $user) {
//  echo $user['name].$user['email'].'<br>';
//}

//$search = 'D\'%';
//$sql = 'SELECT name, email FROM users WHERE name LIKE ? {ou :search}';
//$pdoStatement = $pdo->prepare($sql);
//$pdoStatement->bindValue(1, $search, PDO::PARAM_STR)    ==> liaison entre (? ou :search) et $search;


//if($pdoStatement->execute()){
  //Requete ok
  //while ($user = $pdoStatement->fetch(PDO::FETCH_ASSOC)) {
//    echo $user['name'].' '.$user['email'].'<br>';
//  }
//} else {
//  Erreur
//  var_dump($pdoStatement->errorInfo()); (a loggué)
//};