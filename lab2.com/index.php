<h2> Определить, будет ли зачислен абитуриент в студенты по результатам вступительных экзаменов, если известны: </h2>
<form action="index.php" method="GET">
    <h2>Лучший универ вселенной</h2>
    <p>проходной балл: <input type="text" name="dream" /></p>
    <h2>Ты</h2>
    <p>Русский <input type="text" name="russian" /></p>
    <p>Математика <input type="text" name="math" /></p>
    <p>Информатика <input type="text" name="inform" /></p>
    <p><input type="submit"/> </p>
</form>

<h2><?php echo true_or_false(); ?></h2>


<!-- 9. Определить, продажа какой из двух валют составила большую прибыль, если известны:  -->
<?php

function your_number(){
    $russian = $_GET['russian'];
    $math = $_GET['math'];
    $inform = $_GET['inform'];
    $all = $math+$russian+$inform;
    return $all;
}

function true_or_false(){
    $dream = $_GET['dream'];
    if (your_number() > $dream){
        return "Вы крутой, ряльна, прошли.";
    }elseif (your_number() < $dream){
        return "Увы, вам на завод";
    }elseif (your_number() == $dream && your_number() != 0 ){
        return "Вы прошли прям на тоненького";
    }else{
        return "Недостаточно данных для выдачи результаты";
    }
}

your_number();
true_or_false();
?>