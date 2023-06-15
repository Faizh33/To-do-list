<?php
    $dsn = 'mysql:host=localhost;dbname=todolist_db';
    $login = 'root';
    $password = '';
    $pdo = new PDO($dsn, $login, $password);

    $request = 'SELECT taskText , person, priority, taskDate FROM tasks ORDER BY id';
    $result = $pdo->query($request);

    if(!$result) {
      echo "La récupération des données à échouée!";
    } else {

      ?> 
      <table>
        <thead id="tableHeadTasks">
            <tr>
                <th></th>
                <th>Tâche</th>
                <th>Personnes</th>
                <th>Statut</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
      <?php

      while($ligne = $result->fetch(PDO::FETCH_NUM)) {
        echo "<tr>";
        echo "<td><input type='checkbox' name='check[]' value='id' /></td>";
        foreach ($ligne as $valeur) {
          echo "<td>$valeur</td>";
        }
        echo "</tr>";
      }; 
    };
    ?>
        </tbody>
      </table>
    
