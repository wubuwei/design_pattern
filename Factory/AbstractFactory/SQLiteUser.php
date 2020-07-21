<?php

namespace DesignPattern\Factory\AbstractFactory;

/**
 * 应用于 SQLite 的 User
 *
 * Class SQLiteUser
 * @package DesignPattern\Factory\AbstractFactory
 */
class SQLiteUser implements User
{
    /**
     * 新增
     *
     * @return mixed|void
     */
    public function insert()
    {
        echo '向 SQLite 数据库中插入 User';
    }

    /**
     * 查询
     *
     * @return mixed|void
     */
    public function select()
    {
        echo '从 SQLite 数据库中查询 User';
    }
}