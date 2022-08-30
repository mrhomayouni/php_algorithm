<?php
// Q1: تابعی بنویسید که یک نام را ورودی بگیرد و تعداد کاراکتر آن را برگشت دهد

if (isset($_POST["send"])) {
    $name = $_POST["name"];

    echo "Number of characters are :" . strlen($name);
}
?>

<form action="" method="post">
    <input type="text" name="name" placeholder="enter your name">
    <input type="submit" value="send" name="send">
</form>