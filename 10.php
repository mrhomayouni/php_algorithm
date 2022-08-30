<?php
// Q10: تابعی بنویسید که در آن اندازه مربعی را دریافت کند و ان مربع را در صفحه رسم کند.

if (isset($_POST["send"])) {
    $n = $_POST["number"];
    $with = 800;
    $height = 800;
    $im = imagecreatetruecolor($with, $height);
    $color = imagecolorallocate($im, rand(0, 255), rand(0, 255), rand(0, 255));
    //imageline($im, 50, 200, 50 + $n, 200, $color);
    imagesetthickness($im, 5);
    imagerectangle($im, 50, 50, 50 + $n, 50 + $n, $color);
    imagepng($im, "2.jpg");
}
?>
<form action="" method="post">
    <input type="number" name="number" placeholder="enter the number">
    <input type="submit" value="send" name="send">
</form>


