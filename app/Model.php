<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/5/29
 * Time: 16:05
 */
namespace App;
use Illuminate\Database\Eloquent\Model as BaseModel;
//表 => posts
class Model extends BaseModel
{
    protected $guarded = [];//不可以注入的字段
}
