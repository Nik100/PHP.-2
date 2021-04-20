<?php
//Создание подключения к базам данных
$connect = mysqli_connect('127.0.0.1', 'test', 123'lesson') or die('Ошибка подключения: '.mysqli_connect_error());
// подгружаем и активируем авто-загрузчик Twig-а
require_once 'Twig/Autoloader.php';
Twig_Autoloader::register();

try {
    // указывае где хранятся шаблоны
    $loader = new Twig_Loader_Filesystem('templates');

    // инициализируем Twig
    $twig = new Twig_Environment($loader);

    // подгружаем шаблон
    $template = $twig->loadTemplate('sample.php');

        if (!isset($_POST['limit'])){ // если лимит не определен, то выводим 9
            $limitForDataFromDatabase = 9;
        } else { // если определен, то больше
            //Фильтрую ввод
            $limit = trim(htmlspecialchars($_POST['limit']));
            //Преобразую ввод в число
            $limit = (int)$limit;
            $limitForDataFromDatabase = ($limitForDataFromDatabase + $limit);
        }
        
    $sqlRequest = "SELECT picture_address FROM picture LIMIT $limitForDataFromDatabase";
    $dataFromDatabase =  mysqli_fetch_all(mysqli_query($connect, $sqlRequest));
    $resultDataFromDatabase = [];
        foreach ($dataFromDatabase as $key => $values) {
            foreach ($values as $index => $val) {
                $resultDataFromDatabase[$key] = $val;
            }
        }

    $content = $template->render([
        'title' => 'Галерея',
        'images'=> $resultDataFromDatabase]);

    echo $content;
    

} catch (Exception $e) {
    die ('ERROR: ' . $e->getMessage());
}


