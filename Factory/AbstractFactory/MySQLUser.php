<?php

namespace DesignPattern\Factory\AbstractFactory;

/**
 * 应用于 MySQL 的 User
 *
 * Class MySQLUser
 * @package DesignPattern\Factory\AbstractFactory
 */
class MySQLUser implements User
{
    /**
     * 新增
     *
     * @return mixed|void
     */
    public function insert()
    {
        echo '向 MySQL 数据库中插入 User';
    }

    /**
     * 查询
     *
     * @return mixed|void
     */
    public function select()
    {
        echo '从 MySQL 数据库中查询 User';
    }
}