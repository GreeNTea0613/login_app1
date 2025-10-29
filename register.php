<?php
require 'db.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = trim($_POST['username']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $stmt = $pdo->prepare("INSERT INTO users (username, password_hash) VALUES (?, ?)");
    try {
        $stmt->execute([$username, $password]);
        echo "登録が完了しました。<a href='login.php'>ログインへ</a>";
        exit;
    } catch (PDOException $e) {
        echo "エラー: ユーザー名が既に使用されています。";
    }
}
?>

    <form method="POST">
        <h2>ユーザー登録</h2>
        ユーザー名: <input type="text" name="username" required><br>
        パスワード: <input type="password" name="password" required><br>
        <button type="submit">登録</button>
    </form>
    <a href="login.php">ログインへ</a>

