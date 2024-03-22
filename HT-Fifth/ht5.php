<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
        // ========================== 1 ==========================
        function getElementByIndex($array, $index) {
            $flatArray = new RecursiveIteratorIterator(new RecursiveArrayIterator($array));
            foreach ($flatArray as $key => $value) {
                if ($key == $index) return $value;
            }
            return null;
        }
        // ========================== 2 ==========================

        function countB($str) {
            if (!is_string($str)) return false;
            return substr_count(strtolower($str), 'b');
        }

        // ========================== 3 ==========================

        function sumOfArray($array) {
            $sum = 0;
            array_walk_recursive($array, function ($value) use (&$sum) {
                $sum += $value;
            });
            return $sum;
        }

        // ========================== 4 ==========================

        function countSquares($bigSquareSide, $smallSquareSide) {
            if ($smallSquareSide <= 0) return 0;
            $count = floor($bigSquareSide / $smallSquareSide);
            return floatval($count * $count);
        }

    ?>
</body>

</html>