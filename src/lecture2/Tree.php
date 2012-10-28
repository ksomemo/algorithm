<?php

class Tree
{
    private $root;

    public function getRoot()
    {
        return $this->root;
    }

    public function replace(TreeNode $parent = null, TreeNode $oldNode = null, TreeNode $newNode = null)
    {
        if ($parent === null) {
            $this->root = $newNode;

            return;
        }

        if ($parent->getLeft() === $oldNode) {
            $parent->setLeft($newNode);

        } elseif ($parent->getRight() === $oldNode) {
            $parent->setRight($newNode);
        } else {
            throw new RuntimeException('子供が見つからなかった');
        }
    }

    public function contains($value)
    {
        return $this->containsInNode($this->root, $value);
    }

    private function containsInNode(TreeNode $node = null, $value)
    {
        if ($node === null) {
            return false;
        }

        if ($node->getValue() === $value) {
            return true;
        }

        if ($value < $node->getValue()) {
            return $this->containsInNode($node->getLeft(), $value);
        } else {
            return $this->containsInNode($node->getRight(), $value);
        }
    }

}
