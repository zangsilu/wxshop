<?php

namespace app\api\controller\validate;


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
        if (!$this->check($params)) {
            throw new Exception($this->error);
        }
        return true;
    }
}