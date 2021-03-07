<link rel="stylesheet" href="style.css">
<h2> 2. Поле ввода - ФИО; Множественный выбор - Профессия [Инженер, Механик, Менеджер, Грузчик]; Переключатель - Пол[Мужской, Женский]; Флажок - Трудоустроен;</h2>
<form action="vlad.php" method="POST">
    <ul>
        <li>
            <h2>Отчет</h2>
            <span class="required_notification"> *обязательные поля</span>
        </li>
        <li>
            <p>ФИО <input type="text" name="FIO" required /></p>
        </li>

        <li>
            <p>Профессия:
                <select name="prof[]" multiple>
                    <option name="prof">Инженер</option>
                    <option>Механик</option>
                    <option name="prof">Менеджер</option>
                    <option>Грузчик</option>
                </select>
            </p>
        </li>
        <li>
            <p>Мужской: <input type="radio" value="Мужской" name="gender"> </p>
        </li>
        <li>
            <p>Женский: <input type="radio" value="Женский" name="gender"> </p>
        </li>
        <li>
            <p>Трудоустроен:<input type="checkbox" name="work" value="Трудоустроен"> </p>
        </li>
        <p> <button  class="submit" type="submit"> Отравить отчет</button> </p>
    </ul>
</form>
<h1> <a href="report.txt"> Отчет </a> </h1>


<!--2. Поле ввода - ФИО; Множественный выбор - Профессия [Инженер, Механик, Менеджер, Грузчик]; Переключатель - Пол[Мужской, Женский]; Флажок - Трудоустроен; -->
<?php

function save_report(){
    $prof = $_POST['prof'];
    $fio = $_POST['FIO'];
    $gender = $_POST['gender'];
    $work = $_POST['work'];

    $fd = fopen("report.txt", 'w') or die("не удалось создать файл");
    if (isset($prof)){
        if (isset($work)){
            $comma_separated = implode(",", $prof);
            $str = "ФИО: "  . $fio . "\n" . "Профессия: " . $comma_separated . "\n" . "Пол: " . $gender . "\n" . "Трудоустроен: Да";
            fwrite($fd, $str);
            fclose($fd);
        }else{
            $comma_separated = implode(",", $prof);
            $str = "ФИО: "  . $fio . "\n" . "Профессия: " . $comma_separated . "\n" . "Пол: " . $gender . "\n" . "Трудоустроен: Да";
            fwrite($fd, $str);
            fclose($fd);
        }
    }



}

save_report();

?>