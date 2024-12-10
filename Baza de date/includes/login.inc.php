<?php

session_start();
require 'conectare.php';

if (isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['password']) && !empty($_POST['password'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];

    $_sql = "SELECT * FROM  clienti WHERE email='$email'";
    $result = mysqli_query($_conectare, $sql);
    $row = $result->fetch_assoc();
    $hash = $row['password'];

    $check = password_verify($password, $hash);

    if($check == 0) {
        header("Location: ../index.php?info=gresit");
        die();
    } else {

        $sql = "SELECT * FROM clienti WHERE email='$email' AND password='$hash'";
        $result = mysqli_query($_conectare, $sql);

        if (!$row = $result->fetch_assoc()) {
            echo 'Parola sau emailul nu se potriveste.';
        } else {
            $_SESSION['id'] = $row['id'];
            $_SESSION['nume'] = $row['nume'];
            $_SESSION['prenume'] = $row['prenume'];
            $_SESSION['email'] = $row['email'];
        }

        header("Location: ../index.php");
    }
}