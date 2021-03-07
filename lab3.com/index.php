<link rel="stylesheet" href="style.css">
<form class="contact_form"  action="index.php" method="POST">
    <ul>
        <li>
            <h2>8. Определить, хватит ли имеющейся суммы S на покупку N-го количества товара (при известной цене товара)</h2>
            <span class="required_notification"> *обязательные поля</span>
        </li>
        <li>
            <p>Всего денег <input type="text" name="sum" required /></p>
            <p>Количество товара <input type="text" name="qty" required /></p>
            <p>Цена товара <input type="text" name="price" required /></p>
        </li>
        <p> <button  class="submit" type="submit">Посчитать</button> </p>
    </ul>
</form>
<h1> <?php echo logic() ?>  </h1>


<!-- 8. Определить, хватит ли имеющейся суммы S на покупку N-го количества товара (при известной цене товара) -->
<?php

function logic(){
    $sum = $_POST['sum'];
    $qty = $_POST['qty'];
    $price = $_POST['price'];
    $res = $sum - $qty * $price ;

    if ($res >=0){
        echo "У вас еще останется:" . $res . "монет";
        echo "<br>";
        echo "<br>";
        return "Экономическая победа";
    }else{
        echo "Вам нужно еще:" . abs($res) . "монет";
        echo "<br>";
        echo "<br>";
        return "Нужно больше золота...";
    }


}



?>