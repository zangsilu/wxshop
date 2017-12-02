<?php

namespace app\api\controller\validate;


class Limit extends BaseValidate
{
    protected $rule
        = [
            'limit' => 'isInt|between:1,20',
        ];

    protected $message
        = [
            'id' => 'id必须是正整数',
        ];


}