<?php
// Q15: تابعی بنویسید که یک لیست از اسم دریافت کند و علی را از لیست حذف کند.
$list = [1, 62, 66, "ali", 7844, 865, "ali", "farhad", "ali", "ali","ahmad"];
$delete = [];
foreach ($list as $i => $list_item) {
    if ($list_item == "ali") unset($list[$i]);
}

print_r($list);