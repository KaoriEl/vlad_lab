<h2> Определить, продажа какой из двух валют составила большую прибыль, если известны: </h2>
<form action="vlad.php" method="GET">
    <h2>--- RU ---</h2>
        <p>курс покупки: <input type="text" name="purchase_rateRU" /></p>
        <p>курс продажи: <input type="text" name="selling_rateRU" /></p>
        <p>количество продаж : <input type="text" name="number_salesRU" /></p>
    <h2>--- $ ---</h2>
        <p>курс покупки: <input type="text" name="purchase_rate$" /></p>
        <p>курс продажи: <input type="text" name="selling_rate$" /></p>
        <p>количество продаж: <input type="text" name="number_sales$" /></p>
    <p><input type="submit"/> </p>
</form>
<p>Чистая прибыль рубля = <?php echo ru_stonks(); ?> </p>
<p>Чистая прибыль доллара = <?php echo dollar_stonks(); ?> </p>
<h2><?php echo more_stonks_money(); ?></h2>


<!-- 9. Определить, продажа какой из двух валют составила большую прибыль, если известны:  -->
<?php

function ru_stonks(){
    $purchase_rateRU = $_GET['purchase_rateRU'];
    $selling_rateRU = $_GET['selling_rateRU'];
    $number_salesRU = $_GET['number_salesRU'];
    $stonks = ($selling_rateRU - $purchase_rateRU) * $number_salesRU;
    return $stonks;
}

function dollar_stonks(){
    $purchase_rate_dollar = $_GET['purchase_rate$'];
    $selling_rate_dollar = $_GET['selling_rate$'];
    $number_sales_dollar = $_GET['number_sales$'];
    $stonks = ($selling_rate_dollar - $purchase_rate_dollar) * $number_sales_dollar;
    return $stonks;
}

function more_stonks_money(){
   if (dollar_stonks() > ru_stonks()){
       return "Доллар более прибыльный";
   }elseif (dollar_stonks() < ru_stonks()){
       return "Рубль более прибыльный";
   }
   elseif(dollar_stonks() == ru_stonks()){
       return "Нет более прибыльной валюты";
   }else{
       return "Недостаточно данных для анализа";
   }

}

dollar_stonks();
ru_stonks();
more_stonks_money();


?>