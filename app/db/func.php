<?php


require 'connect.php';

// тестовая функция
function tt($value)
{
    echo '<pre>';
    print_r($value);
    echo '</pre>';
}

// обработка ошибок
function dbCheckError($query)
{
    $errInfo = $query->errorInfo();
    if ($errInfo[0] !== PDO::ERR_NONE) {
        echo $errInfo[2];
        exit();
    }
    return true;
}

// Запрос на получение данных одной таблицы
function selectAll($table)
{
    global $pdo;
    $sql = "SELECT Сообщение FROM $table";
    $query = $pdo->prepare($sql);
    $query->execute();

    dbCheckError($query);
    return $query->fetchall();

}

// Запись данных в таблицу

function insert($table, $params)
{
    global $pdo;
    $i = 0;
    $coll = '';
    $mask = '';
    foreach ($params as $key => $value) {
        if ($i === 0) {
            $coll = $coll . "$key";
            $mask = $mask . "'$value'";
        } else {
            $coll = $coll . ",$key";
            $mask = $mask . ",'$value'";
        }
        $i++;
    }
    $sql = "INSERT INTO $table ($coll) VALUES ($mask)";
    $query = $pdo->prepare($sql);
    $query->execute($params);
    dbCheckError($query);
}



