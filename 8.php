<?php
// Q8: تابعی بنویسید که تعدادی را دریافت کند و به تعداد آن ستاره نمایش دهد.

if (isset($_POST["send"])) {
    $repeat = $_POST["number"];
    echo str_repeat("*", $repeat);
}
?>

<form action="" method="post">
    <input type="number" name="number" placeholder="enter the number">
    <input type="submit" value="send" name="send">
</form>