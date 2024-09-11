<?php
session_start();
// membatasi login
if (!isset($_SESSION['login'])) {
    // Jika tidak, redirect ke halaman login
    header("Location: login.php");
    exit;
} 

$_SESSION = [];

session_unset();
session_destroy();
header("Location:login.php");