<?php

namespace DesignPattern\Factory\AbstractFactory;

require __DIR__ . '/../../vendor/autoload.php';

/**
 * 抽象工厂
 *
 * Class Client
 * @package DesignPattern\Factory\AbstractFactory
 */
class Client
{
    public function run()
    {
        // 使用 MySQL 工厂
        $factory = new MySQLFactory();
        // 创建 User
        $user = $factory->createUser();
        $user->insert();
        echo "\n";
        $user->select();

        echo "\n";

        // 创建 Article
        $article = $factory->createArticle();
        $article->insert();
        echo "\n";
        $article->select();

        echo "\n";
        echo '------------------------------------';
        echo "\n";

        // 使用 SQLite 工厂
        $factory = new SQLiteFactory();
        // 创建 user
        $user = $factory->createUser();
        $user->insert();
        echo "\n";
        $user->select();

        echo "\n";

        $factory = new SQLiteFactory();
        // 创建 article
        $article = $factory->createArticle();
        $article->insert();
        echo "\n";
        $article->select();
        echo "\n";
    }

}


$client = new Client();
$client->run();

// 当我们只有一个产品的时候和工厂方法看起来没啥区别；

// 应用场景
// 要实例话的对象充满不确定性可能会改变的时候；
// 要创建的对象的数目和类型是未知的；

// 结构
// 多个 interface 或者 abstract 产品父类；
// 多个实现 interface 或者继承 abstract 的具体产品类；
//
// 1个 interface 或者 abstract 工厂父类；
// 1个实现 interface 或者继承 abstract 的具体工厂类；
//
// 具体的工厂类里面有多个方法分别实例化具体的产品类；