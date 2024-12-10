<?php

$conectare = mysqli_connect('localhost', 'root', '', 'baza de date clieni');

if(!$conectare) {
    die ('Conectarea nu a reusit!');
}