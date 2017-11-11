<?php

namespace app\api\controller\v2;

use app\api\controller\validate\IdMustBeInt;
use app\api\model\Banner;
use app\library\exception\ApiException;

class BannerController extends baseController
{

    public function view($id)
    {


        return json(['这是v2版本.']);
    }
}
