<?php

class TreeNode
{
    private $value;
    private $left;
    private $right;

    public function __construct($value)
    {
        $this->value = $value;
        $this->left  = null;
        $this->right = null;
    }

    public function getValue()
    {
        return $this->value;
    }

    public function getLeft()
    {
        return $this->left;
    }

    public function getRight()
    {
        return $this->right;
    }

    public function setLeft(TreeNode $node)
    {
        $this->left = $node;
    }

    public function setRight(TreeNode $node)
    {
        $this->right = $node;
    }
}
