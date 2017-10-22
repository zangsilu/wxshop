<?php

namespace app\api\controller\v1;

use app\api\controller\validate\IdMustBeInt;
use app\library\exception\ApiException;
use app\library\exception\ApiExceptionCode;

class Banner extends baseController
{

    public function view($id)
    {

        (new IdMustBeInt())->goCheck();

    }
}
