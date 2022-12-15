<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Классы и обьекты</title>
    <style>
        body {
            background-color: #848484;
        }
        .header {
            max-width: 1000px;
            height: 100vh;
            margin: 0 auto;
            background-color: #F7F7F7;
            padding: 20px 20px;
            border-radius: 15px;
        }
    </style>
</head>
<body>
    <div class="header">
    <?php
    

    // Классы и обьекты


    //require_once //при таком подключении интерпретарор будет игнорировать повторное подключение
    // require_once 'class.php'

    //publick   private   protected
    class SomePeople { // повторение имен не допустимо
        public $age; // public используеться для задания области видимости переменных
        public $name; // переменные не доступны за пределами класса
    }

    //Для создания обьекта используеться new и указать класс
    $nick = new SomePeople; // чтобы обратиться к переменной в созданном классе использ. '->'
    $nick->age = 30; // age без знака $
    $nick->name = "Nick"; // присвоили значение ник имя строковое через =

    // echo $nick->name;  // также можно и обратиться к обьекту вызвав его на экран

    // unset($nick);     //либо удалить
    $andrey = new SomePeople(); //в скобках можно передать некие значения обьекту

    // также можно перезаписать переменную 
    // $nick = 11;


    class Location {
        public $x;
        private $y;
        public $z;
    }

    $loc = new Location();
    $loc->x = 22.23;
    // $loc->y = 54.44; выдаст ошибку невозможно получить доступ к частной собственности
    $loc->z = 54.44;

    ?>


<!-- ------------------------------------------------------------------------------- -->


    <?php
    class SomPeople {
        public $age;
        public $name;
        public static $people = 1; //истина 1 лож 0 / static - статическая переменная класса
    }
    // echo SomPeople::$people; // оператор разрешения области видимости

    $tim = new SomPeople();
    $tim->age = 28;
        echo $tim->age.' $tim с значением age';

        echo '<br>';
    $bob = $tim->age = 35;
    echo $bob.' $bob к которому присвоили $tim с новым значением age = '.$bob.'';

    echo '<br>';

    $fir = $sec = 3;
    $fir = 5;
        echo $fir.' '.$sec.' Две переменные имеющих присвоенный параметр 3 ( $fir = $sec = 3;) с измененным значением  $fir = 5;';

        echo '<br><br>';
        echo '<br>';
        echo 'Клонирование обьекта $tom = clone $tim; свойством clone' . '<br>';
    //Клонирование обьекта

    $tom = clone $tim;
    $tom->age = 25;
    echo $tom->age.' - скопированному классу поменял значение age';

    ?>

    <?php
    echo '<br><br>';
    echo 'Константы' . '<br>';
    //Константы 
    echo 'Константы, как и переменные хранят определенное значение, только в отличие от переменных значение констант может быть установлено только один раз, и далее мы уже не можем его изменить. Константы обычно определяются для хранения значений, которые должны оставаться неизменными на протяжении всей работы скрипта.';
    echo '<br><br>';
    //define()
    echo "define('PI', 3.14) гне PI это имя константы а 3.14 это ее значение" . '<br>';

    define('PI', 3.14);
    echo PI;

    // defined('PI') - проверяет есть ли константа PI
    echo '<br>';
    echo '<hr>';
    /*
    Основные константы которые в PHP по умолчанию
     */
    echo 'Основные константы которые в PHP по умолчанию <br>';
    echo '__LINE__ - Текущий номер строки в файле.<br>';
    echo '__FILE__ - Полный путь и имя текущего файла с развёрнутыми симлинками. Если используется внутри подключаемого файла, то возвращается имя данного файла.<br>';
    echo '__FUNCTION__ - Имя функции или {closure} в случае анонимной функции.<br>';
    echo '__CLASS__ - Имя класса. Это имя содержит название пространства имён, в котором класс был объявлен (например, Foo\Bar). При использовании в методах трейтов __CLASS__ является именем класса, в котором эти методы используется.<br>';
    echo '__METHOD__ - Имя метода класса.<br>';
    echo '__DIR__ - Директория файла. Если используется внутри подключаемого файла, то возвращается директория этого файла. Это эквивалентно вызову dirname(__FILE__). Возвращаемое имя директории не оканчивается на слеш, за исключением корневой директории.<br>';
    echo '__PHP_VERSION__ - Текущая версия PHP в виде строки в формате "major.minor.release[extra]".<br>';
    echo '__OS_VERSION__ - Версия ОС<br>';
    echo '__PHP_EOL__ - Символ конца строки использованный на текущей платформе<br>';
    echo '<br>';
    echo "Имя файла и путь __FILE__ - " . __FILE__ . "<br>";
    echo "Директория __DIR__ - " . __DIR__ . "<br>";

    echo '<hr>';
    echo '<br><br>';

    //подключаем утилиту текст
    require_once 'utilite/text.php'; //относительный путь
    echo '<br>';
    require_once 'C:/OSPanel/domains/local.php/Классы и обьекты/utilite/text2.php';  //абсолютный путь
    echo '<br><br>';
    echo 'использование директории';
    require_once __DIR__ . '/utilite/text3.php';
    echo '<hr>';
    echo '<br><br>';
    echo 'Константы Класса' . '<br>';

    class ConstantClass {
        const NAME = "const";
    }
        echo ConstantClass::NAME; // вызвали константу класса
        echo ' - вызвали константу класса ConstantClass::NAME <br>';

    if(defined('ConstantClass::NAME')){
        echo 'Константа определена <br>';
    } else {
        echo 'Константа не определена <br>';
    }



    
    









    ?>
    </div>
</body>
</html>
