<?php

namespace DesignPattern\Factory\FactoryMethod;

/**
 * 减法运算
 *
 * Class Sub
 */
class Sub extends Operation
{
    /**
     * 计算结果
     * @return int|mixed
     */
    public function getResult()
    {
        return $this->numberA - $this->numberB;
    }
}