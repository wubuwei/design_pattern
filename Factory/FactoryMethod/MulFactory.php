<?php

namespace DesignPattern\Factory\FactoryMethod;

/**
 * 乘法工厂
 *
 * Class MulFactory
 * @package DesignPattern\Factory\FactoryMethod
 */
class MulFactory extends Factory
{
    /**
     * 创建乘法产品类
     *
     * @return Mul|mixed
     */
    public function create()
    {
        return new Mul();
    }
}
