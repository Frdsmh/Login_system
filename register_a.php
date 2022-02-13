<?php
require("database.php");
if (isset($_POST['save'])) {
    require("database.php");
    if (isset($_POST['save'])) {
        if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['pass']) && !empty($_POST['cne']) && !empty($_POST['file'])) {
            $nom = $_POST['name'];
            $email = $_POST['email'];
            $pass = $_POST['pass'];
            $cne = $_POST['cne'];
            $photo = $_FILES['file']['name'];
            $upload = "image/" . $photo;
            move_uploaded_file($_FILES['file']['tmp_name'], $upload);
            $sql = "INSERT INTO etudiant(nomcomplet,email,MotPass,CNE,imguser)
             VALUES('$nom','$email','$pass','$cne','$photo') ";
            $data = mysqli_query($conn, $sql);
            if ($data) {
                header("Location:index.php");
            } else {
                echo "<h2 align=center > Tous les champs sont obligatoires ! </h2>";
            }
        }
    }
}
