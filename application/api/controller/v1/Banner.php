<?php

namespace app\api\controller\v1;

use app\api\controller\validate\IdMustBeInt;
use app\library\exception\ApiException;
use app\library\exception\ApiExceptionCode;
use think\Controller;
use think\Request;
use think\Response;

class Banner extends Controller
{

    public function view($id)
    {
        throw new ApiException(ApiExceptionCode::NOT_AUTH,401);

        (new IdMustBeInt())->goCheck();

    }
}
