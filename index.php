<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Lab6</title>
</head>
<body>

<h2>Завдання 1: Обчислення суми квадратів чисел від 1 до n</h2>
<form method="POST">
    <label>Введіть натуральне число n:</label>
    <input type="number" name="n" required min="1">
    <input type="submit" name="task1" value="Обчислити">
</form>

<?php
if (isset($_POST['task1'])) {
    $n = (int)$_POST['n'];
    $squares = [];
    $sumOfSquares = 0;

    for ($i = 1; $i <= $n; $i++) {
        $square = $i * $i; 
        $squares[] = $square; 
        $sumOfSquares += $square; 
    }

    echo "<h3>Квадрати чисел від 1 до $n:</h3>";
    echo implode(", ", $squares); 
    echo "<h3>Сума квадратів чисел:</h3>";
    echo $sumOfSquares; 
}
?>

<h2>Завдання 2: Перевірка на високосний рік</h2>
<form method="POST">
    <label>Введіть рік:</label>
    <input type="number" name="year2" min="0" max="9999" required>
    <input type="submit" name="task2" value="Перевірити">
</form>
<?php
if (isset($_POST['task2'])) {
    $year = $_POST["year2"];
    $isLeap = ($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0);
    echo $isLeap ? "Рік високосний" : "Рік не високосний";
    echo "<br>";
}
?>

<h2>Завдання 3: Перевірка року в діапазоні</h2>
<form method="POST">
    <label>Введіть рік:</label>
    <input type="number" name="year3" required>
    <input type="submit" name="task3" value="Перевірити">
</form>
<?php
if (isset($_POST['task3'])) {
    $year = $_POST["year3"];
    echo ($year >= 0 && $year <= 9999) ? "Рік у діапазоні" : "Рік поза діапазоном";
    echo "<br>";
}
?>

<h2>Завдання 4: Робота з масивами</h2>
<form method="POST">
    <label>Введіть індекс для функції:</label>
    <input type="number" name="index4" required>
    <input type="submit" name="task4" value="Виконати">
</form>
<?php
$array4 = ["два", "один", "три"];
$assocArray = ["два" => 2, "один" => 1, "три" => 3];
function getNumber($word) {
    global $assocArray;
    return $assocArray[$word] ?? 0;
}
if (isset($_POST['task4'])) {
    $multiplier = getNumber($array4[$_POST['index4'] % 3]);
    $array100 = [];
    for ($i = 0; $i < 100; $i++) {
        $array100[] = $i * $multiplier;
    }
    echo "Масив: " . implode(", ", $array100) . "<br>";
}
?>

<h2>Завдання 5: Колір світлофора</h2>
<form method="POST">
    <label>Введіть хвилину:</label>
    <input type="number" name="minute5" required>
    <input type="submit" name="task5" value="Визначити">
</form>
<?php
if (isset($_POST['task5'])) {
    $minute = $_POST["minute5"] % 5;
    $color = ($minute < 3) ? "зелений" : "червоний";
    echo "Сигнал: $color<br>";
}
?>

<h2>Завдання 6: Скорочення ПІБ</h2>
<form method="POST">
    <label>Введіть ПІБ:</label>
    <input type="text" name="fullname6" required>
    <input type="submit" name="task6" value="Скоротити">
</form>
<?php
if (isset($_POST['task6'])) {
    $fullName = $_POST["fullname6"];
    $parts = explode(" ", $fullName);
    echo "{$parts[0]} {$parts[1][0]}. {$parts[2][0]}.<br>";
}
?>

<h2>Завдання 7: Кількість годин за градусами</h2>
<form method="POST">
    <label>Введіть градуси:</label>
    <input type="number" name="degrees7" required>
    <input type="submit" name="task7" value="Обчислити">
</form>
<?php
if (isset($_POST['task7'])) {
    $degrees = $_POST["degrees7"];
    $hours = floor($degrees / 15);
    echo "Кількість годин: $hours<br>";
}
?>

<h2>Завдання 8: Масив з добутком та непарними індексами</h2>
<form method="POST">
    <input type="submit" name="task8" value="Виконати">
</form>
<?php
if (isset($_POST['task8'])) {
    $arr = array_map(fn() => rand(1, 100), range(1, 20));
    $product = array_product(array_filter($arr, fn($v, $i) => $v > 0 && $i % 2 == 0, ARRAY_FILTER_USE_BOTH));
    $oddIndexes = implode(", ", array_filter($arr, fn($v, $i) => $v > 0 && $i % 2 != 0, ARRAY_FILTER_USE_BOTH));
    echo "Добуток: $product<br>Непарні індекси: $oddIndexes<br>";
}
?>

<h2>Завдання 9: Знайти максимальне і мінімальне значення масиву, поміняти їх місцями</h2>
<form method="POST">
    <label>Розмір масиву:</label>
    <input type="number" name="size9" required>
    <input type="submit" name="task9" value="Виконати">
</form>
<?php
if (isset($_POST['task9'])) {
    $size = (int)$_POST['size9'];
    $array = array_map(fn() => rand(1, 100), range(1, $size));
    $minIndex = array_search(min($array), $array);
    $maxIndex = array_search(max($array), $array);
    echo "Масив до заміни: " . implode(', ', $array) . "<br>";
    [$array[$minIndex], $array[$maxIndex]] = [$array[$maxIndex], $array[$minIndex]];
    echo "Масив після заміни: " . implode(', ', $array);
}
?>

<h2>Завдання 10: Сума чисел від 20 до 45, які діляться на 5</h2>
<form method="POST">
    <input type="submit" name="task10" value="Виконати">
</form>
<?php
if (isset($_POST['task10'])) {
    $sum = array_sum(array_filter(range(20, 45), fn($n) => $n % 5 === 0));
    echo "Сума чисел: $sum";
}
?>

<h2>Завдання 11: Підрахунок кількості входжень вибраної цифри у числі</h2>
<form method="POST">
    <label>Число:</label>
    <input type="text" name="number11" required>
    <label>Цифра для підрахунку:</label>
    <input type="text" name="digit11" required>
    <input type="submit" name="task11" value="Виконати">
</form>
<?php
if (isset($_POST['task11'])) {
    $number = $_POST['number11'];
    $digit = $_POST['digit11'];
    $count = substr_count($number, $digit);
    echo "Цифра '$digit' зустрічається $count разів у числі $number";
}
?>

<h2>Завдання 12: Знайти найдовше прізвище серед однойменних студентів</h2>
<form method="POST">
    <label>Ім'я студента:</label>
    <input type="text" name="name12" required>
    <input type="submit" name="task12" value="Виконати">
</form>
<?php
if (isset($_POST['task12'])) {
    $students = [
        "Коваль" => "Олег", "Гончарук" => "Олег", "Петренко" => "Марія",
        "Іваненко" => "Марія", "Довженко" => "Олег", "Сидоренко" => "Олександр",
        "Кравець" => "Марія", "Литвиненко" => "Олег", "Леонов" => "Марія",
        "Шевченко" => "Олег"
    ];
    $name = $_POST['name12'];
    $longestSurname = '';
    foreach ($students as $surname => $studentName) {
        if ($studentName === $name && strlen($surname) > strlen($longestSurname)) {
            $longestSurname = $surname;
        }
    }
    echo "Найдовше прізвище для студента з ім'ям '$name': $longestSurname";
}
?>

<h2>Завдання 13: Сума чисел в діапазоні, які діляться на 5</h2>
<form method="POST">
    <label>Початок діапазону:</label>
    <input type="number" name="start13" required>
    <label>Кінець діапазону:</label>
    <input type="number" name="end13" required>
    <input type="submit" name="task13" value="Виконати">
</form>
<?php
if (isset($_POST['task13'])) {
    $start = (int)$_POST['start13'];
    $end = (int)$_POST['end13'];
    $sum = array_sum(array_filter(range($start, $end), fn($n) => $n % 5 === 0));
    echo "Сума чисел в діапазоні [$start, $end], які діляться на 5: $sum";
}
?>

<h2>Завдання 14: Добуток елементів масиву з парними індексами</h2>
<form method="POST">
    <label>Розмір масиву:</label>
    <input type="number" name="size14" required>
    <input type="submit" name="task14" value="Виконати">
</form>
<?php
if (isset($_POST['task14'])) {
    $size = (int)$_POST['size14'];
    $array = array_map(fn() => rand(-50, 50), range(1, $size));
    $product = array_product(array_filter($array, fn($v, $i) => $v > 0 && $i % 2 === 0, ARRAY_FILTER_USE_BOTH));
    echo "Масив: " . implode(', ', $array) . "<br>";
    echo "Добуток елементів з парними індексами: $product";
}
?>

<h2>Завдання 15: Знайти максимальне і мінімальне значення масиву, поміняти їх місцями</h2>
<form method="POST">
    <label>Розмір масиву:</label>
    <input type="number" name="size15" required>
    <input type="submit" name="task15" value="Виконати">
</form>
<?php
if (isset($_POST['task15'])) {
    $size = (int)$_POST['size15'];
    $array = array_map(fn() => rand(-100, 100), range(1, $size));
    $minIndex = array_search(min($array), $array);
    $maxIndex = array_search(max($array), $array);
    echo "Масив до заміни: " . implode(', ', $array) . "<br>";
    [$array[$minIndex], $array[$maxIndex]] = [$array[$maxIndex], $array[$minIndex]];
    echo "Масив після заміни: " . implode(', ', $array);
}
?>

<h2>Завдання 16: Обчислення суми ряду</h2>
<form method="POST">
    <label>Введіть значення x:</label>
    <input type="number" name="x" step="0.01" required>
    <br>
    <label>Введіть точність ε:</label>
    <input type="number" name="epsilon" step="0.0001" required>
    <br>
    <label>Введіть максимальну кількість ітерацій n:</label>
    <input type="number" name="n" min="1" required>
    <br>
    <input type="submit" name="task16" value="Обчислити">
</form>

<?php
if (isset($_POST['task16'])) {
    $x = (float)$_POST['x'];
    $epsilon = (float)$_POST['epsilon'];
    $nMax = (int)$_POST['n'];

    $sum = 0;
    $term = 1; // Перший член ряду
    $n = 0;

    while (abs($term) >= $epsilon && $n < $nMax) {
        $sum += $term;
        $n++;
        $term = pow(-1, $n) * pow($x, 2 * $n) / gmp_fact($n); // Наступний член ряду
    }

    echo "<h3>Результат обчислення суми ряду:</h3>";
    echo "Сума ряду: $sum";
}
?>

<h2>Завдання 17: Обчислення суми ряду</h2>
<form method="POST">
    <label>Введіть значення x:</label>
    <input type="number" name="x" step="0.01" required>
    <br>
    <label>Введіть точність ε:</label>
    <input type="number" name="epsilon" step="0.0001" required>
    <br>
    <label>Введіть максимальну кількість ітерацій n:</label>
    <input type="number" name="n" min="1" required>
    <br>
    <input type="submit" name="task17" value="Обчислити">
</form>

<?php
if (isset($_POST['task17'])) {
    $x = (float)$_POST['x'];
    $epsilon = (float)$_POST['epsilon'];
    $nMax = (int)$_POST['n'];

    $sum = 0;
    $n = 0;

    do {
        $term = (2 * pow($x, 2 * $n + 1)) / (2 * $n + 1); // Обчислення члена ряду
        $sum += $term;
        $n++;
    } while (abs($term) >= $epsilon && $n < $nMax);

    echo "<h3>Результат обчислення суми ряду:</h3>";
    echo "Сума ряду: " . (2 * $sum);
}
?>

</body>
</html>
