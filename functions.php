<?php

function dd($data)
{
    echo '<pre>';
    die(var_dump($data));
}

function dbConnection()
{
    try {
        return $pdo = new PDO(
            'mysql:host=localhost;dbname=tododatabase',
            'root',
            ''
        );
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}

function fetchTasks($pdo)
{
    $statement = $pdo->prepare('select * from tasks');
    $statement->execute(); //run
    return $statement->fetchAll(PDO::FETCH_OBJ); //return data
}
?>
