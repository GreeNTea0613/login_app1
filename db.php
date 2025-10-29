<?php
$host = 'localhost';
$db   = 'login_app';
$user = 'root';  // ← 環境に合わせて変更
$pass = '';      // ← 環境に合わせて変更
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (PDOException $e) {
    die('接続失敗: ' . $e->getMessage());
}
