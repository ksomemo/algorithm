<?php
require_once __DIR__.'/../../src/lecture2/Tree.php';
require_once __DIR__.'/../../src/lecture2/TreeNode.php';

class TreeTest extends PHPUnit_Framework_TestCase
{
    private $tree;

    public function setUp()
    {
        $this->tree = new Tree();
    }

    public function testTreeRootNodeIsNullAtJustTreeMaked()
    {
        $expected = null;

        $this->assertSame($expected, $this->tree->getRoot());
    }

    public function testReplaceRootWithTreeNode()
    {
        $newRoot = new TreeNode(1);
        $this->tree->replace(null, null, $newRoot);
        $this->assertSame(1, $this->tree->getRoot()->getValue());

        $newLeft = new TreeNode(2);
        $this->tree->replace($this->tree->getRoot(), null, $newLeft);
        $this->assertSame(2, $this->tree->getRoot()->getLeft()->getValue());

        $newRight = new TreeNode(3);
        $this->tree->replace($this->tree->getRoot(), null, $newRight);
        $this->assertSame(3, $this->tree->getRoot()->getRight()->getValue());
    }

    public function testContainsRootAndLeftAndRightNode()
    {
        $newRoot = new TreeNode(1);
        $this->tree->replace(null, null, $newRoot);

        $newLeft = new TreeNode(2);
        $this->tree->replace($this->tree->getRoot(), null, $newLeft);

        $newRight = new TreeNode(3);
        $this->tree->replace($this->tree->getRoot(), null, $newRight);

        $this->assertSame(true,  $this->tree->contains(1));
//        $this->assertSame(true,  $this->tree->contains(2));
        $this->assertSame(true,  $this->tree->contains(3));
        $this->assertSame(false, $this->tree->contains(4));

    }

    public function testInsertThreeNodes2And1And3()
    {
        $this->tree->insert(2);
        $this->tree->insert(1);
        $this->tree->insert(3);

        $this->assertSame(2, $this->tree->getRoot()->getValue());
        $this->assertSame(1, $this->tree->getRoot()->getLeft()->getValue());
        $this->assertSame(3, $this->tree->getRoot()->getRight()->getValue());
    }

    public function testInsertThreeNodes1And2And3()
    {
        $this->tree->insert(1);
        $this->tree->insert(2);
        $this->tree->insert(3);

        $this->assertSame(1, $this->tree->getRoot()->getValue());
        $this->assertSame(2, $this->tree->getRoot()->getRight()->getValue());
        $this->assertSame(3, $this->tree->getRoot()->getRight()->getRight()->getValue());
    }
}
