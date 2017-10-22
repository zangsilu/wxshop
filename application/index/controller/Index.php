<?php

namespace app\index\controller;

use think\Request;

class Index
{
    public function index()
    {
        return 1;
    }

    public function create($id, $name)
    {

        Request::instance()->getInput();

        return $id . $name;
    }
}
