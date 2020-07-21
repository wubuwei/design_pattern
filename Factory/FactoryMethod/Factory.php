<?php

namespace DesignPattern\Factory\FactoryMethod;

/**
 * 工厂抽象类
 * Class Factory
 */
abstract class Factory
{
    /**
     * 创建产品类
     * @return mixed
     */
    abstract public function create();
}