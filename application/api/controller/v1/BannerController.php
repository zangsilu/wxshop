<?php

namespace app\api\controller\v1;

use app\api\controller\validate\IdMustBeInt;
use app\api\model\Banner;
use app\library\exception\ApiException;

class BannerController extends BaseController
{

    public function view($id)
    {
        (new IdMustBeInt())->goCheck();

        $result = (new Banner)->with(['items','items.image'])->find($id);

        $imm_prefix = config('params.img_prefix');

        if(!$result){
            throw new ApiException(0,400,'数据不存在.');
        }

        return json($result);
    }
}
