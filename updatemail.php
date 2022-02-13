<?php
session_start();
if (isset($_POST["save"])) {
    if (!empty($_POST['up_email']) && !empty($_POST['rup_email'])) {
        if ($_POST['up_email'] == $_POST['rup_email']) {
            require('database.php');
            $email = $_POST['up_email'];
            $sql = " UPDATE etudiant  SET email = '" . addslashes($email) . "'  WHERE MotPass = '" . addslashes($_SESSION['Email']) . "' ;";
            $query = mysqli_query($conn, $sql);
            header('location:index.php');
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
    <title>Update email</title>
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
    <form action="updatemail.php" method="post" enctype="multipart/form-data">
        <h2>Changer E-mail</h2>
        <div class="contenu">
            <table>
                <tr>
                    <td><input type="email" name="up_email" placeholder="changer l'email"></td>
                </tr>
                <tr>
                    <td><input type="email" name="rup_email" placeholder="repeter le nouveau email"></td>
                </tr>
                <tr>
                    <td><input type="submit" name="save" value="Modifier"></td>
                </tr>
            </table>
        </div>
    </form>

</body>

</html>