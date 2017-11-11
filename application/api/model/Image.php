<?php

namespace app\api\model;

class Image extends Base
{
    protected $hidden = ['id','from','delete_time','update_time'];

    /**
     * url读取器
     * 字段读取器结构: get+字段名称+attr
     * @param $value
     * @param $data
     *
     * @return string
     */
    public function getUrlAttr($value,$data)
    {
        if($data['from'] == 1){
            return config('params.img_prefix').$value;
        }
        return $value;
    }
}
