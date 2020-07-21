<?php

namespace DesignPattern\Observer;

/**
 * 发邮件
 *
 * Class EmailObserver
 * @package DesignPattern\Observe
 */
class EmailObserver implements Observer
{
    /**
     * @return mixed|void
     */
    public function update()
    {
        echo "发邮件昭告天下\n";
    }
}