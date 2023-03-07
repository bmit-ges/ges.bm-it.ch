<?php

    // Define the correct username and hashed password
    $correct_username = "Admin";
    $correct_password_hash = "9a9c9a9a628de4aae15e5de600a73fcaddd566b82f68d1c07c4f9ae710c72da8913df0498e068bc97c53cfc6542af4dd8459ac8c2a8ab98970cf39c9b242b38a";

    // Get the submitted username and password
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Hash the submitted password
    $password_hash = hash('sha512', $password);

    // Check if the username and password are correct
    if ($username === $correct_username && $password_hash === $correct_password_hash) {
        // Redirect to index.php with a success message
        header('Location: certificate.php');
        exit;
    } else {
        // Redirect to index.php with a failure message
        header('Location: index.php?login=failed');
        exit;
    }

?>