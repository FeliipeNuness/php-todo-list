<?php
session_start();

if (isset($_GET['index'])) {
    $index = (int) $_GET['index'];

    if (isset($_SESSION['tarefas'][$index])) {
        unset($_SESSION['tarefas'][$index]);

        
        $_SESSION['tarefas'] = array_values($_SESSION['tarefas']);
    }
}

header("Location: index.php");
exit;
    