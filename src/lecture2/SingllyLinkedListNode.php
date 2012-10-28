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

    public function add(SingllyLinkedListNode $node)
    {
        if ($this->next === null) {
            $this->next = $node;
        } else {
            $this->next->add($node);
        }
    }

    public function getNext()
    {
        return $this->next;
    }

    public function getLast()
    {
        if ($this->next === null) {
            return $this;
        }

        return $this->next->getLast();
    }

    public function setNext(SingllyLinkedListNode $node)
    {
        $this->next = $node;
    }
}
