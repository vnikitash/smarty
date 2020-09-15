<?php


$id = 123;

$sessionCartArray = [
    [
        'id' => 'asdasd',
        'name' => 'iPhone',
        'price' => 100,
        'count' => 3
    ],
    [
        'id' => 'aaaaa',
        'name' => 'Samsung',
        'price' => 200,
        'count' => 1
    ],
    [
        'id' => 123,
        'name' => 'Samsung',
        'price' => 200,
        'count' => 1
    ]
];

$cartItemsCount = 0;

foreach ($sessionCartArray as $item) {
    $cartItemsCount += $item['count'];
}
