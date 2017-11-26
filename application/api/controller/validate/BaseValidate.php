<?php

namespace app\api\controller\validate;


use app\library\exception\ApiException;
use think\Exception;
use think\Request;
use think\Validate;

class BaseValidate extends Validate
{
    /**
     * 效验参数
     */
    public function goCheck()
    {
        $params = Request::instance()->param();
        if (!$this->batch()->check($params)) {
            throw new ApiException(0,400,$this->error);
        }
        return true;
    }

    protected function isInt($value, $rule = '', $data = '', $field = '')
    {
        if (is_numeric($value) && is_int($value + 0) && ($value + 0) > 0) {
            return true;
        }
        else{
            return false;
        }
    }
}