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

    public function insert($value)
    {
        if ($this->root === null) {
            $this->root = new TreeNode($value);

            return;
        }

        // rootの値と比較
        // 以下なら左、大きいなら右
        // それがnullならノード設定、あるなら値比較

        $node = $this->root;

        while (true) {
            if ($value <= $node->getValue()) {
                if ($node->getLeft() === null) {
                    $node->setLeft(new TreeNode($value));

                    break;
                } else {
                    $node = $node->getLeft();
                }
            } else {
                if ($node->getRight() === null) {
                    $node->setRight(new TreeNode($value));

                    break;
                } else {
                    $node = $node->getRight();
                }
            }
        }
    }
}
