<?php
    echo 'hello world';

    $a = 6;

    var_dump($a);

    ."/n"     // пробел

    " $a "  // 6
    ' $a '  // $a

    var_dump($_GET); // расепчатать глобальный массив

    print_r($_GET); // вывод массива(ключ => значение)

    $a1 = $_GET['a1']; // присвоение в переменную

    echo strlen($a1); // длина строки

    $a1 = trim($_GET['a1']); // обрезать пробелы в начале и в конце строки

    isset($_GET['a1']); // существование

    exit('something wrong');

    is_int($v) // число?


    // ф-я проверки переменных
    $n1 = checkVars($_GET['a1'])
    function checkVars($v){
        if(isset($v) AND trim($v) != '' AND is_int($v)){
            return $v;
        } else {
            exit('Var is not defined');
        }
    }


    // подключение файлов
    // если файл подклечен неверно
    require 'file.php'       // скрпипт останавливается
    require_once             // проверяет были ли подключен файл, если был, то второе подкючение игнорирует
    include 'file.php'       // скрпипт продолжает работу
    require_once             


    // array
    $a = array(5, 10, 15, 20);
    $a = [5, 10, 15, 20];
    echo $a[3]; // выводит элемент массива
    $a[] = 99; // добавление элемента в массив
    $a[5] = 99; // добавление элемента в массив на определеную позицию
    count($a); // длина массива
    unset($a[5]); // удаление элемента из массива
    in_array('hello', $a); // поиск элемента в массиве

    // перебор массива
    foreach($a as $key => $value){
        echo $value."<br>";
    }


    // array_key
    $b = ["name"=>"andy", "city"=>"spb"];
    $b['sex'] = "male"; //добавить элемент
    in_array('hello', $b); // поиск элемента в массиве
    array_key_exists("name", $b);
?>




