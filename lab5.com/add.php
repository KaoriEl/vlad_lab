<?php
require_once __DIR__ . "/app/PDO.php";

$FIO = $_POST['FIO'];
$adress = $_POST['adress'];
$prof = $_POST['prof'];
$sql = "INSERT INTO `user` (`FIO`, `Adress`, `Prof`) VALUES (:FIO, :adress, :prof)";
$res = query($sql, $params, $pdo);
$params = [
    ':FIO' => $FIO,
    ':adress' => $adress,
    ':prof' => $prof,
];
$stmt = $pdo->prepare($sql);
$stmt->execute($params);

?>

<form action="add.php" method="post">
    <label>ФИО</label>
    <input type="text" name="FIO">
    <label>Адрес</label>
    <input type="text" name="adress">

    <label>Профессия</label>
    <input type="text" name="prof">

    <input type="submit" name="add" value="Добавить в базу" >
</form>


