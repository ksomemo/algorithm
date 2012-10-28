<?php
require_once __DIR__.'/../../src/lecture2/Tree.php';

class TreeTest extends PHPUnit_Framework_TestCase
{
    public function testTreeRootNodeIsNullAtJustTreeMaked()
    {
        $tree = new Tree();

        $expected = null;

        $this->assertSame($expected, $tree->getRoot());
    }

}
