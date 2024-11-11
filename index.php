<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Lab5</title>
</head>
<body>

<h2>Завдання 1: Виведіть на екран n раз фразу "You are welcome!"</h2>
<form method="POST">
    <label>Введіть число n:</label>
    <input type="number" name="n1">
    <input type="submit" name="task1" value="Виконати">
</form>
<?php
session_start();

if (isset($_POST['task1'])) {
    $n = $_POST["n1"];
    if (is_numeric($n) && $n > 0) {
        for ($i = 0; $i < $n; $i++) {
            echo "You are welcome! ";
        }
    } else {
        echo "Bad n";
    }
}
?>

<h2>Завдання 2: Знайти суму 1 + 4 + 7 + 10 + ... + 112</h2>
<form method="POST">
    <input type="submit" name="task2" value="Виконати">
</form>
<?php
if (isset($_POST['task2'])) {
    $sum = 0;
    for ($i = 1; $i <= 112; $i += 3) {
        $sum += $i;
    }
    echo "Сума: $sum";
}
?>

<h2>Завдання 3: Знайти суму натуральних чисел від a до b</h2>
<form method="POST">
    <label>Введіть число a:</label>
    <input type="number" name="a">
    <label>Введіть число b:</label>
    <input type="number" name="b">
    <input type="submit" name="task3" value="Виконати">
</form>
<?php
if (isset($_POST['task3'])) {
    $a = $_POST["a"];
    $b = $_POST["b"];
    if (is_numeric($a) && is_numeric($b) && $a <= $b) {
        $sum = 0;
        for ($i = $a; $i <= $b; $i++) {
            $sum += $i;
        }
        echo "Сума: $sum";
    } else {
        echo "Сума не існує";
    }
}
?>

<h2>Завдання 4: Вивести всі числа, менші за 10000, які мають хоча б одну цифру 3 і які не діляться на 5</h2>
<form method="POST">
    <input type="submit" name="task4" value="Виконати">
</form>
<?php
if (isset($_POST['task4'])) {
    for ($i = 1; $i < 10000; $i++) {
        if (strpos((string)$i, '3') !== false && $i % 5 != 0) {
            echo "$i ";
        }
    }
}
?>

<h2>Завдання 5: Вивести квадрат N x N різнокольорових квадратів</h2>
<form method="POST">
    <label>Введіть N:</label>
    <input type="number" name="n5">
    <input type="submit" name="task5" value="Виконати">
</form>
<?php
if (isset($_POST['task5'])) {
    $n = $_POST["n5"];
    if (is_numeric($n) && $n > 0) {
        echo '<div style="display: grid; grid-template-columns: repeat(' . $n . ', 50px);">';
        for ($i = 0; $i < $n * $n; $i++) {
            $color = sprintf('#%06X', mt_rand(0, 0xFFFFFF));
            echo '<div style="width: 50px; height: 50px; background-color: ' . $color . ';"></div>';
        }
        echo '</div>';
    } else {
        echo "Некоректне значення N";
    }
}
?>

<h2>Завдання 6: Вивести 3 випадкові числа від 0 до 100 без повторень</h2>
<form method="POST">
    <input type="submit" name="task6" value="Виконати">
</form>
<?php
if (isset($_POST['task6'])) {
    $numbers = range(0, 100);
    shuffle($numbers);
    $randomNumbers = array_slice($numbers, 0, 3);
    echo "Випадкові числа: " . implode(", ", $randomNumbers);
}
?>

<h2>Завдання 7: Знайдіть кількість прямокутних трикутників зі сторонами, меншими за 100</h2>
<form method="POST">
    <input type="submit" name="task7" value="Виконати">
</form>
<?php
if (isset($_POST['task7'])) {
    $count = 0;
    for ($a = 1; $a < 100; $a++) {
        for ($b = $a; $b < 100; $b++) {
            $c = sqrt($a * $a + $b * $b);
            if ($c < 100 && $c == (int)$c) {
                $count++;
            }
        }
    }
    echo "Кількість прямокутних трикутників: $count";
}
?>

<h2>Завдання 8: Вивести на чорному фоні n червоних квадратів випадкового розміру у випадковій позиції</h2>
<form method="POST">
    <label>Введіть кількість квадратів n:</label>
    <input type="number" name="n8">
    <input type="submit" name="task8" value="Виконати">
</form>
<div style="position: relative; width: 100%; height: 400px; background-color: black;">
    <?php
    if (isset($_POST['task8'])) {
        $n = $_POST["n8"];
        if (is_numeric($n) && $n > 0) {
            for ($i = 0; $i < $n; $i++) {
                $size = rand(10, 50);
                $top = rand(0, 350);
                $left = rand(0, 90) . '%';
                echo '<div style="width: ' . $size . 'px; height: ' . $size . 'px; background-color: red; position: absolute; top: ' . $top . 'px; left: ' . $left . ';"></div>';
            }
        } else {
            echo "Некоректне значення n";
        }
    }
    ?>
</div>

<h2>Завдання 9: Вивести N випадкових серій із чисел 0, 1 і 2, таких що сума дорівнює s</h2>
<form method="POST">
    <label>Введіть N:</label>
    <input type="number" name="n9">
    <label>Введіть суму s:</label>
    <input type="number" name="s9">
    <input type="submit" name="task9" value="Виконати">
</form>
<?php
if (isset($_POST['task9'])) {
    $N = $_POST["n9"];
    $s = $_POST["s9"];
    if (!is_numeric($N) || $N <= 0) {
        echo "Помилка";
    } 
}
?>

<h2>Завдання 10: Сформувати таблицю кольорів HTML (не менше 150 кольорів)</h2>
<form method="POST">
    <input type="submit" name="task10" value="Виконати">
</form>
<?php
if (isset($_POST['task10'])) {
    echo "<table style='width:100%; border-collapse: collapse;'>";
    for ($i = 0; $i < 15; $i++) {
        echo "<tr>";
        for ($j = 0; $j < 10; $j++) {
            $color = sprintf('#%06X', mt_rand(0, 0xFFFFFF));
            echo "<td style='width:60px; height:60px; background-color:$color;'>$color</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}
?>

<h2>Завдання 11: Дано число. Якщо більше за 10, збільшити на 100, інакше зменшити на 30</h2>
<form method="POST">
    <label>Введіть число:</label>
    <input type="number" name="n11">
    <input type="submit" name="task11" value="Виконати">
</form>
<?php
if (isset($_POST['task11'])) {
    $n = $_POST["n11"];
    echo ($n > 10) ? "Результат: " . ($n + 100) : "Результат: " . ($n - 30);
}
?>

<h2>Завдання 12: Якщо число парне, зменшіть вдвічі, інакше збільшіть утричі</h2>
<form method="POST">
    <label>Введіть натуральне число:</label>
    <input type="number" name="n12">
    <input type="submit" name="task12" value="Виконати">
</form>
<?php
if (isset($_POST['task12'])) {
    $n = $_POST["n12"];
    echo ($n % 2 == 0) ? "Результат: " . ($n / 2) : "Результат: " . ($n * 3);
}
?>

<h2>Завдання 13: Обробка числа з умовами</h2>
<form method="POST">
    <label>Введіть число:</label>
    <input type="number" name="n13">
    <input type="submit" name="task13" value="Виконати">
</form>
<?php
if (isset($_POST['task13'])) {
    $n = $_POST["n13"];
    if ($n >= 50) {
        echo "Результат: " . ($n * $n);
    } elseif ($n > 10 && $n < 30) {
        echo "Результат: 0";
    } else {
        echo "Помилка";
    }
}
?>

<h2>Завдання 14: Вивести найбільше з трьох чисел</h2>
<form method="POST">
    <label>Число 1:</label>
    <input type="number" name="num1_14">
    <label>Число 2:</label>
    <input type="number" name="num2_14">
    <label>Число 3:</label>
    <input type="number" name="num3_14">
    <input type="submit" name="task14" value="Виконати">
</form>
<?php
if (isset($_POST['task14'])) {
    $num1 = $_POST["num1_14"];
    $num2 = $_POST["num2_14"];
    $num3 = $_POST["num3_14"];
    echo "Найбільше: " . max($num1, $num2, $num3);
}
?>

<h2>Завдання 15: Вивести 'Так', якщо два числа відрізняються на 100, інакше 'Ні'</h2>
<form method="POST">
    <label>Введіть число a:</label>
    <input type="number" name="a15">
    <label>Введіть число b:</label>
    <input type="number" name="b15">
    <input type="submit" name="task15" value="Виконати">
</form>
<?php
if (isset($_POST['task15'])) {
    $a = $_POST["a15"];
    $b = $_POST["b15"];
    echo (abs($a - $b) === 100) ? "Так" : "Ні";
}
?>

<h2>Завдання 16: Вивести 'Так', якщо два числа відрізняються не більше ніж на 20, інакше 'Ні'</h2>
<form method="POST">
    <label>Введіть число a:</label>
    <input type="number" name="a16">
    <label>Введіть число b:</label>
    <input type="number" name="b16">
    <input type="submit" name="task16" value="Виконати">
</form>
<?php
if (isset($_POST['task16'])) {
    $a = $_POST["a16"];
    $b = $_POST["b16"];
    echo (abs($a - $b) <= 20) ? "Так" : "Ні";
}
?>

<h2>Завдання 17: Вивести пору року за номером місяця або 'Помилка' для некоректного номера</h2>
<form method="POST">
    <label>Введіть номер місяця:</label>
    <input type="number" name="month17">
    <input type="submit" name="task17" value="Виконати">
</form>
<?php
if (isset($_POST['task17'])) {
    $month = $_POST["month17"];
    $seasons = ["Зима", "Зима", "Весна", "Весна", "Весна", "Літо", "Літо", "Літо", "Осінь", "Осінь", "Осінь", "Зима"];
    echo ($month >= 1 && $month <= 12) ? $seasons[$month - 1] : "Помилка";
}
?>

<h2>Завдання 18: Переставте цифри в тризначному числі для отримання найбільшого можливого числа</h2>
<form method="POST">
    <label>Введіть тризначне число:</label>
    <input type="number" name="num18" min="100" max="999">
    <input type="submit" name="task18" value="Виконати">
</form>
<?php
if (isset($_POST['task18'])) {
    $num = $_POST["num18"];
    $digits = str_split($num);
    rsort($digits);
    echo "Найбільше число: " . implode("", $digits);
}
?>

<h2>Завдання 19: Розв'яжіть квадратне рівняння ax^2 + bx + c = 0</h2>
<form method="POST">
    <label>Введіть a:</label>
    <input type="number" name="a19" step="any">
    <label>Введіть b:</label>
    <input type="number" name="b19" step="any">
    <label>Введіть c:</label>
    <input type="number" name="c19" step="any">
    <input type="submit" name="task19" value="Виконати">
</form>
<?php
if (isset($_POST['task19'])) {
    $a = $_POST["a19"];
    $b = $_POST["b19"];
    $c = $_POST["c19"];
    $discriminant = $b * $b - 4 * $a * $c;
    if ($a == 0) {
        echo "Не є квадратним рівнянням";
    } elseif ($discriminant < 0) {
        echo "Коренів немає";
    } elseif ($discriminant == 0) {
        echo "Один корінь: " . (-$b / (2 * $a));
    } else {
        echo "Два корені: " . ((-$b + sqrt($discriminant)) / (2 * $a)) . " та " . ((-$b - sqrt($discriminant)) / (2 * $a));
    }
}
?>

<h2>Завдання 20: Обчисліть значення виразу max2(a, b, c) − 3 * min(a, b, c) + max(a, b − c) / min(b, c)</h2>
<form method="POST">
    <label>Введіть a:</label>
    <input type="number" name="a20" step="any">
    <label>Введіть b:</label>
    <input type="number" name="b20" step="any">
    <label>Введіть c:</label>
    <input type="number" name="c20" step="any">
    <input type="submit" name="task20" value="Виконати">
</form>
<?php
if (isset($_POST['task20'])) {
    $a = $_POST["a20"];
    $b = $_POST["b20"];
    $c = $_POST["c20"];
    $max2 = max($a, $b, $c);
    $min = min($a, $b, $c);
    $max_ab_c = max($a, $b - $c);
    $min_bc = ($b != 0 && $c != 0) ? min($b, $c) : null;

    if ($min_bc !== null) {
        $result = $max2 - 3 * $min + $max_ab_c / $min_bc;
        echo "Результат: $result";
    } else {
        echo "Обчислення неможливе";
    }
}
?>

<h2>Завдання 21: Зміна порядку кнопок</h2>
<form method="POST">
    <button type="submit" name="task21" value="<?=$_SESSION['order'][0]?>"><?=$_SESSION['order'][0]?></button>
    <button type="submit" name="task21" value="<?=$_SESSION['order'][1]?>"><?=$_SESSION['order'][1]?></button>
    <button type="submit" name="task21" value="<?=$_SESSION['order'][2]?>"><?=$_SESSION['order'][2]?></button>
</form>
<?php
if (!isset($_SESSION['order'])) {
    $_SESSION['order'] = [1, 2, 3];
}
if (isset($_POST['task21'])) {
    $_SESSION['order'] = [$_SESSION['order'][1], $_SESSION['order'][2], $_SESSION['order'][0]];
}
?>

<h2>Завдання 22: Обчислення значень функції</h2>
<form method="POST">
        <label>Введіть значення a:</label>
        <input type="number" name="a">
        <label>Введіть значення b:</label>
        <input type="number" name="b">
        <label>Введіть значення c:</label>
        <input type="number" name="c">
        <label>Введіть початкове значення x:</label>
        <input type="number" name="x_start">
        <label>Введіть кінцеве значення x:</label>
        <input type="number" name="x_end">
        <label>Введіть крок:</label>
        <input type="number" name="dx">
        <input type="submit" value="Обчислити">
    </form>

    <?php
    if (isset($_POST['a'])) {
        $a = $_POST['a'];
        $b = $_POST['b'];
        $c = $_POST['c'];
        $x_start = $_POST['x_start'];
        $x_end = $_POST['x_end'];
        $dx = $_POST['dx'];

        echo "<table><tr><th>x</th><th>F(x)</th></tr>";

        for ($x = $x_start; $x <= $x_end; $x += $dx) {
            if ($x < 0 && $b != 0) {
                $fx = $a * pow($x, 3) + $b;
            } elseif ($x > 0 && $b == 0) {
                $fx = ($x - $a) / ($x - $c);
            } else {
                $fx = $x / $c;
            }
            echo "<tr><td>" . $x . "</td><td>" . $fx . "</td></tr>";
        }

        echo "</table>";
    }
    ?>

</body>
</html>
