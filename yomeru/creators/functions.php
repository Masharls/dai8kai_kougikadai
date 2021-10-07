<?php
// データベースに接続
function connectDB() {
    $param = 'mysql:dbname=fake_instagram;charset=utf8;port=3306;host=localhost';
    try {
        $pdo = new PDO($param, 'root', '');
        return $pdo;

    } catch (PDOException $e) {
        exit($e->getMessage('error'));
    }
}
?>