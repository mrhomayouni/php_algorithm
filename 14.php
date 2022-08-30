<?php
// Q14: تابعی بنویسید که یک لیست دریافت کند و همچنین یک رشته یا مقداری را دریافت کند
// و تعداد تکرار ان مقدار در رشته را بشمارد

$list = [1, 62, 66, "ali", 7844, 865, "ali", "farhad", "ali", "ali"];

if (isset($_POST["send"])) {
    $text = $_POST["text"];
    $i = 0;
    foreach ($list as $list_item) {
        if ($list_item == $text) $i++;
    }
    echo $i;
}
?>
<form action="" method="post">
    <input type="text" name="text" placeholder="enter the text">
    <input type="submit" value="send" name="send">
</form>