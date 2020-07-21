<?php

namespace DesignPattern\Factory\SimpleFactory;

/**
 * 乘法运算
 *
 * Class Mul
 */
class Mul extends Operation
{
    /**
     * 计算结果
     * @return int|mixed
     */
    public function getResult()
    {
        return $this->numberA * $this->numberB;
    }
}