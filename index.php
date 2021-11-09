<?php
session_start();

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
if($nome) {
    echo 'Olá, '.$nome.' - <a href="login.php">Sair</a>';
} else {
    header('Location:login.php');
}