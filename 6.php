<?php
// Q6: تابعی بنویسید که یک متن را دریافت کند و تعداد حرف
// خاصی که ان را نیز از ورودی دریافت کردیم بشمارد

if (isset($_POST["send"])) {
    $text = $_POST["text"];
    $repeat = $_POST["repeat"];
    $repeat = explode($repeat, $text);
    $char_number = count($repeat) - 1;
    echo $char_number;
}
?>

<form action="" method="post">
    <input type="text" name="text" placeholder="enter a text">
    <input type="text" name="repeat" placeholder="enter a character">
    <input type="submit" name="send" value="send">
</form>