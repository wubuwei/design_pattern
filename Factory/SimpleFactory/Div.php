<?php

namespace DesignPattern\Factory\SimpleFactory;

/**
 * 除法运算
 *
 * Class Div
 */
class Div extends Operation
{
    /**
     *  计算结果
     *
     * @return float|int|mixed
     */
    public function getResult()
    {
        if ($this->numberB == 0) {
            throw new \InvalidArgumentException('除数不能为0');
        }
        return $this->numberA / $this->numberB;
    }
}