<?php
// Q2: تابعی بنویسید که یک نام دریافت کند و تشخیص دهد که تعداد کارکتر های متن زوج است یا فرد

if (isset($_POST["send"])) {
    $name = $_POST["name"];
    $char_number = strlen($name);
    echo ($char_number % 2 == 0) ? "even" : "odd";
}
?>

<form action="" method="post">
    <input type="text" name="name" placeholder="enter your name">
    <input type="submit" name="send" value="send">
</form>