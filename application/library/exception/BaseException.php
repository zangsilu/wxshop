<?php

namespace app\library\exception;


use think\Exception;

class BaseException extends Exception
{
    public $status = 400; //http状态码
    public $code = 10000;//错误码
    public $message = 'error';//错误信息



}