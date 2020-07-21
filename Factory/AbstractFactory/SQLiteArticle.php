<?php

namespace DesignPattern\Factory\AbstractFactory;

/**
 * 应用于 SQLite 的 Article
 *
 * Class SQLiteArticle
 * @package DesignPattern\Factory\AbstractFactory
 */
class SQLiteArticle implements Article
{
    /**
     * 新增
     *
     * @return mixed|void
     */
    public function insert()
    {
        echo '向 SQLite 数据库中插入 Article';
    }

    /**
     * 查询
     *
     * @return mixed|void
     */
    public function select()
    {
        echo '从 SQLite 数据库中查询 Article';
    }
}