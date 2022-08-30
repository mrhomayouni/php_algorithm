<?php
// Q7: تابعی بنویسید که بدون در نظر گرفتن کوچک یا بزرگ تر
// بودن تعداد کاراکتر خاصی را در متن ما بشمارد

if (isset($_POST["send"])) {
    $text = $_POST["text"];
    $repeat1 = strtolower($_POST["repeat"]);
    $repeat2 = strtoupper($_POST["repeat"]);
    $n1 = explode($repeat1, $text);
    $n2 = explode($repeat2, $text);

    $char_number = count($n1) + count($n2) - 2;
    echo $char_number;
}
?>

<form action="" method="post">
    <input type="text" name="text" placeholder="enter a text">
    <input type="text" name="repeat" placeholder="enter a character">
    <input type="submit" name="send" value="send">
</form>