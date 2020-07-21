<?php

namespace DesignPattern\Facade;

require __DIR__.'/../vendor/autoload.php';


class Client
{
    public function run()
    {
        $facade = new Facade();
        $facade->encryptContent();

    }
}

$client = new Client();
$client->run();

// 在业务开发过程中多个功能会互相依赖；
// 如果我们想在一个对象发生变化后通知和它有关联的类；
// 比如说你做了某件事后希望可以使用邮件和短信发送通知；
// 这时候就比较适合使用观察者模式了；
// 不过 php 官方已经提供了 SplObserver 和 SplSubject；