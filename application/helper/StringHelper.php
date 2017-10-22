<?php

namespace app\helper;

class StringHelper
{

    public static function isJson($str)
    {
        if(strpos($str,'{') !== false && strpos($str,'}') !== false){
            return true;
        }
        return false;
    }


}