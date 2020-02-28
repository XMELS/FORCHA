<?php
session_start();
if (empty($_SESSION['login']) || empty($_SESSION['id']) || $_SESSION['id'] != 3) {
    header('HTTP/1.x 404 Not Found');
    header('Status: 404 Not Found');
    exit;
}
