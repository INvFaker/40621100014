<?php
include 'logic.php'
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>To-Do List PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
    <div class="container mt-5">
        <h2 class="mb-4">To-Do List</h2>

        <form method="post" class="input-group mb-3">
            <input type="text" name="todo" class="form-control" placeholder="Tambahkan todo baru">
            <button class="btn btn-primary" type="submit">Tambah</button>
        </form>

        <ul class="list-group" id="todoList">
            <?php foreach ($_SESSION['todos'] as $i => $todo): ?>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <div class="form-check">
                        <input class="form-check-input me-2" type="checkbox"
                            onchange="window.location='?toggle=<?= $i ?>'"
                            <?= $todo['done'] ? 'checked' : '' ?>>
                        <span style="<?= $todo['done'] ? 'text-decoration: line-through;' : '' ?>">
                            <?= htmlspecialchars($todo['text']) ?>
                        </span>
                    </div>
                    <a href="?delete=<?= $i ?>" class="btn btn-danger btn-sm">Hapus</a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</body>

</html>