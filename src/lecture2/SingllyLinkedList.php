<?php
require_once __DIR__.'/../../src/lecture2/SingllyLinkedListNode.php';

class SingllyLinkedList
{
    private $fisrt;

    public function getFirst()
    {
        return $this->fisrt;
    }

    public function add(SingllyLinkedListNode $singllyLinkedListNode)
    {
        if ($this->fisrt === null) {
            $this->fisrt = $singllyLinkedListNode;
        } else {
            $this->fisrt->add($singllyLinkedListNode);
        }
    }

    public function getAt($index)
    {
        $node = $this->fisrt;

        for ($i = 1; $i < $index; ++$i) {
            $node = $node->getNext();
        }

        return $node;
    }

    public function getLast()
    {
        if ($this->fisrt->getNext() === null) {
            return $this->fisrt;
        }

        return $this->fisrt->getNext()->getLast();
    }

    public function addFirst(SingllyLinkedListNode $singllyLinkedListNode)
    {
        if ($this->fisrt === null) {
            $this->fisrt = $singllyLinkedListNode;
        } else {
            $singllyLinkedListNode->setNext($this->fisrt);

            $this->fisrt = $singllyLinkedListNode;
        }
    }
}
