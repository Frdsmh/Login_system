<?php
session_start();
if (isset($_POST["save"])) {
    if (!empty($_POST['up_pass']) && !empty($_POST['rup_pass'])) {
        if ($_POST['up_pass'] == $_POST['up_repeat_pass']) {
            require('database.php');
            $pass = $_POST['up_pass'];
            $sql = " UPDATE etudiant  SET MotPass = '" . addslashes($pass) . "'  WHERE MotPass = '" . addslashes($_SESSION['passwrd']) . "' ;";
            $query = mysqli_query($conn, $sql);

            header('location:index.php');
            echo "<h2> Changement réussie</h2>";
        } else {
            echo "<h2>Le nouveau email et l'ancien ne sont pas semblables </h2>";
        }
    } else {
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update password</title>
    <link rel="stylesheet" href="style.css">
</head>
<style>
    .contenu {
        height: 260px;
        width: 400px;
        background-color: white;
        display: flex;
        margin: auto;
        align-items: center;
        justify-content: center;
        border-radius: 5px;
    }

    input {
        width: 90%;
        border: none;
        margin-bottom: 5px;
    }
</style>

<body>
    <form action="updatepass.php" method="post" enctype="multipart/form-data">
        <h2>Changer mot de passe</h2>
        <div class="contenu">
            <table>
                <tr>
                    <td><input type="password" name="up_pass" placeholder="changer le mot de passe"></td>
                </tr>
                <tr>
                    <td><input type="password" name="rup_pass" placeholder="Repeter le nouveau mot de passe"></td>
                </tr>
                <tr>
                    <td><input type="submit" name="save" value="Modifier"></td>
                </tr>
            </table>
        </div>
    </form>

</body>

</html>