<?php


namespace App;


use PDO;

class Connection
{

    public function getPdo()
    {
        return new PDO('mysql:dbname=pure;host=127.0.0.1', 'root', 'toortoor', [
           PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]);
    }
}