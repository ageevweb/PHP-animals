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

?>



