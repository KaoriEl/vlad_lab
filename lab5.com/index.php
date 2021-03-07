<?php
require_once __DIR__ . "/app/PDO.php";
$data = $pdo->query("SELECT * FROM `user`")->fetchAll(PDO::FETCH_ASSOC);

?>
<table border="1" width="100%" cellpadding="5">
    <tr>
        <th>номер по порядку</th>
        <th>ФИО</th>
        <th>Адрес</th>
        <th>Впишите свое название из варианта.</th>
        <th>Добавить.</th>
        <th><a> Удалить. </a></th>
        <th>Редактировать.</th>

    </tr>
        <?php
            foreach ($data as $k => $v){
                echo "<tr>". "<td>" . $v['ID']  . "</td>" .
                     "<td>" . $v['FIO'] . "</td>" .
                     "<td>" . $v['Adress'] . "</td>" .
                     "<td>" . $v['Prof'] . "</td>" .
                     "<td>" . "<a target='_blank' href='add.php'> Добавить </a>" . "</td>" .
                     "<td>" . "<a target='_blank' href='delete.php?del_id={$v['ID']}'> Удалить </a>" . "</td>" .
                     "<td>" . "<a target='_blank' href='update.php?update_id={$v['ID']}''> Редактировать </a>" . "</td>" .
                     "</tr>";
            }
        ?>
    </tr>


</table>
