<?php

session_start();
if (!empty($_POST['tarefa'])) {
    $_SESSION['tarefas'][] = $_POST['tarefa'];
}

header("Location: index.php");
exit;