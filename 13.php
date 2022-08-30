<?php
// Q13: تابعی بنویسید که یک لیست دریافت کند و تعداد علی را در لیست بشمارد

$list = [1, 62, 66, "ali", 7844, 865, "ali", "farhad", "ali", "ali"];
$i = 0;
foreach ($list as $list_item) {
    if ($list_item == "ali") $i++;
}
echo $i;