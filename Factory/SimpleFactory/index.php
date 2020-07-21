<?php

namespace DesignPattern\Factory\SimpleFactory;

require __DIR__ . '/../../vendor/autoload.php';

/**
 * 简单工厂
 *
 * Class Client
 * @package DesignPattern\Factory\SimpleFactory
 */
class Client
{
    /**
     * 实现运算
     */
    public function good()
    {
        $factory = new Factory();

        $operation = $factory->create('+');
        $operation->setNumberA('1');
        $operation->setNumberB('2');
        $result = $operation->getResult();
        echo $result;
    }
}

$client = new Client();

$client->good();

// 应用场景
// 在不确定有多少种操作的时候；
// 比如说运算符号 + - * / ;

// 结构
// 1个工厂；
// 1个 interface 或者 abstract 产品父类；
// 多个实现 interface 或者继承 abstract 的具体产品类；

// 如果我们要再增加新的运算；
// 那就需要改 Factory 增加 case ；
// 遇到可能性多的场景那 case 想想都可怕；
// 简单工厂这就违反了开放封闭原则；
// 开放封闭原则简单来说就是对扩展开放对修改封闭；
// 理想情况下我们是不应该再改动 Factory 类的；
// 增加新运算应该使用扩展的方式；
// 这就是简单工厂的弊端了；
