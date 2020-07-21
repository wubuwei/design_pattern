<?php

namespace DesignPattern\Observer;

/**
 * 发短信
 *
 * Class SmsObserver
 * @package DesignPattern\Observe
 */
class SmsObserver implements Observer
{
    /**
     * @return mixed|void
     */
    public function update()
    {
        echo "发邮件昭告天下\n";
    }
}