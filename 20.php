<?php
// Q20: تابعی بنویسید که مضارب عدد 5
// را در یک لیست بسازد و ان لیست را برگشت دهد
$list = [];
for ($i = 1; $i <= 120; $i++) {
    if ($i % 5 == 0) {
        $list[] = $i;
    }
}
print_r($list);
