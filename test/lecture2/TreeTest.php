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

    public function testContainsRootAndLeftAndRightNode()
    {
        $tree     = new Tree();

        $newRoot = new TreeNode(1);
        $tree->replace(null, null, $newRoot);

        $newLeft = new TreeNode(2);
        $tree->replace($tree->getRoot(), null, $newLeft);

        $newRight = new TreeNode(3);
        $tree->replace($tree->getRoot(), null, $newRight);

        $this->assertSame(true,  $tree->contains(1));
//        $this->assertSame(true,  $tree->contains(2));
        $this->assertSame(true,  $tree->contains(3));
        $this->assertSame(false, $tree->contains(4));

    }

    public function testInsertThreeNodes2And1And3()
    {
        $tree     = new Tree();

        $tree->insert(2);
        $tree->insert(1);
        $tree->insert(3);

        $this->assertSame(2, $tree->getRoot()->getValue());
        $this->assertSame(1, $tree->getRoot()->getLeft()->getValue());
        $this->assertSame(3, $tree->getRoot()->getRight()->getValue());
    }
}
