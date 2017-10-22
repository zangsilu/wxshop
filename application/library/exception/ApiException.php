<?php

namespace app\library\exception;


use Throwable;

class ApiException extends BaseException
{

    public function __construct($code = 0,$status = 400, $message = "",  Throwable $previous = null)
    {
        $this->status = $status;
        $this->code = $code;
        $this->message = !empty($message) ? (is_array($message) ? json_encode($message,JSON_UNESCAPED_UNICODE) : $message) : ApiExceptionCode::getErrorMessage($code);

        // $this->message = $message ?: ApiExceptionCode::getErrorMessage($code);
    }


}