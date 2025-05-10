<?php
session_start();

if (!isset($_SESSION['todos'])) {
    $_SESSION['todos'] = [];
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['todo'])) {
    $todoText = trim($_POST['todo']);
    if ($todoText !== '') {
        $_SESSION['todos'][] = ['text' => $todoText, 'done' => false];
    }
}

if (isset($_GET['toggle'])) {
    $index = $_GET['toggle'];
    if (isset($_SESSION['todos'][$index])) {
        $_SESSION['todos'][$index]['done'] = !$_SESSION['todos'][$index]['done'];
    }
}

if (isset($_GET['delete'])) {
    $index = $_GET['delete'];
    if (isset($_SESSION['todos'][$index])) {
        array_splice($_SESSION['todos'], $index, 1);
    }
}
