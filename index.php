<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To do Liste</title>
    <link href="index.css" rel="stylesheet" />
</head>
<body>
    <h1> My To-do-List </h1>
    <h3> Liste de mes tâches </h3>
    <div class="spaceLine"> </div>
    
    <!-- Formulaire nouvelle tâche -->
    <form id="newTaskForm" method="post" action="insert.php">
        <input type="text" name="taskText" id="taskText" placeholder="Tâche" required/>
        <input type="text" name="person" id="person" placeholder="Nom" required />
        <select name="priority" id="priority">
            <option value="">Choisir une priorité</option>
            <option value="en cours">En cours</option>
            <option value="fait">Fait</option>
            <option value="bloque">Bloqué</option>
        </select>
        <input type="date" name="taskDate" required/>
        <input type="submit" value="Envoyer" id="formButton">
    </form>
    <div class="spaceLine"> </div>
    <!-- Tableau des tâches -->
    <div>
        <?php include 'datarecovery.php'?>
    </div>
    <div class="buttons">
        <button type="button" id="editButton">Modifier</button>
        <button type="button" id="deleteButton">Supprimer</button>
    </div>
</body>
</html>