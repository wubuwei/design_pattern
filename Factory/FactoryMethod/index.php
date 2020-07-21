<?php

namespace DesignPattern\Factory\FactoryMethod;

require __DIR__ . '/../../vendor/autoload.php';

/**
 * 工厂方法
 *
 * Class Client
 * @package DesignPattern\Factory\FactoryMethod
 */
class Client
{
    /**
     * 实现运算
     */
    public function good()
    {
        $factory = new AddFactory();
        $operation = $factory->create();

        $operation->setNumberA('1');
        $operation->setNumberB('2');
        $result = $operation->getResult();
        echo $result;
    }
}

$client = new Client();

$client->good();

// 应用场景
// 要实例化的对象充满不确定性可能会改变的时候；
// 要创建的对象的数目和类型是未知的；

// 结构
// 1个 interface 或者 abstract 产品父类；
// 多个实现 interface 或者继承 abstract 的具体产品类；
//
// 1个 interface 或者 abstract 工厂父类；
// 多个实现 interface 或者继承 abstract 的具体工厂类；
//
// 具体工厂类和具体产品类一一对应；
// 在具体工厂类中实例化具体的产品类

// 工厂方法不需要再像简单工厂那样做判断了；
// 但是增加了工作量；
// 每增加一个产品都需要增加对应的工厂；
// 这就形成了一种特殊的代码重复；
// 不过设计模式并不是独立使用的；
// 很多时候都是多个模式互相配合来弱化各自的缺点；