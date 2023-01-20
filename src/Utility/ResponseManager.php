<?php

namespace App\Utility;

class ResponseManager
{
    public static function errorResponse(string $error) : string
    {
        return json_encode(array("error" => $error));
    }
    public static function successResponse(string $success) : string
    {
        return json_encode(array("success" => $success));
    }
    public static function dataResponse(mixed $data) : string
    {
        return json_encode(array("response" => $data));
    }

}