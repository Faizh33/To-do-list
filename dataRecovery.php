<?php
    $dsn = 'mysql:host=localhost;dbname=todolist_db';
    $login = 'root';
    $password = '';
    $pdo = new PDO($dsn, $login, $password);

    $request = 'SELECT * FROM tasks ORDER BY id';
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

      while($data = $result->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr>";
        echo "<td><input type='checkbox' name='delete[]' value='".$data['id']."' /></td>";
        echo "<td>".$data['taskText']."</td>";
        echo "<td>".$data['person']."</td>";
        echo "<td>".$data['priority']."</td>";
        echo "<td>".$data['taskDate']."</td>";
        echo "</tr>";
      };
    };
    ?>
        </tbody>
      </table>
    
