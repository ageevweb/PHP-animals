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

    
    // read dir
    $dir = 'img';
    if (is_dir($dir)){
      $openDir = opendir($dir);
      while(($file = readdir($openDir)) !== false) {
        if($file != "." && $file != "..") {
          echo $file.'<br>';
        }
      }
    }

    
    // чтение, запись, перезапись файла
    // 10 урок


    //  BD
    // подключение выносим в отдельный файл + define(определение констан в глобальную обоасть видимости)
    define('SERVERNAME', 'localhost');
    define('USERNAME', 'root');
    define('PASSWORD', '');
    define('DBNAME', 'course-php');

    // подключение, запрос и вывод
    require_once('config.php');

    $conn = mysqli_connect(SERVERNAME, USERNAME, PASSWORD, DBNAME);
    mysqli_set_charset($conn, "utf8");
    // check connection
    if(!$conn){
        die("Connection feiled" . mysqli_connect_error());
    }
    // запрос в базу
    $sql = "SELECT * FROM goods";
    // $sql = "SELECT name,cost FROM goods WHERE cost > 30";
    $result = mysqli_query($conn, $sql);

    var_dump(mysqli_num_rows($result)); // колличество строк в таблице

    $a = [];

    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
        $a[] = $row;
        } 
    } else { 
        echo '0 results' ;
    }
    
    echo '<pre>';
    print_r($a);
    echo '</pre>';
    mysqli_close($conn);
?>




