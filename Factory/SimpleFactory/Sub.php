<?php

namespace DesignPattern\Factory\SimpleFactory;

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