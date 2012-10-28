<?php
require_once __DIR__.'/../../src/lecture2/Tree.php';
require_once __DIR__.'/../../src/lecture2/TreeNode.php';

class TreeTest extends PHPUnit_Framework_TestCase
{
    public function testTreeRootNodeIsNullAtJustTreeMaked()
    {
        $tree = new Tree();

        $expected = null;

        $this->assertSame($expected, $tree->getRoot());
    }

    public function testReplaceRootWithTreeNode()
    {
        $tree     = new Tree();

        $newRoot = new TreeNode(1);
        $tree->replace(null, null, $newRoot);
        $this->assertSame(1, $tree->getRoot()->getValue());

        $newLeft = new TreeNode(2);
        $tree->replace($tree->getRoot(), null, $newLeft);
        $this->assertSame(2, $tree->getRoot()->getLeft()->getValue());

        $newRight = new TreeNode(3);
        $tree->replace($tree->getRoot(), null, $newRight);
        $this->assertSame(3, $tree->getRoot()->getRight()->getValue());
    }
}
