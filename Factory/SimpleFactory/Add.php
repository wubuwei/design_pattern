<?php

namespace DesignPattern\Factory\SimpleFactory;

/**
 * 加法运算
 *
 * Class Add
 */
class Add extends Operation
{
    /**
     * 计算结果
     * @return int|mixed
     */
    public function getResult()
    {
        return $this->numberA + $this->numberB;
    }
}