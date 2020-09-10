<?php



$categories = [
    [
        'name' => 'Test1',
        'order' => 1
    ],
    [
        'name' => 'Test1',
        'order' => 0
    ],
    [
        'name' => 'Test1',
        'order' => 9
    ],
    [
        'name' => 'Test1',
        'order' => 7
    ],
    [
        'name' => 'Test1',
        'order' => 5
    ],
    [
        'name' => 'Test1',
        'order' => 0
    ],
];


$len = count($categories) - 1;

for ($j = 0; $j < $len; $j++) {
    for($i = 0; $i < $len; $i++) {
        if ($categories[$i]['order'] > $categories[$i + 1]['order']) {
            $tmp = $categories[$i];// $tmp = 8
            $categories[$i] = $categories[$i + 1]; // $arr[0] = 4
            $categories[$i + 1] = $tmp; // $arr[1] = $tmp = 8;
        }
    }
}




print_r($categories);
















die();
$arr = [4,1,2,1,7,4,9,6,3,5,6,1,6,5,4,3,0];

$len = count($arr) - 1;

for ($j = 0; $j < $len; $j++) {
    for($i = 0; $i < $len; $i++) {
        if ($arr[$i] < $arr[$i + 1]) {
            $tmp = $arr[$i];// $tmp = 8
            $arr[$i] = $arr[$i + 1]; // $arr[0] = 4
            $arr[$i + 1] = $tmp; // $arr[1] = $tmp = 8;
        }
    }
}


print_r($arr);
