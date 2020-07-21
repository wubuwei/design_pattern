<?php

namespace DesignPattern\Observer;

/**
 * Observer 抽象类
 *
 * Class SubjectAbstract
 * @package DesignPattern\Observe
 */
abstract class SubjectAbstract
{
    /**
     * @var array
     */
    private $observers = [];

    /**
     * @param Observer $observer
     */
    public function attach(Observer $observer)
    {
        $this->observers[] = $observer;
    }

    /**
     * 通知
     */
    public function notify()
    {
        foreach ($this->observers as $k => $v) {
            $v->update();
        }
    }
}
