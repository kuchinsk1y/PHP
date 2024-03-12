<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    $arr = [1, 2, 3, 7, 31, 4, 1, 8, 6];
    $length = count($arr);
    $firstFour = array_splice($arr, 0, 4);
    $arr = array_merge($arr, $firstFour);
    $sum = $arr[3] + $arr[4] + $arr[5];

    echo "Длина массива: $length\n";
    echo "Сумма 4, 5, 6 элементов: $sum\n";

    $firstArr = [
        'one' => 1,
        'two' => 2,
        'three' => 3,
        'foure' => 5,
        'five' => 12,
    ];

    $secondArr = [
        'one' => 1,
        'seven' => 22,
        'three' => 32,
        'foure' => 5,
        'five' => 13,
        'six' => 37,
    ];

    $diff1 = array_diff_key($secondArr, $firstArr);
    $diff2 = array_diff_key($firstArr, $secondArr);
    $intersectValues = array_intersect($firstArr, $secondArr);
    $diffValues = array_diff_assoc(array_merge($firstArr, $secondArr), $intersectValues);

    echo "Отсутствуют в первом, присутствуют во втором:\n";
    print_r($diff1);
    echo "Присутствуют в первом, отсутствуют во втором:\n";
    print_r($diff2);
    echo "Совпадающие значения:\n";
    print_r($intersectValues);
    echo "Отличающиеся значения:\n";
    print_r($diffValues);

    $firstArr = [
        'one' => 1,
        'two' => [
            'one' => 1,
            'seven' => 22,
            'three' => 32,
        ],
        'three' => [
            'one' => 1,
            'two' => 2,
        ],
        'foure' => 5,
        'five' => [
            'three' => 32,
            'foure' => 5,
            'five' => 12,
        ],
    ];

    $secondElements = [];
    foreach ($firstArr as $key => $value) {
        if (is_array($value)) {
            $temp = array_slice($value, 1, 1);
            $secondElements[$key] = array_values($temp)[0];
        }
    }

    $totalCount = 0;
    array_walk_recursive($firstArr, function () use (&$totalCount) {
        $totalCount++;
    });

    $totalSum = 0;
    array_walk_recursive($firstArr, function ($value) use (&$totalSum) {
        $totalSum += $value;
    });

    echo "Вторые элементы вложенных массивов:\n";
    print_r($secondElements);
    echo "Общее количество элементов: $totalCount\n";
    echo "Сумма всех значений: $totalSum\n";

    ?>
</body>

</html>