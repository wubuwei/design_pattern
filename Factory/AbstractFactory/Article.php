<?php

namespace DesignPattern\Factory\AbstractFactory;

/**
 * Article 产品类
 *
 * Interface Article
 * @package DesignPattern\Factory\AbstractFactory
 */
interface Article
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