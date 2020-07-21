<?php

namespace DesignPattern\Factory\SimpleFactory;

/**
 * 工厂类，加工 加减乘除 算法s
 *
 * Class Factory
 */
class Factory
{
    /**
     * 创建一种运算
     *
     * @param $operate
     * @return Add|Div|Mul|Sub
     */
    public function create($operate)
    {
        switch ($operate) {
            case '+':
                $result = new Add();
                break;
            case '-':
                $result = new Sub();
                break;
            case '*':
                $result = new Mul();
                break;
            case '/':
                $result = new Div();
                break;
            default:
                throw new \InvalidArgumentException('不支持运算');
        }

        return $result;
    }
}