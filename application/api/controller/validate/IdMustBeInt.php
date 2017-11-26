<?php

namespace app\api\controller\validate;


class IdMustBeInt extends BaseValidate
{
    protected $rule
        = [
            'id' => 'require|isInt',
        ];

    protected $message
        = [
            'id' => 'id必须是正整数',
        ];


}