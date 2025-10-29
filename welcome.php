<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit;
}
?>

<h2>ようこそ、<?= htmlspecialchars($_SESSION['user']) ?> さん！</h2>
<p><a href="logout.php">ログアウト</a></p>
