<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First Lesson</title>
</head>

<body>
    <?php

    // Дії з числами

    // Отримати залишок від ділення 7 на 3
    $remainder = 7 % 3;
    echo "Залишок від ділення 7 на 3: $remainder <br> \n";

    // Отримати цілу частину ділення 7 і 7,15
    $integerDivision = floor(7 / 7.15);
    echo "Ціла частина ділення 7 і 7.15: $integerDivision <br> \n";

    // Отримати корінь з 25
    $squareRoot = sqrt(25);
    echo "Корінь з 25: $squareRoot <br> \n";

    // Дії зі строками

    $phrase = "Десять негритят пошли купаться в море";

    // Отримати 4-е слово
    $fourthWord = explode(' ', $phrase)[3];
    echo "4-е слово з фрази: $fourthWord <br> \n";

    // Отримати 17-й символ
    $seventeenthChar = $phrase[16];
    echo "17-й символ із фрази: $seventeenthChar <br> \n";

    // Зробити великою кожну першу букву слів
    $capitalizedPhrase = ucwords($phrase);
    echo "Фраза з великою першою буквою кожного слова: $capitalizedPhrase <br> \n";

    // Порахувати довжину строки
    $lengthOfString = strlen($phrase);
    echo "Довжина строки: $lengthOfString <br> \n";

    // Дії з логічними даними

    // Чи вірно твердження true дорівнює 1
    $isTrueEqualOne = true == 1;
    echo "Чи true дорівнює 1: " . ($isTrueEqualOne ? 'Так' : 'Ні') .  "<br>\n";

    // Чи вірно твердження false тождественно 0
    $isFalseIdenticalZero = false === 0;
    echo "Чи false тождественно 0: " . ($isFalseIdenticalZero ? 'Так' : 'Ні') . "<br>\n";

    // Яка строка більше: three - три
    $isThreeGreater = strcmp('three', 'три') > 0;
    echo "Результат порівняння: " . ($isThreeGreater ? "'three' більше 'три'" : "'три' більше 'three'") . "<br>\n";

    // Яке число більше
    $numberComparison = (125 * 13 + 7) > (223 + 28 * 2);
    echo "Яке число більше: " . ($numberComparison ? '125 * 13 + 7' : '223 + 28 * 2') . "<br>\n";

    ?>

</body>

</html>