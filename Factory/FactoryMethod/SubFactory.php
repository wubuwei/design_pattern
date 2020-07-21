<?php

namespace DesignPattern\Factory\FactoryMethod;

/**
 * 减法工厂
 *
 * Class SubFactory
 * @package DesignPattern\Factory\FactoryMethod
 */
class SubFactory extends Factory
{
    /**
     * 创建减法产品类
     *
     * @return Sub|mixed
     */
    public function create()
    {
        return new Sub();
    }
}
