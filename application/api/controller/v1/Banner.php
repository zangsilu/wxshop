<?php

namespace app\api\controller\v1;

use app\api\controller\validate\IdMustBeInt;
use think\Controller;
use think\Request;
use think\Response;

class Banner extends Controller
{

    public function view($id)
    {

        (new IdMustBeInt())->goCheck();
        Response::create()->

    }
}
