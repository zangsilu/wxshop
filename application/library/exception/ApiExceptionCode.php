<?php

namespace app\library\exception;


class ApiExceptionCode
{

    const NOT_AUTH = '10000';

    private static function errorMessage()
    {
        return [
            static::NOT_AUTH => '未授权.',
        ];
    }

    public static function getErrorMessage($code)
    {
        return static::errorMessage()[$code] ?? '未知错误码.';
    }


}