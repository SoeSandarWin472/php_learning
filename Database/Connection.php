<?php

class Connection
{
    public static function make()
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
}

?>
