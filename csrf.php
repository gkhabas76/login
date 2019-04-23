<?php 

if (!isset($_SESSION['token'])) {
    $_SESSION['token'] = bin2hex(random_bytes(32));
    }
    $token = $_SESSION['token'];

    if (isset($_POST['token'])) {
        if (hash_equals($_SESSION['token'], $_POST['token'])) {
         //
        } 
        else {
         //
        }
}
