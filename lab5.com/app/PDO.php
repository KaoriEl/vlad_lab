<?php
try {
    //Впишите ваши данные
    $pdo = new PDO('mysql:host=localhost;dbname=other', 'root', 'root');
} catch (PDOException $e) {
    print "Ошибка!: " . $e->getMessage();
    die();
}

function query($sql, $params = [], $pdo) {
    // Сначала подготавливаем запрос для его изменений
    $stmt = $pdo -> prepare($sql);
    // Проверяем, есть ли параметры которые мы отправили
    if (!empty($params)) {
        // Цикл для подстановки данных
        foreach ($params as $key => $val) {
            // Подставляем данные
            $stmt -> bindValue(':'.$key, $val);
        }
    }
    // Подготавливаем запрос для выполнения
    $stmt -> execute();
    // Возвращаем запрос
    return $stmt;
}
?>

