<?php

namespace App\Utility;

class ConnectionFactory
{
    private static array $tab;
    private static \PDO $conn;


    public static function setConfig( $file ) : void
    {
        self::$tab = parse_ini_file($file);
    }
    public static function makeConnection(): \PDO
    {
        if(!isset(self::$conn))
        {
            self::$conn = new \PDO(self::$tab["driver"] . ':host='.self::$tab["host"].';dbname='.self::$tab["dbname"].';port='.self::$tab["port"],self::$tab["user"] , self::$tab["password"]);

        }
        return self::$conn;

    }


}