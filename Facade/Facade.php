<?php

namespace DesignPattern\Facade;

/**
 * Class Facade
 * @package DesignPattern\Facade
 */
class Facade
{
    private $file;

    private $encrypt;

    /**
     * Facade constructor.
     */
    public function __construct()
    {
        $this->file = new File();
        $this->encrypt = new Encrypt();
    }

    /**
     * 获取文件内容并加密
     */
    public function encryptContent()
    {
        echo $this->file->content();
        echo "\n";
        echo $this->encrypt->encrypt();
    }
}

// 外观模式又叫门面模式；
// 现在都是模块化开发了；
// 开发中很多时候都是在使用各种扩展包；
// 或者在外观模式中我们叫做子系统；
// 外观模式的作用就是减少子系统之间的耦合；
// 降低子系统的使用难度；

// 外观模式对客户端屏蔽了子系统；
// 但是也有缺点；
// 如果想增加子系统；
// 就需要修改 Facade；
// 这就违反了开闭原则；