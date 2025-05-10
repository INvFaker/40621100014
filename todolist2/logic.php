<?php
session_start();

// cek dan inisiasi array tasks
if (!isset($_SESSION['tasks'])) {
    $_SESSION['tasks'] = [];
}

// perubahan status
if (isset($_GET['toggle'])) {
    $index = $_GET['toggle'];
    if (isset($_SESSION['tasks'][$index])) {
        $_SESSION['tasks'][$index]['status'] = !$_SESSION['tasks'][$index]['status'];
    }
    header("Location: index.php");
    exit;
}

// hapus task
if (isset($_GET['delete'])) {
    $index = $_GET['delete'];
    if (isset($_SESSION['tasks'][$index])) {
        array_splice($_SESSION['tasks'], $index, 1);
    }
    header("Location: index.php");
    exit;
}

// tambah task
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['task'])) {
    $taskText = trim($_POST['task']);
    if ($taskText !== '') {
        $_SESSION['tasks'][] = ['text' => $taskText, 'status' => false];
    }
    header("Location: index.php");
    exit;
}
