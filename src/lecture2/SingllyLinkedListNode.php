<?php

class SingllyLinkedListNode
{
    private $value;

    private $next;

    public function __construct($value)
    {
        $this->value = $value;
    }

    public function getValue()
    {
        return $this->value;
    }
}
