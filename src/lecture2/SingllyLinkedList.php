<?php
require_once __DIR__.'/../../src/lecture2/SingllyLinkedListNode.php';

class SingllyLinkedList
{
    private $fisrt;

    public function getFirst()
    {
        return $this->fisrt;
    }

    public function add(SingllyLinkedListNode $node)
    {
        if ($this->fisrt === null) {
            $this->fisrt = $node;
        } else {
            $this->fisrt->add($node);
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

    public function addFirst(SingllyLinkedListNode $node)
    {
        if ($this->fisrt === null) {
            $this->fisrt = $node;
        } else {
            $node->setNext($this->fisrt);

            $this->fisrt = $node;
        }
    }
}
