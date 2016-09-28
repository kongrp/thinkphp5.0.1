<?php
namespace app\index\controller;   //命名空间
use think\Db;  //引用数据库操作类

class Index
{
    public function index()
    {
        var_dump(Db::name('teacher')->find());   //获取数据表中的第一条数据
    }
}
