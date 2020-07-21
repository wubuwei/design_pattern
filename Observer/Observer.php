<?php

namespace DesignPattern\Observer;

/**
 * Observer 接口
 *
 * Interface Observer
 * @package DesignPattern\Observer
 */
interface Observer
{
    /**
     * @return mixed
     */
    public function update();
}