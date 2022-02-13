<?php
session_start();
echo " <h2> Welcome Mr/Mrs " . $_SESSION['Nom'] . " </h2>";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <table border=1>
        <tr>
            <td> Nom Complet</td>
            <td>E-mail</td>
            <td>CNE</td>
            <td>Image</td>
        </tr>
        <tr>
            <td><?php echo $_SESSION['Nom'] ?></td>
            <td><?php echo $_SESSION['Email'] ?></td>
            <td><?php echo $_SESSION['Cne'] ?></td>
            <td><?php echo "<img src=" . $_SESSION['image'] . ">" ?></td>
        </tr>
    </table>
    <ul class="menu2">
        <li><a href="members.php">Liste d'etudiants</a></li>
        <li><a href="signup.php">Ajouter un etudiant</a></li>
        <li><a href="updatepass.php">Changer le mot de passe</a></li>
        <li><a href="updatemail.php">Changer E-mail</a></li>
        <li><a href="logout.php">Logout</a></li>
    </ul>
</body>
<footer>
    <footer> <b>&copy Ecole Nationale des Sciences Appliquées de Tanger 2021- Tous droits réservés. <b></footer>
</footer>

</html>