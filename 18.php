<?php
// Q18: تابعی بنویسید که عددی را از ورودی دریافت کند و تعداد
// اعداد زوج از 1 تا ان عدد را بررسی کند.
// در صورتی هم که عدد ورودی کاربر منفی یا صفر بود خروجی صفر باشد.

if (isset($_POST["send"])) {
    $n = $_POST["num"];
    $k = 0;
    for ($i = 1; $i <= $n; $i++) {
        if ($i % 2 == 0) $k++;
    }
    echo $k . "<br>";
}
?>

<form action="" method="post">
    <input type="number" name="num" placeholder="enter the number">
    <input type="submit" value="send" name="send">
</form>
