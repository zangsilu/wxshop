<?php

namespace app\api\controller\v1;

use app\api\controller\validate\IdMustBeInt;
use app\api\models\Banner;
use app\library\exception\ApiException;
use app\library\exception\ApiExceptionCode;

class BannerController extends baseController
{

    public function view($id)
    {
        (new IdMustBeInt())->goCheck();

        $banners['meta'] = [
            'status'=>200,
        ];
        $banner = Banner::get($id);
        $banners['data'] = $banner;
        return json($banners);
    }
}
