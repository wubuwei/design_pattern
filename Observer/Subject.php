<?php

namespace DesignPattern\Observer;

class Subject extends SubjectAbstract
{
    /**
     * 具体 Subject
     */
    public function publish()
    {
        echo "我做了某事\n";
        $this->notify();
    }
}