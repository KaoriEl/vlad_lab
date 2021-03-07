<link rel="stylesheet" href="style.css">
<h2> Поле ввода - ФИО; Выпадающий список - Профессия [Инженер, Механик, Менеджер,Грузчик]; Переключатель - Пол[Мужской,Женский]; Флажок - Трудоустроен;</h2>
<form class="contact_form"  action="index.php" method="POST">
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
                <select name="prof">
                    <option>Инженер</option>
                    <option>Механик</option>
                    <option>Менеджер</option>
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


<!-- 1. Поле ввода - ФИО; Выпадающий список - Профессия [Инженер, Механик, Менеджер,Грузчик]; Переключатель - Пол[Мужской,Женский]; Флажок - Трудоустроен;  -->
<?php

function save_report(){
    $prof = $_POST['prof'];
    $fio = $_POST['FIO'];
    $gender = $_POST['gender'];
    $work = $_POST['work'];

    $fd = fopen("report.txt", 'w') or die("не удалось создать файл");

   if (isset($work)){
       $str = "ФИО: "  . $fio . "\n" . "Профессия: " . $prof . "\n" . "Пол: " . $gender . "\n" . "Трудоустроен: Да";
       fwrite($fd, $str);
       fclose($fd);
   }else{
       $str = "ФИО: "  . $fio . "\n" . "Профессия: " . $prof . "\n" . "Пол: " . $gender . "\n" . "Трудоустроен: Нет";
       fwrite($fd, $str);
       fclose($fd);
   }


}

save_report();

?>