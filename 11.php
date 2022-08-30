<?php
// Q11: تابعی بنویسد که عددی دریافت کند و تشخیص دهد که عدد مضرب 1 است یا 2 یا الی 9

if (isset($_POST["send"])) {
    $number = $_POST["number"];
    for ($i = 1; $i <= 9; $i++) {
        if ($number % $i == 0) echo $i . "<br>";
    }
}
?>

<form action="" method="post">
    <input type="number" name="number" placeholder="enter the number">
    <input type="submit" value="send" name="send">
</form>