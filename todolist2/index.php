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
            <input type="text" name="task" class="form-control" placeholder="Tambahkan tugas baru">
            <button class="btn btn-primary" type="submit">Tambah</button>
        </form>

        <ul class="list-group" id="taskList">
            <?php foreach ($_SESSION['tasks'] as $i => $task): ?>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <div class="form-check">
                        <input class="form-check-input me-2" type="checkbox"
                            onchange="window.location='?toggle=<?= $i ?>'"
                            <?= $task['status'] ? 'checked' : '' ?>>
                        <span style="<?= $task['status'] ? 'text-decoration: line-through;' : '' ?>">
                            <?= ($task['text']) ?>
                        </span>
                    </div>
                    <div class="d-flex align-items-center gap-2">
                        <span class="badge bg-<?= $task['status'] ? 'success' : 'secondary' ?>">
                            <?= $task['status'] ? 'Selesai' : 'Belum Selesai' ?>
                        </span>
                        <a href="?delete=<?= $i ?>" class="btn btn-danger btn-sm">Hapus</a>
                    </div>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</body>

</html>