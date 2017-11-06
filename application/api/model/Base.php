<?php

namespace app\api\model;


use think\Model;

class Base extends Model
{
    protected $hidden = ['delete_time','update_time'];


}