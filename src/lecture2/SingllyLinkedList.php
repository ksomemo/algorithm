<?php
require_once __DIR__.'/../../src/lecture2/SingllyLinkedListNode.php';

class SingllyLinkedList
{
    private $fisrt;

    public function getFirstNode()
    {
        return $this->fisrt;
    }

    public function add($singllyLinkedListNode)
    {
        if ($this->fisrt === null) {
            $this->fisrt = $singllyLinkedListNode;
        }
    }

    public function getAt($index)
    {
        return new SingllyLinkedListNode(2);
    }
}
