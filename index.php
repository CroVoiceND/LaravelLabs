<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Lab4</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<h2>Завдання 1: Сума та добуток двох чисел</h2>
<form method="POST">
    <label for="num1">Перше число:</label>
    <input type="number" name="num1" required>
    <label for="num2">Друге число:</label>
    <input type="number" name="num2" required>
    <button type="submit" name="task1">Розрахувати</button>
</form>

<?php
if (isset($_POST['task1'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $sum = $num1 + $num2;
    $product = $num1 * $num2;
    echo "<p>Сума: $sum, Добуток: $product</p>";
}
?>

<h2>Завдання 2: Сума квадратів двох чисел</h2>
<form method="POST">
    <label for="num3">Перше число:</label>
    <input type="number" name="num3" required>
    <label for="num4">Друге число:</label>
    <input type="number" name="num4" required>
    <button type="submit" name="task2">Розрахувати</button>
</form>

<?php
if (isset($_POST['task2'])) {
    $num3 = $_POST['num3'];
    $num4 = $_POST['num4'];
    $sum_of_squares = $num3 ** 2 + $num4 ** 2;
    echo "<p>Сума квадратів: $sum_of_squares</p>";
}
?>

<h2>Завдання 3: Середнє арифметичне трьох чисел</h2>
<form method="POST">
    <label for="num5">Число 1:</label>
    <input type="number" name="num5" required>
    <label for="num6">Число 2:</label>
    <input type="number" name="num6" required>
    <label for="num7">Число 3:</label>
    <input type="number" name="num7" required>
    <button type="submit" name="task3">Розрахувати</button>
</form>

<?php
if (isset($_POST['task3'])) {
    $num5 = $_POST['num5'];
    $num6 = $_POST['num6'];
    $num7 = $_POST['num7'];
    $average = ($num5 + $num6 + $num7) / 3;
    echo "<p>Середнє арифметичне: $average</p>";
}
?>

<h2>Завдання 4: Обчислити (x + 1)^4 − 2 * (k − 2 * x^2 + y^2)</h2>
<form method="POST">
    <label for="x">x:</label>
    <input type="number" name="x" required>
    <label for="y">y:</label>
    <input type="number" name="y" required>
    <label for="k">k:</label>
    <input type="number" name="k" required>
    <button type="submit" name="task4">Розрахувати</button>
</form>

<?php
if (isset($_POST['task4'])) {
    $x = $_POST['x'];
    $y = $_POST['y'];
    $k = $_POST['k'];
    $result = pow($x + 1, 4) - 2 * ($k - 2 * pow($x, 2) + pow($y, 2));
    echo "<p>Результат: $result</p>";
}
?>

<h2>Завдання 5: Ділення суми двох чисел на третє</h2>
<form method="POST">
    <label for="a">Число 1:</label>
    <input type="number" name="a" required>
    <label for="b">Число 2:</label>
    <input type="number" name="b" required>
    <label for="c">Число 3:</label>
    <input type="number" name="c" required>
    <button type="submit" name="task5">Розрахувати</button>
</form>

<?php
if (isset($_POST['task5'])) {
    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];
    $res1 = ($a + $b) / $c;
    $res2 = ($a + $c) / $b;
    $res3 = ($b + $c) / $a;
    echo "<p>Результати: ($a + $b) / $c = $res1, ($a + $c) / $b = $res2, ($b + $c) / $a = $res3</p>";
}
?>

<h2>Завдання 6: Залишки від ділення числа на 3 і на 5</h2>
<form method="POST">
    <label for="n">Число:</label>
    <input type="number" name="n" required>
    <button type="submit" name="task6">Розрахувати</button>
</form>

<?php
if (isset($_POST['task6'])) {
    $n = $_POST['n'];
    $rem3 = $n % 3;
    $rem5 = $n % 5;
    echo "<p>Залишок від ділення на 3: $rem3, залишок від ділення на 5: $rem5</p>";
}
?>

<h2>Завдання 7: Збільшення числа на 30% і на 120%</h2>
<form method="POST">
    <label for="m">Число:</label>
    <input type="number" name="m" required>
    <button type="submit" name="task7">Розрахувати</button>
</form>

<?php
if (isset($_POST['task7'])) {
    $m = $_POST['m'];
    $inc30 = $m * 1.3;
    $inc120 = $m * 2.2;
    echo "<p>Збільшення на 30%: $inc30, на 120%: $inc120</p>";
}
?>

<h2>Завдання 8: Сума 40% від першого числа та 84% від другого</h2>
<form method="POST">
    <label for="p1">Число 1:</label>
    <input type="number" name="p1" required>
    <label for="p2">Число 2:</label>
    <input type="number" name="p2" required>
    <button type="submit" name="task8">Розрахувати</button>
</form>

<?php
if (isset($_POST['task8'])) {
    $p1 = $_POST['p1'];
    $p2 = $_POST['p2'];
    $result = 0.4 * $p1 + 0.84 * $p2;
    echo "<p>Результат: $result</p>";
}
?>

<h2>Завдання 9: Сума цифр тризначного числа</h2>
<form method="POST">
    <label for="num">Тризначне число:</label>
    <input type="number" name="num" min="100" max="999" required>
    <button type="submit" name="task9">Розрахувати</button>
</form>

<?php
if (isset($_POST['task9'])) {
    $num = $_POST['num'];
    $sum_of_digits = array_sum(str_split($num));
    echo "<p>Сума цифр: $sum_of_digits</p>";
}
?>

<h2>Завдання 10: Замінити середню цифру тризначного числа на нуль</h2>
<form method="POST">
    <label for="num10">Тризначне число:</label>
    <input type="number" name="num10" min="100" max="999" required>
    <button type="submit" name="task10">Розрахувати</button>
</form>

<?php
if (isset($_POST['task10'])) {
    $num10 = $_POST['num10'];
    $new_num = floor($num10 / 100) * 100 + $num10 % 10;
    echo "<p>Результат: $new_num</p>";
}
?>

<h2>Завдання 11: Число у зворотному порядку</h2>
<form method="POST">
    <label for="num11">Тризначне число:</label>
    <input type="number" name="num11" min="100" max="999" required>
    <button type="submit" name="task11">Розрахувати</button>
</form>

<?php
if (isset($_POST['task11'])) {
    $num11 = $_POST['num11'];
    $reversed_num = strrev($num11);
    echo "<p>Число у зворотному порядку: $reversed_num</p>";
}
?>

<h2>Завдання 12: Визначення дня тижня за номером</h2>
<form method="POST">
    <label for="day">Номер дня тижня (1-7):</label>
    <input type="number" name="day" min="1" max="7" required>
    <button type="submit" name="task12">Визначити</button>
</form>

<?php
if (isset($_POST['task12'])) {
    $day = $_POST['day'];
    $days = ['Понеділок', 'Вівторок', 'Середа', 'Четвер', 'Пʼятниця', 'Субота', 'Неділя'];
    $result = ($day >= 1 && $day <= 7) ? $days[$day - 1] : "Невірний номер дня";
    echo "<p>День тижня: $result</p>";
}
?>

<h2>Завдання 13: Перевірка віку</h2>
<form method="POST">
    <label for="age">Ваш вік:</label>
    <input type="number" name="age" required>
    <button type="submit" name="task13">Перевірити</button>
</form>

<?php
if (isset($_POST['task13'])) {
    $age = $_POST['age'];
    $message = ($age > 80) ? 'Вітаю, Вас, шановний' : 'Успіхів!';
    echo "<p>$message</p>";
}
?>

<h2>Завдання 14: Виведення днів тижня з виділеним днем</h2>
<form method="POST">
    <label for="highlighted_day">Номер дня тижня (1-7):</label>
    <input type="number" name="highlighted_day" min="1" max="7" required>
    <button type="submit" name="task14">Вивести дні</button>
</form>

<?php
if (isset($_POST['task14'])) {
    $highlighted_day = $_POST['highlighted_day'];
    $days = ['Понеділок', 'Вівторок', 'Середа', 'Четвер', 'Пʼятниця', 'Субота', 'Неділя'];
    echo "<ul>";
    foreach ($days as $index => $day) {
        if ($index + 1 == $highlighted_day) {
            echo "<li style='font-size: 1.5em; color: red;'>$day</li>";
        } else {
            echo "<li>$day</li>";
        }
    }
    echo "</ul>";
}
?>

<h2>Завдання 15: Перевірка, чи можна утворити трикутник</h2>
<form method="POST">
    <label for="side1">Сторона 1:</label>
    <input type="number" name="side1" step="0.01" required>
    <label for="side2">Сторона 2:</label>
    <input type="number" name="side2" step="0.01" required>
    <label for="side3">Сторона 3:</label>
    <input type="number" name="side3" step="0.01" required>
    <button type="submit" name="task15">Перевірити</button>
</form>

<?php
if (isset($_POST['task15'])) {
    $side1 = $_POST['side1'];
    $side2 = $_POST['side2'];
    $side3 = $_POST['side3'];
    if ($side1 + $side2 > $side3 && $side1 + $side3 > $side2 && $side2 + $side3 > $side1) {
        echo "<p>Так, можна утворити трикутник.</p>";
    } else {
        echo "<p>Ні, не можна утворити трикутник.</p>";
    }
}
?>

<h2>Завдання 16: Малювання квадрата</h2>
<form method="POST">
    <label for="x">Координата x:</label>
    <input type="number" name="x" required>
    <label for="y">Координата y:</label>
    <input type="number" name="y" required>
    <label for="side_length">Довжина сторони:</label>
    <input type="number" name="side_length" required>
    <button type="submit" name="task16">Намалювати квадрат</button>
</form>

<?php
if (isset($_POST['task16'])) {
    $x = $_POST['x'];
    $y = $_POST['y'];
    $side_length = $_POST['side_length'];
    $colors = ['red', 'green', 'blue', 'orange', 'purple'];
    $background_color = $colors[array_rand($colors)];
    $border_color = $colors[array_rand($colors)];
    $square_color = $colors[array_rand($colors)];
    echo "<style>
        body { background-color: $background_color; }
        .square { 
            position: absolute; 
            top: {$y}px; left: {$x}px; 
            width: {$side_length}px; height: {$side_length}px; 
            background-color: $square_color; 
            border: 5px solid $border_color; 
        }
    </style>";
    echo "<div class='square'></div>";
}
?>

<h2>Завдання 17: Малювання кіл</h2>
<form method="POST">
    <label for="color1">Колір першого кола:</label>
    <input type="color" name="color1" required>
    <label for="size1">Розмір першого кола:</label>
    <input type="number" name="size1" required>
    <label for="color2">Колір другого кола:</label>
    <input type="color" name="color2" required>
    <label for="size2">Розмір другого кола:</label>
    <input type="number" name="size2" required>
    <button type="submit" name="task17">Намалювати кола</button>
</form>

<?php
if (isset($_POST['task17'])) {
    $color1 = $_POST['color1'];
    $size1 = $_POST['size1'];
    $color2 = $_POST['color2'];
    $size2 = $_POST['size2'];
    $posX1 = rand(750, 1500);
    $posY1 = rand(0, 1500);
    $posX2 = rand(750, 1500);
    $posY2 = rand(0, 1500);
    echo "<style>
        .circle1 { 
            position: absolute; top: {$posY1}px; left: {$posX1}px; 
            width: {$size1}px; height: {$size1}px; 
            background-color: $color1; border-radius: 50%; 
        }
        .circle2 { 
            position: absolute; top: {$posY2}px; left: {$posX2}px; 
            width: {$size2}px; height: {$size2}px; 
            background-color: $color2; border-radius: 50%; 
        }
    </style>";
    echo "<div class='circle1'></div><div class='circle2'></div>";
}
?>

<h2>Завдання 18: Перевірка, чи належить початок координат трикутнику</h2>
<form method="POST">
    <label for="x1">x1:</label>
    <input type="number" name="x1" required>
    <label for="y1">y1:</label>
    <input type="number" name="y1" required>
    <label for="x2">x2:</label>
    <input type="number" name="x2" required>
    <label for="y2">y2:</label>
    <input type="number" name="y2" required>
    <label for="x3">x3:</label>
    <input type="number" name="x3" required>
    <label for="y3">y3:</label>
    <input type="number" name="y3" required>
    <button type="submit" name="task18">Перевірити</button>
</form>

<?php
if (isset($_POST['task18'])) {
    $x1 = $_POST['x1'];
    $y1 = $_POST['y1'];
    $x2 = $_POST['x2'];
    $y2 = $_POST['y2'];
    $x3 = $_POST['x3'];
    $y3 = $_POST['y3'];
    $d1 = $x1 * $y2 - $x2 * $y1;
    $d2 = $x2 * $y3 - $x3 * $y2;
    $d3 = $x3 * $y1 - $x1 * $y3;
    $inside = ($d1 * $d2 >= 0) && ($d2 * $d3 >= 0);
    echo "<p>Точка (0,0) " . ($inside ? "належить" : "не належить") . " трикутнику.</p>";
}
?>

<h2>Завдання 19: Перевірка щасливого квитка</h2>
<form method="POST">
    <label for="ticket">Номер квитка:</label>
    <input type="number" name="ticket" required>
    <button type="submit" name="task19">Перевірити</button>
</form>

<?php
if (isset($_POST['task19'])) {
    $ticket = str_pad($_POST['ticket'], 6, "0", STR_PAD_LEFT);
    $first_half = array_sum(str_split(substr($ticket, 0, 3)));
    $second_half = array_sum(str_split(substr($ticket, 3, 3)));
    echo "<p>Квиток " . (($first_half == $second_half) ? "щасливий" : "не щасливий") . ".</p>";
}
?>

</body>
</html>
