<?php

require 'conectare.php';

if (!empty($_POST['nume']) && !empty($_POST['prenume']) && !empty($_POST['email']) && !empty($_POST['password']) && isset($_POST['nume']) && isset($_POST['prenume']) && isset($_POST['email']) && isset($_POST['password'])) {

    $nume = $_POST['nume'];
    $prenume = $_POST['prenume'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $password_hashed = password_hash ($password, PASSWORD_DEFAULT);

    $sql = "SELECT email FROM clienti WHERE email='$email'";
    $result = mysqli_query($conectare, $sql);
    $check = mysqli_num_rows($result);

    if ($check > 0) {
        header("Location: ../singup.php?info=exista");
        die();
    } else {
        $sql = "INSERT INTO clienti (nume, prenume, email, password) VALUES ('$nume', '$prenume', '$email', '$password_hashed')";
        $result = mysqli_query($conectare, $sql);
        
        header ("Location: ../singup.php?info=ok");
    }
    
} else {
    header ("Location: ../singup.php?info=eroare");
}

