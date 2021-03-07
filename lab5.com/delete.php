<?php
require_once __DIR__ . "/app/PDO.php";

if (isset($_GET['del_id'])) { //проверяем, есть ли переменная
    $pdo->query("DELETE FROM `user` WHERE `ID` = {$_GET['del_id']}");
    echo "<p>Пользователь удален.</p>";
}