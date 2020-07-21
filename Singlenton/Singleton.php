<?php

namespace DesignPattern\Singleton;

/**
 * 单例模式实现
 *
 * 结构：
4私1公；
私有化构造方法： 防止使用 new 创建多个实例；
私有化克隆方法： 防止 clone 多个实例；
私有化重建方法： 防止反序列化
私有化静态属性： 防止直接访问存储实例的属性
 */
class Singleton
{
    private static $instance = null;

    public static function getInstance()
    {
        if (null === static::$instance) {
            return static::$instance = new static();
        }

        return static::$instance;
    }

    /**
     * 防止使用 new 创建多个实例，因为 new 时可以根据参数改变对象，这样为空就不会改变，保持单例
     */
    private function __construct()
    {

    }

    /**
     * 防止 clone 多个实例，因为 clone 时可以改变对象内部，这样为空就不会改变，保持单例
     */
    private function __clone()
    {

    }

    /**
     * 防止反序列化，因为 unserialize 时可以改变对象内部，这样为空就不会改变，保持单例
     */
    private function __wakeup()
    {

    }
}

$db1 = Singleton::getInstance();
$db2 = Singleton::getInstance();

var_dump($db1);
var_dump($db2);