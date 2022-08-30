<?php
// Q16: تابعی بنویسید که یک لیست را دریافت کند و
// به دنبال مقدار دیگری باشد و اگر مقدار را دید ان را حذف کند.

$list = [1, 62, "ahmad", 66, "ali", 7844, 865, "ali", "ahmad", "farhad", "ali", "ali", "ahmad"];
if (isset($_POST["send"])) {
    $text = $_POST["text"];
    $delete = [];
    foreach ($list as $i => $list_item) {
        if ($list_item == $text) unset($list[$i]);
    }
    print_r($list);
}
?>

<form action="" method="post">
    <input type="text" name="text" placeholder="enter a text">
    <input type="submit" name="send">
</form>