<?php

namespace DesignPattern\Factory\FactoryMethod;

/**
 * 除法工厂
 *
 * Class DivFactory
 * @package DesignPattern\Factory\FactoryMethod
 */
class DivFactory extends Factory
{
    /**
     * 创建除法产品类
     *
     * @return Mul|mixed
     */
    public function create()
    {
        return new Div();
    }
}
