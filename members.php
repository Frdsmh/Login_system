<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>All Members</title>
</head>

<body>

    <?php
    include "database.php";
    $req = "SELECT * FROM etudiant ORDER BY id";
    $sql = mysqli_query($conn, $req);
    printf("<h2> List of all Students </h2>");
    ?>
    <a href="logout.php>Déconnexion</a>
    <?php
    echo "<table border=1>";
    echo "<tr ><td> Nom et Prenom </td> <td> E-mail </td> <td> CNE</td> <td> Images </td> </tr> ";
    foreach ($sql as $row) {
        echo "<tr> <td>" . $row['nomComplet'] . "</td> ";
        echo "<td >" . $row['email'] . "</td> ";
        echo "<td >" . $row['CNE'] . "</td>";
        echo " <td> <img src=" . $row['imguser'] . " </td> </tr> ";
    }
    echo "</table>";

    ?>


</body>

</html>