<?php

$Usuario_autenticado = false;

$email = $_POST['email'];
$pass = $_POST['password'];

//usuarios setados estaticamente
$usuarios = [
    ['email' => 'admin@teste.com', 'password' => 'batataFrita'],
    ['email' => 'admin@teste.com', 'password' => 'batataFrita'],
    ['email' => 'admin@teste.com', 'password' => 'batataFrita'],
    ['email' => 'davi@teste.com', 'password' => 'batataFrita'],
    ['email' => 'admin@teste.com', 'password' => 'batataFrita'],
    ['email' => 'admin@teste.com', 'password' => 'batataFrita'],
];

foreach ($usuarios as $usuario) {
    if ($usuario['email'] === $email && $usuario['password'] === $pass) {
        $Usuario_autenticado = true;
    }

    if ($Usuario_autenticado) {
        echo 'Bem vindo!';
    } else {
        header('Location: http://localhost/php/HelpDask/public/views/index.php?Error=1');
    }
}