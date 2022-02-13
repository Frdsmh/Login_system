<?php
session_start();
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

<body>
    <form action="updatephoto.php" method="post" enctype="multipart/form-data">
        <h2>Changer Email</h2>
        <div class="contenu">
            <table>
                <tr>
                    <td><input type="file" name="up_img" placeholder="changer la photo"></td>
                </tr>
                <tr>
                    <td><input type="submit" value="Modifier"></td>
                </tr>
            </table>
        </div>
    </form>

</body>

</html>