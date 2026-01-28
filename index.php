<?php
session_start();

if (!isset($_SESSION['tarefas'])) {
    $_SESSION['tarefas'] = [];
}

include 'includes/header.php';
?>

<h2>Lista de Tarefas</h2>

<form action="add.php" method="POST">
    <input type="text" name="tarefa" placeholder="Digite uma tarefa" required>
    <button type="submit">Adicionar</button>
</form>

<ul>
    <?php foreach ($_SESSION['tarefas'] as $index => $tarefas):?>
    <li>
        <?= htmlspecialchars($tarefas)?>
        <a href="remove.php?index=<?= $index ?>">❌</a>
    </li>
    <?php endforeach; ?>
</ul>

<?php include 'includes/footer.php'; ?>

