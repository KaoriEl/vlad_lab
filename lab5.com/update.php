<?php
require_once __DIR__ . "/app/PDO.php";

$sql = "SELECT * FROM `user` WHERE `ID`=:id";
// Параметры
$params = array(
    'id' => $_GET['update_id']
);
// Запускаем нашу функцию
$res = query($sql, $params, $pdo);
// Получаем данные
$res = $res -> fetchAll(PDO::FETCH_ASSOC);

?>

<form method="post">
    <label>ФИО</label>
    <input type="text" name="FIO" value=" <?php echo $res[0]['FIO'] ?>">
    <label>Адрес</label>
    <input type="text" name="adress" value="<?php echo $res[0]['Adress'] ?>">

    <label>Впишите свое название из варианта.</label>
    <input type="text" name="prof" value="<?php echo $res[0]['Prof'] ?>">

    <input type="submit" name="add" value="Обновить базу" >
</form>

<?php
$id = $_GET['update_id'];
$name = $_POST['FIO'];
$adress = $_POST['adress'];
$prof = $_POST['prof'];
$query = "UPDATE `user` SET `FIO` = :fio, `Adress` = :adress, `Prof` = :prof WHERE `ID` = :id";
$params = [
    'id' => $id,
    'fio' => $name,
    'adress' => $adress,
    'prof' => $prof,
];
$stmt = $pdo->prepare($query);
$stmt->execute($params);
?>
