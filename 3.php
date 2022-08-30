<?php
// Q3: تابعی بنویسید که یک نام را دریافت کند و حرف اول آن را نمایش دهد

if (isset($_POST["send"])) {
    $name = $_POST["name"];
    echo $name[0];
}
?>

<form action="" method="post">
    <input type="text" name="name" placeholder="enter your name">
    <input type="submit" name="send" value="send">
</form>