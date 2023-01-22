<?php

namespace App\Endpoints;

use App\Utility\ConnectionFactory;
use App\Utility\ResponseManager;

class Flower
{
    public static function getById($id) : string
    {
        $res = [];

        $db = ConnectionFactory::makeConnection();
        $st = $db->prepare("SELECT * FROM flower WHERE id = :id");
        $st->execute(array('id' => $id));
        if($st->rowCount() > 0){
            $res = $st->fetchAll();
        }
        return ResponseManager::dataResponse($res);
    }
    public static function getAll() : string
    {
        $res = [];

        $db = ConnectionFactory::makeConnection();
        $st = $db->query("SELECT *  FROM flower ");
        if($st->rowCount() > 0){
            $res = $st->fetchAll();
        }
        return  ResponseManager::dataResponse($res);
    }

    public static function create(array $data) : string
    {
        return "";
    }
    public static function edit(array $data) : string
    {
        return "";
    }
    public static function delete(array $data) : string
    {
        return "";
    }
}