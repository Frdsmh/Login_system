<?php
require("database.php");
if (isset($_POST['save'])) {
    if (empty($_POST['email']) || empty($_POST['pass'])) {
        echo (" <h2>Veillez remplir tous les champs ! </h2>");
        require('index.php');
    } else {
        $user = $_POST['email'];
        $pass = $_POST['pass'];
        $req = "SELECT * FROM etudiant WHERE email =  '" . addslashes($user) . "'  AND MotPass = '" . addslashes($pass) . "' ; ";
        $query = mysqli_query($conn, $req);
        if (mysqli_num_rows($query) > 0) {
            $data = mysqli_fetch_assoc($query);
            if (($pass == $data['MotPass']) && ($user == $data['email'])) {
                session_start();
                $_SESSION['Nom'] = $data['nomcomplet'];
                $_SESSION['Email'] = $data['email'];
                $_SESSION['Cne'] = $data['CNE'];
                $_SESSION['image'] = $data['imguser'];
                $_SESSION['passwrd'] = $data['MotPass'];
                header('location:home.php');
            }
        } else {
            echo " <h2>Ce mot de passe ou cet email est invalide. Réesseyez de nouveau</h2>";
            require('index.php');
        }
    }
}
