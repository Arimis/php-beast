<?php
$strings = [
    '0','1','2','3','4','5','6','7','8','a','b','c','d','e','f'
];
$header = [];
$aseKeys = [];
for($i = 0; $i < 8; $i ++) {
    $str = '0x' .$strings[rand(0, 14)].$strings[rand(0, 14)];
    $header[] = $str;
}

echo json_encode($header);


for($i = 0; $i < 16; $i ++) {
    $str = '0x' .$strings[rand(0, 14)].$strings[rand(0, 14)];
    $aseKeys[] = $str;
}

echo json_encode($aseKeys);