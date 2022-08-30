<?php
// Q9: تابعی بنویسید که اندازه خطی را دریافت کند و در صفحه خط را با همان اندازه رسم کند.
if (isset($_POST["send"])) {
    $n = $_POST["number"];
    $with = 800;
    $height = 800;
    $im = imagecreatetruecolor($with, $height);
    $color = imagecolorallocate($im, rand(0, 255), rand(0, 255), rand(0, 255));
    imageline($im, 50, 200, 50 + $n, 200, $color);
    imagesetthickness($im, 50);
    imagepng($im, "1.jpg");
}
?>
<form action="" method="post">
    <input type="number" name="number" placeholder="enter the number">
    <input type="submit" value="send" name="send">
</form>
