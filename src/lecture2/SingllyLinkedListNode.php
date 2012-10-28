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

    public function add(SingllyLinkedListNode $singllyLinkedListNode)
    {
        if ($this->next === null) {
            $this->next = $singllyLinkedListNode;
        } else {
            $this->next->add($singllyLinkedListNode);
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
}
