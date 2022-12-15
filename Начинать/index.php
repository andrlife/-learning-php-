<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php</title>
</head>
<body>
<?php
    include 'file2.php';
    // require 'file2.php';
    echo "<br>";
    echo " Привет";  // каждая строка это выражение

   

    // Типы данных 
    // Включение php файла в другой файл
    //include 'file2.php';
    //require


    //Переменные
    $name = "Андрей";
    $number = 3.14;

    // $some = 1;
    // $second = 1;
    // $num_one = 1;
    $some = $second = $num_one = 1;
    echo "<br>";
    echo $second;
    echo "<br>";
    echo $name;
    $name = 333;
    echo $name;
?>

<?php
    echo "<br>";    echo "<br>";
    $numb1 = 1234; // десятеричное.
    $numb2 = +143; // десятеричное.
    $numb3 = -344; // отрецатедбное
    $numb4 = 0534; // восьмеричное
    $nymb5 = 0x1A; // шестнадцатеричное число

    $vesh4 = 1.123; // Вещественное число
    echo $nymb4;

    // логический тип данных - boolean значение
    // true false 

    //строчный тип данных
    $numb = "Значение: $numb1";
    echo $numb;
    $numb2 = 'Экран - \'34\'';
    echo "<br>";
    echo $numb2;

    // Неинициализированная переменная
    $some; //пустая переменная (Notice)

    //Null тип данных
    $var2 = null;

    //удаление переменной 
    unset($numb3); 

    echo "<br>";
    echo "<br>";
?>

    <?php
    // Проверки Переменных
    // isset();
    //empty()
    // echo isset($var2);
    $status = isset($nymb5);  //если переменная есть получим true
    // echo $status;
    echo "<br>";
    $status2 = empty($numb22); //если нет переменной, пустая строка, 0, null, false - получим true
    // echo $status2;

    $str = "0";
    // Проверка сущиствования переменной
    if (isset($str)) {
        echo "Переменная существует" . "<br>";
    } else {
        echo "Нет проверяеммой переменной" . "<br>"; //. "<br>" конкатенация
    }
    // echo "<br>"; 

    if (empty($str)) {
        echo "Пустая $str строка"; //если нет переменной, пустая строка, 0, null, false - получим true
    }

    echo "<br>"; 
    echo "<br>";
    // Определяем тип переменной  gettype();
    echo gettype($str); // выведет string 

    // boolean, integer, double, string, array, object, resourse, null, unknown type
    echo "<br>"; 
    echo "<br>";

    $numbk1 = 1.345;
    $numbk2 = 4;
    echo is_int($numbk2);
    // is_string — Определяет , является ли тип переменной строковым
    // is_float() - Определяет, является ли тип переменной плавающим
    // is_int() - Определяет, является ли тип переменной целочисленным
    // is_bool() - Определяет, является ли переменная булевой.
    // is_object() — определяет, является ли переменная объектом
    // is_array() - Определяет, является ли переменная массивом
    ?>
  

</body>
</html>
