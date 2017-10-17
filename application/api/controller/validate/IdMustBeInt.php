<?php

namespace app\api\controller\validate;


class IdMustBeInt extends BaseValidate
{
    protected $rule = [
        'id' => 'require|isInt'
    ];

    protected function isInt($value, $rule = '', $data = '', $field = '')
    {
        if (is_numeric($value) && is_int($value + 0) && ($value + 0) > 0) {
            return true;
        }
        else{
            return $field.'必须是正整数';
        }
    }


}