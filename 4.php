<?php
// Q4: تابعی بنویسید که یک متن را از ورودی دریافت کند و یک عدد نیز دریافت کند.
// نهایتا متن را به تعداد عدد تکرار و نمایش دهد.-

if (isset($_POST["send"])) {
    $text = $_POST["text"];
    $repeat = $_POST["repeat"];
    echo str_repeat($text, $repeat);
}
?>

<form action="" method="post">
    <input type="text" name="text" placeholder="enter a text">
    <input type="number" name="repeat" placeholder="enter number of repeat">
    <input type="submit" name="send" value="send">
</form>