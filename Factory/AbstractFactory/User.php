<?php

namespace DesignPattern\Factory\AbstractFactory;

/**
 * User 产品接口
 *
 * Interface User
 * @package DesignPattern\Factory\AbstractFactory
 */
interface User
{
    /**
     * 插入
     *
     * @return mixed
     */
    public function insert();

    /**
     * 查询
     *
     * @return mixed
     */
    public function select();
}