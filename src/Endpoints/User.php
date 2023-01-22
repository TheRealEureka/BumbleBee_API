<?php

namespace App\Endpoints;

use App\Utility\ConnectionFactory;
use App\Utility\ResponseManager;

class User
{
    public static function getById($id) : string
    {
        $res = [];

        $db = ConnectionFactory::makeConnection();
        $st = $db->prepare("SELECT id,name,email,status FROM user WHERE id = :id");
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
        $st = $db->query("SELECT id,name,email,status FROM user ");
        if($st->rowCount() > 0){
            $res = $st->fetchAll();
        }
        return  ResponseManager::dataResponse($res);
    }

    public static function getParties($id) : string
    {
        return "";
    }


    public static function getFlowersByUser($id) : string
    {
        return "";
    }
    public static function verifyCredentials($id) : string
    {
        return "";
    }
    public static function addFlowerToUser(array $data) : string
    {
        return "";
    }
    public static function addPartyToUser(array $data) : string
    {
        return "";
    }
    public static function editFlowerUser(array $data) : string
    {
        return "";
    }
    public static function editPartyUser(array $data) : string
    {
        return "";
    }
    public static function deleteFlowerUser(array $data) : string
    {
        return "";
    }
    public static function deletePartyUser(array $data) : string
    {
        return "";
    }

    public static function create(array $data) : string
    {
        return "";
    }
    public static function edit(array $data) : string
    {
        return "";
    }

}