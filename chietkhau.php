
<form method="post" style="border: 1px solid black;width: 250px;height: 100px">
    <h1>Tính chiết khấu</h1>
    <input type="text" name="money">
    <input type="submit" value="Submit">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $money = (float)$_POST["money"];
    $tien = 0;
    if ($money >= 100000 && $money < 500000){
        $tien = $money * 0.99;
    }
    elseif ($money >= 500000 && $money < 3000000){
        $tien = $money * 0.98;
    }
    elseif($money >= 3000000){
        $tien = $money * 0.95;
    }else{
        $tien = $money;
        echo "khong chiet khau ";
    }
    echo "bạn có ".$money. " sau khi chiết khấu còn ".$tien;
}