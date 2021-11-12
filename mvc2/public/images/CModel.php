<?php

class Cmodel {  // Создаем класс и перемещаем его в переменную
    public function GetData(){
        $host = '127.0.0.1';
        $db   = 'blog';                         // Подключаемся к базе данных
        $user = 'root';
        $pass = '';
        $charset = 'utf8';

        $dsn = "mysql:host=$host;dbname=$db;charset=$charset";         // переменная с параметрами для работы с базой данных
        $opt = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,               // Передача параметров по подключению
            PDO::ATTR_EMULATE_PREPARES   => false,
        ];
        $pdo = new PDO($dsn, $user, $pass, $opt);

        $result = $pdo->query('SELECT * FROM News');                    // Запрос результата и выбор из таблицы
        $arrayResult = $result->fetchAll();                         // Результат массива который берет все данные


        // $mysqli = new mysqli('localhost', 'root', '', 'blog');   // Подключаемся к базе данных


        // if(mysqli_connect_errno()) {
        //     print_f('Соединение не установлено');   // Если выскакивает ошибка в подключении то выходим
        //     exit();
        // }

        // $mysqli->set_charset('utf8');  // Проверка на кирилицу

        // $query = "Select * From News";  // Запрос и выбор из таблицы

        // $result = $mysqli->query($query);
        // $arrayResult = $result->fetch_all(MYSQLI_ASSOC); // Результат Массива, который берет все данные
        
        // $arrayResult[] = array(
        //     'TITLE' => 'Blog hosting site',
        //     'DATE' => '22.06.2020',
        //     'AUTHOR' => 'VolDeMort',
        //     'IMAGE' => 'https://news.artnet.com/app/news-upload/2019/01/Cat-Photog-Feat-256x256.jpg',
        //     'TEXT' => 'Nulla morbi, ad pur Portwisu morbsed id, arcu vestibulum dolor conmtum ac egestas lorem elit libero.'

        // );
        // $arrayResult[] = array(
        //     'TITLE' => 'Blog hosting site',
        //     'DATE' => '21.10.2021',
        //     'AUTHOR' => 'Igor',
        //     'IMAGE' => 'https://news.artnet.com/app/news-upload/2019/01/Cat-Photog-Feat-256x256.jpg',
        //     'TEXT' => 'Nulla morbi, ad pur Portwisu morbsed id, arcu vestibulum dolor conmtum ac egestas lorem elit libero.'
     
        // );
    return $arrayResult;
    }
}