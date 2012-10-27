<?php

class SingllyLinkedList
{
    private $fisrt;

    public function getFirstNode()
    {
        return $this->fisrt;
    }

    public function add($singllyLinkedListNode)
    {
        $this->fisrt = $singllyLinkedListNode;
    }
}
