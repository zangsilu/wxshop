<?php

namespace app\api\controller\v1;


use QL\QueryList;

class SpiderController extends BaseController
{

    public function index()
    {

       /* // 采集该页面文章列表中所有[文章]的超链接和超链接文本内容
        $data = QueryList::get('http://esf.sh.fang.com/house-a025-b01646/')->rules([
            'text' => ['.wid1000 > .bread > a:nth-child(1)','text']
        ])->range('body')->query()->getData();
        //打印结果
        print_r($data->all());*/
    }

}