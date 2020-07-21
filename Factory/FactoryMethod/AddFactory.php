<?php

namespace DesignPattern\Factory\FactoryMethod;

/**
 * 加法工厂
 *
 * Class AddFactory
 * @package DesignPattern\Factory\FactoryMethod
 */
class AddFactory extends Factory
{
    /**
     * 创建加法产品类
     *
     * @return Add|mixed
     */
    public function create()
    {
        return new Add();
    }
}
