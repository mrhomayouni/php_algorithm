<?php
// Q5: تابعی بنویسید که یک متن را دریافت کند و تعداد حرف
// a
// آن را برگشت دهد.

if (isset($_POST["send"])) {
    $text = $_POST["text"];
    $repeat = explode("a", $text);
    $char_number = count($repeat) - 1;
    echo $char_number;
}
?>

<form action="" method="post">
    <input type="text" name="text" placeholder="enter a text">
    <input type="submit" name="send" value="send">
</form>
